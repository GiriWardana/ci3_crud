<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        td:last-child {
            text-align: center;
        }
        a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .delete-link {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Karyawan</h1>
        <a href="<?php echo base_url('index.php/employees/add'); ?>" style="display: block; margin-bottom: 20px;">Tambah Karyawan</a>
        <table border="0">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Tanggal Aktif Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status Karyawan</th>
                <th>Action</th>
            </tr>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo $employee['No']; ?></td>
                    <td><?php echo $employee['NIP']; ?></td>
                    <td><?php echo $employee['Nama']; ?></td>
                    <td><?php echo $employee['Jenis_Kelamin']; ?></td>
                    <td><?php echo $employee['Jabatan']; ?></td>
                    <td><?php echo $employee['Tanggal_Aktif_Jabatan']; ?></td>
                    <td><?php echo $employee['Tanggal_Masuk']; ?></td>
                    <td><?php echo $employee['Status_Karyawan']; ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/employees/edit/'.$employee['No']); ?>">Ubah</a>
                        <a href="<?php echo base_url('index.php/employees/delete/'.$employee['No']); ?>" class="delete-link" onclick="return confirm('Apakah anda ingin menghapus data karyawan atas nama <?php echo $employee['Nama']; ?>?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
