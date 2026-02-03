<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">
  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside><!--SIDEBAR-->

  <article class="main-content col-xs-8">
    <?php
    $conn = new mysqli('db', 'lionUser', 'lionPass', 'lionDB');

    if ($conn->connect_error) {
      die("Connection failed: " . htmlspecialchars($conn->connect_error));
    }

    $result = $conn->query("SELECT id, name FROM users");

    while ($row = $result->fetch_assoc()) {
      echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }

    $conn->close();
    ?>
  </article><!--MAIN CONTENT-->
</section>

<?php include "includes/footer.php"; ?>
