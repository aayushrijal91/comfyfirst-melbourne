<?php       
include __DIR__ . '/functions.php';

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);
	if ($responseData->success && ($responseData->score >= 0.1)) {

		$to = 'chao@aiims.com.au';

		$s =  'Message from Contact Form - '. $site;
		$subject = "=?UTF-8?B?" . base64_encode($s) . "?=";
		@$name=$_POST['name'];
		@$phone=$_POST['phone'];     
		@$email=$_POST['email'];  
		@$service=$_POST['service'];
		@$detail=$_POST['detail']; 
		//@$date=$_POST['date'];
		//@$postcode=$_POST['postcode']; 
		 
		@$message = '<!DOCTYPE html><html><body>'.
		'Name: '.strip_tags($name).'<br />'.
		'Email: '.strip_tags($email).'<br />'.
		'Phone: '.strip_tags($phone).'<br />'.
		//'Date: '.strip_tags($date).'<br />'.
		//'Postcode: '.strip_tags($postcode).'<br />'.
		'Service: '.strip_tags($service).'<br />'.
		'Detail: '.strip_tags($detail).'<br />'.
		'</body></html>'; 

		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From:".$site." <info@pf.com>"."\r\n";  
		//$headers .= "Reply-To:\r\n"; 
		$headers .= "Bcc: chao@aiims.com.au\r\n";
		//$headers .= "Bcc: tracking+madplumbing_landing_request@api.aiims.com.au\r\n";
		//$headers .= "Bcc: kalbassit@aiims.com.au\r\n";
		
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$result = mail($to,$subject,$message,$headers);

		if($result){
			header('Location:thank-you-contact');
		} else {
			echo '<script language="javascript">alert("Failed, please submit form again or call us directly.")</script>';
			echo '<script language="javascript">history.go(-1);</script>';
		}
	}else{
		echo '<script language="javascript">alert("Failed, please check the recpatcha.")</script>';
		echo '<script language="javascript">history.go(-1);</script>';
	}
}else{
	echo '<script language="javascript">alert("Failed, please click the recpatcha.")</script>';
	echo '<script language="javascript">history.go(-1);</script>';
}

?>
