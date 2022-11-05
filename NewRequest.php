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

        $user_id= $_SESSION["user_id"];


        $sql = "INSERT INTO requests ". "(kidsName,Gender, age,TypeOfServese,startDate,Duration,comments,parentName 
               ) ". "VALUES('$kidsName','$Gender','$age','$TypeOfServese','$startDate','$Duration','$comments','$user_id' )";

        // mysqli_select_db('reservation');
        //$retval = mysqli_query( $sql );
        if ($mysqli->query($sql) === TRUE) {
           //  echo "New record created successfully";
        } else {
           //   echo "Error: " . $sql . "<br>" . $mysqli->error;
        }

        ?> 
      <div calss="main center"style="width:500px; text-align:center; color:green font: size 500px;"> <?php echo "form submitted succefully" ?> </div>


        <?php

        mysqli_close($mysqli);
    }else { ?>


            <form method = "post"  action = "<?php $_PHP_SELF ?>">
              
              <fieldset class="main content" >
                
              <div class="cardFormGhada">

                <h4> Enter child name </h4>
                <input type="text" name="kidsName" placeholder="Child name">

                <h4> Select child gender </h4>
                <select name="Gender">
                  <option selected>Gender</option>
                  <option>girl</option>
                  <option>boy</option>
                </select>

                <h4> Select child age </h4>
                <select name="age">
                  <option selected>Child age</option>
                  <option value="Months-2 years old">Months-2 years old</option>
                  <option value="3-5 years old">3-5 years old</option>
                  <option value="6-8 years old">6-8 years old</option>
                  <option value="9-11 years old">9-11 years old</option>
                </select>

                <h4> Choose date of service &amp; service start time </h4>
                <input type="date" name="startDate" >

                <h4> Select the duration of the service</h4>
                <select name="Duration">
                  <option selected>Duration</option>
                  <option value="1-2 hours">1-2 hours</option>
                  <option value="2-3 hours">2-3 hours</option>
                  <option value="3-4 hours">3-4 hours</option>
                  <option value="5-6 hours">5-6 hours</option>
                  <option value="7-8 hours">7-8 hours</option>
                  <option value="9-10 hours">9-10 hours</option>
                </select>

                <h4> Select the type of service that you prefer </h4>
                <select name="TypeOfServese">
                  <option selected>Select the service</option>
                  <option value="infant babysitting">infant babysitting</option>
                  <option value="help in homework">help in homework</option>
                  <option value="take care of children inside/outside home">take care of children inside/outside home</option>
                  <option value="transports children (ex. school pickup and drop-off)">transports children (ex. school pickup and drop-off)</option>
                  <option value="healthy meals service">healthy meals service</option>
                  <option value="others">others</option>
                </select>

                <h4> Do you have any notes? write them down! </h4>
                <textarea name="comments" rows="5" cols="50" > </textarea>
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