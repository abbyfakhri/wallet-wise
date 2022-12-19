
/* const updateBalance = (transaction) => {
    $.ajax({
      url: 'server/updateBalance.php',
      type: 'POST',
      data:{
        data1:transaction
      },
      success: (response) => {
        
      }
    });
  } */



// Store data in session storage
//sessionStorage.setItem('username', 'value');

// Retrieve data from session storage
const dataFromSession = sessionStorage.getItem('username');

console.log(dataFromSession); // Output: "value"
