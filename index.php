<?php
include "class.php";

$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $lastname  = $_POST['lastname'] ?? '';
    $phone     = $_POST['phone'] ?? '';
    $address   = $_POST['address'] ?? '';

    if (!empty($firstname) && !empty($lastname) && !empty($phone) && !empty($address)) {
        $data = new Biodata($firstname, $lastname, $phone, $address);
        $hasil = $data->tampilkan();
    } else {
        $hasil = "<div class='result'><p>Semua field harus diisi.</p></div>";
    }
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
        <h2>Input Form Biodata</h2>

        <form method="POST" action="">
            <label>Firstname</label>
            <input type="text" name="firstname" placeholder="Masukkan firstname" required>

            <label>Lastname</label>
            <input type="text" name="lastname" placeholder="Masukkan lastname" required>

            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Masukkan nomor HP" required>

            <label>Address</label>
            <textarea name="address" placeholder="Masukkan alamat" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <?php echo $hasil; ?>
    </div>
</body>
</html>