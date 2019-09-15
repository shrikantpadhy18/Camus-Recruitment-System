<?php
	session_start();
    if ( !isset($_SESSION['roll'])) {
        # hcode...
    header('location:http://localhost/app/php/login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <!-- Compiled and minified CSS -->
     <!-- Compiled and minified CSS -->

	<title>
		student section
	</title>
	<style type="text/css">
		.header {
 	 padding: 60px;
  	text-align: center;
  	background: #1abc9c;
  	color: white;
  	font-size: 30px;
}
.tabular{
  width: 900px;
  margin-left: 20%;
  background-color: white;

}
.card:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
@media screen and (max-width: 650px)
{
      .tabular{
     position: absolute;
  margin-left: 0%;
  width: 550px;
  left: 0px;
  background-color: white;
  display: block;

}
.tabular h1
{

  font-size: 16px;
  margin-left: 0%;
}
#overla p
  {
    font-size: 15px;
  }
  #overla table
  {
    font-size: 10px;
    
    margin-left: 1%;
    font-size: 15px;
    padding: 0px;
  }
}
</style>

</head>
<body style="background-image: url('http://www.pptbackgrounds.org/uploads/group-of-students-education-powerpoint-backgrounds.jpg');">
<header style="background-color: #006db0;" class="header">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a href="http://localhost/app/php/logoutst.php" >LOGOUT</a>
	 
	
	</header>

	<hr>
	<center> <b style="color: yellow;font-size: 25px;text-decoration: underline;"><?php	echo "YOUR ROLL NO=". $_SESSION['roll'] ."\n YOUR USERNAME=" .$_SESSION['susername']; ?></b></center>
    <br>

	 <div id="overla" ondblclick="off()" style="overflow-x:auto;">
       <p style="font-size: 25px;z-index: 1;cursor: pointer;" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='white' " id="text">
        <?php
        $row=0;
        $con=mysqli_connect('localhost:3308','root');
        mysqli_select_db($con,'db3');
        $q="select * from  companyrequirements";
        $result=mysqli_query($con,$q);
        if($result)
        {
        	$row=mysqli_num_rows($result);
        }

        if($row>0)
        {
        	?>
        	<table border="9px" bgcolor="#006db0">
        		<tr>
        			<th>
        				COMPANY NAME
        			</th>
        			<th>
        				SKILLS REQUIRED
        			</th>

        			<th>
        				S.S.C PERCENTAGE
        			</th>
        			<th>
        				H.S.C PERCENTAGE
        			</th>

        			<th>
        				PACKAGE OFFERED
        			</th>

        			<th>
        				AVERAGE CGPI NEEDED
        			</th>
        		</tr>

        	<?php
        	for($i=1;$i<=$row;$i++)
        	{
        		$out=mysqli_fetch_array($result);
        		?>
        		<tr>
        			<td align="center">
        				<?php echo $out['name']; ?>

        			</td>
        			<td align="center">
        				<?php echo $out['skillsneeded']; ?>
        			</td>

        			<td align="center">
        				<?php echo $out['ssc']; ?>
        			</td>
        			<td align="center">
        				<?php echo $out['hsc']; ?>
        			</td>
        			<td align="center">
        				<?php echo $out['package'];  ?>
        			</td>
        			<td align="center">
        				<?php echo $out['cgpi']; ?>
        			</td>
        		</tr>
        		
        		<?php

        	}
        }

        ?>
    </table>
  	</p>
    </div>

    <script type="text/javascript">
  function on() {
  document.getElementById("overla").style.display = "block";
}

function off() {
  document.getElementById("overla").style.display = "none";
}
</script>

  
    
    

<div class="tabular">
	
    <div class="card"    style="background-color: #00CCFF">
      
      
        
<h2>BUILD YOUR PROFILE HERE</h2>
<div class="data">
<a class="btn btn-primary" href="http://localhost/app/php/sprofilecreate.php">CREATE PROFILE</a>
</div>
</div>
<br>
<br>



    <div class="card"  style="background-color: #00CCFF;">
      
     
        
<h2>SEE ELIGIBILITY CRITERIA</h2>
 <div class="data">
<a class="btn btn-primary" href="#">CHECK CRITERIA</a>


</div>
</div>
<br>
<br>


    <div class="card"   style="background-color: #00CCFF;">
      
      
        
<h2>CHECK THE LIST OF COMPANY VISITING</h2>
<div class="data">
<a class="btn btn-primary" href="#" onclick="on()">Company Details</a>

</div>
</div>


<br>
<br>


    <div class="card"   style="background-color: #00CCFF;">
      
      
        
<h2>UPDATE PROFILE</h2>
<div class="data">

<a class="btn btn-primary" href="http://localhost/app/php/sprofilecreate.php" name="edit" value="edit">EDIT PROFILE</a>
</div>
</div>
</div>


</body>
