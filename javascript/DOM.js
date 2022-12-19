

let categoryIcon = document.querySelectorAll('.category-icon');
let iconToggle = true;
let iconBox = document.getElementById('.category-box');
//let iconTemp = iconBox.querySelectorAll('.category-icon');
const balance = document.getElementById('current-balance');

formatNum(balance.innerText);



let tempIndex = null;

function changeColor(index){


  if(iconToggle){
    categoryIcon[index].style.backgroundColor = "lightblue"
    tempIndex = index; // to get index
    changeBack(index);
    iconToggle = false;
  }
  else{
    categoryIcon[index].style.backgroundColor = "inherit";  

    iconToggle = true;
  }

  
 
}

function getIconIndex(){
  return tempIndex;
}

function getCategoryIcon(){
  let categoryIcon = document.querySelectorAll('.category-icon');
  return categoryIcon[getIconIndex()];
}


function changeBack(index){
  for(i=0;i<=categoryIcon.length;i++){
    if(i != index){
      categoryIcon[i].style.backgroundColor = "inherit";
       
    }
    iconToggle = false;
  }
}


let addButton = document.getElementById("addButton");
let addNewDivToggle = true;


// use class transaction-box and centered

let iconSource = getIconSource();

let transactionCount = 0;

function checkIfTransactionExist(){

  if(transactionCount == 0){
    const noTransactionNotify = document.getElementById('no-transaction-notify');
    noTransactionNotify.remove();
    transactionCount++;
  }
  
}

    
function addNewTransaction(){
  if(addNewDivToggle){

    checkIfTransactionExist();
    const newDiv = document.createElement("div");
    let newDivIcon = document.createElement("div");
    const divDestination = document.getElementById('recent-transactions-contentbox')
    const form = document.getElementById('inputAmount');
    
    newDiv.classList.add('transaction-box');
    newDiv.classList.add('centered');

    newDivIcon.classList.add('centered');

   
    if(getForm().length > 22){

      newDiv.innerHTML = getForm();
      
      let icon = iconSource[getIconIndex()].cloneNode(true);

      newDivIcon.appendChild(icon);
      
      newDiv.appendChild(newDivIcon);
      
      divDestination.appendChild(newDiv);
      
      console.log("add success");
      calculateCurrentBalance();

      form.value = ""; // to reset the form


      transactionCount++;
      
    }
    else{
      alert('spend amount cannot be empty');
      console.log('input amount empty');
    }

    addNewDivToggle = false;
    
  }

  else{
    addNewDivToggle = true;
  }

}



function getIconSource(){

  const categoryDiv = document.getElementById('category-box');
  const categoryIcons = categoryDiv.getElementsByTagName("img");
  let imageSource = [];
  for(let i = 0;i<categoryIcons.length;i++){
    imageSource[i] = categoryIcons[i];
  }

  return imageSource;
}

function getForm(){
  const form = document.getElementById('inputAmount');
  console.log('form value succesfully returned');
  console.log(form.value);
  if(tempIndex == 1){
    const val = "<div>"+"<h3> +"+form.value+"</h3>"+"</div>";
    return val;
    
  }
  else{
    const val = "<div>"+"<h3> -"+form.value+"</h3>"+"</div>";
    return val;

  }
}

const category_string = 
  ['shopping',
   'income',
    'fun',
    'education',
    'bills',
    'transport',
    'health',
    'others',
    'savings',
    'food',
    'rent',
    'e-wallet'
  ];

  

function calculateCurrentBalance(){

  const currentBalance = document.getElementById('current-balance');
  let form = document.getElementById('inputAmount');

  //let currentBalanceValue = parseFloat(currentBalance.innerText.replace(/Rp|\.|,|\s/g, ""));
  let currentBalanceValue = parseFloat(getBalanceFromDiv().replace(/Rp|\.|,|\s/g, ""));

  let amount = parseFloat(form.value.replace(/Rp|\.|,|\s/g, ""));

  if(tempIndex == 1 || tempIndex == 8){

    currentBalanceValue += amount;
    addToHistory('abby',amount,category_string[tempIndex]);
    updateBalance(currentBalanceValue);
  }
  else{
    currentBalanceValue -= amount;
    addToHistory('abby',amount,category_string[tempIndex]);
    updateBalance(currentBalanceValue);

  }

  console.log('recent transaction = ', amount);
  console.log('current balance = ',currentBalanceValue);

  let formattedNum = new Intl.NumberFormat().format(currentBalanceValue);

  currentBalance.innerText = "";
  currentBalance.innerText = formattedNum.toString();
}

function formatNum(value){
  let formattedNum = new Intl.NumberFormat().format(value);
  return formattedNum;

}


const _getUserBalance = ()=>{
    let serverRequest = new XMLHttpRequest();
    const currentBalance = document.getElementById("current-balance");

    
    serverRequest.open('GET',"javascript/getUserBalance.php");
    serverRequest.responseType = "text";
    serverRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    
    

    serverRequest.onload = function(){
    
      if(serverRequest.readyState == 4 && serverRequest.status == 200){

        currentBalance.innerHTML = serverRequest.response;
        
        //console.log("connection success");
        //console.log(currentBalance.innerText);
        
        return currentBalance.innerText;
      }
      else{
        console.log("connection error",serverRequest.status);
      }
      
    }

    
    serverRequest.send();
    
    
    
    
}

const getBalance = ()=>{

  const currentBalance = document.getElementById("current-balance");
  //let value;
  $.ajax({
    url: 'javascript/getUserBalance.php',
    type: 'GET',
    success: (response) => {

      currentBalance.innerText = response;
      //console.log("succesfully retreive user balance:", response);
      //return(currentBalance.innerText);
      //value = response;
    }
  });

  //return(current);
}

const updateBalance = (transaction) => {
  $.ajax({
    url: 'javascript/updateBalance.php',
    type: 'POST',
    data:{
      data1:transaction
    },
    success: (response) => {
      console.log("succesfully update user balance:",response,"\n");
      getBalance();
      //return(response);
    }
  });
}

const getBalanceFromDiv=()=>{
  const currentBalance = document.getElementById("current-balance");
  return(currentBalance.innerText);
}

const addToHistory = (username,transaction_amount,category) =>{
  $.ajax({
    url: 'javascript/addHistory.php',
    type: 'POST',
    data:{
      username:username,
      transaction_amount:transaction_amount,
      category:category
    },
    success: (response) => {
      console.log(response);
    }
  });
}



const getHistory = (username) =>{

  
  //let icon= iconSource[2].cloneNode(true);
  checkIfTransactionExist();
  

  $.ajax({
    url: 'javascript/getHistory.php',
    type: 'GET',
    data:{
      username:username
    },
    success: (response) => {

      let data = JSON.parse(response);

      let amount = [];
      let iconData = [];
      
      for(let i=0; i<data.length; i++) {
        if(!isNaN(data[i])){
          amount[i] = parseInt(data[i]);
          //console.log(amount[i]);
        }
        else{
          iconData[i] = data[i];
          //console.log(iconData[i]);
        }
      }

      let cleanAmount = amount.filter(value => value);
      let cleanIconData = iconData.filter(value => value);
      //let index = 0;

      let iconDataIndex = [];

      for(let i =0;i<iconData.length;i++){
        for(let j = 0;j<category_string.length;j++){
            if(iconData[i] == category_string[j]){
              iconDataIndex[i] = j; 
            }
        }
      }

      let cleanIconIndex = iconDataIndex.filter(value => value);
      for(let i=0; i<amount.length; i++) {

        const newDiv = document.createElement("div");
        let newDivIcon = document.createElement("div");
        const divDestination = document.getElementById('recent-transactions-contentbox');

        newDiv.classList.add('transaction-box');
        newDiv.classList.add('centered');
        newDivIcon.classList.add('centered');
        //let icon = cleanIconIndex[i].cloneNode(true);

        newDiv.innerHTML = "<h4>"+cleanAmount[i]+"</h4>";

        newDivIcon.appendChild(iconSource[cleanIconIndex[i]].cloneNode(true));
        newDiv.appendChild(newDivIcon);
        divDestination.appendChild(newDiv);

          

              //icon = iconSource[i].cloneNode(true);
              //return;
          

          
          
      }

    
      
      console.log(cleanAmount);
      console.log(cleanIconData);
      console.log(cleanIconIndex);
       
      
    }
  });
}
getBalance();

getHistory('admin');












 