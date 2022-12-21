const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

    const alertSection = (message, type) => {
      const wrapper = document.createElement('div')
      wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div style = "text-align:center">${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
      ].join('')

      alertPlaceholder.append(wrapper)
    }
   
    const check = (username,password)=>{

        $.ajax({
          url: 'server/verify-user.php',
          type: 'GET',
          data:{
            username:username,
            password:password
          },
          success: (response) => {

            //console.log(response);
      
            if(response == 'notFound'){
                
                alertSection('account not found, please try again','danger');
            }
            
            else if(response ==  'found'){

                alertSection('successfully login, you will be redirected shortly','success');
                sessionStorage.setItem('username', username);
                setTimeout(() => {
                    window.location = '/project/uas/home.html';
                }, 1000);
            }
            
            console.log(response);
          }
        });

      }

      

      const signButton = document.getElementById('button');
      const usernameForm = document.getElementById('usernameForm');
        const passwordForm = document.getElementById('passwordForm');
        //const confirmPasswordForm = document.getElementById('confirmPasswordForm');

        

          signButton.addEventListener('click',(e)=>{
            if(usernameForm.value.length > 0 && passwordForm.value.length > 0){
                check(usernameForm.value,passwordForm.value);
            }
            else{
                
                alertSection("please fill out the form","danger");
                
            }
          })