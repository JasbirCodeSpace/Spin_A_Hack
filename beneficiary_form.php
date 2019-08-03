<?php
      $db = mysqli_connect('localhost','root','','BANK') or die("unsucessfull");
	  
	  if(!$db)
		  echo "connection unsucessfull"; 
	  else
		  echo "connection sucessfull";
	                
					$userFname = ' aa';
					$userFname = ' aa';
					$userFname = ' aa';
					$userFname = ' aa';
					$userFname = ' aa';
					$userFname = ' aa';
				
					if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						 if ($_POST['submit']){
							 
							 if(!empty($_POST['first-name'])){
							$userFname=$_POST['first-name'] ;
							echo $userFname;
							
						}
						if(!empty($_POST['last-name'])){
						
							$userLname=$_POST['last-name'] ;
							echo $userLname;
							
						}
						if(!empty($_POST['gender'])){
							$gender=$_POST['gender'] ;
							echo $gender;
						}
						if(!empty($_POST['birthday'])){
							$dob=$_POST['birthday'] ;
							echo $dob;
							
						}
						if(!empty($_POST['gmail'])){
							$gmail=$_POST['gmail'] ;
							echo $gmail;
							
						}
						if(!empty($_POST['password_1'])){
							$pswrd_1=$_POST['password_1'] ;
							echo $pswrd_1;
							
						}
						if(!empty($_POST['password_2'])){
							$pswrd_2=$_POST['password_2'] ;
							echo $pswrd_2;
							
						}
						if(!empty($_POST['contact'])){
							$contact=$_POST['contact'] ;
							echo $contact;
						}
						if(!empty($_POST['aadhaar'])){
							$aadhaar=$_POST['aadhaar'] ;
							echo $aadhaar;
						}
						if(!empty($_POST['house'])){
							$house=$_POST['house'] ;
							echo $house;
						}
						if(!empty($_POST['city'])){
							$city=$_POST['city'] ;
							echo $city;
							
						}
						if(!empty($_POST['pincode'])){
							$pincode=$_POST['pincode'] ;
							echo $pincode;
							
						}
						if(!empty($_POST['state'])){
							$state=$_POST['state'] ;
							echo $state;
							
						}
						if(!empty($_POST['country'])){
							$country=$_POST['country'] ;
							echo $country;
							
						}
						
					
					if(strcmp($_POST['password_1'],$_POST['password_2']) == 0){
							mysqli_query($db,"use USER") or die("DIE");
							
	                         $query = "insert into user values('$userFname','$userLname','$gender','$dob','$gmail','$pswrd_1','$contact','$house','$city','$pincode','$state','$country','')";
	          				 mysqli_query($db,$query) or die(mysqli_error($db));

       					     mysqli_query($db,"select * from user;");
						}
						
						}
						}
	   
	  
	  ?>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

input[type=number], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=number]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add Beneficiary</h1>
    <p>Please fill in this form to add a beneficiary.</p>
    <hr>

    <label for="email"><b>Beneficiary Name</b></label>
    <input type="text" placeholder="Beneficiary Name" name="1" required>

    <label for="psw"><b>Beneficiary Bank  </b></label>
    <input type="text" placeholder="Beneficiary Bank" name="2" required>

    <label for="psw-repeat"><b>Beneficiary Account Number </b></label>
    <input type="number" placeholder="Beneficiary Account Number" name="3" required>
    
     <label for="psw-repeat"><b>Beneficiary IFSC CODE </b></label>
    <input type="number" placeholder="Beneficiary IFSC CODE" name="4" required>

     <label for="psw-repeat"><b>Transfer Limit </b></label>
    <input type="number" placeholder="Transfer Limit" name="psw-repeat" required>
    <label for="psw-repeat"><b>User Account </b></label>
    <input type="number" placeholder="Transfer Limit" name="5" required>
    

    <div class="clearfix">
      <button type="button" class="cancelbtn" ><a href="inde.html">Cancel</a></button>
      <button type="submit" class="signupbtn"><a href="inde.html">Add</button>
    </div>
  </div>
</form>

</body>
</html>
