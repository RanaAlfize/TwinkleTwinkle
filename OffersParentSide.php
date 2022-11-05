<?php session_start();?>
<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <title> offer list</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>

<body >
  <header>
    <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
     <nav class="navagation">
 
        <a  id="aHedear" href="ParentHomePage.php#faq" > about Twinkle </a>
         <a id="aHedear"  href="ParentHomePage.php#faq" > FAQ </a>
          <a id="aHedear" href="ParentHomePage.php">Home</a>
          <a href="index.html"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
         
     </nav>
 </header>
 <div class = "center">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <h1 id="titleColor">CHECK OFFERS</h1>
    <br>
    <br>

     <?php
     include("config.php");
     $user_id= $_SESSION["user_id"];
     $sql="SELECT users.*,requests.*,offers.status as status_offer,offers.offer_id,offers.price  FROM offers INNER JOIN requests
ON offers.request_id = requests.id INNER JOIN users
ON users.user_id = offers.user_id";
     $result = $mysqli->query($sql);
     if ($result->num_rows > 0) {
     $i = 1;
     while ($row = $result->fetch_assoc()) {
     ?>

        <fieldset class="card">
            <h3> #1 Request (You got an offer!) </h3>
      <div>
        <h4> Request ID : # <?php echo $row['id'] ?></h4>
        <h4> child Name: <?php echo $row['kidsName'] ?></h4>
        <h4>The price: <?php echo $row['price'] ?> SR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; By babysitter: <?php echo $row['first_name'].' '.$row['last_name'] ?> <a href="ViewBabysitterProfile.html">Show babysitter profil!</a></h4>

          <form method = "post"  action = "<?php $_PHP_SELF ?>">
          <?php if(isset($_POST['Accept'])) {
              $status = 'Accepted';


              $offer_id= $row['offer_id'];

              $sql = "update offers set  ". " status = '$status' where offer_id ='$offer_id'";

              /*if ($mysqli->query($sql) === TRUE) {
                  echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . $mysqli->error;
              }*/


              ?> <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
              <?php

              mysqli_close($mysqli);
          } ?>

        <input class="main-btn3" type="submit" value="Accept" name="Accept">
          </form>


          <form method = "post"  action = "<?php $_PHP_SELF ?>">
              <?php if(isset($_POST['Reject'])) {
                  $status = 'Reject';


                  $offer_id= $row['offer_id'];

                  $sql = "update offers set  ". " status = '$status' where offer_id ='$offer_id'";




                  ?> <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
                  <?php

                  mysqli_close($mysqli);
              } ?>

              <input class="main-btn3" type="submit" value="Reject" name="Reject">
          </form>


<!--        <button button class="main-btnReject " type="button" onclick="alert('The offer has been rejected successfully!')">Reject</button>-->

       <a href="mailto:<?php echo $row['email'] ?>"><button button class="main-btn3" type="button"> contact babysitter </button></a> <!---->

       
        
      </div>
        </fieldset>

     <?php }
     } ?>

      </div>
</body>
<footer class="footer">
  <h5>contact us:</h5>  
  <div >
      <a href="mailto:Twinkle@hotmail.com"> 
          <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
          </a>
  </div>
</html>