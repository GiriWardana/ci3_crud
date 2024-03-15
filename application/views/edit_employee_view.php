<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='6'%3E%3Cpath d='M6 0L0 6h12L6 0z' fill='%23000'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position-x: calc(100% - 10px);
            background-position-y: 50%;
            background-size: 8px 6px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data Karyawan</h1>
        <form method="post" action="<?php echo base_url('index.php/employees/edit/'.$employee['No']); ?>">
            <label for="NIP">NIP:</label>
            <input type="text" id="NIP" name="NIP" value="<?php echo $employee['NIP']; ?>" required>

            <label for="Nama">Nama:</label>
            <input type="text" id="Nama" name="Nama" value="<?php echo $employee['Nama']; ?>" required>

            <label for="Jenis_Kelamin">Jenis Kelamin:</label>
            <select id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                <option value="Laki-laki" <?php if($employee['Jenis_Kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if($employee['Jenis_Kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            </select>

            <label for="Jabatan">Jabatan:</label>
            <input type="text" id="Jabatan" name="Jabatan" value="<?php echo $employee['Jabatan']; ?>" required>

            <label for="Tanggal_Aktif_Jabatan">Tanggal Aktif Jabatan:</label>
            <input type="date" id="Tanggal_Aktif_Jabatan" name="Tanggal_Aktif_Jabatan" value="<?php echo $employee['Tanggal_Aktif_Jabatan']; ?>" required>

            <label for="Tanggal_Masuk">Tanggal Masuk:</label>
            <input type="date" id="Tanggal_Masuk" name="Tanggal_Masuk" value="<?php echo $employee['Tanggal_Masuk']; ?>" required>

            <label for="Status_Karyawan">Status Karyawan:</label>
            <select id="Status_Karyawan" name="Status_Karyawan" required>
                <option value="Aktif" <?php if($employee['Status_Karyawan'] == 'Aktif') echo 'selected'; ?>>Aktif</option>
                <option value="Non-Aktif" <?php if($employee['Status_Karyawan'] == 'Non-Aktif') echo 'selected'; ?>>Non-Aktif</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

