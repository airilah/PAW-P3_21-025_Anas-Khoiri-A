<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            padding: 100px;
            background-color: rgb(100, 200, 300) ;
            background-size: cover;
            font-family:sans-serif; 
        }
        fieldset {
            width: fit-content;
            background-color:rgb(185, 244, 244);
            margin: 0 auto;
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 30px;
            border: 3px solid black
        }
        legend {
            font-size: 40px;
            font-family:'Gill Sans';
        }
    </style>
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <fieldset> 
    <legend><b>Formulir Data Mahasiswa</b></legend> 
    <h2 id="isi"></h2> 
        <form method="post" action="formTujuan.php" name="form_mahasiswa">
            <label for="nama">Nama :</label> 
            <input type="text" name="nama" placerholder="Nama Anda"> 
            <p>
            <label for="nim">NIM :</label> 
            <input type="text" name="nim" placerholder="NIM Anda">
            <p>
            <label for="prodi">Program Studi :</label> 
            <input type="text" name="prodi" placerholder="Prodi Anda">
            <p>
            <label for="angkatan">angkatan :</label> 
            <input type="text" name="angkatan" placerholder="Angkatan Berapa">
            <p>
            <input type="submit" value="submit" name="submit">
        </form>
    </fieldset>               
</body>
</html>

