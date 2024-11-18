<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
</head>
<body style="font-size: larger; margin:2px 300px;">
    <h1>Student Form</h1>
    <form action="submit.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="roll_number">Roll Number:</label><br>
        <input type="number" id="roll_number" name="roll_number" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50"></textarea><br><br>

        <button type="submit" style="cursor: pointer;">Submit</button>
    </form>
    <h1>========================================</h1>
    <a href="list.php">View Student List</a>
</body>
</html>
