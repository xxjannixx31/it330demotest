 <?php
$servername = "it330serve130.mysql.database.azure.com";
$username = "johnryan@it330serve130";
$password = "Animalka123";
$dbname = "itazure";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, description, count FROM inventory";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Desciption: " . $row["firstname"]. " Count" . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 
