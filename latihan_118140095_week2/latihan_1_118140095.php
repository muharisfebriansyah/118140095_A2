<!DOCTYPE htm>
<html>
    <head>
        <style>
            form input{
                padding: 15px;
                margin: 5px;
            }
            form button{
                padding: 15px;
                margin: 5px;
                font-style: bold;
                color: #fff;
                background: #495464;
            }

            form button:hover{
                background: #bbbfca;
            }
        </style>
    </head>
    <body>
        <h1>Kalkulator</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="bil1" placeholder="Bilangan 1" required><br>
            <input type="text" name="bil2" placeholder="Bilangan 2" required><br>
            <button type="submit" name="hitung">Hitung</button>
        </form><br><br>
        <?php
            if(isset($_POST['hitung'])){
                $operator = ['+', '-', '*', '/', '%'];
        ?>
        <?php
            echo "Bilangan 1 = " .$_POST['bil1'];
            echo "<br>Bilangan 2 = " .$_POST['bil2'] ."<br>";
        ?>
        <?php  
                foreach($operator as $operators){
                    switch($operators){
                    case "+":
                        $hasil = $_POST['bil1'] + $_POST['bil2'];
                        echo "<br>";
                        echo "PENJUMLAHAN"; 
                        echo "<br>operators : " .$operators;
                        echo "<br>Hasil : " .$hasil. "<br>";
                    break;
                    case "-":
                        $hasil = $_POST['bil1'] - $_POST['bil2'];
                        echo "<br>";
                        echo "PENGURANGAN";
                        echo "<br>operators : " .$operators;
                        echo "<br>Hasil : " .$hasil."<br>";
                    break;
                    case "*":
                        $hasil = $_POST['bil1'] * $_POST['bil2'];
                        echo "<br>";
                        echo "PERKALIAN";
                        echo "<br>operators : " .$operators;
                        echo "<br>Hasil : " .$hasil."<br>";
                    break;
                    case "/":
                        $hasil = $_POST['bil1'] / $_POST['bil2'];
                        echo "<br>";
                        echo "PEMBAGIAN";
                        echo "<br>operators : " .$operators;
                        echo "<br>Hasil : " .$hasil."<br>";
                    break;
                    case "%":
                        $hasil = $_POST['bil1'] % $_POST['bil2'];
                        echo "<br>";
                        echo "MODULUS";
                        echo "<br>operators : " .$operators;
                        echo "<br>Hasil : " .$hasil."<br>";
                    break;
                    }
                }
                
                
            }
        ?>
    </body>
</html>