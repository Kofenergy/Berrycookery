<?php
session_start();
    include "sprawdzenie.php";

    $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
    if (mysqli_connect_errno()) {
        echo "Błąd MySQL". mysqli_connect_error();
    }else{
            $nazwa_skl = $_POST['nazwa_skl'];
            $ilosc_skl = $_POST['ilosc_skl'];
            $nazwa_jednostki = $_POST['nazwa_jednostki'];

            $skladnik = array(
                'nazwa_skl' => $nazwa_skl,
                'ilosc_skl' => $ilosc_skl,
                'nazwa_jednostki' => $nazwa_jednostki
            );
            $_SESSION['skladniki'][] = $skladnik;
            header("Location: ../strony/nowy_skladnik.html");
    }
    
    
?>