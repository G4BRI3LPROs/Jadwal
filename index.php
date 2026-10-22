<?php
$Saldoawal = 1000000;
$Bunga = 0.03;
$bulan = 11;
$Saldoakhir = $Saldoawal + (($Saldoawal * $Bunga) * $bulan);
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp.".$Saldoakhir.",-";
?>