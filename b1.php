<?php

// Bài 1
function tuyet_doi($n) {
    return abs($n);
}

// Bài 2
function chia_lay_phan_du($a, $b) {
    return $a % $b;
}

// Bài 3
function fahrenheit_to_celsius($f) {
    return (5 / 9) * ($f - 32);
}

// Bài 4
function giai_phuong_trinh_bac_1($a, $b) {
    if ($a == 0) {
        if ($b == 0) {
            return "Phương trình vô số nghiệm";
        } else {
            return "Phương trình vô nghiệm";
        }
    } else {
        $x = -$b / $a;
        return "Nghiệm của phương trình là: x = $x";
    }
}

// Bài 5
function tim_max($a, $b, $c) {
    return max($a, $b, $c);
}

// Bài 6
function tong_chu_so($n) {
    $tong = 0;
    while ($n > 0) {
        $tong += $n % 10;
        $n = (int)($n / 10);
    }
    return $tong;
}

// Bài 7
function chuyen_doi_gio($thoi_gian) {
    $gio = (int)($thoi_gian / 3600);
    $phut = (int)(($thoi_gian % 3600) / 60);
    $giay = $thoi_gian % 60;

    return "$gio giờ, $phut phút, $giay giây";
}

// Bài 8
function thuoc_thuat_toan($n) {
    $result = [];
    while ($n != 1) {
        $result[] = $n;
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = $n * 3 + 1;
        }
    }
    $result[] = 1;
    return implode(' ', $result);
}

// Bài 9
function tim_so_thieu($n, $arr) {
    $tong_tat_ca = $n * ($n + 1) / 2;
    $tong_mang = array_sum($arr);
    return $tong_tat_ca - $tong_mang;
}


?>
