<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include_once dirname(__FILE__)."/db_connect.php";

class Order {

    public $credentials;
    public $adress;
    public $flavour;
    public $amount;
    private $valid = false; //Do not make true for security reasons!

    public function getCost() {
        return $this->amount * 1.5;
    }

    private function is_flavour($string) {
        $is = false;

        if ($string === "Potion" || $string === "Ether" || $string === "Soma" || $string === "Elixir") {
            $is = true;
        }

        return $is;
    }

    private function sanitise($string) {
        $sanitised = escapeshellarg(
                htmlspecialchars($string)
        );

        return $sanitised;
    }

    private function check_security() {
        $secure = true;
        if (strlen($this->credentials) < 4 || strlen($this->credentials) > 64) {
            $secure = false;
        }

        if (strlen($this->adress) < 4 || strlen($this->adress) > 255) {
            $secure = false;
        }

        if (!$this->is_flavour($this->flavour)) {
            $secure = false;
        }

        if ($this->amount < 1 || $this->amount > 99) {
            $secure = false;
        }

        return $secure;
    }

    public function set_values($credentials, $adress, $flavour, $amount) {
        $this->credentials = $this->sanitise($credentials);
        $this->adress = $this->sanitise($adress);
        $this->flavour = $this-sanitise($flavour);
        $this->amount = $this-sanitise($amount);

        //Security check
        if (!$this->check_security()) {
            die('You entered invalid values!');
        }

        $this->valid = true;
    }

    public function push_order() {
        if ($this->valid) {
            $conn = new Conn ();
            $sql = file_get_contents("../queries/push_order.sql");
            $prep = $conn->prepare($sql);
            $prep->execute([
                $this->credentials,
                $this->adress,
                $this->flavour,
                $this->amount,
                $this->getCost()
            ]);
            $conn->disconnect();
        }
        else{
            die("Your values are invalid, you should set them by set_values() method.");
        }
    }

}
