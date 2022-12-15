

let iconToggle = true;

let categoryIcon = document.querySelectorAll('.category-icon');

function changeColor(index){
  
  if(iconToggle){
    categoryIcon[index].style.backgroundColor = "rgb(206, 205, 206)";
    changeBack(index);
    iconToggle = false;
  }
  else{
    categoryIcon[index].style.backgroundColor = "white";  
    iconToggle = true;
  }
 
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

/* function addNewDiv(){
  if(addNewDivToggle){
    const divDestination = document.getElementById('recent-transactions-contentbox')
    const newDiv = document.getElementById('recent');
    //document.div.appendChild(recentDiv);
    divDestination.innerHTML += newDiv.innerHTML;
    console.log("div added");
    addNewDivToggle = false;
  }
  else{
    console.log("div adding failed")
    addNewDivToggle = true;
  }
  
} */

// use class transaction-box and centered

function addNewTransaction(){
  if(addNewDivToggle){
    const newDiv = document.createElement("div");
    const divDestination = document.getElementById('recent-transactions-contentbox')
    const demoReferenceDiv = document.getElementById('recent');

    newDiv.classList.add('transaction-box');
    newDiv.classList.add('centered');
    //newDiv.divInnerHTML = 'content or html stuff'
    newDiv.innerHTML += demoReferenceDiv.innerHTML;
    
    divDestination.appendChild(newDiv);

    console.log("add success");
    addNewDivToggle = false;
  }

  else{
    addNewDivToggle = true;
  }
}



 