<?php
 $db = mysqli_connect('localhost','root','','BANK') or die("unsucessfull");
 
 $f1 = "SELECT * FROM customer" ;
  $result = mysqli_query($db,$f1);
      $row1 = mysqli_fetch_array($result,MYSQLI_NUM);
	
 /*$f2 = "SELECT * FROM manager" ;
  $result = mysqli_query($db,$f2);
      $row2 = mysqli_fetch_array($result,MYSQLI_NUM);*/

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>USER | ACCOUNT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#beneficiary">Beneficiary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#account">Account Statement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#transfer">Transfer Funds</a>
          </li>
 
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0"><?php echo $row1[8]; ?>
           <!-- <span class="text-primary">Taylor</span>-->
          </h1>
          <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
            <a href="mailto:name@email.com">name@email.com</a>
          </div>

           <div class="subheading mb-2">Account Number  :<?php echo $row1[0]; ?></div>
           <div class="subheading mb-2">Account Type    :<?php echo $row1[1]; ?></div>
           <div class="subheading mb-2">CIF Number  :<?php echo $row1[3]; ?></div>
           <div class="subheading mb-2">Balance  :<?php echo $row1[4]; ?></div>
           <div class="subheading mb-2">Bank Code  :<?php echo $row1[5]; ?></div>
           <div class="subheading mb-2">Account Start Date  :<?php echo $row1[6]; ?></div>
           <div class="subheading mb-2">Aadhaar Number  :<?php echo $row1[7]; ?></div>
           

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="beneficiary">
        <div class="my-auto">
          <h2 class="mb-5">Beneficiary</h2>
         <button type="submit" onclick="beneficiary_form.php"><a href="beneficiary_form.php">Add Beneficiary</a></button>

         <!-- <button type="button">Add a beneficiary</button>-->

          

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php
 $db = mysqli_connect('localhost','root','','BANK') or die("unsucessfull");
 
 $f1 = "SELECT * FROM beneficiary" ;
  $result = mysqli_query($db,$f1);
     
	
echo '<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">';

echo '<table id="myTable">';
  echo '<tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Account Number</th>
  </tr>';
  while( $row1 = mysqli_fetch_array($result,MYSQLI_NUM)){
  echo '<tr><a href="">
    <td>'.$row1[0].'</td>
    <td>'.$row1[5].'</td>
  </tr>';
  }
  
echo '</table>';


?>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



          <!--<div class="subheading mb-2">Beneficiary Name  :</div>
           <div class="subheading mb-2">Beneficiary Bank    :</div>
           <div class="subheading mb-2">Beneficiary Account Number  :</div>
           <div class="subheading mb-2">Beneficiary IFSC CODE  :</div>
           <div class="subheading mb-2">Transfer Limit  :</div>-->
          
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="account">
        <div class="my-auto">
          <h2 class="mb-5">Account Statement</h2>

          <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbkop</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Koniglich Essen</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris specialites</td>
    <td>France</td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

        </div>
      </section>

      
      

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
