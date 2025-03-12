<?php
if (!isset($_POST['nama'])) {
    echo '<script>alert("Anda harus mengisi form terlebih dahulu!")</script>
    <meta http-equiv="refresh" content="0; url=form-nilai.php">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Hasil Nilai Mahasiswa</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th width="30%">Nama</th>
                        <td><?=$_POST['nama'] ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td><?=$_POST['nim'] ?></td>
                    </tr>
                    <tr>
                        <th>Rombel</th>
                        <td><?=$_POST['rombel'] ?></td>
                    </tr>
                    <tr>
                        <th>Mata Kuliah</th>
                        <td><?=$_POST['matkul'] ?></td>
                    </tr>
                    <tr>
                        <th>Nilai Tugas</th>
                        <td><?=$_POST['tugas'] ?></td>
                    </tr>
                    <tr>
                        <th>Nilai UTS</th>
                        <td><?=$_POST['uts'] ?></td>
                    </tr>
                    <tr>
                        <th>Nilai UAS</th>
                        <td><?=$_POST['uas'] ?></td>
                    </tr>
                    <tr>
                        <th>Predikat</th>
                        <td>
                            <?php
                            $tugas = $_POST['tugas'] * (35/100);
                            $uts = $_POST['uts'] * (30/100);
                            $uas = $_POST['uas'] * (35/100);
                            $total = $tugas + $uts + $uas;

                            if ($total <= 35) {
                                $pred = "E";
                            } elseif ($total <= 55) {
                                $pred = "D";
                            } elseif ($total <= 69) {
                                $pred = "C";
                            } elseif ($total <= 84) {
                                $pred = "B";
                            } elseif ($total <= 100) {
                                $pred = "A"; 
                            } else {
                                $pred = "Tidak diketahui";
                            }
                            echo "<span class='font-weight-bold'>$pred</span>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>
                            <?php
                            switch ($pred) {
                                case "A":
                                    echo "<span class='badge badge-success'>Sangat Baik</span>";
                                    break;
                                case "B":
                                    echo "<span class='badge badge-primary'>B aja</span>";
                                    break;
                                case "C":
                                    echo "<span class='badge badge-warning'>Cukup</span>";
                                    break;
                                case "D":
                                    echo "<span class='badge badge-danger'>Kurang</span>";
                                    break;
                                case "E":
                                    echo "<span class='badge badge-dark'>Sangat Kurang</span>";
                                    break;
                                default:
                                    echo "<span class='badge badge-secondary'>Tidak Diketahui</span>";
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
