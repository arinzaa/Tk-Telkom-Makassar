<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.Bootstrapcdn.com/Bootstrap/4.4.4/css/Bootstrap.min.css" integrity="shas384-vkoo8x4CGsO3+Hhxv8T/Q5PaXtkktu6ug5TOeNV6gBifeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Pembayaran.css">

    <title>Pembayaran SPP</title>
  </head>
  <body>
    <form method="post" action= "Pembayaran.php">
      <table align="center">
        <tr>
          <th colspan="2"><font size="5">Pembayaran Rekening</font> <hr color="#905"
          width="700"> </th>
        </tr>

        <tr>
          <th align="left">Nama</th>
          <th><input id="sel" type="text"  placeholder="name"></td>
        </tr>
        <tr>
          <th align="left">Kelas</th>
          <td><select id="sel" name="Kelas">
             <option>Pilih</option>
             <option value="TK-A">TK-A</option>
             <option value="TK-B">TK-B</option>
             <option value="TK-C">TK-C</option>
          </td>
        </select>
      </tr>

         <tr>
        <th align="left">Metode Pembayaran</th>
        <td><select id="sel" name="Kelas">
           <option>Pilih</option>
           <option value="TK-A">Mandiri</option>
           <option value="TK-B">BRI</option>
           <option value="TK-C">BNI</option>
           <option value="TK-A">Alfamart</option>
           <option value="TK-B">Indomart</option>
        </td>
        </select>
      </tr>

         <tr>
        <th align="left">Harga Perbulan</th>
        <td><select id="sel" name="harga_per_bulan">
          <option>Pilih</option>
          <option value="harga1">300.000/ 1 bulan</option>
          <option value="harga2">600.000/ 2 bulan</option>
        </td>
        </select>
         </tr>


         <tr>
           <th align="left">Total Pembayaran</th>
          <td><input id="ins" type="hidden" name="total_pembayaran" value="...">
            <input id="sub" type="submit" name="proses" value="submit">
            <input id="sb type="Reset" name="Hapus">
          </td>
        </tr>
           
     
      </table>
    </form>
  </body>