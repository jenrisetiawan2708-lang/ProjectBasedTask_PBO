<?php
class Biodata {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = htmlspecialchars($firstname);
        $this->lastname = htmlspecialchars($lastname);
        $this->phone = htmlspecialchars($phone);
        $this->address = htmlspecialchars($address);
    }

    public function tampilkan() {
        return "
        <div class='result'>
            <p><b>Nama:</b> {$this->firstname} {$this->lastname}</p>
            <p><b>Phone:</b> {$this->phone}</p>
            <p><b>Address:</b> {$this->address}</p>
        </div>
        ";
    }
}
?>