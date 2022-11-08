<?php session_start(); ?>
<!DOCTYPE html>
 
<html> 
   <head>
    <meta charset="UTF-8">
    <title> New Request </title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
   </head> 

   <body>
    <header>
      <a href="#"class="logo "><img src="img/noBG2.png"width="200"></a>
       <nav class="navagation">
   
          <a id="aHedear" href="ParentHomePage.php#faq" > about Twinkle </a>
           <a  id="aHedear" href="ParentHomePage.php#faq" > FAQ </a>
            <a id="aHedear" href="ParentHomePage.php">Home</a>
            <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
           
       </nav>
   </header>
    <p >
        <!--from w3doc -->
        <div >
            <div class="center">
              
              <h1 id="titleColor">Place a new request</h1>
              <br>
              <p>To let us offer you our unique service, please fill the form with an accurate information</p>
              <div>
                <!--go back to parent's page-->
                <div >
                <a class="GoBack" href="ParentHomePage.php"> Back</a>
              </div>
              
            </div>
            </div>
            <!--WRITE THE ACTION-->



    <?php
    if(isset($_POST['add'])) { 
        include("config.php");

        $kidsName = addslashes ($_POST['kidsName']);
        $Gender = addslashes ($_POST['Gender']);
        $age = addslashes ($_POST['age']);
        $TypeOfServese = addslashes ($_POST['TypeOfServese']);
        $startDate = addslashes ($_POST['startDate']);
        $Duration = addslashes ($_POST['Duration']);
        $comments = addslashes ($_POST['comments']);
        $status = 'Pendding';

        ////////////////////////////////

        //$checkn ='/[a-zA-Z\\s]\\,[a-zA-Z\\s]/'; 
        //$checka = "/^\d(?:,\d)*$/" ;

         //   if (!preg_match($checkn,$_POST['kidsName'])) 
         //   echo '<script>alert("names can be only letters separated by commas")</script>';

        //    if (!preg_match($checka,$_POST['age']))
//echo '<script>alert("ages can only be digits separated by commas ")</script>'; 

        $user_id= $_SESSION["user_id"];


        $sql = "INSERT INTO requests ". "(kidsName,Gender, age,TypeOfServese,startDate,Duration,comments,parentName,status 
               ) ". "VALUES('$kidsName','$Gender','$age','$TypeOfServese','$startDate','$Duration','$comments','$user_id','$status' )";

        // mysqli_select_db('reservation');
        //$retval = mysqli_query( $sql );
        if ($mysqli->query($sql) === TRUE) {
           //  echo "New record created successfully";
        } else {
           //   echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

        ?> <div style="width:500px; text-align:center; color:green"> <?php echo "Entered data successfully\n"; ?> </div>
        <?php

        mysqli_close($mysqli);
    }else { ?>


            <form method = "post"  action = "<?php $_PHP_SELF ?>" id="rForm" onsubmit="return validateform()" enctype="multipart/form-data">>
              
              <fieldset class="main content" >
                
              <div class="cardFormGhada">

              <h4> Select Number Of Children  <span style="color:red">*</span></h4>
                <select name="Gender" required>
                  <option value="">choose</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>

                <h4> Enter child name/s <span style="color:red">*</span></h4>
                <input id ="kn" type="text" name="kidsName" placeholder="enter names separated by commas" required pattern="^[a-zA-Z]+(,[a-zA-Z]+)*$"autofocus required title="ONLY LETTERS AND COMMAS INBETWEEN ALLOWED">



                <h4> Enter child/s age <span style="color:red">*</span></h4>
                <input id ="ka"type="text" name="age" placeholder="enter ages separated by commas " required pattern="^[0-9]+(,[0-9]+)*$"autofocus required title="ONLY DIGITS AND COMMAS INBETWEEN ALLOWED">


                <h4> Choose date of service <span style="color:red">*</span></h4>
                <input type="date" name="startDate" required>

                <h4> Select the service start time <span style="color:red">*</span></h4>
                <select name="time" required>
                  <option value="">Stating time </option>
                  <option value="1-2 hours">7:00 am</option>
                  <option value="2-3 hours">8:00 am</option>
                  <option value="3-4 hours">9:00 am</option>
                  <option value="5-6 hours">10:00 am</option>
                  <option value="5-6 hours">11:00 am</option>
                  <option value="5-6 hours">12:00 am</option>
                  <option value="5-6 hours">3:00 pm</option>
                  <option value="5-6 hours">4:00 pm</option>
                  <option value="5-6 hours">5:00 pm</option>
                  <option value="5-6 hours">6:00 pm</option>
                  <option value="7-8 hours">7:00 pm</option>
                  <option value="5-6 hours">8:00 pm</option>
                  <option value="5-6 hours">9:00 pm</option>
                  <option value="9-10 hours">10:00 pm</option>
                </select>

                <h4> Select the duration of the service <span style="color:red">*</span></h4>
                <select name="Duration" required>
                  <option value="">Duration</option>
                  <option value="1-2 hours">2 hours</option>
                  <option value="2-3 hours">3 hours</option>
                  <option value="3-4 hours">4 hours</option>
                  <option value="5-6 hours">5 hours</option>
                  <option value="7-8 hours">6 hours</option>
                  <option value="9-10 hours">>6 hours</option>
                </select>

                <h4> Select the type of service that you prefer <span style="color:red">*</span></h4>
                <select name="TypeOfServese" required>
                  <option value="">Select the service</option>
                  <option value="infant babysitting">infant babysitting</option>
                  <option value="help in homework">help in homework</option>
                  <option value="take care of children inside/outside home">take care of children inside/outside home</option>
                  <option value="transports children (ex. school pickup and drop-off)">transports children (ex. school pickup and drop-off)</option>
                  <option value="healthy meals service">healthy meals service</option>
                  <option value="others">others</option>
                </select>

                <h4> Do you have any notes? write them down! </h4>
                <textarea name="comments" rows="5" cols="50" required> </textarea>
                <input class="main-btn2"  name = "add"  type="submit" value="Submit">
              </div>
              <br>
              
              </fieldset>
            </form>

        <?php


    }
    ?>


          </div>
          <!--from w3doc-->
       
    </p>
    <footer class="footer">
      <h5>contact us:</h5>  
      <div >
          <a href="mailto:Twinkle@hotmail.com"> 
              <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
              </a>
      </div>




   </body>

</html>