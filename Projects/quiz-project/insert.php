<?php 
include 'db.php';

if(isset($_POST['submit'])){
	//Get the post varibale
	$question_number = $_POST['question_number']; //$_POST['question_number'] is coming from the name attribute 
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];


	$choices = array();
	$choices[1] =  $_POST['choice1'];
	$choices[2] =  $_POST['choice2'];
	$choices[3] =  $_POST['choice3'];
	$choices[4] =  $_POST['choice4'];



	$query  = "INSERT INTO `questions` (question_number, text) VALUES ('$question_number','$question_text') ";



	$new_row =  $mysqli->query($query) or die($mysqli->error._LINE_);



	if($new_row){
		foreach ($choices as $choice => $value) {
			if($value != ''){
				if($correct_choice ==  $choice){
					$is_correct = 1;

				}else{
					$is_correct = 0;
				}

		
				$query = "INSERT INTO `choices` (question_number, is_correct, text) VALUES ('$question_number','$is_correct','$value')";



				$new_row = $mysqli->query($query) or die ($mysqli->error._LINE_);

			

				if($new_row){
					continue;
				} else{
					die("Error :('.$mysqli->errno . ') ' . $mysqli->error");
				}
			}
		}
		$message = "Your question has been added";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="containerinsert">

		
			<h3 class="add_question">Add a question.</h3>
			<form method="post" action="insert.php">

			<?php
				if(isset($message)){
					echo "<h2>".$message."</h2>";
				}
			 ?>
					
						<label class="question_number_input">Question Number</label>
						<input type="number" name="question_number">
					

					<p>
						<label class="question_text">Question Text</label>
						<input type="text" name="question_text" class="question_text_input" >
					</p>

					<p>
							<label class="insertchoicestext">Choice: #1 </label>
							<input type="text" name="choice1" class="insertchoices">
					</p>

					<p>
							<label class="insertchoicestext">Choice: #2 </label>
							<input type="text" name="choice2" class="insertchoices">
					</p>

					<p>
							<label class="insertchoicestext">Choice: #3 </label>
							<input type="text" name="choice3" class="insertchoices">
					</p>

					<p>
							<label class="insertchoicestext">Choice: #4 </label>
							<input type="text" name="choice4" class="insertchoices">
					</p>

		
						
							<label class="correctchoice">Correct Choice Number</label>
							<input type="number" name="correct_choice" class="correctchoiceinput">
					<
					<p>
							
							<input class="submit" type="submit" name="submit" value="Submit">
					</p>
			</form>
			<a href="index.php" class="add2">Go back to hamepage</a>
	</div>


</body>
</html>