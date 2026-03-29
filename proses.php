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
        return "Hi, my name is " . $this->firstname . " " . $this->lastname . "<br>" .
               "Phone Number: " . $this->phone . "<br>" .
               "Address: " . $this->address;
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
    <title>Hasil</title>
</head>
<body>

<h2>Hasil Input</h2>

<?php
echo $user->tampilData();
?>

<br><br>
<a href="form.php">Reset</a>

</body>
</html>