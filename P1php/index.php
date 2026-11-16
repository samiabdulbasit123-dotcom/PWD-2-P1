<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban Latihan PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        .header-hijau {
            background-color: #00FF00;
        }
    </style>
</head>
<body>

nomor 1
    
    <p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        ?>
    </p>

    <br>

nomor 2
    <table>
        
        <tr>
            <th class="header-hijau">bilangan</th>
            <?php for ($j = 1; $j <= 10; $j++): ?>
                <th class="header-hijau"><?= $j ?></th>
            <?php endfor; ?>
        </tr>

        
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <th class="header-hijau"><?= $i ?></th>
                
              
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <?php 
                        $hasil = $i * $j;
                        $bgColor = ($hasil % 2 != 0) ? '#FFFF00' : '#00FFFF';
                    ?>
                    <td style="background-color: <?= $bgColor ?>;"><?= $hasil ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>