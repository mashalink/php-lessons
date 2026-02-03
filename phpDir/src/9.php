<?php
session_start();

setcookie("TestCookie", "CookieValue", time() + 7 * 24 * 60 * 60);

include "functions.php";
include "includes/header.php";
?>

<section class="content">

  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside>

  <article class="main-content col-xs-8">

    <?php
    // Step 1: link + GET
    echo '<a href="?param=HelloWorld">Click Here</a><br><br>';

    if (isset($_GET['param'])) {
      echo "GET parameter value: " . htmlspecialchars($_GET['param']) . "<br>";
    }

    // Step 2: cookie (показываем аккуратно)
    if (isset($_COOKIE['TestCookie'])) {
      echo "Cookie value: " . htmlspecialchars($_COOKIE['TestCookie']) . "<br>";
    } else {
      echo "Cookie set. Refresh the page to see it.<br>";
    }

    // Step 3: session
    $_SESSION['sessionVar'] = "SessionValue";
    echo "Session variable value: " . $_SESSION['sessionVar'];
    ?>

  </article>
</section>

<?php include "includes/footer.php"; ?>
