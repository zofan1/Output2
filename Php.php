<html>
<head>
<title>Output  2</title>
</head>
<body>
    <?php
        function hitungUmur($thn_lahir, $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        }

        function pertama($nama, $salam="Assalamualaikum wr.wb"){
            echo $salam.", ";
            echo "Perkenalkan, nama saya ".$nama."<br/>";
            
            echo "Saya berusia ". hitungUmur(2002, 2022) ." tahun<br/>";
            echo "Senang berkenalan dengan anda<br/>";
        }

        function kedua($nama, $salam="Assalamualaikum wr.wb"){
            echo $salam.", ";
            echo "Perkenalkan, nama saya ".$nama."<br/>";
            
            echo "Saya berusia ". hitungUmur(2001, 2022) ." tahun<br/>";
            echo "Senang berkenalan dengan anda<br/>";
        }

        function ketiga($nama, $salam="Assalamualaikum wr.wb"){
            echo $salam.", ";
            echo "Perkenalkan, nama saya ".$nama."<br/>";
            
            echo "Saya berusia ". hitungUmur(2003, 2022) ." tahun<br/>";
            echo "Senang berkenalan dengan anda<br/>";
        }

        pertama("ZOFAN AFANDI");
        echo"<br/>";
        kedua("Daffa Ardiasyah");
        echo"<br/>";
        ketiga("Andyka Dimas Bayu Nugraha");
    ?>
    
</body>
</html>