<?php
include "api/sql.php";

$sql = "SELECT * FROM `post`";
$result = $conn->query($sql);

// if ($result) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         // Process and display data here
//         // print_r($row);
//         // echo "<br>";
//     }
// } else {
//     // Handle the query error
//     echo "Error: " . mysqli_error($conn);
// }

// Close the database connection when done
// mysqli_close($conn);
?>
