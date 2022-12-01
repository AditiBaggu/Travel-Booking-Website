<html>
    <head>
        <title>Ride-Is-On</title>
        <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    
    <link rel="stylesheet" type="text/css" href="SignUpStylesheet.css"> 
 
    <script>
        $(document).ready(function(){
            $(".active").click(function(){
            $("#signup").show();
            });
            $(".register-tab").click(function(){
            $("#signup").hide();
            $("#login").show();
            });
            $("#in").click(function(){
            $("#signup").hide();
            });
        });
        </script>
        
        </head>
        <body>
            <nav class="navbar navbar-expand" style="background-color:black" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="ride.png" class="rounded float-start" alt="ride"  height="90">
                      </a>
            
                    <a id="quote" style="color: white; font-family: Monotype Corosiva; font-size:18px"> "The Journey of Thousand Miles starts with a Single Step !"</a>
                    </div>
                    </nav>
                    <div class="container mt-5">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="https://clipground.com/images/clip-art-travel-13.jpg"  alt="map"  width="500" height="400">
                          </div>
                          <div class="col-lg-4">
                            <div class="rectangle">
                                <div id="tab-btn">
                                    <a href="#" class="login-tab active">Sign Up</a>
                                    <a href="#" class="register-tab" id="log">Sign In</a>
                                  </div>
                                  
                                  <form id="signup" action="connect.php" method="post">
                                        <label> Name:  </label>
                                        <input type="text" name="Name" required><br><br>
                                        <label> Gender:  </label>&nbsp;&nbsp;
                                        <input type="radio" name="gender" value="Male"/> Male &nbsp;&nbsp;
                                        <input type="radio" name="gender" value="Female"/> Female &nbsp;&nbsp;
                                        <input type="radio" name="gender" value="Others"/> Others <br><br>
                                        <label> Contact:   </label>
                                        <input type="text" name="Country code" value="+91" size="2"/> 
                                        <input type="text" name="Phone" size="10" required/><br><br>
                                        <label> Email:  </label>
                                        <input type="Email" name="Email" required><br><br>
                                        <label> Password:  </label>
                                        <input type="password" name="Password" required><br><br>
                                        <form action="adhar.php" method="post" enctype="multipart/form-data">
                                        <label> Adhaar Card:  </label>
                                        <input type="file" name="file"><br><br>
                                        <center><input type="Submit" name="Submit" value="Sign Up" style="font-family:Impact"><br>
                                        </form>
                                    <h6 style="font-family:Impact; font-size:15px">Already have an account? <a href="#" id="in">Login</a></h6> </center>
                                        </form>
                                        <form id="login" action="login.php" method="post">
                                        <label> Username:  </label>
                                        <input type="Email" name="email" required><br><br>
                                        <label> Password:  </label>
                                        <input type="password" name="password" required><br><br>
                                        <p id="pass"><a href="#">Forget password? </a></p>
                                        <input id="submit" type="Submit" name="login" value="Login"><br>
                                    </form>
                            </div>
                            </div>
                            </div>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>