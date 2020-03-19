<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek PHP ke 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      body{
        background-color: grey;
      }
      #container{
        width: 700px;
        height:auto;
        margin:20px auto;
        border:20px solid pack;
        background-color: #00A427;
      }
      #container form{
        padding:10px;
      }
      #container form label{
        display: block;
        width:100px;
        margin-bottom:10px;
        font-style: bold;
        font-size: 12px;
        font-family: Helvetica;
      }
      #container form input[type=text],
      #container form input[type=email],
      #container form textarea{
        padding:10px;
        width: 97%;
        margin-bottom: 10px;
      }
      #container form input[id=submit]{
        padding: 4px;
      }

      h1.heading{
        display: block;
        font:16pt Helvetica;
        font-weight: bold;
        text-align: center;
        border-bottom: 2px solid black;

      }
    </style>
</head>
<body>

<div id="container">
			<form name="input_form" action="data.php">
			<h1 class="heading">From Pendaftaran</h1><br/>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama">
				
				<label for="email">Email :</label>
				<input type="email" name="email" id="email">
				<label for="telp">No.Telp :</label>
				<input type="text" name="telp" id="telp">
 
				<label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat">
        <legend class="col-form-label">Jenis Kelamin</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">Laki-laki </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">Perempuan</label>
          </div>
        <select class="form-control">
          <option>-- Pilih Kategori --</option>
            <option>Web Design</option>
            <option>Web Development</option>
            <option>Full Stack Development</option>
            <option>Data Analist</option>
        </select>
        <br>
        <select class="form-control">
          <option>Pendidikan Terakhir</option>
            <option>SD</option>
            <option>SMP</option>
            <option>SMA</option>
            <option>S1</option>
            <option>S2</option>
        </select>
        <br>
 
				<input type="submit" name="submit" value="Kirim" onclick="kirim()">
				<input type="reset" name="reset" value="Reset">
			</form>	
  </div>
    
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script>
      function kirim(){
    alert("Selamat Anda Berasil Mendaftar");
    window.location.href ="data.php"
  }
 </script>
</body>
</html>