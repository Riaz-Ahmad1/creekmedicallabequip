<?php

include('db.php');

//legal input values
 $name     = legal_input($_POST['name']);
 $email = legal_input($_POST['email']);
 $subject         = legal_input($_POST['subject']);
 $msg      = legal_input($_POST['msg']);
   
if(!empty($name) && !empty($email) && !empty($subject) && !empty($msg)){
    //  Sql Query to insert user data into database table
    Insert_data($name,$email,$subject,$msg);
}else{
 echo "<span class='text-danger '>All fields are required</span>";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

// // function to insert user data into database table
 function insert_data($name,$email, $subject, $msg){
 
     global $db;

      $query="INSERT INTO messages(name,email,subject,msg) VALUES('$name','$email','$subject','$msg')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "<span class='text-success '> Your Message Sent Successfully! Thank You </span>";
     }
     else{
      echo  "Error: " .''. "<br>" . mysqli_error($db);
     }
 }

?>