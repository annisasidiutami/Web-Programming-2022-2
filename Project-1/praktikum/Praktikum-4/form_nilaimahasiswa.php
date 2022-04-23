<?php 
  include '../layouts/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 4.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">WEB 02</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Review PHP <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">PHP OOP</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                Search
                            </button>
                        </form>
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="row mt-4">
                    <div class="col-md-4 mx-auto d-block">
                        <h4>Form Nilai Ujian</h4><hr>
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="nim">
                                    NIM
                                </label>
                                <input type="text" name="nim" class="form-control" id="nim" required>
                            </div>
                            <div class="form-group">
                                <label for="mk">
                                    Pilih Mata Kuliah
                                </label>
                                <select name="mk" id="mk" class="form-control" required>
                                    <option value="Pemrograman Web">Pemrograman Web</option>
                                    <option value="Basis Data">Basis Data</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nilai">
                                    Nilai
                                </label>
                                <input type="number" name="nilai" class="form-control" id="nilai" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </form>
                        <?php 
                            require_once 'class_nilaimahasiswa.php';
                            if(isset($_POST['submit'])){
                                $nilai = new NilaiMahasiswa($_POST['nim'], $_POST['nilai'], $_POST['mk']);

                                echo "<hr> NIM : $nilai->nim <br> Nilai : $nilai->nilai <br> Mata Kuliah : $nilai->matkul <br>
                                Grade : {$nilai->grade()} <br> Hasil Ujian : {$nilai->hasil()}";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php 
  include '../layouts/footer.php';
?>
