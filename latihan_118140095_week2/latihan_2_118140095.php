<!DOCTYPE html>
<html>
<head>
    <title>Nomor 2</title>
</head>
<body>
    <?php
        $nama = [
            "lanirne", "fulan", "alexander",
            "napoleon", "kifuat", "samidi",
            "paijo", "dukindam", "aben", "udi"
        ];
        echo "Data acak: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
        echo "<br>";
        sort($nama);
        echo "<br>";
        echo "Data terurut: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
    ?>    
</body>
</html>