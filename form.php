<!DOCTYPE html>
<html>
<head>
            <title>Form Sederhana</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #c07df3, #ff00b7);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background: #f173b9;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            color: #000000;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border-radius: 8px;
            border: 1px solid #de2e2e;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #f59bff;
            color: #000000;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #86ff68;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Form Input</h2>

    <form action="proses.php" method="post">
        
        <label>Firstname:</label>
        <input type="text" name="firstname" required>

        <label>Lastname:</label>
        <input type="text" name="lastname" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>