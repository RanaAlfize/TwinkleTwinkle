<?php session_start();?>
<!DOCTYPE html>
    <html>
        <head>

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>BOOKINGS</title>
            <link rel="stylesheet" type="text/css" href="css/Style.css">

        </head>

        <body style="background-color:whitesmoke ;">
            
            <header>
                <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
                <nav class="navagation">
 
                    <a  href="ParentHomePage.php#faq" > about Twinkle </a>
                    <a  href="ParentHomePage.php#faq" > FAQ </a>
                    <a href="ParentHomePage.php">Home</a>
         
                </nav>
            </header>
 
            <div class="center"> 
                  <h1 class="mytitle">MY BOOKINGS</h1>
            </div>
            


            <section class="main">
                <div class="content">
                <div class="adjustMe">
                
                    <h1 class="title" > CUURRENT BOOKING </h1>
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
                        if ($row['startDate'] > date('Y-m-d')) {
                            ?>


                            <div class="card">
                                <h3> Name : <?php echo $row['kidsName'] ?> </h3>
                                <h3> Email : <?php echo $row['email'] ?></h3>
                                <h3> Phone number : <?php echo $row['phone'] ?></h3>
                                <h3> Child Name : <?php echo $row['first_name'].' '.$row['last_name'] ?></h3>
                                <h3> Child ege : <?php echo $row['age'] ?></h3>
                                <h3> Date : <?php echo $row['startDate'] ?></h3>
                                <!-- <a href="ViewMyReviews.html" alt="View Reviews / Rate"><h3> View Reviews / Rate</h3></a> -->
                                <!-- <a class="navagation" href="https://www.google.com/maps"><button class="btn-2">My Location</button></a> -->
                            </div>


                        <?php }
                    }
} ?>

                </div>
                
                
                <div class="center" > 
                    <!-- <h1 class="title" style="color:#ebe342;"> PREVIOUS BOOKING </h1> -->
                    <h1 class="title" > PREVIOUS BOOKING </h1>

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
                    if ( date('Y-m-d') > $row['startDate']) {
                    ?>
                    <div class="cardy">
                        <h3> Name : <?php echo $row['kidsName'] ?> </h3>
                        <h3> Email : <?php echo $row['email'] ?></h3>
                        <h3> Phone number : <?php echo $row['phone'] ?></h3>
                        <h3> Child Name : <?php echo $row['first_name'].' '.$row['last_name'] ?></h3>
                        <h3> Child ege : <?php echo $row['age'] ?></h3>
                        <h3> Date : <?php echo $row['startDate'] ?></h3>
                        <!-- <a href="ViewMyReviews.html" alt="View Reviews / Rate"><h3> View Reviews / Rate</h3></a> -->
                        <a class="navagation" href="revForm.php?id=<?php echo $row['offer_id'];?>"><button class="btn-2">Post review</button></a>
                    </div>
                    <?php }
                    }
                    } ?>
                


                </div>
                <!-- </div> -->
                
            </div>
            </section>

        </body>
    </html>