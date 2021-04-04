<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if (preg_match("/\w{2,}/", $_POST["name"])) {
		$nameRes =" ";
	}else {
		$nameRes = "It has to contain at least 2 chars. It should not contain any number";
	}
    if (preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/", $_POST["email"])) {
		$emailRes = " ";
	}else{
		$emailRes = "It should correspond to email format";
	}
	if (preg_match("/\w{5,}/", $_POST["username"])) {
		$usernameRes = " ";
	}else{
		$usernameRes = "It has to contain at least 5 chars";
	}
	if (preg_match("/\w{8,}/", $_POST["password"])) {
		$passwordRes = " ";
	}else{
		$passwordRes = "It has to contain at least 8 chars";
	}
	if (($_POST["password"] == $_POST["confirm_password"] && preg_match("/\w{8,}/", $_POST["confirm_password"]))) {
		$confirmPasswordRes = " ";
	}else{
		$confirmPasswordRes = "It has to be equal to Password field";
	}
	if (preg_match("/\d{1,2}.\d{1,2}.\d{1,4}/", $_POST["dob"])) {
		$dobRes = " ";
	}else{
		$dobRes = "Date should be written in dd.MM.yyyy format. Eg: 07.03.2019";
	}
	if (preg_match("/Male|Female/", $_POST["gender"])) {
		$genderRes = " ";
	}else{
		$genderRes= "Only 2 options accepted: Male, Female";
	}
	if (preg_match("/Single|Married|Divorced|Widowed/", $_POST["merital_status"])) {
		$mStatusRes = " ";
	}else{
		$mStatusRes= "Only 4 options accepted: Single, Married, Divorced, Widowed";
	}
	if (preg_match("/\d{6,6}/", $_POST["postal_code"])) {
		$pcodeRes = " ";
	}else{
		$pcodeRes= "It should follow 6 digit format. Eg: 100011";
	}
	if (preg_match("/\d{2,2} \d{7,7}/", $_POST["home_phone"])) {
		$hPhoneRes = " ";
	}else{
		$hPhoneRes= "It should follow 9 digit format. Eg: 97 1234567";
	}
	if (preg_match("/\d{2,2} \d{7,7}/", $_POST["mobile_phone"])) {
		$mPhoneRes = " ";
	}else{
		$mPhoneRes= "It should follow 9 digit format. Eg: 97 1234567";
	}
	
	if (preg_match("/\d{4,4} \d{4,4} \d{4,4} \d{4,4}/", $_POST["card_number"])) {
		$cardNumeRes = " ";
	}else{
		$cardNumeRes= "It should follow 9 digit format. Eg: 1111 1111 1111 1111";
	}
	if (preg_match("/\d{1,2}.\d{1,2}.\d{4,4}/", $_POST["card_exp_date"])) {
		$cardExpRes = " ";
	}else{
		$cardExpRes= "Date should be written in dd.MM.yyyy format. Eg: 07.03.2019";
	}
	if (preg_match("/UZS (?:[0-9]+,)*[0-9]+(?:\.[0-9]{2,2})?$/", $_POST["salary"])) {
		$salaryRes = " ";
	}else{
		$salaryRes= "It should be written in following format UZS 200,000.00";
	}
	if (preg_match("/(http|https):\/\/(\w|\d)+\.\w+[\/]?/", $_POST["url"])) {
		$urlRes = " ";
	}else{
		$urlRes= "It should match URL format. Eg: http://github.com";
	}
	if (preg_match("/[1-3]\.[0-9]|4\.[0-5]/", $_POST["overall_gpa"])) {
		$gpaRes = " ";
	  } else {
		$gpaRes = "It should be a floating point number less than 4.5";
	  }
  
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
		<form action="index.php" method="post">
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
				<br/>
				<?= $nameRes ?? "" ?>
			</dd>
			<dt>Email</dt>
			<dd>
				<input type="text" name="email">
				<br/>
				<?= $emailRes ?? "" ?>
			</dd>
			<dt>Username</dt>
			<dd>
				<input type="text" name="username">
				<br/>
				<?= $usernameRes ?? "" ?>
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="text" name="password">
				<br/>
				<?= $passwordRes ?? "" ?>
			</dd>
			<dt>Confirm Password</dt>
			<dd>
				<input type="text" name="confirm_password">
				<br/>
				<?= $confirmPasswordRes ?? "" ?>
			</dd>
			<dt>Date of birth</dt>
			<dd>
				<input type="text" name="dob">
				<br/>
				<?= $dobRes ?? "" ?>
			</dd>
			<dt>Gender</dt>
			<dd>
				<input type="text" name="gender">
				<br/>
				<?= $gender ?? "" ?>
			</dd>
			<dt>Marital Status</dt>
			<dd>
				<input type="text" name="merital_status">
				<br/>
				<?= $mStatusRes ?? "" ?>
			</dd>
			<dt>Address</dt>
			<dd>
				<input type="text" name="address" required>
			</dd>
			<dt>City</dt>
			<dd>
				<input type="text" name="city" required>
			</dd>
			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="postal_code">
				<br>
          		<?= $pcodeRes ?? "" ?>

			</dd>
			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="home_phone">
				<br>
          		<?= $hPhoneRes ?? "" ?>
			</dd>
			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="mobile_phone">
				<br>
          		<?= $mPhoneRes ?? "" ?>
			</dd>
			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="card_number">
				<br>
          		<?= $cardNumeRes ?? "" ?>
			</dd>
			<dt>Credit Card Expiry Date</dt>
			<dd>
				<input type="text" name="card_exp_date">
				<br>
          		<?= $cardExpRes ?? "" ?>
			</dd>
			<dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="salary">
				<br>
          		<?= $salaryRes ?? "" ?>
			</dd>
			<dt>Web Site URL</dt>
			<dd>
				<input type="text" name="url">
				<br>
          		<?= $urlRes ?? "" ?>
			</dd>
			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="overall_gpa">
				<br>
          		<?= $gpaRes ?? "" ?>
			</dd>
		</dl>
		
		<button>Register</button>

		</form>

	</body>
</html>