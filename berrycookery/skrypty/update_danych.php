<?php
session_start();
$id_uzytkownika = $_SESSION['id'];
include "sprawdzenie.php";

    $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
    
    if (mysqli_connect_errno()) {
        echo "Błąd MySQL". mysqli_connect_error();
    }else{
        if(isset($_POST['imie']) && isset($_POST['nazwa_uzytkownika']) && isset($_POST['email'])&& isset($_POST['haslo'])&& isset($_POST['haslo2'])) {
            $imie = $_POST['imie'];
            $nick = $_POST['nazwa_uzytkownika'];
            $email = $_POST['email'];
            $haslo = $_POST['haslo'];
            $haslo2 = $_POST['haslo2'];
            

            if($haslo == $haslo2) {
                $hasloFinalne = $haslo;
                
                $zapytanie = "UPDATE uzytkownicy
                SET imie = '$imie', nazwa_uzytkownika = '$nick', email = '$email', haslo = '$hasloFinalne'
                WHERE id = $id_uzytkownika";
                $url = '../strony/logowanie.html';
                
                header("Location: ../strony/konto.php");
                session_destroy();
                exit;
            } else {
                echo "Hasła nie są takie same! Spróbuj ponownie.";
            }
            
        }else{
            echo 'Nieprawidłowe dane. Spróbuj ponownie.';
        }
    }

?>
