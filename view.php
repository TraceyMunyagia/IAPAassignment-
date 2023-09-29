<!DOCTYPE html>
<html>
<head>
    <title>Display Data from Database</title>
</head>
<body>
    <h2>Data from Database</h2>
    
    <?php
    require_once('database.php');

    $db = new Database();
    $conn = $db->conn;

    $sql = "SELECT * FROM your_table_name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["fullname"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    $conn->close();
    ?>
</body>
</html>