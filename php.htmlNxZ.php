<!DOCTYPE html>
<html lang="en">
    <head> 
    </head>
    <body>
    <p>
        <p>Tugas PHP-Nanda x Zaky</p>
        <?php 
       $a = 5;
       $b = 10;

       if ($a > $b) {
        echo 'a lebih besar dari b';
       }else {
        echo '"Manusia Hanyalah Sebuah Alat!!!"';
       }
        ?>
        </p>
        <p>-Ayanokoji Kiyotaka-</p>

    <p>
        <p>SOAL</P>
        <p>1.Tampilkan Perulangan bilangan genap dari 100-0!</p>

    <?php
    $i = 100;
    while ($i >= 0){
        echo "$i";
        echo ",";
        $i-=2;
    }
    ?>
    </p>
    <p>
        <p>2. Tampilkan Bilangan yang mempunyai angka 8 bilangan maksimal 100!</p>
    <?php
    for($i=8; $i <= 100; $i=$i+10){
        echo $i;
        echo ",";
    }
    ?>
    </p>
    </body>
</html>