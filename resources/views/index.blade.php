<?php
    use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
            <div class="col">
    <?php
        $querys = DB::select("SELECT * FROM data_hardy WHERE student_id = '03081200035'");
        foreach ($querys as $data) {
            $studentid = $data->student_id;
            $nama = $data->nama;
            $kode_term = $data->term;
            $total_sks = $data->total_sks;
            echo "
                <div class='row'>
                    <div class='col'>
                        Nama:    
                    </div>   
                    <div class='col'>
                        $nama
                    </div> 
                </div>
                <div class='row'>
                    <div class='col'>
                        NIM:    
                    </div>   
                    <div class='col'>
                        $studentid
                    </div> 
                </div>
                <div class='row'>
                    <div class='col'>
                        Term:    
                    </div>   
                    <div class='col'>
                        $kode_term
                    </div> 
                </div>
                <div class='row'>
                    <div class='col'>
                        Total SKS:    
                    </div>   
                    <div class='col'>
                        $total_sks
                    </div>
                </div>
            ";
        }
    ?>
            </div>
            <div class="col">
                <img src="img/Hardy_03081200035.jpeg" width="200" height="200" class="img-thumbnail"/>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <h6>Matakuliah yang diambil</h6>
    <table class="table table-stripe">
        <tr>
            <th>No.</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Nilai</th>
        </tr>
        <?php
            $matakuliah = DB::select("SELECT * FROM matkul_detail WHERE StudentID = '03081200035'");
            $no = 1;
            foreach($matakuliah as $kuliah){
                $kode_matkul = $kuliah->kode_matkul;
                $nama_matkul = $kuliah->nama_matkul;
                $sks = $kuliah->sks;
                $huruf = $kuliah->huruf;
                echo "
                    <tr>
                        <td>$no</td>
                        <td>$kode_matkul</td>
                        <td>$nama_matkul</td>
                        <td>$sks</td>
                        <td>$huruf</td>
                    </tr>
                ";
                $no ++;
            }
        ?>
    </table>
</body>
</html>