<?php include 'data_dummy.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><H1 class="text-center">Data Pendaftar</H1></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data_dummy as $data_pendaftar) : ?>
            <tr>
                <td>Nama Siswa : <a href="data_siswa.php?nama_pendaftar=<?= $data_pendaftar["nama_pendaftar"]; ?>&email=<?= $data_pendaftar["email"]; ?>&no_tlp=<?= $data_pendaftar['no_tlp']; ?>&jenis_kelamin=<?= $data_pendaftar["jenis_kelamin"] ?>&pendidikan=<?= $data_pendaftar["pendidikan"]; ?>&program=<?= $data_pendaftar["program"]; ?>"><?= $data_pendaftar["nama_pendaftar"]; ?></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table> 

</body>
</html>