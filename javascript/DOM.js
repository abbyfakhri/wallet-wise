

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

/* function tete(){

  if(transactionCount > 1){
    const noTransactionNotify = document.getElementById('no-transaction-notify');
    noTransactionNotify.remove();
    transactionCount++;
  }
  
} */

/* const checkIfTransactionExist = (username)=>{

  const noTransactionNotify = document.getElementById('no-transaction-notify');
  $.ajax({
    url: 'server/checkIfTransactionExist.php',
    type: 'GET',
    data:{
      username:username
    },
    success: (response) => {

     
        noTransactionNotify.remove();
      
    }
  });

} */
    
function addNewTransaction(){
  if(addNewDivToggle){

    //checkIfTransactionExist(dataFromSession);
    const newDiv = document.createElement("div");
    let newDivIcon = document.createElement("div");
    const divDestination = document.getElementById('recent-transactions-contentbox')
    const form = document.getElementById('inputAmount');
    const noTransactionNotify = document.getElementById('no-transaction-notify');

    newDiv.classList.add('transaction-box');
    newDiv.classList.add('centered');

    newDivIcon.classList.add('centered');

   
    if(getForm().length > 22){

      //noTransactionNotify.style.display = "none";

      newDiv.innerHTML = getForm();
      
      let icon = iconSource[getIconIndex()].cloneNode(true);

      newDivIcon.appendChild(icon);
      
      newDiv.appendChild(newDivIcon);

      
      
      //divDestination.appendChild(newDiv);

      //newDiv.insertBefore(divDestination.firstChild);
      divDestination.insertBefore(newDiv,divDestination.firstChild);
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
    addToHistory(dataFromSession,amount,category_string[tempIndex]);
    updateBalance(currentBalanceValue,dataFromSession);
  }
  else{
    currentBalanceValue -= amount;
    addToHistory(dataFromSession,amount,category_string[tempIndex]);
    updateBalance(currentBalanceValue,dataFromSession);

  }

  //calculateCurrentBalance(dataFromSession);
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


const getBalance = (username)=>{

  const currentBalance = document.getElementById("current-balance");
  //let value;
  $.ajax({
    url: 'server/getUserBalance.php',
    type: 'GET',
    data:{
      username:username
    },
    success: (response) => {

      currentBalance.innerText = response;
      //console.log("succesfully retreive user balance:", response);
      //return(currentBalance.innerText);
      //value = response;
    }
  });

  //return(current);
}



const updateBalance = (transaction,username) => {
  $.ajax({
    url: 'server/updateBalance.php',
    type: 'POST',
    data:{
      data1:transaction,
      username:username
    },
    success: (response) => {
      console.log("succesfully update user balance:",response,"\n");
      getBalance(dataFromSession);
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
    url: 'server/addHistory.php',
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

  //checkIfTransactionExist(dataFromSession);
  //let icon= iconSource[2].cloneNode(true);
  //checkIfTransactionExist();
  const noTransactionNotify = document.getElementById('no-transaction-notify');

  $.ajax({
    url: 'server/getHistory.php',
    type: 'GET',
    data:{
      username:username
    },
    success: (response) => {

      let data = JSON.parse(response);

      if(data.length > 0) {
        noTransactionNotify.remove();
      }

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
      

      let iconDataIndex = [0];

      for(let i = 0;i<cleanIconData.length;i++){

       
            
            iconDataIndex[i] = category_string.indexOf(cleanIconData[i])+1;
            
            //console.log(iconDataIndex[i]);
            
        

      }

      let cleanIconIndex = iconDataIndex.filter(value => value);

      /* // debug
      console.log(cleanAmount);
      console.log(cleanIconData);
      console.log(cleanIconIndex);
      console.log(iconData);
      console.log(cleanIconIndex); */
      

      for(let i=0; i<amount.length; i++) {

        const newDiv = document.createElement("div");
        let newDivIcon = document.createElement("div");
        const divDestination = document.getElementById('recent-transactions-contentbox');

        newDiv.classList.add('transaction-box');
        newDiv.classList.add('centered');
        newDivIcon.classList.add('centered');
        //let icon = cleanIconIndex[i].cloneNode(true);

        let format = formatNum(cleanAmount[i]);

        if(cleanIconIndex[i]-1 == 1 || cleanIconIndex[i]-1 == 8){

          newDiv.innerHTML = "<h3> + "+format+"</h3>";
          newDivIcon.appendChild(iconSource[cleanIconIndex[i]-1].cloneNode(true));


        }

        else{

          newDiv.innerHTML = "<h3> - "+format+"</h3>";
          newDivIcon.appendChild(iconSource[cleanIconIndex[i]-1].cloneNode(true));


        }

        newDiv.appendChild(newDivIcon);
        divDestination.appendChild(newDiv);
        //newDiv.insertBefore(divDestination.firstChild);

        
      }

    
      
      
       
      
    }
  });
}


getBalance(dataFromSession);

// dataFromSession == username
const userID = dataFromSession;

getHistory(userID);






/* 
const _getUserBalance = ()=>{
    let serverRequest = new XMLHttpRequest();
    const currentBalance = document.getElementById("current-balance");

    
    serverRequest.open('GET',"server/getUserBalance.php");
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
 */











 