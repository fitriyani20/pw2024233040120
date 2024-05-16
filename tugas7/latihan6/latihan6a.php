<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
    <style>
        .number-box {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h2>Rangkaian Angka Terurut</h2>

    <?php
    if(isset($_GET['angka'])) {
        $angka = $_GET['angka'];
        if(is_numeric($angka) && $angka > 0 && $angka == round($angka)) {
            for($i = $angka; $i > 0; $i--) {
                echo "<div>";
                for($j = 1; $j <= $i; $j++) {
                    if ($i % 2 !== 0) {
                        $x = "white";
                    } else {
                        $x = "salmon";
                    }
                    echo "<div class='number-box'style='background-color: $x;'>$i</div>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>Nilai 'angka' harus berupa bilangan bulat positif.</p>";
        }
    } else {
        echo "<p>Parameter 'angka' tidak ditemukan.</p>";
    }
    ?>

</body>
</html>