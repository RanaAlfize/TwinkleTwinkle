<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">

</head>


<body style="background-color:whitesmoke ;">


  <header>
    <a href="#" class="logo "><img src="img/noBG2.png"width="200"></a>
     <nav class="navagation">
 
      <a id="aHedear" href="index.php#AboutTwinkl" > about Twinkle </a>
      <a  id="aHedear"href="BabySitterHome.php#commenQs" > FAQ </a>
      <a id="aHedear" href="BabySitterHome.php#commenQs">Home</a>
      <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>

         
     </nav>
 </header>
 

<section >
    <div class="center"> 
      <h1 class="mytitle">MY JOBS </h1>
    </div></section>
    
    <div class="Mycenter main content"></span><a href="#cjobs"><button class="title main-btn2 do">VIEW CURRENT JOBS </button></a></span> <span><a href="#pjobs" class="Mycenter main"><button class="title main-btn2 content do"> VIEW PREVIOUS JOBS</button></a></span> </div>


<section class="main">

<div class="main content makeR">

<div >  

      <span id="cjobs"></span>
  <h1 class="Thetitle" style="margin-left:2.2em; margin-bottom:2em; margin-top: 5em;"> CURRENT JOBS </h1>

    <?php
    include("config.php");
    $user_id= $_SESSION["user_id"];
    $sql="SELECT users.*, requests.*,offers.status as status_offer,offers.offer_id  FROM offers INNER JOIN requests
ON offers.request_id = requests.id INNER JOIN users
ON users.user_id = offers.user_id and offers.status='Accepted'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
    $i = 1;
    while ($row = $result->fetch_assoc()) {
        if ($row['startDate'] > date('Y-m-d')) {
            ?>

            <div class="card">
                <h4> JOB ID : # <?php echo $row['id'] ?></h4>
                <h3> date : <?php echo $row['startDate'] ?></h3>
                <h3> Childs Name : <?php echo $row['kidsName'] ?></h3>
                <h3>parents Name : <?php echo $row['first_name'] . ' ' . $row['last_name'] ?> </h3>
                <h3> contact parent : <?php echo $row['email'] ?></h3>
                <h3> contact Location :<?php echo $row['location'] ?></h3>

            </div>
        <?php }
    }
      } ?>

</div>

</div>

</section>

<!------------------------------------------------------------------------------------------------------------->
<!-- <section class="main">

<div class="main content makeL">
  <h1 class="Thetitle" id="pjobs" style="margin-left:-0.1em; margin-bottom:2em;" > PREVIOUS JOBS </h1>

      <div class="cardy">
          <h4> JOB ID : # 76539</h4>
          <h3> date : 75-07-2023</h3>
          <h3> day : Friday </h3>
          <h3> Childs Name : Nawaf </h3>
          <h3>parents Name :Ali </h3>
          <h3> contact parent :  96653725283</h3>
          <a class="navagation" href="https://www.google.com/maps"><button class="btn-2">Location</button></a>
          
      </div>

      <div class="cardy">
        <h4> JOB ID : # 76539</h4>
        <h3> date : 75-07-2023</h3>
        <h3> day : Friday </h3>
        <h3> Childs Name : Nawaf </h3>
        <h3>parents Name :Ali </h3>
        <h3> contact parent :  96653725283</h3>
        <a class="navagation" href="https://www.google.com/maps"><button class="btn-2">Location</button></a>
        
    </div>

    <div class="cardy">
      <h4> JOB ID : # 76539</h4>
      <h3> date : 75-07-2023</h3>
      <h3> day : Friday </h3>
      <h3> Childs Name : Nawaf </h3>
      <h3>parents Name :Ali </h3>
      <h3> contact parent :  96653725283</h3>
      <a class="navagation" href="https://www.google.com/maps"><button class="btn-2">Location</button></a>
    </div>  
</div>

</div>

</section> -->

<section class="main">

  <div class="main content makeR">
  
  <div >  
  
        <span id="pjobs"></span>
    <h1 class="Thetitle" style="margin-left:2.2em; margin-bottom:2em; margin-top: 5em;"> PREVIOUS JOBS </h1>

      <?php
      include("config.php");
      $user_id= $_SESSION["user_id"];
      $sql="SELECT users.*, requests.*,offers.status as status_offer,offers.offer_id  FROM offers INNER JOIN requests
ON offers.request_id = requests.id INNER JOIN users
ON users.user_id = offers.user_id and offers.status='Accepted'";
      $result = $mysqli->query($sql);
      if ($result->num_rows > 0) {
      $i = 1;
      while ($row = $result->fetch_assoc()) {
          if (date('Y-m-d') > $row['startDate']) {
              ?>

              <div class="cardy">
                  <h4> JOB ID : # <?php echo $row['id'] ?></h4>
                  <h3> date : <?php echo $row['startDate'] ?></h3>
                  <h3> Childs Name : <?php echo $row['kidsName'] ?></h3>
                  <h3>parents Name : <?php echo $row['first_name'].' '.$row['last_name'] ?> </h3>
                  <h3> contact parent :  <?php echo $row['email'] ?></h3>
                  <h3> contact Location :<?php echo $row['location'] ?></h3>

              </div>
          <?php }
      }
       } ?>
  
  </div>
  
  </div>
  
  </section>
  
</body>
</html>

