 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phppoll";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "DELETE FROM polls WHERE id=14";

  $conn->exec($sql);
  echo "Record deleted successfully!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

include 'votepoll.php';
?> 