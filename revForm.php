<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>

    <h1 class="center">Rate Baby sitter </h1> <!-- babysitter name goes here-->


    <section class="main center">
    <form method = "post"  action = "<?php $_PHP_SELF ?>" class="container">

        <?php
        include("config.php");
        if(isset($_POST['add'])) {

            $feedBack = addslashes($_POST['feedBack']);
            $Rate = addslashes($_POST['rating']);
            // $Date_ = date('Y-m-d');
            // $time_ = date('H:i:s');
            $id=$_GET['id'];

            $sql = "INSERT INTO review " . "(feedBack, Rate,offer_id ) " . "VALUES('$feedBack','$Rate','$id')";


            ?>
            <div style="text-align: center;color: red;font-size: 20px !important;"> <?php echo "Entered data successfully\n"; ?> </div>
            <?php

        } ?>

        <div class="">
            <br> <br>
<select name="rating">
    <option selected disabled>rate</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option> </select>
</div>
<br> <br>
<div class="">
   <textarea type="text" name="feedBack" value="write your review "style="height: 11em;width: 57em;"></textarea>
   <br> <br>
        <input type="submit" name="add" class="btn-1">
    </form>

</section>
</body>
</html>