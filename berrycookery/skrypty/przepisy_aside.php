<?php
    function wyswietl(){
        include 'sprawdzenie.php';
        $link = mysqli_connect("127.0.0.1", "root", "", "przepisnik");
        if (mysqli_connect_errno()) {
            echo "Błąd MySQL: " . mysqli_connect_error();
        } else {
            $id=$_SESSION['id'];
            $zapytanie = "SELECT tytul, id FROM przepisy WHERE id_uzytkownika = '$id'";
            $wynik = mysqli_query($link, $zapytanie);
            if ($wynik === false) {
                echo "Błąd MySQL: " . mysqli_error($link);
            } else {
                $ile = mysqli_num_rows($wynik);
                for ($i = 0; $i < $ile; $i++) {
                    $wiersz = mysqli_fetch_row($wynik);
                    echo "<a href='wyswietlanie_przepisu.php?id_przepisu=$wiersz[1]'><fieldset class='przepisy_aside'>" . $wiersz[0] . "</fieldset></a>";
                }
            }
            mysqli_close($link); // Close the database connection when you're done.
        }
    }
    
?>