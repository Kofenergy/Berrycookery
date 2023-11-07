<?php
    include "sprawdzenie.php";

    $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
    if (mysqli_connect_errno()) {
        echo "Błąd MySQL". mysqli_connect_error();
    }else{
        if(isset($_POST['imie']) && isset($_POST['nick']) && isset($_POST['email'])&& isset($_POST['haslo'])&& isset($_POST['haslo2'])) {
            $imie = $_POST['imie'];
            $nick = $_POST['nick'];
            $email = $_POST['email'];
            $haslo = $_POST['haslo'];
            $haslo2 = $_POST['haslo2'];

            if($haslo == $haslo2) {
                $hasloFinalne = $haslo;
                
                $zapytanie = "INSERT INTO uzytkownicy VALUES('','$imie','$nick', '$email', '$hasloFinalne')";
                $url = '../strony/logowanie.html';
                czy_wykonane($link, $zapytanie, $url);
            } else {
                echo "Hasła nie są takie same! Spróbuj ponownie.";
            }
            
        }else{
            echo 'Nieprawidłowe dane. Spróbuj ponownie.';
        }
    }
    
    
?>