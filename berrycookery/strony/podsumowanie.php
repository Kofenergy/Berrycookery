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
                          echo "<br><h2>" . $_SESSION['nazwa_przepisu'] . "</h2><br>";
                          echo "<p>" . $_SESSION['opis'] . "</p><br>";

                          echo "<section id='skladniki'><h3>SKŁADNIKI:</h3>";
                            foreach ($_SESSION['skladniki'] as $skladnik) {
                            echo $skladnik['ilosc_skl'] . " " . $skladnik['nazwa_jednostki'] . " " . $skladnik['nazwa_skl'] . "<br>";
                          }
                          echo "</section>";

                          echo "<h3>SPOSÓB PRZYGOTOWANIA:</h3><section class='opis_przyg'><p>" . $_SESSION['opis_przyg'] . "</p></section>";
                      }
            ?>
            <a href="../skrypty/dodaj_przepis.php" id="dodaj_przep">DODAJ PRZEPIS</a>
            <!--<h2>NAZWA</h2>
            <p>Krotki opis</p>
            <p>Składniki</p>
            <p>Opis przygotowani</p>-->
          </section>
          <section class="prawa">
            <?php
                          if($_SESSION['ilosc_porcji']){
                            echo "<br><br><br><p>Liczba porcji:" . $_SESSION['ilosc_porcji'] . "</p><br>";
                          }
                            
                          if($_SESSION['czas_got']){
                            echo "<p>Całkowity czas gotowania: " . $_SESSION['czas_got'] . "</p><br>";
                          }

                          if($_SESSION['czas_przyg']){
                            echo "<p>Czas przygotowania: ".$_SESSION['czas_przyg']."</p><br><hr>";}

                            if($_SESSION['bialko']){
                                echo "<br><p>Białko: ".$_SESSION['bialko']."</p><br>";
                              }
                              if($_SESSION['weglowodany']){
                              echo "<p>Weglowodany: ".$_SESSION['weglowodany']."</p><br>";
                              }
                              if($_SESSION['tluszcze']){
                              echo "<p>Tluszcze: " . $_SESSION['tluszcze'] . "</p>";
                              }
                            
                            if($_SESSION['kalorie']){
                              echo "<br><p>Kalorie: ".$_SESSION['kalorie']."</p>";
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