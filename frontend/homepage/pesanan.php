<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header('Location: menu.php');
    exit();
}

if (isset($_POST['logstate'])) {
    if (isset($_SESSION['id_user'])) {
        session_destroy();
        header('Location: menu.php');
        exit();
    } else {
        header('Location: ../../login.php');
    }
}

$dsn = "mysql:host=localhost;dbname=uts_kelompok1";
$username = "root";
$password = "";
try {
    $kunci = new PDO($dsn, $username, $password);
    $kunci->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>

<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Food Impact</title>
      <link rel="stylesheet" href="editing.css">
</head>
<body>
<style>
    @font-face{
        font-family:MyFont;
        src:url(../../font/genshinFont/genshinFont.ttf);
    }

    body{
        font-family: MyFont, sans-serif;
    }
</style>
<div class="background">
  <img src="../../image/fontaine-wallpaper-1.jpg" class="background-image"></img> 

  <audio id="myAudio" autoplay loop>
    <source src="../../audio/Fontaine_theme.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio>

</div>
<header>
<nav class="navbar">
    <div class="menu">
      <div class="logo">
        <a href="homepage.php"><h1>Food Impact</h1></a>
      </div>
      <ul>
        <li><a class="active" href="home.html">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="book-table.html">Book Table</a></li>
      </ul>
        <ul>
         <li><a href="../../login.php">Log Out</a></li>
         <li><button onClick="toggleAudio()" id="audioControl">Audio</button></li>
        </ul>
    </div>
  </nav>
</header>

<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $dsn = "mysql:host=localhost;dbname=uts_kelompok1";
    $kunci = new PDO($dsn, "root", "");
    $sql = "SELECT pilihan.*, user.username FROM pilihan, user WHERE pilihan.user_id = user.id";
    $hasil = $kunci->query($sql);
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Menu</th>';
    echo '<th>Kategori</th>';
    echo '<th>Harga</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($hasil as $row) {
        echo '<tr>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['nama'] . '</td>';
        echo '<td>' . $row['kategori'] . '</td>';
        echo '<td>' . $row['harga'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>
<?php
    if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
      echo '<h1>Pesanan Anda</h1>';
  
      // Ambil data barang dari session
      if (isset($_SESSION['cartItems'])) {
          $cartItems = $_SESSION['cartItems'];
  
          // Tampilkan data barang
          echo '<table border="1">';
          echo '<thead>';
          echo '<tr>';
          echo '<th>Nama</th>';
          echo '<th>Harga</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          foreach ($cartItems as $item) {
              echo '<tr>';
              echo '<td>' . $item['nama'] . '</td>';
              echo '<td>' . $item['harga'] . '</td>';
              echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
      } else {
          echo 'Keranjang Anda kosong.';
      }
  }
?>
</body>
</html>