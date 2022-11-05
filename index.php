<?php session_start();?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" type="text/css" href="myStyle.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" > -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="babysitter, kids, work, care, baby daycare" >
    <meta name="discription" content="We help you get a qualified and reliable babysitter,
              anytime and anywhere, you don't have to worry about your children in your absence">
    <link rel="icon" href="img/n0oBG2.png" />

    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        header{
            background-color:rgb(162 119 155/ 79%);
            width: 100%;
            position: fixed;
            z-index: 1000 ;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 3px 200px;
        }

        .logo{
            text-decoration: none;
            color: rgb(255, 255, 5);
            text-transform: uppercase;
            font-weight: 700;
            font-size: 1.8em;
        }

        .navagation a{
            color:  rgb(255, 255, 5);
            text-decoration: none;
            font-size: 1.1em;
            font-weight: 400;
            padding-left: 30px;
        }

        .navagation a:hover{
            color: blueviolet;
        }

        .singInManal{
            display: flex;
            justify-content: center;
            background-color:rgba(165, 146, 183, 0.785);
            width: 15em;
            box-shadow: 0 5px 25px rgba(1 1 1 /50%);
            border-radius: 10px;
            padding: 25px;
            margin: 15px ;
            font-size: 1.3em;
            margin-top: 4em;
        }

        .singInManal label, input{
            display: block;
            margin: 2px;
            padding: 2px;
        }


        .divv .form-btn1{
            color: white;
            background-color: rgb(162 119 155/ 79%);
            border: none;
            font-size: 1em;
            font-weight: 300;
            display: inline-block;
            padding: .3em;
            letter-spacing: 1px;
            border-radius: 15px;
            margin-top: 5px;
            margin-left: 5px;
            transition: 0.7s ease;
            display: flex;
            justify-content: center;
            text-decoration: none;
        }

        .divv .form-btn1:hover {
            background-color: rgb(248, 226, 99);
            transform: scale(1.2);
            text-decoration: none;
        }

        .divv a{
            text-decoration: none;
            color: white;
        }

        .divv .form-btn11{
            color: white;
            background-color: blueviolet;
            border: none;
            font-size: 1em;
            font-weight: 300;
            display: inline-block;
            padding: .3em;
            letter-spacing: 0px;
            border-radius: 15px;
            margin-top: 2px;
            margin-left: 2px;
            transition: 0.7s ease;
            display: flex;
            justify-content: center;
            text-decoration: none;
            display: inline;
        }
        .divv .form-btn11:hover {
            background-color: rgb(248, 226, 99);
            transform: scale(1.2);
            text-decoration: none;
        }


        .mainManal{
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url(background.jpg);
            background-size: cover;
            background-position: right;
            background-attachment: fixed;
        }

        .mainManal .singInManal{
            display: flex;
            justify-content: center;
        }


        .mainManal .singInFormManal h2{
            color: yellow;
            font-size: 1em;
            margin-bottom: 1em;
            text-align: center;
        }

        .mainManal .singInFormManal h2 span{
            color: #6d3763;
            font-size: 1.5em;
        }


        section{
            padding: 100px 200px;
        }

        .mainManal .lable1{
            display: flex;
            justify-content: center;
            align-items: center;
            color:#6d3763;
            font-size: 2.2em;
            font-weight: 800;
            margin-bottom: 30px;
        }

        .mainManal h2{
            color:rgb(162 119 155/ 79%);
            font-size: 4em;
            font-weight: 900;
        }

        .mainManal h2 span{
            display: inline-block;
            margin-top: 10px;
            color: rgb(162 119 155/ 79%);
            font-size: 1.4em;
            font-weight: 700;
        }

        .mainManal h3{
            color: rgb(162 119 155/ 79%) ;
            font-size: 2em;
            font-weight: 400;
            letter-spacing: 1px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .main-btnManal{
            color: white;
            background-color: rgb(162 119 155/ 79%);
            text-decoration: none;
            border: none;
            font-size: 1.1em;
            font-weight: 600;
            display: inline-block;
            padding: 0.9375em 2.1875em;
            letter-spacing: 1px;
            border-radius: 15px;
            margin-top: 10px;
            margin-left: 22px;
            transition: 0.7s ease;
            display: flex;
            justify-content: center;
            text-decoration: none;
        }

        .main-btnManal:hover{
            background-color: rgb(248, 226, 99);
            transform: scale(1.2);
            text-decoration: none;
        }

        .title{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #6d3763;
            font-size: 2.2em;
            font-weight: 800;
            margin-bottom: 30px;
        }

        .contentManal{
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .cardManal{
            background-color:rgba(165, 146, 183, 0.785);
            width: 20em;
            box-shadow: 0 5px 25px rgba(1 1 1 /50%);
            border-radius: 10px;
            padding: 25px;
            margin: 15px ;
        }

        .AboutusManal .contentManal .cardManal{
            background-color: white;
        }

        .AboutusManal .contentManal .cardManal h3{
            color: rgb(162 119 155/ 79%);
        }

        .iconManal img{
            width: 100%;
            height: 40%;
            text-align: center;
            margin-bottom: 10px;
        }

        .infoManal{
            text-align: center;
            margin-bottom: 5px;
        }

        .infoManal h3{
            color: rgb(255, 255, 5);
            font-size: 1.2em;
            font-weight: 600;
            margin: 10px;
        }

        .infoManal strong{
            display: inline-block;
        }

        footer{
            width: 100%;
            height: 50px;
            background-color: rgb(162 119 155/ 79%);
            display: flex;
            justify-content: center;
        }

        footer h5{
            margin-top: 1.5em;
            padding-right: .5em;
        }

        footer .contactIcons{
            width: 30px;
            height: 50%;
            margin-top: 1em ;
        }
        /**************************************************/

        .registrationForm2 span{
            font-size: smaller;
            color: red;
        }

        #Pphoto{
            visibility: hidden;
        }
        /************************************************************/
        .form-btnManal{
            color: white;
            background-color: rgb(162 119 155/ 79%);
            text-decoration: none;
            border: none;
            font-size: 1em;
            font-weight: 400;
            display: inline-block;
            padding: .7em;
            letter-spacing: 1px;
            border-radius: 15px;
            margin-top: 8px;
            margin-left: 8px;
            transition: 0.7s ease;
            display: flex;
            justify-content: center;
            text-decoration: none;
        }

        .form-btnManal:hover{
            background-color: rgb(248, 226, 99);
            transform: scale(1.2);
            text-decoration: none;
        }

        .cardRManal{
            background-color:rgba(165, 146, 183, 0.785);
            width: 25em;
            box-shadow: 0 5px 25px rgba(1 1 1 /50%);
            border-radius: 10px;
            padding: 25px;
            margin: 15px ;
        }
        /************************************************************/
        .registrationForm2{
            margin: 3em;
            padding: 3em;
            text-align: center;
        }

        .registrationForm2 label{
            padding: .5em;
        }

        textarea {
            display: flex;
            justify-content: center;
            width: 170px;
            height: 100px;
        }

        .mapManal , .form-btnManal{
            display: flex;
            justify-content: center;
        }
        /*******************************************************/
        #form-btn1 , #form-btn2{
            display: inline;
        }

        #form-btnSub ,#form-btnRes{
            display: inline;
        }
        /*****************************************************/
        /*-------------------------------------------------*/

        @media (max-width:1023) {
            header{
                padding: 5px 10px;
            }

            .navagation{
                padding-left: 2px;
                padding: 2px;
                font-size: .7em;
            }

            .title{
                font-size: 1.8em;
            }

            section{
                padding: 80px 20px;
            }

            .main h2{
                font-size: 1em;
            }

            .main h3{
                font-size: 1.6em;
            }

            .content{
                flex-direction: column;
                align-items: center;
            }

        }

    </style>


</head>



<body>


<header>
    <a href="#" class="logo"><img src="img/noBG2.png" width="200"></a>
    <nav class="navagation">

        <?php
            if(isset($_SESSION['first_name']) != null || isset($_SESSION['first_name']) != '' ){ ?>
                <a href="logout.php" > Logout </a>
        <?php } ?>
        <a  href="index.html#AboutTwinkl" > about Twinkle </a>
        <a  href="index.html#commenQs" > FAQ </a>
        <a href="index.html">Home</a>

    </nav>
</header>
<?php if(isset($_SESSION['first_name']) == null || isset($_SESSION['first_name']) == '' ){ ?>
<section class="mainManal">

    <div class="singInManal">

        <form class="singInFormManal" action="#" method="post">

            <h2> the best place to find a babysitter <br/><span>sing in now:</span> </h2>

            <label>  Email:</label>
            <input type="Email" name="username" required>
            <label> Password:</label>
            <input type="password" name="password" required>
            <div class="divv">
                <button type="submit" value="submit" name="submit" class="form-btn1" > sing in</button> <!--dunamic-->
            </div>
        </form>

    </div>
</section>
<?php } ?>

<section class="cardsManal" id="singInCards">

    <h2 class="title"> join us now</h2>

    <div class="contentManal">
        <div class="cardManal">
            <div class="iconManal">
                <img src="img/omthericon.png" alt="join as a parent">
            </div>
            <div class="infoManal">
                <h3> join as parents</h3>
                <p>
                    No need to worry when you have to leave your kids at home,
                    join now and book the right sitter.
                </p>
            </div>
            <div>
                <a href="parentRegistraion.php"  class="main-btnManal" > Register now  </a>
            </div>
        </div>
        <!---------------------------------------------->
        <div class="cardManal">
            <div class="iconManal">
                <img src="img/babysittericon.png" alt="join as a parent">
            </div>
            <div class="infoManal">
                <h3> join as babysitter</h3>
                <p>
                    If you love taking care of young children,
                    we are here to provide training and the right environment for you.
                </p>
            </div>
            <div>
                <a href="BabysitterRegistration.php"  class="main-btnManal" > Register now  </a>
            </div>
        </div>
    </div>
</section>

<section class="cardFAQ" id="faq">
    <h2 class="title" id="commenQs"> commen qustions </h2>
    <div class="contentManal">
        <div class="cardManal">
            <div class="iconManal">
                <img src="img/q.png" alt="machine icon">
            </div>
            <div class="infoManal">
                <h3> Why Twinkle?</h3>
                <p>
                    Between running after our professional and family dreams we may need some help,
                    taking care of young children is difficult and we cannot always do it, we may feel pressure and tired and sometimes collapse, Twinkle is there to solve this problem,
                    when you want to go a little and leave the kids no problem you can be very confident Your children are perfectly fine.
                </p>
            </div>

        </div>
        <!---------------------------------------------->
        <div class="cardManal">
            <div class="iconManal">
                <img src="img/workIcon.jpg" alt="machine icon">
            </div>
            <div class="infoManal">
                <h3>Hwo Do We Wrok?</h3>
                <p>
                    <strong>Parents:</strong>
                    Parents can log in and view offers from babysitters,
                    read their profile and ratings,
                    choose the right babysitter and contact them for coordination.
                    <br>
                    <br>
                    <strong>Babysitters:</strong>

                    The babysitter can look at the request submitted by the parents,
                    choose the application that matches her skills,
                    and then present the offer to the family, and upon their approval,
                    communication will be made for coordination
                </p>
            </div>

        </div>

</section>

<section class="Aboutus">
    <h2 class="title" id="AboutTwinkl"> About Twinkle </h2>
    <div class="contentManal">
        <div class="cardManal">
            <div class="iconManal">
                <img src="img/noBG2.png" alt="the logo">
            </div>
            <div class="infoManal">
                <h3> About Twinkl </h3>
                <p>
                    Twinkle aims to help busy parents as well as job seekers,
                    by facilitating the process of communication between babysitters and parents and facilitating the coordination
                    and reservation process.
                    It also aims to provide a new experience for Saudi parents and help them, bridging the gap between the previous and current lifestyle.
                </p>
            </div>

        </div>
    </div>
</section>

<footer class="footer">
    <h5>contact us:</h5>
    <div >
        <a href="mailto:Twinkle@hotmail.com">
            <img  id="mailIcon" src="img/mail.png"  alt="mail icon"  class="contactIcons">
        </a>
    </div>



    <?php
    if (isset($_POST['submit']))
    {
        include("config.php");

        $uname = mysqli_real_escape_string($mysqli,$_POST['username']);
        $password = mysqli_real_escape_string($mysqli,$_POST['password']);

        if ($uname != "" && $password != "") {

            $sql_query = "select count(*) as cntUser,role,first_name,user_id from users where email='" . $uname . "' and password='" . $password . "'";
            $result = mysqli_query($mysqli, $sql_query);
            $row = mysqli_fetch_array($result);

            $count = $row['cntUser'];
            $role = $row['role'];
            $user_id = $row['user_id'];
            $first_name = $row['first_name'];

            if ($count > 0) {
               // echo $_SESSION['first_name'].'fg'; exit;
                $_SESSION['full_name'] = $first_name;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['first_name'] = $uname;
                if($role ==1){
                    echo "<script language='javascript' type='text/javascript'> location.href='ParentHomePage.php' </script>";
                } else {
                    echo "<script language='javascript' type='text/javascript'> location.href='BabySitterHome.php' </script>";
                }
            } else {
                echo "<script type='text/javascript'>alert('Username Or Password Invalid!')</script>";
            }
        }

    }

    ?>
</body>
</html>
