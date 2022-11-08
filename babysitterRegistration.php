<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <link rel="stylesheet" type="text/css" href="myStyle.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" > -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/noBG2.png" />
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
      <body>
    <header>
        <a href="#" class="logo"><img src="img/noBG2.png" width="200"></a>
       <nav class="navagation">
   
          <a  href="index.php#AboutTwinkl" > about Twinkle </a>
           <a  href="index.php#commenQs" > FAQ </a>
            <a href="index.php">Home</a>
           
       </nav>
   </header>

    <section class="registerCards">
        <div class="contentManal">
            <div class="cardRManal"  id="cardP">
                <div class="iconManal">
                    <img src="img/babysittericon.png" alt="machine icon">
                </div>
                <?php
                include_once 'config.php';
                if(isset($_POST['add'])) {

                    $first_name = addslashes ($_POST['first_name']);
                    $last_name = addslashes ($_POST['last_name']);
                    $email = addslashes ($_POST['email']);
                    $city = addslashes ($_POST['city']);
                    //$nID = addslashes ($_POST['nID']);
                    $password = addslashes ($_POST['password']);
                    $phone = addslashes ($_POST['phone']);
                    $gender = addslashes ($_POST['gender']);
                    $bio = addslashes ($_POST['bio']);
                    $age = addslashes ($_POST['age']);







                $sql_email = "select count(*) as cunt from users where email ='$email'";

                $result = $mysqli->query($sql_email);
                while ($row = $result->fetch_assoc()) {
                    if ($row['cunt'] > 0) {?>
                    <div style=" text-align:center; color:red; font-size: 17px"> <?php echo "Email already exists\n"; ?> </div>
                <?php } else {


                        $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
                        $file_loc = $_FILES['file']['tmp_name'];
                        $file_size = $_FILES['file']['size'];
                        $file_type = $_FILES['file']['type'];
                        $folder = "uploads/";

                        $new_size = $file_size / 1024;

                        $new_file_name = strtolower($file);
                        //$complaint_text = addslashes ($_POST['complaint_text']);
                        $final_file = str_replace(' ', '-', $new_file_name);

                        move_uploaded_file($file_loc, $folder . $final_file);


                        $sql = "INSERT INTO users " . "(password, first_name,last_name,email,city,photo,role,phone,gender,bio,age
               ) " . "VALUES('$password','$first_name','$last_name','$email','$city','$final_file','2','$phone','$gender','$bio','$age' )";


                        if ($mysqli->query($sql) === TRUE) { ?>
                            <div style="text-align:center; color:green;font-size: 17px"> <?php echo "Entered data successfully\n"; ?> </div>
                        <?php } else {
                            echo "error : " . $sql . "<br>" . $mysqli->error;
                        }

                    }
                }

                    mysqli_close($mysqli);
                }else {
                    ?>
                        <form class="registrationForm2" method = "post"  action = "<?php $_PHP_SELF ?>" name="myform" id="myform" onsubmit="return validateform()" enctype="multipart/form-data">

                        <label> First name:</label><span>*</span>
                        <input type="text" name="first_name" id="first_name">
                        
                        <label> Last name:</label><span>*</span>
                        <input type="text"  name="last_name" id="last_name">

                        <label>National ID :</label><span>*</span>
                        <input type="text" name="nId" id="nID"pattern="^[0-9]{10}" autofocus required title="ENTER 10 DIGITS">
                        
                        <label> Age:</label><span>*</span>
                        <input type="number" name="age"  id="age">
                        <table>
                        <tr><td colspan="1">
                        <label>  Gender:</label> <span>*</span></td>
                       <td colspan="1">   female 
                       <input type="radio" name="gender" value="F">
                        male 
                        <input type="radio" name="gender" value="M"/></td></table>
                        
                        <label> City:</label><span>*</span>
                        <input type="text" name="city" id="city">
                        
                        <label>  Email:</label><span>*</span>
                        <input type="Email" name="email" id="email">
                        
                        <label> Password:</label><span>*</span>
                        <input type="password" name="password" id="password">
                        
                        <label> Phone number:</label><span>*</span>
                        <input type="tel" name="phone" id="phone">
                        
                        <label> Bio:</label><span>*</span>
                       <textarea placeholder="your experience, educayion, languages spoken, skilles, etc... " name="bio" id="bio" > </textarea>
                        
                        <label> Photo:</label>
                        <button type="button"  class="form-btnManal" onclick="document.getElementById('Pphoto').click()"> ubloud a photo </button>
                        <input id="Pphoto" type="file" accept="image/*" name="file" />

                        <button type="submit" value="submit" class="form-btnManal" name = "add"> submit</button>
                        <button type="reset" value="reset" class="form-btnManal" id="form-btn2"> reset</button>


                    </form>

                <?php
                }
                ?>
                
            </div>
        </div>
    </section>

    


    <footer class="footer">
        <h5>contact us:</h5>  
        <div >
            <a href="mailto:Twinkle@hotmail.com"> 
                <img  id="mailIcon" src="mail.png"  alt="mail icon"  class="contactIcons">
                </a>
        </div>
        

    </footer>

    <script>
        function validateform(){
            var first_name=document.myform.first_name.value;
            var last_name=document.myform.last_name.value;
            var phone=document.myform.phone.value;
            var bio=document.myform.bio.value;
            var city=document.myform.city.value;
            var password=document.myform.password.value;
            var x=document.myform.email.value;
            var nId = document.getElementById("nID").value;



            if (first_name==null || first_name==""){
                alert("First Name can't be blank");
                return false;
            }
            else if (last_name==null || last_name==""){
                alert("Last name can't be blank");
                return false;
            }






            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }


            else if(password.length<6){
                alert("Password must be at least 6 characters long.");
                return false;
            }
            else if (city==null || city==""){
                alert("city can't be blank");
                return false;
            }

            if (phone==null || phone==""){
                alert("Phone can't be blank");
                return false;
            }

            if (bio==null || bio==""){
                alert("Bio can't be blank");
                return false;
            }
            // var user = document.getElementById("nId").value;
            // var user2 = document.getElementById("nId");
            // var re = /^[7-9][0-9]{9}$/;
            // if (re.test(user)) {
            //     alert("done");
            //     return true;
            // }
            // else {
            //     alert("not ");
            //     user2.style.border = "red solid 3px";
            //     return false;
             }


    </script>

  </body>
</html>

