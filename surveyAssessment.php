<!-- surveyAssessment.php -->

<? php include('inc/header.php'); ?>

<div class="row">
<<<<<<< HEAD
 <div class="small-6 large-2 columns"> Left part of the grid</div>

  <div class="small-6 large-8 columns">
  <h1> PAGE CONTENT GOES IN HERE! </h1>
  <?php session_start();
		echo $_SESSION['courseName']; //split the course name to get section?>

  	<p> Use this page to create new pages, it was created using foundation 5 CSS framework 
  	so if you should definitely look into that </p>


  </div>

 <div class="small-12 large-2 columns"> Right part of the grid</div>
</div>


<?php include('inc/footer.php'); ?>
=======
	<div class="small-6 large-2 columns"><a href="help.php">HELP</a></div>

	<div class="small-6 large-8 columns">
		<?php 
			session_start();
			echo $_SESSION['courseName'] . '-' . $_SESSION['section'];	
		?>

		<p>
			Please complete <b>all</b> questions before continuing. Click <b>'Complete'</b> when you have finished.
		</p>

<!-- the assessment -->

<form method="POST" action="submitSA.php">
	<? php
		$length = count($arrayAnswers);

		for($i=0; $i < questionList.length; $i++) 
		{
			echo "<select name="Question .$i.">"
				for ($x=0; $x < $length; x++)
				{
					echo "<option value=". $array[$x] .">". $array[$x] ."</option>"
				 
				}
			echo "</select>"
		}

	?>
<!-- the survey -->
</form>
	
	</div>

 	<div class="small-12 large-2 columns"> Right part of the grid</div>
	</div>


<?php include('inc/footer.php'); ?>
>>>>>>> FETCH_HEAD
