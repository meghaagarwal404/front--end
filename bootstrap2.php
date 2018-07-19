<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap2.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"> 
        -->

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script> -->

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            
    </head>
    <body>
            <div class=" container-fluid bgimg" style="height: 100%;width: 100%;padding: 0px;">
                <div style="background:rgba(0,0,0,0.3);height: 100%;width: 100%;padding: 0px;">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color:transparent !important">
                                <a class="navbar-brand" href="#"><h1 style="font-family: 'Playfair Display', serif; font-weight:900;">biblio maniac</h1></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>  
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Home</a>
                                        </li>  
                                        <li class="nav-item">
                                            <a  class="nav-link" href="#">About</a>
                                        </li>  

                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Categories
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">In Demand</a>
                                                <a class="dropdown-item" href="#">Fantasy</a>
                                                <a class="dropdown-item" href="#">Fiction</a>
                                                <a class="dropdown-item" href="#">Popular</a>
                                                <a class="dropdown-item" href="#">Self-help</a>
                                                
                                        </li>

                                        <li class="nav-item">  
                                            <a class="nav-link" href="book_form.php">Sign up</a>
                                        </li>  
                                        <li class="nav-item"> 
                                            <a class="nav-link" href="#" onclick="return mylogin();">Log In</a> 
                                        </li>    
                                    </ul> 
                                </div>      
                        </nav>
                         <div class="container-fluid text-center padding" style="position:relative;bottom:0px;right:0;">
                                <!-- <div style="height:30%;width:100%;background-color:#9B686F;opacity: 0.3;font-size:36px;"> -->
                                            <h3 class="read" style="text-align: center;color:#fff;">We lose</h3>
                                             <br>
                                            <h3 class="lead" style="text-align: center;color:#fff;">ourselves in books,</h3>
                                            <br>
                                            <h3 class="succeed" style="text-align: center;color:#fff;">we find ourselves  there too......</h3>
                                            <br>
                                            <p style="color:white; font-family:'Marck Script', cursive ;font-size:26px; "><u>We provide you the platform for online reading with better experiences.</u> </p>
                                <!-- </div> -->
                        </div>
                </div>
            </div> 
            <div class="container-fluid" style="background-color: #E8E4E1">
                <div class="row padding">
                    <div class="col-12 ">
                        <h1 class="text-center padding"style="font-family: 'Dancing Script', cursive;color:#17181C">DEMANDING</h1>
                        
                                <div class="row">
                                        <div class="col imgopacity padding">
                                                <img src="download (4).jpeg" class="img-fluid" >
                                                <br/>
                                                <h6>The Game of Thrones</h6>
                                                <p class="text-secondary"> George R. R. Martin-1996</p>
                                        </div>
                                    <div class="col imgopacity padding">
                                            <img src="download (1).jpeg" class="img-fluid imgmargin" >
                                            <br/>
                                            <h6>The Alchemist</h6>
                                            <p class="text-secondary">	Paulo Coelho-1988</p>
                
                                    </div>
                                    <div class="col imgopacity padding">
                                            <img src="download (2).jpeg" class="img-fluid" >
                                            <br/>
                                            <h6>Harry Potter and the Philosopher's Stone</h6>
                                            <p class="text-secondary">J. K. Rowling-1997</p>
                
                                    </div>
                                    <div class="col imgopacity padding">
                                            <img src="download (3).jpeg" class="img-fluid" >
                                            <br/>
                                            <h6>The Kite Runner</h6>
                                            <p class="text-secondary" >	Khaled Hosseini-2003</p>
                
                                    </div>
                                   <div class="col imgopacity padding">
                                            <img src="download (11).jpeg" class="img-fluid" >
                                            <br/>
                                            <h6>A walk to Remember</h6>
                                            <p class="text-secondary">Nicholas Sparks-1999</p>
                                    </div> 
                                </div>     
                </div>

                      </div>

            </div>

            <div class="container-fluid" style="background-color:#B2B2B2;">
                    <div class="row padding">
                              <div class="col-12 ">
                                <!-- <div class="row" style="position: relative; top: -10%;">
                                                <!-- <div class="container" style="position: relative; top:-10%;left: 100px;"> -->
                                                                <!-- <div class="row"> -->
                                                                <!-- <div class="col-2" style="position: relative; top:-10%;left: 100px;">
                                                                <img src="giphy.gif" style="width:350px;">
                                                                </div>        -->
                                                                
                                                                <!-- </div> -->
                                                <!-- </div> -->
                        
                                                <!-- <div class="container" style="position: relative; top:-10%;left: 100px;"> -->
                                                                        <!-- <div class="row"> -->
                                                                                <!-- <div class="col-2"style="padding-left:650px; ;">
                                                                                <img src="giphy-11.gif" style="width:350px;height: 219.8px ;">
                                                                                </div>        -->
                                                                                
                                                                        <!-- </div> -->
                                                <!-- </div> -->

                                <!-- </div> --> 
                                <h1 class=" padding"style="font-family: 'Dancing Script', cursive;color:  #17181C;">FICTION</h1>
                                        <?php 
                                                //query
                                                //fetch data
                                                //start loop
                                         ?>
                                        <div class="row">
                                                        <div class="col imgopacity">
                                                                <img src="<?php //image path ?>" class="img-fluid" >
                                                                <br/>
                                                                <h6><?php //name ?></h6>
                                                                <p class="text-secondary"><?php //aurthor name ?></p>
                                                        </div>
                                                        <div class="col imgopacity">
                                                                <img src="download (13).jpeg" class="img-fluid" >
                                                                <br/>
                                                                <h6>Pride And Prejudice</h6>
                                                                <p class="text-secondary">	Paulo Coelho-1988</p>
                                
                                                        </div>
                                                        <div class="col imgopacity">
                                                                <img src="download (6).jpeg" class="img-fluid" >
                                                                <br/>
                                                                <h6>The Fault In Our Stars</h6>
                                                                <p class="text-secondary">J. K. Rowling-1997</p>
                                
                                                        </div>
                                                        <div class="col imgopacity">
                                                                <img src="download (7).jpeg" class="img-fluid" >
                                                                <br/>
                                                                <h6>The Lord Of Rings</h6>
                                                                <p class="text-secondary" >	Khaled Hosseini-2003</p>
                                
                                                        </div>
                                                        <div class="col imgopacity">
                                                                <img src="download (11).jpeg" class="img-fluid" >
                                                                <br/>
                                                                <h6>A walk to Remember</h6>
                                                                <p class="text-secondary">Nicholas Sparks-1999</p>
                                                        </div>
                                                        <span style="font-size:50px; position:relative;bottom:-40px; ">  class="nextpage">&#10095;</a></span>
                                        </div>     
                                </div>
    
                           
                    </div>
    
                </div>
                
                <div  class=" container-fluid bg-model" id="loginbox">
                   <div class=" row box-content">
                        <div class="col" style="height:auto; width:auto;">
                        <span class="close"onclick="return closebutton();">&times;</span>
                               <fieldset style="border:1px solid grey !important;">
                                        <legend style="font-family:'Playfair Display', serif ; font-size:30px; width:auto;" >Login</legend>
                                        <br>
                                        <form action="login.php"method="post" enctype="multipart/form-data" autocomplete="off">
                                                
                                                       <label for="input1">Email:</label> 
                                                        &nbsp; &nbsp;
                                                        <input type="email" name="usermail" placeholder=" enter E-mail" id="input1" required>
                                                        &nbsp;
                                                         <br> <br>
                                                        
                                                        <div class="container" style="height:auto; width:auto;">
                                                               <label for="password-field">Password:</label>
                                                                <input id="password-field" type="password"name="pswd" placeholder="enter password" required>
                                                                <span toggle="#password-field" <i class="fa fa-fw fa-eye toggle-password"></i></span> 
                                                        </div>

                                                          &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                          <a href="#" style="font-size:13px;">Forget Password?</a>
                                                         <br>
                                                        
                                                        <input type="submit" value="Login" class="btn btn-secondary" style="margin-bottom:10px;">

                                        </form>

                                </fieldset>
                                 
                         </div>

                  </div>

                </div>


          </body>

          <script>
           function mylogin()
           {
              var loginn=document.getElementById('loginbox');
              loginn.style.display="flex";    
           }   
           function closebutton()
           {
                var closee= document.getElementById('loginbox');
                closee.style.display="none";
            }

            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr("type", "text");
                } else {
                input.attr("type", "password");
                }
           });
            
          </script>
</html>    
