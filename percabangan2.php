<?php

$tujuan = "Malang";
$jumlah_tiket = 5;

if ($tujuan == "Sidoarjo") {
  echo "Bayar = 5000";
} elseif ($tujuan == "Malang") {
  echo "Bayar = 8000";
} elseif ($tujuan == "Pasuruan") {
  echo "Bayar = 15000";
} else {
  echo "tujuan tidak diketahui";
}
