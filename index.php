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
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark static-top">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="snout.html">Snout</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                     <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" /> 
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>     
                    </div>




                         <!-- Popup -->
                         <button class="open-button" onclick="openForm()">Login</button>

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
 </nav>
 </div>
        
        <!-- End Navigation Bar -->

        <div class="grid-container">

            <div class="Box-1"></div>
                Snaxe


            <div class="Box-2"></div>


            <div class="Box-3"></div>


            <div class="Box-4"></div>


            <div class="Box-5"></div>


            <div class="Box-6"></div>


            <div class="Box-7"></div>


            <div class="Box-8"></div>


            <div class="Box-9"></div>
          </div>

          <

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script> function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>
</body>
</html>