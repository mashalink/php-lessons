<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

    <form method="post">
      <input type="text" name="inputValue" placeholder="Введите что-нибудь">
      <button type="submit">Send</button>
    </form>
    <?php

		/*  
      Step1: Make a form that submits one value to POST super global
    */
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $inputValue = $_POST['inputValue'];
          echo "You submitted: " . htmlspecialchars($inputValue);
      }

		?>


  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>