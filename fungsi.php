<?php
// fungsi tanpa parameter
function hello() { 
    echo "selanat datang<br>";
}
// memanggil fungsi
hello();

// fungsi dengan parameter
function hello2($waktu) {
    echo "selamat $waktu<br>";
}
// memanggil fungsi
hello2("malam");

// fungsi dengan 2 parameter
function penjumlahan($nilai1, $nilai2) {
    $hasil=$nilai1+$nilai2;
    return $hasil;
}
// memanggil fungsi
echo "hasil penjumlahan 8 dan 7 adalah :", penjumlahan(8,7);

// fungsi dengan 2 parameter dengan if else
function cekUmur($nama, $usia) {
    if($usia<18) {
        echo "<br>Hallo $nama, bayar separuh";  
    } else {
        echo "<br>Hallo $nama, bayar full<br>";
    } 
}
// memanggil fungsi
cekUmur("aril", 18);

// fungsi dengan beberapa parameter dengab if else
function cekTiket($tujuan, $tiket, $kelas, $eksekutif, $harga = array(5000, 8000, 15000)) {

    if ($tujuan == "Sidoarjo") {
        if ($kelas == 'Eksekutif') {
          echo "Harga ke Sidoarjo = ", $harga[0] * $eksekutif;
          echo "<br>";
          echo "Harga ke Sidoarjo dengan $tiket tiket = ", $harga[0] * $tiket * $eksekutif;
        } else {
          echo "Harga ke Sidoarjo = $harga[0]";
          echo "<br>";
          echo "Harga ke Sidoarjo dengan $tiket tiket = ", $harga[0] * $tiket;
        }
      } elseif ($tujuan == "Malang") {
        if ($kelas == 'Eksekutif') {
          echo "Harga ke Malang = ", $harga[1] * $eksekutif;
          echo "<br>";
          echo "Harga ke Malang dengan $tiket tiket = ", $harga[1] * $tiket * $eksekutif;
        } else {
          echo "Harga ke Malang = $harga[1]";
          echo "<br>";
          echo "Harga ke Malang dengan $tiket tiket = ", $harga[1] * $tiket;
        }
      } elseif ($tujuan == "Pasuruan") {
        if ($kelas == 'Eksekutif') {
          echo "Harga ke Pasuruan = ", $harga[2] * $eksekutif;
          echo "<br>";
          echo "Harga ke Pasuruan dengan $tiket tiket = ", $harga[2] * $tiket * $eksekutif;
        } else {
          echo "Harga ke Pasuruan = $harga[2]";
          echo "<br>";
          echo "Harga ke Pasuruan dengan $tiket tiket = ", $harga[2] * $tiket;
        }
      }
}
// memanggil fungsi
cekTiket("Sidoarjo", 7, "Eksekutif", 2);