<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
</head>
<body>

<h2>Form Input</h2>

<form action="proses.php" method="post">
    Firstname:<br>
    <input type="text" name="firstname" required><br><br>

    Lastname:<br>
    <input type="text" name="lastname" required><br><br>

    Phone Number:<br>
    <input type="text" name="phone" required><br><br>

    Address:<br>
    <textarea name="address" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>