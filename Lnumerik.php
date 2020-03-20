<?php
    $calon = [
        ["indra saputra","Indra@yahoo.com","08976786801","laki-laki","SD","weekday"],
        ["indrie saputrie","Indrie@yahoo.com","08976786802","Perempuan","TK","weekday"],
        ["Aceng","aceng@yahoo.com","08976786803","laki-laki","SD ga lulus","weekday"],
        ["Paimin","paimin@yahoo.com","08976786804","Perempuan","SMP","weekday"],
        ["Zikri","zikrie@yahoo.com","08976786805","laki-laki","SMA","weekday"],
        ["Riskie","Riskie@yahoo.com","08976786806","laki-laki","MTS","weekday"],
        ["Zaenudin","Zaenudin@yahoo.com","08976786807","laki-laki","MTS","weekday"],
        ["Hazan","Hazan@yahoo.com","08976786808","Perempuan","MAN","weekday"],
        ["Karto","Karto@yahoo.com","08976786809","laki-laki","SMK","weekday"],
        ["Sutimin","Sutimin@yahoo.com","08976786810","Perempuan","PAKET C","weekday"]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>NOtelp</th>
        <th>Jenis kelamin</th>
        <th>Lulusan</th>
        <th>kelas yang di pilih</th>
        </tr>
    </thead>
        <body>
        <tbody>
        <?php foreach($calon as $calonsiswa) { ?> 
            <tr>
                <td><?=$calonsiswa[0]; ?></a></td>
                <td><?=$calonsiswa[1]; ?></a></td>
                <td><?=$calonsiswa[2]; ?></a></td>
                <td><?=$calonsiswa[3]; ?></a></td>
                <td><?=$calonsiswa[4]; ?></a></td>
                <td><?=$calonsiswa[5]; ?></a></td>
        <?php } ?>
        </tr>
        </tbody>
</table>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>