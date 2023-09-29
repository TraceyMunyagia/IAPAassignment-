<!DOCTYPE html>
<html>
<head>
    <title>New User Signup</title>
</head>
<body>
<h2>Welcome.Kindly enter your details</h2>
    <form method="post" action="process_form.php">
        <label for="fullname">Name:</label>
        <input type="text" name="fullname" id="fullname" required>
        
        <br><br>

        <label for="username">User name:</label>
        <input type="text" name="name" id="name" required>
        
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <br><br>

        <label for="password"> Password:</label>
        <input type="varchar" name="password" id="password" required>
        
        <br><br>

        <label for="age"> Age:</label>
        <input type="int" name="age" id="age"required>
        
        <br><br>

        <input type="submit" name="submit" value="Submit">
         </form>
    

    
</body>
</html>

