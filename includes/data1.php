<?php
    include "database.php";
   
       
       $s="INSERT INTO `enquiry`(`name`, `email`, `message`) VALUES 
		('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
        
        if(mysqli_query($connect,$s)){
        echo "Thank you for contacting me";
    }
    else {
        echo "Something went wrong!";
    }


?>