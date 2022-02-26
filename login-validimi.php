<?php
include 'config/database.php';

class Validimi
{
    // public $email = $_POST['email'];
    // public $password = $_POST['password'];
    public $db;
    public $rows;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function validimi()
    {

        if (isset($_POST['butoniLogIn'])) {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                echo "Fill all fields!";
            } else {

                $sql = "SELECT  email, password, roli  FROM users where email = '" . $_POST['email'] . "' and password = '" . $_POST['password'] . "'";

                $result = $this->db->pdo->query($sql);

                $rows = $result->fetchAll();

                if (empty($rows)) {
                    echo '<script> alert("Incorrect Username or Password!")</script>';
                } else {
                    foreach ($rows as $row) {
                        $_SESSION['loggedin'] = true;
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['role'] = $row['roli'];

                    }
                }
            }
        }
    }
}