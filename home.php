
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style-home.css">
    <title>WalletWise</title>
</head>

<body style="background-color: rgba(186,180,214,255);">


    <div class="header">
        <h1>WalletWise</h1>

    </div>


    <div class="balance-box balance-container">
        <div class="balance-text balance-container">

            <p style="padding:10px;padding-bottom: 40px;">Your Balance </p>
            <p style="font-size:50pt"> : </p>

            <p id="current-balance" style="font-size:50pt;">

            
            
            </p>

        </div>


        <div class="balance-container">

            <div class="user-profile">

                <div>
                    <img src="assets/bibi.png" alt="" style="width:80px;height:80px;border-radius: 50%;">
                </div>

                <div class="dropdown-content centered">
                    <a href="profile.php" style = "padding-left:10px">Profile</a>
                    <br>
                    
                    <form action="signout.php" method="get">

                        <input type="submit" value ="Sign Out" style="background-color:inherit; border:none; color:#483884;text-decoration:line;font-size:smaller">

                    </form>
                </div>

            </div>

        </div>

    </div>

    <br>

<<<<<<< HEAD
    <div id="content" class="centered">

        <div id="add-spend">

            <div class="category-box-title">
                <h3>pick your category</h3>
            </div>

            <br>

            <div id="category-box" class="category-box">
                <div id="iconBox" class="centered">

                    <div class="category-icon" onclick=changeColor(0)>
                        <div class="centered " style="margin-bottom:5px">


                            <img src="assets/shopping.png" style="width:40px" alt="">
                        </div>

                        <p style="text-align:center">shopping</p>
                    </div>


                    <div class="category-icon" onclick=changeColor(1)>
                        <div class="centered " style="margin-bottom:5px">

                            <img src="assets/money.png" style="width:40px" alt="">
                        </div>

                        <p style="text-align:center">income</p>
                    </div>

                    <div class="category-icon">

                        <div class="centered " style="margin-bottom:5px" onclick=changeColor(2)>


                            <img src="assets/party.png" style="width:40px" alt="">
                        </div>


                        <p style="text-align:center">fun</p>
                    </div>


                </div>

                <div id="second-row" class="centered">

                    <div class="category-icon" onclick=changeColor(3)>
                        <div class="centered " style="margin-bottom:5px">

                            <img src="assets/education.png" style="width:40px" alt="">
                        </div>

                        <p style="text-align:center">education</p>
                    </div>


                    <div class="category-icon" onclick=changeColor(4)>
                        <div class="centered " style="margin-bottom:5px">

                            
                            <img src="assets/bills.png" style="width:40px" alt="">

                        </div>

                        <p style="text-align:center">bills</p>
                    </div>

                    <div class="category-icon">

                        <div class="centered " style="margin-bottom:5px" onclick=changeColor(5)>


                            <img src="assets/car.png" style="width:40px" alt="">
                        </div>


                        <p style="text-align:center">transport</p>
                    </div>

                </div>

                <div id="third-row" class="centered">
                    <div class="category-icon" onclick=changeColor(6)>
                        <div class="centered " style="margin-bottom:5px" onclick=changeColor(5)>


                            <img src="assets/health.png" style="width:40px" alt="">
                        </div>


                        <p style="text-align:center">health</p>
                    </div>


                    <div class="category-icon" onclick=changeColor(7)>
                        <div class="centered " style="margin-bottom:5px">

                            <img src="assets/other.png" style="width:30px" alt="">
                        </div>

                        <p style="text-align:center">others</p>
                    </div>

                    <div class="category-icon">

                        <div class="centered " style="margin-bottom:5px" onclick=changeColor(8)>

                            <img src="assets/savings.png" style="width:40px" alt="">
                        </div>


                        <p style="text-align:center">savings</p>
                    </div>

                </div>

                <div id="third-row" class="centered">
                    <div class="category-icon" onclick=changeColor(9)>
                        <div class="centered " style="margin-bottom:5px" onclick=changeColor(5)>
                            <img src="assets/food1.png" style="height:40px" alt="">
                        </div>


                        <p style="text-align:center">food</p>
                    </div>


                    <div class="category-icon" onclick=changeColor(10)>

                        <img src="assets/house.png" style="width:40px" alt="">

                        <p style="text-align:center">rent</p>
                    </div>

                    <div class="category-icon">

                        <div class="centered " style="margin-bottom:5px" onclick=changeColor(11)>

                            <img src="assets/wallet.png" style="width:40px" alt="">
                        </div>


                        <p style="text-align:center">e-wallet</p>
                    </div>

                </div>
            </div>


            <br>

            <div id="addSpend" class="addSpend-box">


                <form action="" method="get">


                    <input type="" name="name" id="inputAmount" placeholder="input your spend amount" class="textbox"
                        required>


                </form>

                <script>
                let form = document.getElementById('inputAmount');

                form.addEventListener("input", () => {

                    if (form.value.length == 0) {
                        form.value = 0;
                    }

                    let num = parseFloat(form.value.replace(/Rp|\.|,|\s/g, ""));

                    if (isNaN == true) {
                        form.value = 0;
                    }

                    let formattedNum = new Intl.NumberFormat().format(num);

                    form.value = formattedNum;



                });
                </script>
            </div>


        </div>

        <div id="addButton" class="add-new-transaction-btn" onclick=addNewTransaction()>
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white"
                class="bi bi-patch-plus-fill add-btn" viewBox="0 0 16 16">
                <path
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
            </svg>
        </div>

        <div id="recent-transactions">
            <div class="recent-transactions-titlebox">
                <h2 style="color:white; ">your recent transactions:</h2>
            </div>

            <br>

            <div id="recent-transactions-contentbox" class="recent-transactions-contentbox">

                <div id="no-transaction-notify" class="transaction-box ">

                    <h3 style="padding-top: 10px;font-weight: bold; font-size:16pt">there's no transaction yet</h3>
                    <img src="assets/person3dcropped.png"
                        style="width:400px;height: auto; padding-left:30px; padding-right:30px" alt="">


                </div>

            </div>
        </div>

    </div>



    <script src="/project/uas/javascript/DOM.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

=======
    <div id = "content" class = "centered">
        <div id ="add-spend">
            <div id = "addSpend" class = "addSpend-box">
      
        
                <form action="" method="get" >
  
                    
                  <input type="text" name="name" id="amount" placeholder ="input your spend amount"class = "textbox" required >

                </form>

        </div>

    <div id="category-box" class="category-box">
            <div class = "centered">
                <div class = "category-box-border">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      <p style="text-align:center">shopping</p>
                </div>


                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                      </svg>
                      <p style="text-align:center">income</p>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-film" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                      </svg>

                      <p style="text-align:center">movie</p>
                </div>

               
            </div>
    </div>
        </div>

        <div id="recent-transactions">
            <div  class="recent-transactions-titlebox">
                <h1 style = "color:white; font-size:2rem">your recent transactions:</h1>
            </div>

            <div id="recent-transactions-contentbox" class="recent-transactions-contentbox">

                    <div id="recent" class="transaction-box centered">
                        <div>
                            <h3>-20.0000</h3>
                        </div>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                              </svg>
                        </div>
                        
                    </div>

                    <div id="recent" class="transaction-box centered">
                        <div>
                            <h3>-40.0000</h3>
                        </div>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                              </svg>
                        </div>
                        
                    </div>

                    <div id="recent" class="transaction-box centered">
                        <div>
                            <h3>-50.0000</h3>
                        </div>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                              </svg>
                        </div>
                        
                    </div>

                    <div id="recent" class="transaction-box centered">
                        <div>
                            <h3>-30.0000</h3>
                        </div>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#5f4f99" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                              </svg>
                        </div>
                        
                    </div>

            </div>
        </div>
        
    </div>

    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
>>>>>>> f29d6645e6cd390e9833bb43b43255a381e7e6e9
</html>