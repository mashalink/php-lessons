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
    Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	  */

    if (isset($_GET['param'])) {
        echo "GET parameter value: " . htmlspecialchars($_GET['param']);
    }
    // Step 2: Set a cookie that expires in one week
    setcookie("TestCookie", "CookieValue", time() + (7 * 24 * 60 * 60)); // 7 days from now   
    echo "<br>Cookie 'TestCookie' is set to: " . $_COOKIE['TestCookie'];
    // Step 3: Start a session and set a value
    session_start();
    $_SESSION['sessionVar'] = "SessionValue";
    echo "<br>Session variable 'sessionVar' is set to: " . $_SESSION['sessionVar'];


		?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>