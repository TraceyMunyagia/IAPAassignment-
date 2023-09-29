<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h2>User Registration Form</h2>

    <form method="POST" action="process.php">
        <label for="fullname">fullname:</label>
        <input type="text" name="fullname" id="fullname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="password">Password:</label>
        <input type="text" name="password" id="password" required><br><br>


        <input type="submit" value="Submit">
    </form>

    <h2>Registered Users</h2>

    <?php
   
    require_once('view.php');
    ?>
</body>
</html>