<?php 
include "db.php";
	session_start();
?>

<?php 


	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;

	}

	if($_POST){
		$number=$_POST['number'];
		$selected_choice=$_POST['choice'];
		$next = $number+1;


	

		$query = " SELECT * FROM `questions` ";

		
		$results = $mysqli->query($query) or die($mysqli->error._LINE_);
		$total = $results->num_rows;

	

		$query = " SELECT * FROM `choices` WHERE question_number = $number AND is_correct = 1 ";



		$result = $mysqli->query($query) or die($mysqli->error._LINE_);

	

		$row = $result->fetch_assoc();

		$correct_choice = $row['id'];

		if($correct_choice == $selected_choice){
			//answer correct
			$_SESSION['score']++;

		}

	

		if($number == $total){
			header('Location:quiz_display.php');exit;
			unset($_SESSION['score']);
		}else {
			header("Location:questions.php?no=".$next);
		}
	}

?>