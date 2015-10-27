<?php
require 'db.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM movie";	// wild card
$result = $conn->query($sql);	// cursor

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='movie-comment.php?mid=".$row['id']."'><b>" 
			. $row["name"]. "</b></a><br>" 
			. $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>