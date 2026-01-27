<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data and display it in a loop
	*/

	$servername = "localhost";
	$username = "lionUser";
	$password = "";
	$dbname = "lionDB";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $conn->prepare("SELECT id, name FROM users");
		$stmt->execute();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
		}
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

$conn = null;
?>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
