

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

console.log(categoryIcon.length);
 