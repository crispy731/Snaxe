<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    

        <!--Start Navigation Bar!-->

        
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-light text-muted static-top">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand text-dark" href="snout.html">Snout</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" /> 
                            <button class="btn btn-success my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>     
                    </div>




                         <!-- Popup -->
                         <button class="open-button bg-success" onclick="openForm()" data-toggle="button">Login</button>

                         <div class="form-popup" id="myForm">
                            <form action="/action_page.php" class="form-container">
                              <h1>Login</h1>
                          
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="email" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>
                          
                              <button type="submit" class="btn">Login</button>
                              <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                          </div>
        <!-- End Popup -->
        <!-- Signup -->
        <button class="open-button2 bg-success2" onclick="openForm2()" data-toggle="button2">Sign up</button>

                         <div class="form-popup2" id="myForm2">
                            <form action="includes/beanburrito.php" class="form-container2">
                              <h1>Sign Up</h1>
                              <label for="firstname"><b>Firstname</b></label>
                              <input type="text" placeholder="Enter Firstname" name="firstname" required>
                          
                              <label for="lastname"><b>Lastname</b></label>
                              <input type="text" placeholder="Enter Lastname" name="lastname" required>

                              <label for="email"><b>Email</b></label>
                              <input type="varchar" placeholder="Enter Email" name="email" required>

                              <label for="uid"><b>Username</b></label>
                              <input type="text" placeholder="Enter Username" name="username" required>

                              <label for="upwd"><b>Password</b></label>
                              <input type="varchar" placeholder="Enter Password" name="pwd" required>
                          
                              <button type="submit2" class="btn2">Sign Up</button>
                              <button type="submit2" class="btn cancel2 text-light" onclick="closeForm()">Close</button>
                            </form>
                          </div>
        



<!-- End Nav Bar -->        







<!-- ????? keep --->
                         <div class="form-popup" id="myForm">
                            <form action="/action_page.php" class="form-container">
                              <h1>Sign Up</h1>
                          
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="email" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>
                          
                              <button type="submit" class="btn">Sign Up</button>
                              <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                          </div>
                 </nav>
             
       

                 
                 