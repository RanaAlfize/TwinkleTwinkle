<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Edit Parent Profile </title>
    <link rel="stylesheet" type="text/css"href="css/Style.css">

    </head>

    <body style="background-color:whitesmoke ;">

     <!--هنا لازم يكون المعلومات اللي من قبل موجودة كبليس هولدر -->
        <header>
            <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
             <nav class="navagation">
         
                <a id="aHedear" href="ParentHomePage.php#faq" > about Twinkle </a>
                 <a id="aHedear" href="ParentHomePage.php#faq" > FAQ </a>
                  <a id="aHedear" href="ParentHomePage.php">Home</a>
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
                </form> -->
        


                <?php
                include("config.php");



                    $user_id= $_SESSION["user_id"];
                $sql="SELECT * FROM users where user_id= '$user_id'";
                $result = $mysqli->query($sql);
                if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {


                    if(isset($_POST['add'])) {
                    $first_name = addslashes ($_POST['first_name']);
                    $last_name = addslashes ($_POST['last_name']);
                    $email = addslashes ($_POST['email']);
                    $city = addslashes ($_POST['city']);
                    $location = addslashes ($_POST['location']);




                    $sql = "update users set  ". " first_name = '$first_name', last_name='$last_name', email='$email', city='$city', location='$location' where user_id='$user_id'";




                 /*   if ($mysqli->query($sql) === TRUE) {
                         echo "New record created successfully";
                    } else {
                          echo "Error: " . $sql . "<br>" . $mysqli->error;
                    }*/

                    ?> <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
                    <?php

                    mysqli_close($mysqli);
                }else {

                ?>
                        <img src="uploads/<?php echo $row['photo'];?>" class="profilepic" style="left: 100px; ;"> <br>
                    <input value="<?php echo $row['user_id'] ?>" name="user_id" type="hidden" >
                <label>First Name :</label> <input value="<?php echo $row['first_name'] ?>" name="first_name" type="text" placeholder="existing Name ">
                <label>Last Name :</label> <input value="<?php echo $row['last_name'] ?>" name="last_name" type="text" placeholder="existing Name ">
                <label>Email :</label> <input value="<?php echo $row['email'] ?>" name="email" type="text"placeholder="existing age ">
                <label>City :</label> <input value="<?php echo $row['city'] ?>" name="city" type="text"placeholder="existing City">
                <label>Location :</label> <input value="<?php echo $row['location'] ?>" name="location" type="text"placeholder="existing num">

                <?php }
                }
                }?>
                <div class="">
                    <input class="main-btnReset" type="submit" value="update" name = "add">
                    <input class="main-btnReset " type="reset" value=" reset  ">
                </div>
            </form>
        
        </section>
        
    </body>


    
</html>