

<?php
$field_name = $_POST['cf_name'];
$field_phone = $_POST['cf_phone'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'admin@restart-recovery.org';
$subject = 'Mentor Request';

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to crisis@restart-recovery.org');
		window.location = 'index.html';
	</script>
<?php
}
?>