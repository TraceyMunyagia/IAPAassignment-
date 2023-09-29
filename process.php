<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'] ?? '';
    $password = $_POST['password'] ?? '';
    $username = $_POST['username'] ?? '';

    $db = new Database();
    $conn = $db->conn;

    try {
        $sql = "INSERT INTO users (`fullname`, `email_address`, `username`, `age`, `password`) VALUES (:fullname, :email, :username, :age, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':username', $username);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>