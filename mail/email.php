<?php 
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $sub = $_POST['sub'];
 $msg =$_POST['msg'];


 $to = "dubeyrahul890@gmail.com";
 $txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $msg ;

 $header =  "From: dubeyrahul890@gmail.com" . "\r\n" . "CC: dubeyrahul890@gmail.com";

 		

 $data = mail($to,$sub,$txt,$header);
 if($data==true){
 	 
 	alert("Message sent successfully..!");
 }

 header("Location:thank.html");













 ?>