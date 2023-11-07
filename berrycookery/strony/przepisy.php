<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jakas nasza nazwa</title>
    <link rel="stylesheet" href="../style/przepisy_style.css" />
    <link rel="icon" href="../grafika/menu_icon.svg" />
    <!--TU BEDZIE IKONA NIE WYSZLO MI XD-->
  </head>
  <body>
    <header>
    <a href="../index.html"><img src="../grafika/bitmapa.svg" alt="logo" id="berry"></img></a>
      <button onclick="rozwin()"><img src="../grafika/menu_icon.svg" alt="ikona menu" id="menu_icon"></button>
       

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
    
    <main>
        <aside id="all_przepisy">
          <h2>Przepisy</h2><br>
          <?php include '../skrypty/przepisy_aside.php';
                wyswietl();
          ?>
        </aside>
        <section class="calosc">
          <section class="grupa_kuleczek">
            <a href="sniadania.php"><section class="kuleczki">
              Śniadania
            </section></a>
            <a href="lunch.php"><section class="kuleczki">
              Lunch
            </section></a>
            <a href="obiad.php"><section class="kuleczki">
              Obiady
            </section></a>
            <a href="kolacje.php"><section class="kuleczki">
              Kolacje
            </section></a>
          
            <a href="desery.php"><section class="kuleczki">
              Desery
            </section></a>
            <a href="przekąski.php"><section class="kuleczki">
              Przekąski
            </section></a>
            <a href="napoje.php"><section class="kuleczki">
              Napoje
            </section></a>
            <a href="nowy_przepis.html"><section class="kuleczki">
            Dodaj przepis
          </section></a>
        </section>
    </main>
    <footer>
      <table>
        <tr>
          <td>
            <p class="autorzy">
              <a href="">Oliwia Smalcuga</a> &
              <a href="https://github.com/M4rth3" target="_blank"
                >Martyna Ślizankiewicz</a>
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
