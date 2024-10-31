<?php
    // $nama = "Arfan Arrasyid";
    // echo"$nama <br>";
    // echo"Hallo nama saya " . $nama . ",<br>" . "Saya sedang belajar PHP";


    // Double Quote
    // \n : berfungsi untuk Enter
    // \t : berfungsi untuk TAB
    // echo"nama :";
    // echo"Arfan Arrasyid Ramadhan";
    // echo"\n";

    // echo"nama :";
    // echo"Arfan\tArrasyid\tRamadhan\n";


    // Heredoc
    // fitur untuk membuat string yg panjang, sehingga kita tidak perlu manual melakukan enter,tab dll
    // Membuat seperti var, tetapi bedanya langsung menampilkan
    // echo <<<Arfan
    // ini adalah contoh string yang sangat panjang, dan juga gak perlu ngetik ENTER secara manual, "bisa quote" juga
    // Arfan;


    // Tipe Data Integer
    // echo "Decimal :";
    // var_dump(1234);
    // echo "Octal :";
    // var_dump(0123);
    // echo "Hexadecimal :";
    // var_dump(0x1A);
    // echo "Binary :";
    // var_dump(0b11111111);
    // echo "Underscore di number";
    // var_dump(1_234_567);


    // $buah = ['durian', 'mangga', 'jeruk', 'nanas'];

    // $budi = [
    //     "id" => "Budi",
    //     "nama" => "Afandi",
    //     "age" => 17
    // ];

    // // print_r($buah);

    // // echo $buah[2]. <br>;

    // // print_r($budi);

    // // // Metode Array untuk mengambil array yang unik
    // // // _reverse untuk membalik array
    // // // shuffle untuk mengacak array
    // // // count untuk menghitung jumlah array
    // // // sort untuk mengurutkan huruf atau angka

    // shuffle($budi);
    // print_r($budi);


    //for each
    // $person = [
    //     "first_name" => "Arfan",
    //     "middle_name" => "Arrasyid",
    //     "last_name" => "Ramadhan",
    // ];

    // foreach ($person as $key => $value) {
    //     echo "------------";
    //     echo $key . " : " . $value;
    //     echo "------------ <br>";
    // }


    // Do While Loop
    // $counter = 1;

    // do {
    //     echo "Hello While Loop : " . $counter . "<br>";
    //     $counter++;
    // } while ($counter <= 10);


    // Switch Statement
    // $nilai = "A";

    // switch ($nilai) {
    //     case 'A':
    //         echo "Anda lulus dengan sangat baik";
    //         break;
    //     case 'B':
    //     case 'C':
    //         echo "Anda lulus";
    //         break;
    //     case 'D':
    //         echo "Anda tidak lulus";
    //         break;
    //     default:
    //         echo "Mungkin anda salah jurusan";
    // }; 


    // Function Return
    // function menghitung(int $first, int $last)
    // {
    //     $z = $first + $last;
    //     return $z;
    // }

    // echo "Hasil dari penjumlahan " . menghitung(10, 10);


    //tugas
    // function usia($umur)
    // {
    //     if ($umur <= 0) {
    //         echo"belum lahir";
    //     }elseif($umur <= 12) {
    //         echo"Anak";
    //     } elseif($umur <= 19) {
    //         echo"Remaja";
    //     } elseif($umur <= 99) {
    //         echo"Dewasa";
    //     } elseif($umur >= 100) {
    //         echo "buyut";
    //     } else {
    //         echo"umur tidak diketahui";
    //     }
    // };

    // usia(-1)


    $Total_belanja = 150;
    function toko($belanja) {
        $diskon = 0;
        if ($belanja > 100 ) {
            $diskon = 0.1 * $belanja;
        } 
        return $belanja - $diskon;
    }

        $total_setelah_diskon = toko($Total_belanja);

        echo"Total belanja anda : " . $Total_belanja . "<br>";
        if ($Total_belanja  > 100) {
            echo "Anda mendapatkan diskon 10%<br>";
            echo "Total belanja yang harus anda bayar : " . $total_setelah_diskon . "<br>";
        } else {
            echo "Anda tidak mendapatkan diskon <br>";
            echo "Total belanja yang harus anda bayar : " . $total_setelah_diskon;
        };
    
?>