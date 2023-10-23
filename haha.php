<!DOCTYPE html>
<html>
    <head>
        <title>Penjumlahan dua angka</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin: 0 auto;
            width: 300px;
            text-align: left;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }

        input[type="submit"] {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #005D89;
        }

        div.result {
            margin-top: 20px;
            padding: 10px;
            background-color: #E5E5E5;
        }
    </style>
    </head>
    <body>
        <div class="grid text-center">
        <h1>kalkulator aja</h1>
        </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Angka Pertama: <input type="number" name="angka1"><br>
        Operasi: 
        <select name="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br>
        Angka Kedua: <input type="number" name="angka2"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operasi = $_POST["operasi"];
        
        $hasil = 0;
        
        switch ($operasi) {
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Tidak dapat membagi oleh nol.";
                }
                break;
        }
        
        echo "Hasil: " . $hasil;
    }
    ?>

    </body>
</html>
