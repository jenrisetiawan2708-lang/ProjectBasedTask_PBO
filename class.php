<?php
class Biodata {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = htmlspecialchars(trim($firstname));
        $this->lastname = htmlspecialchars(trim($lastname));
        $this->phone = htmlspecialchars(trim($phone));
        $this->address = htmlspecialchars(trim($address));
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }

    public function tampilkan() {
        return "
        <div class='result'>
            <p><b>Nama Lengkap:</b> " . $this->getFullName() . "</p>
            <p><b>Phone Number:</b> {$this->phone}</p>
            <p><b>Address:</b> {$this->address}</p>
        </div>
        ";
    }
}
?>