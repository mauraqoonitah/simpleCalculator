<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Count</title>

</head>

<body>
    <section style="margin:12px;">
        <h3> &#9734; Masukkan Bilangan untuk melihat Bintang! &#9734;</h3>
        <form action="" method="POST">
            Jumlah Bilangan =

            <input type="text" name="star">
            <br>
            <input type="submit" name="submit" value="Kirim">
        </form>

        <?php
        //jika tombol kirim ditekan
        if (isset($_POST['submit'])) {
            // ambil input dari form
            $star = $_POST['star'];

            //pengulangan baris bintang
            for ($barisBintang = 1; $barisBintang <= $star; $barisBintang++) {
                //pengulangan jumlah bintang
                for ($jmlBintang = 1; $jmlBintang <= $barisBintang; $jmlBintang++) {
                    echo " &#9733;";
                }
                echo "<br>";
            }
        } ?>
    </section>

</body>

</html>