<?php
session_start();
    include "sprawdzenie.php";

    $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
    if (mysqli_connect_errno()) {
        echo "Błąd MySQL". mysqli_connect_error();
    }else{
            $_SESSION['nazwa_przepisu'] = $_POST['nazwa_p'];
            $_SESSION['opis'] = $_POST['opis'];
            $_SESSION['opis_przyg'] = $_POST['opis_przyg'];

            if($_POST['ilosc_porcji'] != null){
                $_SESSION['ilosc_porcji'] = $_POST['ilosc_porcji'];
            }else{
                $_SESSION['ilosc_porcji'] = false;
            }

            if($_POST['kalorie'] != null){
                $_SESSION['kalorie'] = $_POST['kalorie'];
            }else{
                $_SESSION['kalorie'] = false;
            }

            if($_POST['bialko'] != null){
                $_SESSION['bialko'] = $_POST['bialko'];
            }else{
                $_SESSION['bialko'] = false;
            }

            if($_POST['weglowodany'] != null){
                $_SESSION['weglowodany'] = $_POST['weglowodany'];
            }else{
                $_SESSION['weglowodany'] = false;
            }

            if($_POST['tluszcze'] != null){
                $_SESSION['tluszcze'] = $_POST['tluszcze'];
            }else{
                $_SESSION['tluszcze'] = false;
            }

            if($_POST['opcje'] != null){
                $_SESSION['kategoria'] = $_POST['opcje'];
            }else{
                $_SESSION['kategoria'] = false;
            }

            if($_POST['time_g'] != null){
                $_SESSION['czas_got'] = $_POST['time_g'];
            }else{
                $_SESSION['czas_got'] = false;
            }

            if($_POST['time'] != null){
                $_SESSION['czas_przyg'] = $_POST['time'];
            }else{
                $_SESSION['czas_przyg'] = false;
            }

            $_SESSION['skladniki']=array();

            header("Location: ../strony/nowy_skladnik.html");
    }
    
    
?>