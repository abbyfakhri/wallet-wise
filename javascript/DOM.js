


let iconToggle = true;
let categoryIcon = document.querySelectorAll('.category-icon');

let tempIndex = null;

function changeColor(index){



  if(iconToggle){
    categoryIcon[index].style.backgroundColor = "rgb(206, 205, 206)";
    tempIndex = index; // to get index
    changeBack(index);
    iconToggle = false;
  }
  else{
    categoryIcon[index].style.backgroundColor = "white";  
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
      categoryIcon[i].style.backgroundColor = "white";
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
  const categoryIcons = categoryDiv.getElementsByTagName("svg");
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

let totalTransaction = 0;

function calculateCurrentBalance(){

  const currentBalance = document.getElementById('current-balance');
  let form = document.getElementById('inputAmount');

  let amount = parseFloat(form.value.replace(/Rp|\.|,|\s/g, ""));
  
  totalTransaction += amount;
  console.log('total amount = ', amount);
  console.log('total transaction = ',totalTransaction);

  let formattedNum = new Intl.NumberFormat().format(totalTransaction);

  currentBalance.innerHTML = "";
  currentBalance.innerHTML = formattedNum.toString();
  // style="font-size:50pt;"

  
}





 