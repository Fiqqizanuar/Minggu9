<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
    <style>
        body {
            font-family: 'Franklin Gothic', Arial, sans-serif;
            padding: 20px;
        }

        .baris {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .kolom {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
        }


        .kotak {
            background-color: #fff;
            margin-top: 20px;
            padding: 10px;
            border-radius: 3px;
            box-shadow: 0 1px 40px 0 rgb(0 0 0 / 30%);
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .kotak img {
            width: 400px;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <h1>Detail Mobil</h1>
    <div class="kotak">
        <div class="baris">
            <img src="<?= $_GET['gambar'] ?>" />
            <table>
                <tr>

                    <td colspan="3">
                        <h1><?= $_GET['nama'] ?></h1>
                    </td>
                </tr>
                <tr>
                    <td>Transmisi</td>
                    <td>:</td>
                    <td><?= $_GET['transmisi'] ?></td>
                </tr>
                <tr>
                    <td>Mesin</td>
                    <td>:</td>
                    <td><?= $_GET['mesin'] ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><?= $_GET['harga'] ?></td>
                </tr>
            </table>
        </div>
    </div>
    <a href="latihan1.php">Kembali ke Halaman Sebelumnya</a>
</body>

</html>