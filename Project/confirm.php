<?php
$conn = mysqli_connect('localhost','root','','trip'); 
if(!$conn){
  die("Connection Error");
}
$query="SELECT ID,Name,Gender,Phone,Email,Booking from registration "; 
$result=mysqli_query($conn,$query); 
?>
<html>
    <head>
        <title>Ride-Is-On</title>
        <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

        <style>
            .rectangle {
            background-color: black;
            height:300px;
            width: 800px;
            border:2px solid white;
            border-radius: 20px;
            margin-top: 60px;
            margin-left:230px;
            box-shadow: 20px 20px 50px 15px grey;
          }
          h1{
            color: white;
            font-family : Impact;
          }
          
          #book{
            border: 2px solid;
            border-color:white;
            width: 700px;
            color:white;
            font-family:Monotype Corosiva;
            text-align:center;
            padding:5px;
            margin-left:50px;
            margin-top:30px;
          }
          </style>
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

<div class="rectangle">
    <h1><center> Booking Confirmed !!! <center></h1>
    <table id="book"> 
	    <tr><u>
			  <th> ID </th> 
			  <th> Name </th> 
			  <th> Gender </th> 
			  <th> Phone </th> 
        <th> Email </th> 
			  <th> Booking </th> </u>  
		</tr> 
    <?php 
    while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
    <tr> 
    <td><?php echo $rows['ID']; ?></td> 
		<td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['Gender']; ?></td> 
		<td><?php echo $rows['Phone']; ?></td>
    <td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['Booking']; ?></td>  
		</tr> 
    <?php 
       } 
          ?> 
	</table> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </body>
</html>