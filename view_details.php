?php
include "dbh.inc.php";

// Retrieve all data from the users table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Users</title>
		<link rel="stylesheet" href="view_details.css">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <h1>View Users</h1>
        <a href="adminpage.php">Back</a>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
            // Loop through each row of data and display it in the table
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['usersid']."</td>";
                echo "<td>".$row['usersFirstName']."</td>";
                echo "<td>".$row['usersLastName']."</td>";
                echo "<td>".$row['usersEmail']."</td>";
                echo "<td>".$row['usersPwd']."</td>";
                echo '<td><a href= "update.php?usersid='.$row['usersid'].'">Update</a></td>';
                echo '<td><a href= "delete.php?usersid='.$row['usersid'].'">Delete</a></td>';
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>