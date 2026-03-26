<?php
include "class.php";

$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = new Biodata(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['phone'],
        $_POST['address']
    );

    $hasil = $data->tampilkan();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Input Form</h2>

        <form method="POST" action="">
            <input type="text" name="firstname" placeholder="Firstname" required>
            <input type="text" name="lastname" placeholder="Lastname" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <textarea name="address" placeholder="Address" required></textarea>
            <button type="submit">Submit</button>
        </form>

        <?php echo $hasil; ?>
    </div>
</body>
</html>