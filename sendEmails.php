<?php include('inc/header.php'); ?>
<?php include('inc/dbSetup.php'); ?>


	<!--  This is a send email page. -->
<!--  Please check out Foundation 5 framework if you plan on changing any of the visuals -->

<div class="row">
 <div class="small-6 large-2 columns"> Left part of the grid</div>

  <div class="small-6 large-8 columns">
  <h1> Send email page! </h1>


  	<form action="professorConfirmation.php" name="emails" method="POST">
  	<?php for($i = 1; $i <= 50; $i++){ //open for loop to display email space ?>
	<label for="email">
		<input type="email" name="email<?php echo $i; ?>" placeholder="Email: <?php echo $i; ?> " />
	</label>  	
	<?php }//closes for loop to display email ?>

		<input class="center button [tiny small large]" type="submit" value="Send" />
	</form>

		

  </div>

 <div class="small-12 large-2 columns"> Right part of the grid</div>
</div>








<?php include('inc/footer.php'); ?>