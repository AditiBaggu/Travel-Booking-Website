<?php session_start(); ?>
<html>
    <head>
        <title>Ride-Is-On</title>
        <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <style>
            .rectangle {
            background-color: black;
            height:150px;
            width: 800px;
            border:2px solid white;
            border-radius: 20px;
            margin-top: -280px;
            margin-left:210px;
            box-shadow: 20px 20px 50px 15px grey;
          }
          #book{
            color:white;
            margin-top:20px;
            margin-left:10px;
            font-family: Monotype Corosiva;
            font-size: 17px;
          }
          #align{
            margin-left:40px;
          }
          #tab{
            width:300px;
            height: 200px;
            margin-left:500px;
            margin-top:10px;
            text-align:center;
            border:3px solid;
            box-shadow: 10px 10px 40px 15px grey;
            font-family:Impact;
           font-size: 18px;
            
          }
          #btnbook{
            margin-left:900px;
            margin-top:-40px;
            border-radius:5px;
            width:80px;
            height:30px;
          }
          #btnbook:hover{
            background-color:black;
            color:white;
          }
          #train{
           width:180px;
           margin-left: 1120px;
           margin-top:-40px;
           visibility:hidden;

          }
          #air{
           width:150px;
           visibility:hidden;
          }
            </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
        <script>
            $(document).ready(function(){
            $("#tab").hide();
    
            $("#sub").click(function(){
            $("#tab").show();
            });
            });
            </script>
            <script type="text/javascript">
              document.querySelector('#sub').addEventListener("click", ShowImage)
                function ShowImage(){
                    document.getElementById('train').style.visibility="visible";
                    document.getElementById('air').style.visibility="visible";
                }
             </script>
        
        </head>
        <body>
        <nav class="navbar navbar-expand" style="background-color:black" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="ride.png" class="rounded float-start" alt="ride"  height="90">
                      </a>&nbsp;&nbsp;&nbsp;
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

<li class="nav-item">
<a class="nav-link active" href="#" style="color:white; font-family: Monotype Corosiva; font-size:20px">Booking </a>
</li>&nbsp;&nbsp;&nbsp;

<li class="nav-item">
<a class="nav-link active" href="#" style="color:white; font-family: Monotype Corosiva; font-size:20px">Hotels</a>
</li>&nbsp;&nbsp;&nbsp;

<li class="nav-item">
<a class="nav-link active" href="#" style="color:white; font-family: Monotype Corosiva; font-size:20px">About Us</a>
</li>&nbsp;&nbsp;&nbsp;
    </ul>
    <a href="Sign Up.php"><button type="button" class="btn btn-outline-light" id="logbtn">Log Out</button></a>&nbsp;&nbsp;&nbsp;
    
    </div>
    </nav>
    <img id="air" src="https://th.bing.com/th/id/R.8cf4aaba2a3f83441c4e303083a2b09c?rik=rzAoDkZ7L5SKAA&riu=http%3a%2f%2fclipartmag.com%2fimages%2fplane-black-and-white-25.jpg&ehk=pD6i%2f2DO2r565eBfh4BrZuWOWQv6JA1P9JYYoanaVg0%3d&risl=&pid=ImgRaw&r=0">
    <img id="train" src="https://media.istockphoto.com/vectors/retro-train-illustration-isolated-on-white-background-design-element-vector-id934817972?k=6&m=934817972&s=612x612&w=0&h=b0bzdfEbW5X8MNiyS5WIpALYcZ5mgLGkO8kRF3au9js=">
    <div class="rectangle">
        <form id="book" method="post">
        <center><label> Enter Distance (in Km):  </label>
        <input type="text" name="distance" required></center><br>
        <p id="align">
        <label> No. of Guests:  </label>
        <input type="text" name="guests" size="2" required>&nbsp;&nbsp;&nbsp;
        <label> Start Date:  </label>
        <input type="date" name="start" required>&nbsp;&nbsp;&nbsp;
        <label> End Date:  </label>
        <input type="date" name="end" required>&nbsp;&nbsp;&nbsp;
        <input id="sub" type="submit" value="Submit" onclick="ShowImage();"/>
        </p>
        </form>
        </div><br><br>
        <?php
        if(isset($_SESSION['status']))
        {
            unset($_SESSION['status']);
        }
        ?>
        <?php
        if($_POST){
        $km = $_POST["distance"];
        $person = $_POST["guests"];
        $fuelcar = $km*5*$person;
        $fuelbus = $km*4*$person;
        $fueltrain = $km*2*$person;
        $fuelflight  =$km*10*$person;
        }
        ?>
         <form action="checkbox.php" method="post">
         <table id="tab">
                                             <tr>
                                             <th><u> Trip Fares  </u></th>
                                             </tr>
                                             <tr>
                                             <td> <input type="checkbox" name="mode[]" value="Car - Rs. <?php echo $fuelcar ?>"> Car - Rs. <?php echo $fuelcar ?></td>
                                             </tr>
                                             <tr>
                                             <td> <input type="checkbox" name="mode[]" value="Bus - Rs. <?php echo $fuelbus ?>"> Bus - Rs. <?php echo $fuelbus ?></td>
                                             </tr>
                                             <tr>
                                             <td> <input type="checkbox" name="mode[]" value="Train - Rs. <?php echo $fueltrain ?>"> Train - Rs. <?php echo $fueltrain ?> </td>
                                             </tr>
                                             <tr>
                                             <td> <input type="checkbox" name="mode[]" value="Flight - Rs. <?php echo $fuelflight ?>"> Flight - Rs. <?php echo $fuelflight ?> </td>
                                             </tr>
                        </table>  
        <button type="submit" id="btnbook" name="book"> Book </button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>