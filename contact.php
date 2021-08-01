<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$message=$_POST['message'];
        $from='noreply@sscables.in';
		$to='desidaru176@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contact Submission from SSCables Website';
		$message="Name : ".$name."\n"."State : ".$state."\n"."City/Area : ".$city."\n"."Phone : ".$phone."\n"."Email : ".$email."\n"."Wrote the following : "."\n\n".$message;
		$headers="From: ".$from;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
		header("Location:contact.html");
	}
?>