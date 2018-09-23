<?php

session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<h1 class="thatsit">That's it!</h1>
			<p>Congrats! You've completed the test</p>
			<p>Final score: <?php echo $_SESSION['score']; ?> </p>
		<p class="questionadded">	<?php unset($_SESSION['score']);?> </p>
			<a href="questions.php?no=1" class="startagain">Take the quiz again</a>
			<a href="insert.php" class="add">Add a question</a>
		
		
	</div>


</body>
</html>