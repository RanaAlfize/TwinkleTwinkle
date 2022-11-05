<?php session_start();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Profile </title>
    <link rel="stylesheet" type="text/css"href="css/Style.css">
</head>

<body style="background-color:whitesmoke ;">
    
    <body style="background-color:whitesmoke ;">

<!--هنا لازم يكون المعلومات اللي من قبل موجودة كبليس هولدر -->
        <header>
          <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
           <nav class="navagation">
       
              <a  id="aHedear" href="index.php#AboutTwinkl" > about Twinkle </a>
               <a  id="aHedear" href="index.php#commenQs" > FAQ </a>
                <a id="aHedear" href="BabySitterHome.php">Home</a>
                <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>

               
           </nav>
       </header>

<div><h1 class="mytitle">MY INFO</h1> </div>
        



<section class="main content ">
    <fieldset class="main content lightCard">
        <form method = "post"  action = "<?php $_PHP_SELF ?>">

<!-- (((this allows user to upload her photo
    make sure to put the old pic as default ))) 
    
    <form action="/action_page.php">
    <label for="img">Select image:</label>
    <input type="file" id="img" name="img" accept="image/*">
    <input type="submit">
  </form> 
-->

<br>

        <?php
        include("config.php");
        $user_id= $_SESSION["user_id"];
        $sql="SELECT * FROM users where user_id='$user_id'";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
        $i = 1;
        while ($row = $result->fetch_assoc()) {

        if(isset($_POST['add'])) {
            $first_name = addslashes ($_POST['first_name']);
            $last_name = addslashes ($_POST['last_name']);
            $email = addslashes ($_POST['email']);
            $age = addslashes ($_POST['age']);
            $bio = addslashes ($_POST['bio']);
            $phone = addslashes ($_POST['phone']);




            $sql = "update users set  ". " first_name = '$first_name', last_name='$last_name', email='$email', age='$age', bio='$bio',phone='$phone' where user_id='$user_id'";




          /*  if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }*/

            ?> <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
            <?php

            mysqli_close($mysqli);
        }else {
        ?>
            <img src="uploads/<?php echo $row['photo'];?>" class="profilepic" style="left: 100px; ;">

            <label>First Name :</label> <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" placeholder="existing name should be here">
        <label>Last Name :</label> <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" placeholder="existing name should be here">
        <label>Age :</label> <input type="text" name="age" value="<?php echo $row['age'];?>" placeholder="existing age ">
        <label>Bio :</label> <input type="text" name="bio" value="<?php echo $row['bio'];?>" placeholder="existing aboutMe">
        <label>Phone Number :</label> <input type="text" value="<?php echo $row['phone'];?>" name="phone" placeholder="existing num">
        <label>Email :</label> <input type="text" name="email" value="<?php echo $row['email'];?>" placeholder="existing email">


        <input class="main-btn2 " type="submit" name="add" value="submit update">
        <input class="main-btn2 " type="reset" value="reset">

    </form>
        <?php }
        }
        }?>

</section>

<footer class="footer">
    <h5>contact us:</h5>  
    <div >
        <a href="mailto:Twinkle@hotmail.com"> 
            <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
            </a>
    </div>
</footer>
</body>
</html>