<?php
session_start();
    include "sprawdzenie.php";
    $url='../strony/index.html';
    header("Location: ". $url);
    $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
    if (mysqli_connect_errno()) {
        echo "Błąd MySQL". mysqli_connect_error();
    }else{
        if(isset($_POST['email']) && isset($_POST['haslo'])){
            $haslo = $_POST['haslo'];
            $email = $_POST['email'];

               $zapytanie = "SELECT * FROM `uzytkownicy` WHERE email = '$email' and haslo = '$haslo'";
               $wynik = mysqli_query($link, $zapytanie);
               if($wynik == false){
                   echo mysqli_connect_errno();
               }else{
                        if(mysqli_num_rows($wynik)>0){
                            $wiersz = mysqli_fetch_row($wynik);
                            $_SESSION['id'] = $wiersz[0];
                            $_SESSION['imie'] = $wiersz[1];
                            $_SESSION['nick'] = $wiersz[2];
                            $_SESSION['email'] = $wiersz[3];
                            $url = '../strony/przepisy.php';
                            header("Location: ". $url);
                        }else{
                            $url='../strony/logowanie.html';
                            session_destroy();
                            header("Location: ". $url);
                        }
                    }
               }
                
    }
    
    
?>