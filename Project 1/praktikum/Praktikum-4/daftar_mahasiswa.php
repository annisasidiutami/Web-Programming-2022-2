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
                <?php 
                    require_once 'class_mahasiswa.php';

                    $mahasiswa[0] = new Mahasiswa(0110121133, 'Annisa Sidiutami');
                    $mahasiswa[0]->angkatan = 2021;
                    $mahasiswa[0]->prodi = 'SI';
                    $mahasiswa[0]->ipk = 3.7;

                    $mahasiswa[1] = new Mahasiswa(0110121130, 'Farhana Zulfia');
                    $mahasiswa[1]->angkatan = 2021;
                    $mahasiswa[1]->prodi = 'TI';
                    $mahasiswa[1]->ipk = 3.9;

                    $mahasiswa[2] = new Mahasiswa(0110121064, 'Rena Nurhodijah');
                    $mahasiswa[2]->angkatan = 2012;
                    $mahasiswa[2]->prodi = 'SI';
                    $mahasiswa[2]->ipk = 2.7;

                    $mahasiswa[3] = new Mahasiswa(0110121001, 'Angga');
                    $mahasiswa[3]->angkatan = 2019;
                    $mahasiswa[3]->prodi = 'TI';
                    $mahasiswa[3]->ipk = 1;
                ?>
                <div class="row mt-4">
                    <div class="col-md-6 mx-auto d-block">
                        <table class="table table-stripped">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Tahun Angkatan</th>
                                <th>IPK</th>
                                <th>Predikat</th>
                            </tr>
                            
                            <?php 
                                foreach($mahasiswa as $no => $row){
                                    echo "<tr>";
                                    echo "<td>".++$no."</td>";
                                    echo "<td>$row->nim</td>";
                                    echo "<td>$row->nama</td>";
                                    echo "<td>$row->prodi</td>";
                                    echo "<td>$row->angkatan</td>";
                                    echo "<td>$row->ipk</td>";
                                    echo "<td>".$row->predikat_ipk()."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
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