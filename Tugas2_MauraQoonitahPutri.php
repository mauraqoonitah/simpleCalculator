<?php
echo "====== CETAK BILANGAN GANJIL GENAP 1-100 ======" . "<br>";
//looping bilangan 1-100
for ($bil = 1; $bil <= 100; $bil++) {
    //kondisi jika bilangan adalah genap
    if ($bil % 2 == 0) {
        echo "$bil adalah bilangan genap <br>";
    }//kondisi jika bilangan adalah ganjil
    else {
        echo "$bil adalah bilangan ganjil <br>";
        }
}
