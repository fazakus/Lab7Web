<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>
    <h1>Tugas Praktikum</h1>
    <form method="post" action="">
            <label>Nama: </label> 
            <input type="text" name="nama"><br>
            <label>Tanggal lahir: </label> 
            <input type="date" name="tgllahir"><br>
            <label for ="pekerjaan">Pekerjaan: </label>
            <select name="pekerjaan">
                <option value="kosong" selected>Pilih Pekerjaan</option>
                <option value="opr">Operator</option>
                <option value="spv">Supervisor</option> 
                <option value="mgr">Manager</option>
                <option value="tidak">Tidak Bekerja</option>
                <br>
            <input name="simpan" type="submit" value="Kirim">
            <hr>
    </form>
    
    <?php 
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $tgllahir = $_POST['tgllahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $pisahtgl = explode('-',$tgllahir);
        $tahunlahir = $pisahtgl[0];
        $tahunskrg = date('Y');
        
        $umur = $tahunskrg-$tahunlahir; 

        if ($pekerjaan == 'opr'){
            $kerja = 'Operator';
            $gaji = '5.000.000';
        }else if($pekerjaan == 'spv'){
            $kerja = 'Supervisor';
            $gaji = '7.500.000';
        }else if($pekerjaan == 'mgr'){
            $kerja = 'Manager';
            $gaji = '10.000.000';
        }else if ($pekerjaan == 'tidak'){
            $kerja = 'Anda tidak memiliki pekerjaan';
            $gaji = 0;
        }else {
            $kerja = 'Anda belum memilih pekerjaan';
            $gaji = 0;
        }
        echo 'Nama saya adalah '.$nama.'<br>';
        echo 'Umur saya '. $umur.' tahun <br>';
        echo 'Pekerjaan saya adalah '.$kerja.'<br>';
        echo 'Gaji saya adalah Rp '.$gaji;
    }
    ?>
</body>
</html>