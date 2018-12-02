<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Calculate Grade</title>
	<!--Head Name Website-->
	<style>
		h1{
			background-color: dodgerblue;
			text-align: center;
			color: white;
		}
		body {
			background-color: lightgrey;
		}
		div.gallery {
			margin: 5px;
			float: right;
			bottom: 20px;
		}
	</style>
</head>

<body>

<div class="gallery"> <!--Image-->
	<a href="https://www.w3schools.com/css/img_5terre.jpg">
		<img srcset="https://www.w3schools.com/css/img_5terre.jpg" width="500" height="400">
	</a>
</div>

<h1>Program Calculate Grade</h1>

<!-- TOPIC On HTML -->
<!-- <br> is LINE UP -->
<!-- <br><br> is NEW PARAGRAPH same like <p> -->

<form action="index.php" method="GET">
	ScoreA: <input type:"text" name="scoreA"><br>
	TestScoreA: <input type:"text" name="testscoreA"><br>
	<p>
	ScoreB: <input type:"text" name="scoreB"><br>
	TestScoreB: <input type:"text" name="testscoreB"><br>
	<p>
	ScoreC: <input type:"text" name="scoreC"><br>
	TestScoreC: <input type:"text" name="testscoreC"><br>
	<p>
	<p>
	<input type="submit">
	<p>
</form>



<?php session_start();

if(isset($_GET["scoreA"])&&isset($_GET["testscoreA"])) {

		$totalscoreA = $_GET["scoreA"] + $_GET["testscoreA"];

		echo "Program Calculate Grade"; //TOPIC
		echo "<p>";
		echo "TotalScoreA : ",$totalscoreA; //TotalScoreA output
		echo "<br>";
		if($totalscoreA>=0 && $totalscoreA <= 100) //CalculateSubjectA
			if($totalscoreA>=80){
				echo "SubjectA got grade A";
			}else if($totalscoreA>=75){
				echo "SubjectA got grade B+";
			}else if($totalscoreA>=70){
				echo "SubjectA got grade B";
			}else if($totalscoreA>=65){
				echo "SubjectA got grade C+";
			}else if($totalscoreA>=60){
				echo "SubjectA got grade C";
			}else if($totalscoreA>=55){
				echo "SubjectA got grade D+";
			}else if ($totalscoreA>=50) {
				echo "SubjectA got grade D";
			}else echo "You Failed SubjectA ";
}

		echo "<br>";
//First condition

//END first

if(isset($_GET["scoreB"])&&isset($_GET["testscoreB"])) {

			$totalscoreB =  $_GET["scoreB"] + $_GET["testscoreB"];
			echo "<br>";
			echo "TotalScoreB : ",$totalscoreB; //TotalScoreB output
			echo "<br>";
			if($totalscoreB>=0 && $totalscoreB <= 100) //CalculateSubjectB
				if($totalscoreB>=80){
					echo "SubjectB got grade A";
				}else if($totalscoreB>=75){
					echo "SubjectB got B+";
				}else if($totalscoreB>=70){
					echo "SubjectB got B";
				}else if($totalscoreB>=65){
					echo "SubjectB got C+";
				}else if($totalscoreB>=60){
					echo "SubjectB got C";
				}else if($totalscoreB>=55){
					echo "SubjectB got D+";
				}else if ($totalscoreB>=50) {
					echo "SubjectB got D";
				}else echo "You Failed SubjectB ";
}

		echo "<br>";
//Second condition

//END second

if(isset($_GET["scoreC"])&&isset($_GET["testscoreC"])) {

		$totalscoreC = $_GET["scoreC"] + $_GET["testscoreC"];
		echo "<br>";
		echo "TotalScoreC : ",$totalscoreC; //TotalScoreC output
		echo "<br>";
		if($totalscoreC>=0 && $totalscoreC <= 100) //CalculateSubjectC
			if($totalscoreC>=80){
				echo "SubjectC got grade A";
			}else if($totalscoreC>=75){
				echo "SubjectC got grade B+";
			}else if($totalscoreC>=70){
				echo "SubjectC got grade B";
			}else if($totalscoreC>=65){
				echo "SubjectC got grade C+";
			}else if($totalscoreC>=60){
				echo "SubjectC got grade C";
			}else if($totalscoreC>=55){
				echo "SubjectC got grade D+";
			}else if ($totalscoreC>=50) {
				echo "SubjectC got grade D";
			}else echo "You Failed SubjectC ";

//Third Condition

//END third
}

?>

</body>
</html>