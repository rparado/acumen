<?php
if (isset($_POST)){
    function simple_validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function findexts ($filename){
        $filename = strtolower($filename);  
        $exts = split("[/\\.]", $filename);  
        $n = count($exts)-1; 
        $exts = $exts[$n];  
        return $exts;  
    } 
    $vfullname = simple_validate($_POST['fullname']);
    $vemail = simple_validate($_POST['email']);
    $vmessage = simple_validate($_POST['message']);
    $target_dir = "upload/";
    if (isset($_FILES["picfile"])){
    $target_file = $target_dir . basename($_FILES["picfile"]["name"]);
    $newname = basename($_FILES["picfile"]["name"]);
    $uploadOk = 1;
    if ($newname > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    $ext = findexts($newname);
    $ran = time();
    $ran2 = $ran.".";
    $xxx_file = $target_dir.$ran2.$ext;
    if ($uploadOk != 0) {
        if (move_uploaded_file($_FILES["picfile"]["tmp_name"], $xxx_file)) {
            $pfilename = $xxx_file;
        }
    }
    }
    if (isset($_FILES["sfile"])){
    $xtarget_file = $target_dir . basename($_FILES["sfile"]["name"]);
    $xnewname = basename($_FILES["sfile"]["name"]);
    $uploadOk = 1;
    if ($xnewname > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    $xext = findexts($xnewname);
    $xran = time();
    $xran2 = $xran.".";
    $xxxx_file = $target_dir.$xran2.$xext;
    if ($uploadOk != 0) {
        if (move_uploaded_file($_FILES["sfile"]["tmp_name"], $xxxx_file)) {
            $dfilename = $xxxx_file;
        }
    }
    }
    $xemail = "alex@agss.co.uk,keno@spiralwebsolutions.com";
    
    $xfullname = "Admin";
    require_once 'includes/class.phpmailer.php';
    require_once 'includes/class.smtp.php';
    $message = file_get_contents('includes/mail.html');
    $message = str_replace('%vfullname%', $vfullname, $message);
    $message = str_replace('%vemail%', $vemail, $message);
    $message = str_replace('%vmessage%', $vmessage, $message);
    $mail = new PHPMailer;
    $mail->isSendmail();
    $mail->setFrom($vemail, $vfullname);
    $mail->addReplyTo($vemail, $vfullname);
    $mail->addAddress($xemail, $xfullname);

    $mail->addAttachment($pfilename);
    $mail->addAttachment($dfilename);
    $mail->Subject = 'Enquiry from the AGSS Website';
    $mail->msgHTML($message);
    $mail->AltBody = 'Enquiry from the AGSS Website';
    if (!$mail->send()) {
        echo "An error has occured.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="AGSS">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Acumen Global Sourcing Solution</title>
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
</head>
<body class="inner-page">
	<div class="outer-wrapper">
		<div class="outer-pad">
			<?php include('includes/header.html'); ?>
			<div class="inner-wrapper">
				<div class="overlay">
					<div class="container">
						<div class="item-header">
							<span class="text-white">Thank you</span>
						</div>
					</div>
				</div>
			</div>
			<div class="inner-content-wrapper content-main">
				<div class="container">
					<div class="col-sm-8">
						

						<h2>Thank you for your enquiry. We will get back to you shortly.</h2>
					</div>
					<?php include('includes/sidebar.html'); ?>
							</div>
			
					</div></div></div>
			
			<div class="process">
				<div class="container">
					<p>At AGSS, we bring your<span> product ideas</span> to <span>life</span>. </p>
					<p>Our goal is your</p>
					<p class="p-last"><span>Business Success</span><span></span></p>
				</div>
			</div><!-- end process -->
			
			<?php include('includes/footer.html'); ?>
		</div>
	</div>

<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="js/modernizer.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/tab-collapse.js"></script> 
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>

<?php
}else{
    echo "You cannot access this page directly!";
}
$fh = fopen($pfilename, 'w') or die();    
fclose($fh);
unlink($pfilename);
$fh = fopen($dfilename, 'w') or die();    
fclose($fh);
unlink($dfilename);
?>