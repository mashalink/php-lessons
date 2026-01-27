<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* 
  Step1: Use a pre-built math function here and echo it
	Step 2:  Use a pre-built string function here and echo it
  Step 3:  Use a pre-built Array function here and echo it
*/
    $number = -10;
    echo abs($number); // Pre-built math function to get absolute value

    echo "<br>";

    $string = "hello world";
    echo strtoupper($string); // Pre-built string function to convert to uppercase

    echo "<br>";

    $array = array(3, 1, 2);
    sort($array); // Pre-built array function to sort the array
    echo implode(", ", $array); // Display sorted array as a string
	
?>

</article>
<!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>