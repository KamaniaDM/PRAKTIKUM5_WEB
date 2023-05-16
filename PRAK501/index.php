<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Perpustakaan</title>
    <style>
        body {
            background-color: #FFEFD5;
        }
        table, td, th {
            margin-left:auto;
            margin-right:auto;
            border:3px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
            background-color: #D2B48C;
        }
        input:hover {
            cursor: pointer;
            border: 5px solid black;
        }
        button:hover, button:focus {
            background-color: purple;
            color: white;
            cursor: pointer;
            border-radius: 9px;
        }
        button {
            background-color: #e38eff;
            border-color: #d3d3d3;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            transition: transform 100ms ease-in-out;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">PERPUSTAKAAN</h2>
    <br>
    <table style="margin-left:auto;margin-right:auto;border:2px black;">
        <tr>
            <th>Buku</th>
            <th>Member</th>
            <th>Peminjaman</th>
        </tr>
        <tr>
            <td><a href="Buku.php"><button type="submit" name="submit" value="Simpan">Tambah Buku</button></a></td>
            <td><a href="Member.php"><button type="submit" name="submit" value="Simpan">Tambah Member</button></a></td>
            <td><a href="Peminjaman.php"><button type="submit" name="submit" value="Simpan">Tambah Peminjaman</button></a></td>
        </tr>
    </table>
</body>
</html>