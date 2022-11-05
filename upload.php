<?php
include_once 'config.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	$new_size = $file_size/1024;  
	
	$new_file_name = strtolower($file);
	$complaint_text = addslashes ($_POST['complaint_text']);
	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
      //  echo $final_file; exit;
	//	$sql="INSERT INTO complaint(complaint_file,complaint_text) VALUES('$final_file','$complaint_text')";
		//mysql_query($sql);

       // $mysqli = new mysqli("example.com", "username", "password", "database");

        $sql = "INSERT INTO complaint(complaint_file,complaint_text) VALUES('$final_file','$complaint_text')";

        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


       // $result = $mysqli->query("INSERT INTO complaint(complaint_file,complaint_text) VALUES('$final_file','$complaint_text')");
       // $row1 = $result->fetch_assoc();


// calling fetch_assoc() on $result which is (boolean) false results in fatal error




        ?>
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>