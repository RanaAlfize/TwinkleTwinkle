<?php session_start();?>
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
   
          <a  id="aHedear" href="ParentHomePage.php#faq" > about Twinkle </a>
           <a  id="aHedear" href="ParentHomePage.php#faq" > FAQ </a>
            <a id="aHedear" href="ParentHomePage.php">Home</a>
            <a href="logout.php"><img src="img/box-arrow-in-right.svg" alt="log out "></a>
           
       </nav>
   </header>
    <p >
        <!--from w3doc-->
        <div >
            <div class="center">
              
              <h1 id="titleColor">Edit your request</h1>
              <br>
              <div>
                <!--go back to parent's page-->
                <div >
                <a class="GoBack" href="OldRequest.html"> Back</a>
              </div>
              
            </div>
            </div>
            <!--WRITE THE ACTION-->
        <?php
        include("config.php");
        $id=$_GET['id'];
        $sql="SELECT * FROM requests where id= '$id'";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
        $i = 1;
        while ($row = $result->fetch_assoc()) {

            if (isset($_POST['add'])) {
                $kidsName = addslashes($_POST['kidsName']);
                $Gender = addslashes($_POST['Gender']);
                $age = addslashes($_POST['age']);
                $startDate = addslashes($_POST['startDate']);
                $Duration = addslashes($_POST['Duration']);
                $TypeOfServese = addslashes($_POST['TypeOfServese']);
                $comments = addslashes($_POST['comments']);


                $sql = "update requests set  " . " kidsName = '$kidsName', Gender='$Gender', age='$age', startDate='$startDate', Duration='$Duration',TypeOfServese='$TypeOfServese',comments ='$comments' where id='$id'";


                  /* if ($mysqli->query($sql) === TRUE) {
                        echo "New record created successfully";
                   } else {
                         echo "Error: " . $sql . "<br>" . $mysqli->error;
                   }*/

                ?>
                <div style="width:500px; text-align:center; color:red"> <?php echo "Entered data successfully\n"; ?> </div>
                <?php

                mysqli_close($mysqli);
            }else {
                ?>

                <form method="post" action="<?php $_PHP_SELF ?>">

                    <fieldset class="main content">

                        <div class="cardFormGhada">

                            <h4> Enter child name </h4>
                            <input type="text" name="kidsName" value="<?php echo $row['kidsName'] ?>"
                                   placeholder="Child name">

                            <h4> Select child gender </h4>
                            <select name="Gender">
                                <option selected>Gender</option>
                                <option <?php if ($row['Gender'] == 'girl') {
                                    echo 'selected="selected"';
                                } ?>>girl
                                </option>
                                <option <?php if ($row['Gender'] == 'boy') {
                                    echo 'selected="selected"';
                                } ?>>boy
                                </option>
                            </select>

                            <h4> Select child age </h4>
                            <select name="age">
                                <option selected>Child age</option>
                                <option <?php if ($row['age'] == 'Months-2 years old') {
                                    echo 'selected="selected"';
                                } ?>>Months-2 years old
                                </option>
                                <option <?php if ($row['age'] == '3-5 years old') {
                                    echo 'selected="selected"';
                                } ?>>3-5 years old
                                </option>
                                <option <?php if ($row['age'] == '6-8 years old') {
                                    echo 'selected="selected"';
                                } ?>>6-8 years old
                                </option>
                                <option <?php if ($row['age'] == '9-11 years old') {
                                    echo 'selected="selected"';
                                } ?>>9-11 years old
                                </option>
                            </select>

                            <h4> Choose date of service &amp; service start time </h4>
                            <input type="date" name="startDate" value="<?php echo $row['startDate'] ?>">

                            <h4> Select the duration of the service</h4>
                            <select name="Duration">
                                <option selected>Duration</option>
                                <option <?php if ($row['Duration'] == '1-2 hours') {
                                    echo 'selected="selected"';
                                } ?>>1-2 hours
                                </option>
                                <option <?php if ($row['Duration'] == '2-3 hours') {
                                    echo 'selected="selected"';
                                } ?>>2-3 hours
                                </option>
                                <option <?php if ($row['Duration'] == '3-4 hours') {
                                    echo 'selected="selected"';
                                } ?>>3-4 hours
                                </option>
                                <option <?php if ($row['Duration'] == '5-6 hours') {
                                    echo 'selected="selected"';
                                } ?>>5-6 hours
                                </option>
                                <option <?php if ($row['Duration'] == '7-8 hours') {
                                    echo 'selected="selected"';
                                } ?>>7-8 hours
                                </option>
                                <option <?php if ($row['Duration'] == '9-10 hours') {
                                    echo 'selected="selected"';
                                } ?>>9-10 hours
                                </option>
                            </select>

                            <h4> Select the type of service that you prefer </h4>
                            <select name="TypeOfServese">
                                <option selected>Select the service</option>
                                <option <?php if ($row['TypeOfServese'] == 'infant babysitting') {
                                    echo 'selected="selected"';
                                } ?>>infant babysitting
                                </option>
                                <option <?php if ($row['TypeOfServese'] == 'help in homework') {
                                    echo 'selected="selected"';
                                } ?>>help in homework
                                </option>
                                <option <?php if ($row['TypeOfServese'] == 'take care of children inside/outside home') {
                                    echo 'selected="selected"';
                                } ?>>take care of children inside/outside home
                                </option>
                                <option <?php if ($row['TypeOfServese'] == 'transports children (ex. school pickup and drop-off)') {
                                    echo 'selected="selected"';
                                } ?>>transports children (ex. school pickup and drop-off)
                                </option>
                                <option <?php if ($row['TypeOfServese'] == 'healthy meals service') {
                                    echo 'selected="selected"';
                                } ?>>healthy meals service
                                </option>
                                <option <?php if ($row['TypeOfServese'] == 'others') {
                                    echo 'selected="selected"';
                                } ?>>others
                                </option>
                            </select>

                            <h4> Do you have any notes? write them down! </h4>
                            <textarea name="comments" rows="5" cols="50"> <?php echo $row['comments'] ?></textarea>
                            <input class="main-btn2" type="submit" name="add" href="" value="Submit">
                        </div>
                        <br>

                    </fieldset>
                </form>
            <?php }
        }
        }?>

          </div>
          <!--from w3doc-->


    </p>
     

   </body>
   <footer class="footer">
    <h5>contact us:</h5>  
    <div >
        <a href="mailto:Twinkle@hotmail.com"> 
            <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
            </a>
    </div>
</html>