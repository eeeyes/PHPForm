<html>
	<body>
		<?php
			$name = $_REQUEST["name"];
			$email = $_REQUEST["email"];
			$comments = $_REQUEST["comments"];
			$gender = null;
			echo "<p>Thank you,<b>$name</b>,for the following comments:<br/>
				<tt>$comments</tt></p>
				<p>we will reply to you at <i>$email</i>.</p>";

			if(isset($_REQUEST["gender"])){
				$gender = $_REQUEST["gender"];
			}
				
			if($gender=="M"){
				echo "<p><b>Good bye,sir</b></p>";
			}else if($gender="F"){
				echo "<p><b>Good bye,madam</b></p>";
			}else{
				echo "<p><b>You forget to enter your gender!</b></p>";
			}
		?>
	</body>
</html>
