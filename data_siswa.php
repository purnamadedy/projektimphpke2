<?php 
    if(!isset($_GET["nama_pendaftar"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["no_tlp"])||
        !isset($_GET["jenis_kelamin"]) ||
        !isset($_GET["pendidikan"]) || 
        !isset($_GET["program"])
        ){
    
        }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>

<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Calon Siswa</th>
                <th scope="col">Email</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Program</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td><?php echo $_GET["nama_pendaftar"];?></td>
                <td><?php echo $_GET["email"];?></td>
                <td><?php echo $_GET["no_tlp"];?></td>
                <td><?php echo $_GET["jenis_kelamin"];?></td>
                <td><?php echo $_GET["pendidikan"];?></td>
                <td><?= $_GET["program"]; ?></td>
              </tr>
            
        </tbody>
    </table>
    <a href="data.php" class="btn btn-success mx-3">Back</a>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>