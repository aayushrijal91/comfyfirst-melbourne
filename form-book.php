<?php
include __DIR__ . '/functions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/phpmailer/src/Exception.php';
require 'assets/phpmailer/src/PHPMailer.php';
//require 'assets/phpmailer/src/SMTP.php';

//Load Composer's autoloader
//require 'assets/phpmailer/src/autoload.php';

if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
	$secret = '6LfKepUUAAAAAPhqp_QISjkeMBcg75dZtXfHI4n9';
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);
	if ($responseData->success && ($responseData->score >= 0.1)) {

//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		@$firstname=$_POST['firstname'];  
		@$surname=$_POST['surname'];   
		@$email=$_POST['email']; 
		@$phone=$_POST['phone'];  
		@$address=$_POST['address'];
		@$date=$_POST['date'];
		@$time=$_POST['time'];
		@$service=$_POST['service'];
		@$detail=$_POST['detail'];

		@$message = '<!DOCTYPE html><html><body>'.
		'First Name: '.strip_tags($firstname).'<br />'.
		'Last Name: '.strip_tags($surname).'<br />'.
		'Phone: '.strip_tags($phone).'<br />'.
		'Email: '.strip_tags($email).'<br />'.
		'Address: '.strip_tags($address).'<br />'.
		'Date: '.strip_tags($date).'<br />'.
		'Time: '.strip_tags($time).'<br />'.
		'Service: '.strip_tags($service).'<br />'.
		'Detail: '.strip_tags($detail).'<br />'.
		'</body></html>';

		//try {
    //Recipients
		$mail->setFrom('info@pf.com', $site);
		$mail->addAddress('chao@aiims.com.au', 'Chao Ge');     
    //$mail->addAddress('ellen@example.com');               
		$mail->addReplyTo('info@pf.com', $site);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Content
		$mail->isHTML(true);                                  
		$mail->Subject = 'Message from Book Form - '. $site;
		$mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //var_dump($_FILES['file']['name'][0]);
		if (!empty($_FILES['file']['name'][0])) {
			foreach ($_FILES["file"]["name"] as $k => $v) {
				$mail->AddAttachment( $_FILES["file"]["tmp_name"][$k], $_FILES["file"]["name"][$k] );
			}
		}

		if (!$mail->send()) {
			echo '<script language="javascript">alert("Mailer Error: ' . $mail->ErrorInfo.'")</script>';
		} else {
    	//echo 'Message has been sent';
			header('Location:thank-you-book.php');
		}

//} 

	}else{
		echo '<script language="javascript">alert("Failed, recpatcha is not valid!")</script>';
		echo '<script language="javascript">history.go(-1);</script>';
	}
}else{
	echo '<script language="javascript">alert("Failed, recpatcha is missing.")</script>';
	echo '<script language="javascript">history.go(-1);</script>';
}











/*if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
	$secret = '6LfKepUUAAAAAPhqp_QISjkeMBcg75dZtXfHI4n9';
	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	$responseData = json_decode($verifyResponse);
	if ($responseData->success && ($responseData->score >= 0.1)) {

		$to = 'chao@aiims.com.au';
		$s =  'Message from Book Form - '. $site;

		$subject = "=?UTF-8?B?" . base64_encode($s) . "?=";
		@$firstname=$_POST['firstname'];  
		@$surname=$_POST['surname'];   
		@$email=$_POST['email']; 
		@$phone=$_POST['phone'];  
		@$address=$_POST['address'];
		@$date=$_POST['date'];
		@$time=$_POST['time'];
		@$service=$_POST['service'];
		@$detail=$_POST['detail'];

		@$message = '<!DOCTYPE html><html><body>'.
		'First Name: '.strip_tags($firstname).'<br />'.
		'Last Name: '.strip_tags($surname).'<br />'.
		'Phone: '.strip_tags($phone).'<br />'.
		'Email: '.strip_tags($email).'<br />'.
		'Address: '.strip_tags($address).'<br />'.
		'Date: '.strip_tags($date).'<br />'.
		'Time: '.strip_tags($time).'<br />'.
		'Service: '.strip_tags($service).'<br />'.
		'Detail: '.strip_tags($detail).'<br />'.
		'</body></html>'; 


		if(!empty($_FILES["file"]["name"])){
			$uploadStatus = 1;

			$targetDir = "uploads/";
			$fileName = basename($_FILES["file"]["name"]);
			$targetFilePath = $targetDir . $fileName;
			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

			$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
			if(in_array($fileType, $allowTypes)){
				$uploadStatus = 1;

				if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
					$uploadedFile = $targetFilePath;
				}else{
					$uploadStatus = 0;
					$statusMsg = "Sorry, there was an error uploading your file.";
				}
			}else{
				$uploadStatus = 0;
				$statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
			}

			if($uploadStatus == 1){
				$semi_rand = md5(time()); 
				$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
				$headers = "From:".$site." <info@pf.com>"."\r\n";  
				
				//$headers .= "Cc:aa@answering-adelaide.com.au\r\n";

				//$headers .= "Bcc: tracking+sps_main_request@api.aiims.com.au\r\n";
				$headers .= "MIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

				$messagea = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
				"Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
				if(is_file($uploadedFile)){
					$messagea .= "--{$mime_boundary}\n";
					$fp =    @fopen($uploadedFile,"rb");
					$data =  @fread($fp,filesize($uploadedFile));
					@fclose($fp);
					$data = chunk_split(base64_encode($data));
					$messagea .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
					"Content-Description: ".basename($uploadedFile)."\n" .
					"Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
					"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";  
				}
				$messagea .= "--{$mime_boundary}--";
				$returnpath = "-f" . $email;
				$result =  mail($to, $subject, $messagea, $headers, $returnpath);
				@unlink($uploadedFile);
			}
		}else{

			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "From:".$site." <info@pf.com>"."\r\n";  
			$headers .= "Reply-To:".$email."\r\n"; 
			//$headers .= "Cc:aa@answering-adelaide.com.au\r\n";
			//$headers .= "Bcc: tracking+sps_main_request@api.aiims.com.au\r\n";
			//$headers .= "Bcc: tpomente@aiims.com.au\r\n";
			//$headers .= "Bcc: chao@aiims.com.au\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$result = mail($to,$subject,$message,$headers);
		}


		if($result){
			header('Location:thank-you-book.php');
		} else {
			echo '<script language="javascript">alert("Failed, please submit form again or call us directly.")</script>';
			echo '<script language="javascript">history.go(-1);</script>';
		}
	}else{
		echo '<script language="javascript">alert("Failed, recpatcha is not valid!")</script>';
		echo '<script language="javascript">history.go(-1);</script>';
	}
}else{
	echo '<script language="javascript">alert("Failed, recpatcha is missing.")</script>';
	echo '<script language="javascript">history.go(-1);</script>';
}*/

?>
