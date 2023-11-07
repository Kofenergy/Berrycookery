<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jakas nasza nazwa</title>
    <link rel="stylesheet" href="../style/pomoc.css" />
    <link rel="icon" href="../grafika/icon_half.svg" />
    
  </head>
  <body>
    <header>
    <a href="../index.html"><img src="../grafika/bitmapa.svg" alt="logo" id="berry"></img></a>
      <button onclick="rozwin()">
        <img src="../grafika/menu_icon.svg" alt="ikona menu" id="menu_icon" />
      </button>

      <ul id="lista">
        <h3 class="menu">Menu</h3>
        <br />
        <li class="menu">
          <a href="rejstracja.html" class="menu">Rejestracja</a>
        </li>
      </ul>
    </header>
    <main>
      <section id="section1">
        <p>Strona została stworzona w:
          <ol>
            <li>HTML 5</li>
            <li>CSS</li>
            <li>Javascript</li>
            <li>PHP</li>
            <li>Baza jest przechowywana w serwerze typu: MariaDB</li>
          </ol> </p>
        <hr>
        <p>W razie wszelkich pytań napisz do nas na adres berry.cookery.support@gmail.com</p>
        <hr>
        <p>Tu możesz obserwować jak nasza strona się rozwija!</p>
        <?php
$link = mysqli_connect("127.0.0.1", "root", "", "przepisnik");

if (mysqli_connect_errno()) {
    echo "Błąd MySQL" . mysqli_connect_error();
} else {
    
    $przepisy_query = "SELECT COUNT(*) as liczba_przepisow FROM przepisy";
    $przepisy_result = mysqli_query($link, $przepisy_query);  
    $row = mysqli_fetch_assoc($przepisy_result);
    $liczba_przepisow = $row['liczba_przepisow'];

    
    $uzytkownicy_query = "SELECT COUNT(*) as liczba_uzytkownikow FROM uzytkownicy";
    $uzytkownicy_result = mysqli_query($link, $uzytkownicy_query);
    $row = mysqli_fetch_assoc($uzytkownicy_result);
    $liczba_uzytkownikow = $row['liczba_uzytkownikow'];

    echo "Przechowywane przepisy: " . $liczba_przepisow . "<br>";
    echo "Nasi użytkowicy: " . $liczba_uzytkownikow . "<br>";
}
?>
        </form>
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
          <td>
            <p class="pomoc"><a href="pomoc.php">Pomoc</a></p>
          </td>
        </tr>
      </table>

      <script src="../skrypty/zegar.js"></script>
      <script src="../skrypty/menu.js"></script>
    </footer>
  </body>
</html>
