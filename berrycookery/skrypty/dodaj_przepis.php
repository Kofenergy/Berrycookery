<?php
session_start();

              $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
                if (mysqli_connect_errno()) {
                  echo "Błąd MySQL". mysqli_connect_error();
              }else{
                    $id_uz = $_SESSION['id'];
                    $nazwa = $_SESSION['nazwa_przepisu'];
                    $opis = $_SESSION['opis'];
                    $opis_przyg = $_SESSION['opis_przyg'];
                    $tag = $_SESSION['kategoria'];
                    
                      }
                          if($_SESSION['ilosc_porcji']){
                            $ilosc_porcji = $_SESSION['ilosc_porcji'];
                          }else{
                            $ilosc_porcji = null;
                          }
                            
                          if($_SESSION['czas_got']){
                            $czas_got = $_SESSION['czas_got'];
                            }else{
                                $czas_got = null;
                            }

                          if($_SESSION['czas_przyg']){
                                $czas_przyg = $_SESSION['czas_przyg'];
                          }else{
                            $czas_przyg = null;
                        }

                            if($_SESSION['bialko']){
                                $bialko = $_SESSION['bialko'];
                              }else{
                                $bialko = null;
                            }
                              if($_SESSION['weglowodany']){
                                $weglowodany = $_SESSION['weglowodany'];
                              }else{
                                $weglowodany = null;
                            }
                              if($_SESSION['tluszcze']){
                                $tluszcze = $_SESSION['tluszcze'];
                              }
                              else{
                                $tluszcze = null;
                            }
                            if($_SESSION['kalorie']){
                                $kalorie = $_SESSION['kalorie'];
                            }else{
                                $kalorie = null;
                            }
                            $zapytanie = "INSERT INTO przepisy VALUES('', '$id_uz', '$nazwa', '$tag', null, null, null, '$czas_got', '$czas_przyg', '$ilosc_porcji', '$opis', '$opis_przyg', '$kalorie')";
                            $wynik = mysqli_query($link, $zapytanie);
                            $zapytanie4 = "SELECT COUNT(id) FROM przepisy WHERE id_uzytkownika = '$id_uz'";
                            $wykonaj = mysqli_query($link, $zapytanie4);
                            $wiersz = mysqli_fetch_row($wykonaj);
                            $ostatni_przepis = $wiersz[0];
                            $
                            $ostatni_przepis = intval($ostatni_przepis);
                            $zapytanie2 = "INSERT INTO skladniki_odzywcze VALUES('$ostatni_przepis', '$bialko', '$weglowodany', '$tluszcze') ";
                            $wynik = mysqli_query($link, $zapytanie2);

                            foreach ($_SESSION['skladniki'] as $skladnik) {
                                $nazwa_skl = $skladnik['nazwa_skl'];
                                $ilosc_skl = $skladnik['ilosc_skl'];
                                $nazwa_jednostki = $skladnik['nazwa_jednostki'];
                                $zapytanie3 = "INSERT INTO skladniki VALUES('','$ostatni_przepis', '$nazwa_skl', '$ilosc_skl', '$nazwa_jednostki') ";
                                $wynik = mysqli_query($link, $zapytanie3);
                              }
                              
                            
?>