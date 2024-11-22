<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="pp">


    <div class="cc">
      <div class="cd">

      </div>
      <div class="ce">
        <P>
          <a href="index.php" onclick="goBack()">Kembali</a>
      </div>
      <div class="cf">
        Master<br> Barang
      </div>
      <div class="cg">
        Receiving
      </div>
      <div class="ch">
        Issuing
      </div>
    </div>
    <div class="ci">
      <div class="b">


        <div class="d">

          <div class="circle"></div>
          <h3>username</a></h3>

        </div>
        <div class="ok">
          Pencarian
        </div>
      </div>
      <table>

        <tr>
          <th>No</th>
          <th>Namabarang</th>
          <th>Pengadaan</th>
          <th>stok</th>
          <th>Status</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $connection = mysqli_query($connection, "select * from barang");
        while ($tampil = mysqli_fetch_array($connection)) {
          echo "
          <tr>
           <td style='border: 1px solid black; padding: 15px; font-size: 12px; text-align: center;'>$no</td>
            <td style='border: 1px solid black; padding: 15px; font-size: 12px; text-align: center;'>$tampil[Namabarang]</td>
            <td style='border: 1px solid black; padding: 15px; font-size: 12px; text-align: center;'>$tampil[Pengadaan]</td>
            <td style='border: 1px solid black; padding: 15px; font-size: 12px; text-align: center;'>$tampil[stok]</td>
           <td style='border: 1px solid black; padding: 15px; font-size: 12px; text-align: center;'> $tampil[status]</td>
            </tr>
            ";
          $no++;
        }
        ?>

      </table>
    </div>

  </div>

  </div>

  <footer>
    <div class="ow">
      <h3> Copyright</h3>
      <h3>versi 10</h3>
    </div>
  </footer>
</body>

</html>