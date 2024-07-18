<?php



// start of the contact us

if(isset($_POST['contactform']))
 {
     $name =$_POST['FirstName'];
     $email =$_POST['EmailAddress'];
     $phone =$_POST['PhoneNo'];
     $subject =$_POST['message'];
	 $service = $_POST['service'];

     $html=" <h2> Contact Us Form </h2> <h3> Name: $name <br> Email: $email <br> Phone: $phone <br> Service Required: $service <br> Message: $subject </h3>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="saifsalim28122000786@gmail.com";
	$mail->Password="xkfyiilufuyypyfj";
	$mail->SetFrom("saifsalim28122000786@gmail.com");
	$mail->addAddress("livecristle@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Lead From Website";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	
    if($mail->send()){
        $_SESSION['status'] ="Message sent";
        $_SESSION['status_code'] ="success";
        header("Location: contact.php");


		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}


// end of the contact us




// start of the index

if(isset($_POST['indexform']))
 {
     $name =$_POST['FirstName'];
     $email =$_POST['EmailAddress'];
     $phone =$_POST['PhoneNo'];
     $subject =$_POST['message'];

     $html=" <h2> Contact Us Form </h2> <h3> Name: $name <br> Email: $email <br> Phone: $phone <br> Address: $subject</h3>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="saifsalim28122000786@gmail.com";
	$mail->Password="xkfyiilufuyypyfj";
	$mail->SetFrom("saifsalim28122000786@gmail.com");
	$mail->addAddress("livecristle@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Lead From Website";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	
    if($mail->send()){
        $_SESSION['status'] ="Message sent";
        $_SESSION['status_code'] ="success";
        header("Location: index.php");


		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}

// end of the index










?>