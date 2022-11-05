<?php session_start();?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Profile</title>
            <link rel="stylesheet" type="text/css" href="css/Style.css">
        
          
        </head>

        <body style="background-color:whitesmoke ;">

            <header>
                <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
                    <nav class="navagation">
             
                        <a  id="aHedear" href="ParentHomePage.php#faq" > about Twinkle </a>
                        <a  id="aHedear" href="ParentHomePage.php#faq" > FAQ </a>
                        <a id="aHedear" href="ParentHomePage.php">Home</a>
                        <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
                     
                    </nav>
             </header>

             

            <section class="main center">
                <h1 class="mytitle" style="top: 0em ;"> MY PROFILE </h1>

                <?php
                include("config.php");
                $user_id= $_SESSION["user_id"];
                $sql="SELECT * FROM users where user_id= '$user_id'";
                $result = $mysqli->query($sql);
                if ($result->num_rows > 0) {
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <div class=" lightCard">
                            <img src="uploads/<?php echo $row['photo'];?>" class="profilepic">
                            <h5>Name : <span><?php echo $row['first_name'].' '.$row['last_name'] ?></span></h5>
                            <h5>Email: <span><?php echo $row['email'] ?></span></h5>
                            <h5>City :<span> <?php echo $row['city'] ?></span></h5>
                            <h5>Location :<span> <?php echo $row['location'] ?> </span></h5>

                        </div>
                    <?php }
                }?>
                <div >
                    <a href="EditParentProfilePage.php"><button class="main-btn2 "type="button">Edit my profile</button></a>
                    <!-- <button button class="main-btn2 "type="button">Delete Profile</button>  -->



                    <form method = "post"  action = "<?php $_PHP_SELF ?>">
                        <input class="main-btndel" name="add_de" type="submit" value="Delete Profile">
                    </form>

                    <?php




                    if(isset($_POST['add_de'])) {




                        $sql = "delete from  users  where user_id='$user_id'";






                        ?> <div style="width:500px; text-align:center; color:red"> <?php echo "deleted successfully\n"; ?> </div>
                        <?php

                        mysqli_close($mysqli); ?>
                    <?php }
                    ?>

                 </div> 
            </section>


            


        </body>
    </html>