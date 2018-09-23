<?php 
include "db.php";
?>
<?php session_start(); ?>
<?php
$number = (int) $_GET['no'];

	//Get total questions

		$query = " SELECT * FROM `questions` ";

		//get result
		$results = $mysqli->query($query) or die($mysqli->error._LINE_);
		$total = $results->num_rows;

// GET question
$query = "SELECT * FROM `questions` WHERE question_number = $number ";

//Get result
$result = $mysqli->query($query) or die($mysqli->error._LINE_);
$question = $result->fetch_assoc();


// GET choice
$query = "SELECT * FROM `choices` WHERE question_number = $number ";

//Get result
$choices = $mysqli->query($query) or die($mysqli->error._LINE_);



?> 

<!DOCTYPE html>
<html>
<head>
	<title>Quiz Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">

		
		<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>

			<p class="question">
				<?php echo $question['text']; ?>
			</p>	
				<form method="POST" action="quiz_process.php">

					<ul class="choices">
						<?php while($row = $choices->fetch_assoc()) : ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
						<?php endwhile; ?>
					
						
					</ul>

					<input type = "submit" value = "Submit" class="submitquestion">
					<input type = "hidden" name = "number" value="<?php echo $number; ?>">
				</form>
			
			</div>
			
	</div>


</body>
</html>