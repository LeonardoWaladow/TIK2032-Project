<?php

require 'functions.php';

$biodata = query("SELECT * FROM biodata");

?>




<!--[TUGAS] Project.01-HTML-->
<!--Blog-->
<html>
   <head>
    <title>Blog</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <div class="element">
      <div class="element1">
    <h1>
    <HN=10> <a href="blog.html">Blog</a></HN=10>
    </h1>
    <hr />

    <a href="index.html">Homepage</a>
    <a href="gallery.html">Gallery</a>
    <a href="contact.html">Contact</a>
        </div>
    </div>

    <p>
      <b>Kumpulan artikel (dikutip dari wikipedia)</b>
    </P>

    <div class="element2">

<?php
$sql = "SELECT * FROM artikel";
$hasil = mysqli_query($db, $sql);
while ( $baris = mysqli_fetch_assoc($hasil) ) {
?>
<h3><?= $baris ["judul"]; ?> </h3>
<p> <?= $baris ["isi"]; ?></p>
<?php
}
?>



    </div>

    <table border="1" cellpadding="10" cellspacing="0"> 

      <tr>

        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>

      </tr>

<?php foreach( $biodata as $row) : ?>

      <tr>

        <td> <?= $row ["Nama"]; ?> </td>
        <td> <?= $row ["Nim"]; ?> </td>
        <td> <?= $row ["Email"]; ?> </td>

      </tr>
<?php endforeach; ?>

  </body>
</html>
