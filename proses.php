<?php
class User {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    function tampilData() {
        return "<p>Hi, my name is <b>$this->firstname $this->lastname</b></p>
                <p>Phone Number: $this->phone</p>
                <p>Address: $this->address</p>";
    }
}

// ambil data dari form
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$phone     = $_POST['phone'];
$address   = $_POST['address'];

// buat object
$user = new User($firstname, $lastname, $phone, $address);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            text-align: center;
        }

        h2 {
            color: #ff4b5c;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px;
            background: #0072ff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background: #0056cc;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Hasil Input</h2>

    <?php
        echo $user->tampilData();
    ?>

    <a href="form.php">Kembali</a>
</div>
</body>
</html>