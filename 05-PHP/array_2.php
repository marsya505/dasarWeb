<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 14px 18px;
            text-align: left;
        }
        th {
            background-color: #1e88e5; 
            color: white;
            font-size: 18px;
        }
        tr:nth-child(even) {
            background-color: #f3f9ff; 
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        tr:hover {
            background-color: #e1f0ff; 
        }
        td {
            color: #333;
        }
    </style>
</head>
<body>
<?php
$Dosen = [
    'Nama' => 'Elok Nur Hamdana',
    'Domisili' => 'Malang',
    'Jenis Kelamin' => 'Perempuan'
];
?>

<table>
    <tr>
        <th>Field</th>
        <th>Data</th>
    </tr>
    <?php foreach ($Dosen as $key => $value): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
