<?php session_start();
include "../skrypty/sprawdzenie.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jakas nasza nazwa</title>
    <link rel="stylesheet" href="../style/wyswietlanie_przepisu.css" />
    <link rel="icon" href="../grafika/menu_icon.svg" />
    <!--TU BEDZIE IKONA NIE WYSZLO MI XD-->
  </head>
  <body>
    <header>
      <a href="index.html"><img src="../grafika/bitmapa.svg" alt="logo" id="berry"></img></a>
      <button onclick="rozwin()">
        <img src="../grafika/menu_icon.svg" alt="ikona menu" id="menu_icon" />
      </button>

      <ul id="lista">
        <h3 class="menu">Menu</h3>
        <br />
        <li class="menu">
          <a href="konto.php">Moje konto</a>
        </li>
        <li>
        <a href="przepisy.php">Moje przepisy</a>
        </li>
        <li>
        <a href="wyloguj.php">Wyloguj</a>
        </li>
      </ul>
    </header>
    <!--<aside id="all_przepisy">
          <h2>Przepisy</h2><br>
          <?php /*include '../skrypty/przepisy_aside.php';
                wyswietl();*/
          ?>
    </aside>-->
    <main>
      <section id="section1">
        <section class="calosc">
          <section class="lewa">
            <?php

              $link = mysqli_connect("127.0.0.1", "root","","przepisnik");
                if (mysqli_connect_errno()) {
                  echo "Błąd MySQL". mysqli_connect_error();
              }else{
                $id_przepisu = intval($_GET['id_przepisu']);
                $zapytanie = "SELECT * FROM przepisy WHERE przepisy.id = '$id_przepisu'";

                $wynik = mysqli_query($link, $zapytanie);
                  if ($wynik){
                      $ile = mysqli_num_rows($wynik);
                      for ($i = 0; $i < $ile; $i++) {
                          $wiersz = mysqli_fetch_row($wynik);
                          echo "<br><h2>$wiersz[2]</h2><br>";
                          echo "<p>$wiersz[10]</p><br>";

                          echo "<section id='skladniki'><h3>SKŁADNIKI:</h3>";
                          $zapytanie2 = "SELECT * FROM skladniki WHERE skladniki.id_przepisu = '$id_przepisu'";
                          $wynik2 = mysqli_query($link, $zapytanie2);
                            $ile2 = mysqli_num_rows($wynik2);
                            for ($i = 0; $i < $ile2; $i++) {
                              $wiersz2 = mysqli_fetch_row($wynik2);
                              echo "<text>$wiersz2[3]$wiersz2[4] $wiersz2[2]</text><br>";
                            }
                          echo "</section>";

                          echo "<h3>SPOSÓB PRZYGOTOWANIA:</h3><section class='opis_przyg'><p>$wiersz[11]</p></section>";
                      }
                  }
              }
            ?>
            <!--<h2>NAZWA</h2>
            <p>Krotki opis</p>
            <p>Składniki</p>
            <p>Opis przygotowani</p>-->
          </section>
          <section class="prawa">
            <?php
                  $zapytanie3 = "SELECT * FROM skladniki_odzywcze WHERE skladniki_odzywcze.id_przepisu = '$id_przepisu'";

                  $wynik3 = mysqli_query($link, $zapytanie3);
                    if ($wynik3){
                      $ile3 = mysqli_num_rows($wynik3);
                          $wiersz3 = mysqli_fetch_row($wynik3);
                            echo "<br><br><br><p>Liczba porcji: $wiersz[9]</p><br>";
                            
                            echo "<p>Całkowity czas gotowania: $wiersz[7]</p><br>";
                            echo "<p>Czas przygotowania: $wiersz[8]</p><br><hr>";

                            if($ile3 > 0){
                              if($wiersz3[1] != null){
                                echo "<br><p>Białko: $wiersz3[1]</p><br>";
                              }
                              if($wiersz3[1] != null){
                              echo "<p>Weglowodany: $wiersz3[2]</p><br>";
                              }
                              if($wiersz3[1] != null){
                              echo "<p>Tluszcze: $wiersz3[3]</p>";
                              }
                            }
                            if($wiersz[12] != null){
                              echo "<br><p>Kalorie: $wiersz[12]</p>";
                            }
                    }
            ?>
          </section>
        </section>
      </section>
    </main>
    <footer>
      <table>
        <tr>
          <td>
            <p class="autorzy">
              <a href="">Oliwia Smalcuga</a> &
              <a href="https://github.com/M4rth3" target="_blank"
                >Martyna Ślizankiewicz</a
              >
            </p>
          </td>
          <td><p id="zegar"></p></td>
          <td><p class="pomoc"><a href="pomoc.php">Pomoc</a></p></td>
        </tr>
      </table>

      <script src="../skrypty/zegar.js"></script>
      <script src="../skrypty/menu.js"></script>
    </footer>
  </body>
</html>
