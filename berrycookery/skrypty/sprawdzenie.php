<?php
    function czy_wykonane($link, $zapytanie, $url){
        $wynik = mysqli_query($link, $zapytanie);
        if($wynik == false){
            echo mysqli_connect_errno();
        }else{
            header("Location: ". $url);
            die();
        }
    }
?>