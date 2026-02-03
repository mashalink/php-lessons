<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php
		/*

			Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  	Step 2: Add the two variables and display the sum with echo:

		  	Step3: Make 2 Arrays with the same values, one regular and the other associative

		*/
		$number1 = 10;
		$number2 = 20;

		$sum = $number1 + $number2;
		echo "The sum is: " . $sum;

		// Step 3: Create two arrays with the same values
		$regularArray = array(10, 20, 30, 40, 50);
		$associativeArray = array("first" => 10, "second" => 20, "third" => 30, "fourth" => 40, "fifth" => 50);

		echo "<br>";
		echo "Regular Array: ";
		foreach ($regularArray as $value) {
			echo $value . " ";
		}	
		echo "<br>";
		echo "Associative Array: "."<br>";
		foreach ($associativeArray as $key => $value) {
			echo $key . " => " . $value . "<br>";
		}
		echo "Associative Array: ".implode(", ", $associativeArray);

		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>