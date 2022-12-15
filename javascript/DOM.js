/* // Get a reference to the div
const categoryIconDiv_before = document.getElementById('categoryIcon');

// Add a click event listener to the div
categoryIconDiv_before.addEventListener('click', function() {
  // When the div is clicked, set its background color to red

  categoryIconDiv_before.style.backgroundColor = 'red';

}); */

const changeCategoryIconColor = () =>{
  let element = document.getElementById('categoryIcon');

  element.addEventListener('click',()=>{
    element.style.backgroundColor = 'blue';
  })

  changeCategoryIconColor_default();
}


const changeCategoryIconColor_default = () =>{
  let element = document.getElementById('categoryIcon');
  element.removeEventListener('',()=>{
    element.style.backgroundColor = 'red';
  })
}



//changeCategoryIconColor();

 