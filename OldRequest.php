<?php session_start();?>
<!DOCTYPE html>
<html> 
   <head>
    <meta charset="UTF-8">
    <title> Old Request </title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
   </head> 

   <body >
    <header>
      <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
       <nav class="navagation">
   
          <a id="aHedear" href="ParentHomePage.php#faq" > about Twinkle </a>
           <a  id="aHedear" href="ParentHomePage.php#faq" > FAQ </a>
            <a id="aHedear" href="ParentHomePage.php">Home</a>
            <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
           
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
      <h1 class="mytitle" style="top: 0em ;"> My Requests </h1>  
      <hr> 
      <br>
      <br>
      <br>

       <?php
       include("config.php");
       $user_id= $_SESSION["user_id"];
       $sql="SELECT * FROM requests INNER JOIN users
ON requests.parentName = users.user_id";
       $result = $mysqli->query($sql);
       if ($result->num_rows > 0) {
       $i = 1;
       while ($row = $result->fetch_assoc()) {
       ?>

      <fieldset class="cardy">
        <legend id = "TopColor"><strong>Request #<?php echo $i;?></strong></legend>
      <div>
        <h4> Request ID : # <?php echo $row['id'] ?></h4>
        <h3> child Name: <?php echo $row['kidsName'] ?></h3>
        <h3> gender: <?php echo $row['Gender'] ?></h3>
        <h3> date &amp; time of service: <?php echo $row['startDate'] ?></h3>
        <h3> duration: <?php echo $row['Duration'] ?></h3>
        <h3> type of service: <?php echo $row['TypeOfServese'] ?></h3>
        <h3> location: <?php echo $row['location'] ?></h3>
        <h3> Babysitter's email:  <?php echo $row['email'] ?> </h3>
        <h3> Babysitter's phone number: <?php echo $row['phone'] ?> </h3>


        <!-- <a href="EditOldRequest.php?id=<?php //echo $row['id'] ?>" class="btn btn-info btn-lg">
          <button class="main-btnEdit" type="button" > <span class="glyphicon glyphicon-edit"></span> Edit</button>
       </a>
       
       <button class="main-btndel" type="button" ><a id="cancelColor"href="cancel.html"> Cancel </a></button> -->
        
      </div>
    </fieldset>
       <?php $i++; }
       }?>

     
  </div>
  <footer class="footer">
    <h5>contact us:</h5>  
    <div >
        <a href="mailto:Twinkle@hotmail.com"> 
            <img  id="mailIcon" src="img/mail.png"  alt="mail icon"  class="contactIcons">
            </a>
    </div>
   </body>

</html>