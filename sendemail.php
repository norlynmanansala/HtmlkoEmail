<!--  Email HTML File -->
 <?php
// multiple recipients
$to  = 'johnmichaelyabut@gmail.com';

// subject
$subject = 'John Michael Yabut';

// message
$message = "
<html>
<head>
  <title>Message</title>
</head>
<body>
	<div>
		<center>
			<table border = '1'>
				<tr>
					<td>
						<h2>Sending Email...</h2>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							Message: <textarea name ='message'></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div>
							To: <input type = 'email' name = 'email'>
						</div>
					</td>	
				</tr>
				<tr>
					<td>
						<div>
							From: <input type = 'password' name = 'pass'>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<button>save</button>
					</td>
				</tr>
			</table>
		</center>
	</div>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "To: Sir Romack <norlynmanansala22@gmail.com>\r\n";
$headers .= 'From: John Michael <norlynmanansala22@gmail.com>' . "\r\n";

// Mail it
$retval = mail($to, $subject, $message, $headers);
if($retval === true){
  echo "Message sent.";
}else{
  echo "Failed.";
}
?>