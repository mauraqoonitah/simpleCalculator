<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // set default input bilangan
    $bilangan1 = '';
    $bilangan2 = '';

    // kondisi jika tombol hitung diklik
    if (isset($_POST['hitung'])) {

        //kondisi jika input kedua bilangan sudah terisi
        if (isset($_POST['bilangan1']) && ($_POST['bilangan2'])) {

            $bilangan1 = $_POST['bilangan1'];
            $bilangan2 = $_POST['bilangan2'];

            // fungsi penjumlahan
            function penjumlahan($bilangan1, $bilangan2)
            {
                // perhitungan penjumlahan kedua bilangan
                $penjumlahan = ($bilangan1 + $bilangan2);
                echo $penjumlahan;
            }

            // fungsi pengurangan
            function pengurangan($bilangan1, $bilangan2)
            {
                // perhitungan pengurangan kedua bilangan
                $pengurangan = ($bilangan1 - $bilangan2);
                echo $pengurangan;
            }

            // fungsi perkalian
            function perkalian($bilangan1, $bilangan2)
            {
                // perhitungan perkalian kedua bilangan
                $perkalian = $bilangan1 * $bilangan2;
                echo $perkalian;
            }

            // fungsi pembagian
            function pembagian($bilangan1, $bilangan2)
            {
                // perhitungan pembagian kedua bilangan
                $pembagian =  $bilangan1 / $bilangan2;
                echo $pembagian;
            }
        } else {
            echo '<script type="text/javascript">alert("Bilangan masih kosong!");</script>';
        }
    }
    ?>

    <section>
        <div class="container">
            <h1 class="text-center">Kalkulator Sederhana</h1>

            <div class="box center">
                <div class="box-input">
                    <div class="box-input1">
                        <p>Bilangan Pertama : </p>
                        <div class="box-input-bil1">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formHitung">
                                <input type="number" name="bilangan1" placeholder="..." value="<?php echo (isset($_POST['hitung'])) ? $bilangan1 : ''; ?>">
                        </div>

                    </div>
                    <div class="box-input2">
                        <p>Bilangan <br>Kedua :</p>
                        <div class="box-input-bil2">
                            <input type="number" name="bilangan2" placeholder="..." value="<?php echo (isset($_POST['hitung'])) ? $bilangan2 : ''; ?>">

                        </div>
                    </div>
                </div>

                <div class="container btn-hitung-box">
                    <button type="submit" name="hitung" class="btn-hitung">Hitung</button>
                </div>

                <div class="container center hasil-box">
                    <p class="text-box text-center">Hasil Perhitungan</p>
                    <div class="hasil-row">
                        <div class="hasil-row-symbol-1">
                            <p class="symbol">+</p>
                        </div>

                        <div class="hasil-row-angka-1">
                            <p class="hasil">
                                <?php
                                if (isset($_POST['bilangan1']) && ($_POST['bilangan2'])) {
                                    penjumlahan($bilangan1, $bilangan2);
                                }
                                ?>
                            </p>
                        </div>

                        <div class="hasil-row-symbol-2">
                            <p class="symbol">-</p>
                        </div>

                        <div class="hasil-row-angka-2">
                            <p class="hasil">
                                <?php
                                if (isset($_POST['bilangan1']) && ($_POST['bilangan2'])) {
                                    pengurangan($bilangan1, $bilangan2);
                                }
                                ?>
                            </p>
                        </div>
                        <div class="hasil-row-symbol-3">
                            <p class="symbol">x</p>
                        </div>

                        <div class="hasil-row-angka-3">
                            <p class="hasil">
                                <?php
                                if (isset($_POST['bilangan1']) && ($_POST['bilangan2'])) {
                                    perkalian($bilangan1, $bilangan2);
                                }
                                ?>
                            </p>
                        </div>
                        <div class="hasil-row-symbol-4">
                            <p class="symbol">:</p>
                        </div>

                        <div class="hasil-row-angka-4">
                            <p class="hasil">
                                <?php
                                if (isset($_POST['bilangan1']) && ($_POST['bilangan2'])) {
                                    pembagian($bilangan1, $bilangan2);
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <input type="reset" value="CLEAR">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>