

<?php
echo "Câu 1: ";
echo "<br>";
$n = -5;
$absoluteValue = abs($n);
echo "Giá trị tuyệt đối của $n là: $absoluteValue";
echo "<br>"
?>



<?php
echo "Câu 2: ";
echo "<br>";
$a = 15;
$b = 4;
$remainder = $a % $b;
echo "Kết quả chia lấy phần dư của $a cho $b là: $remainder";
echo "<br>"
?>

<?php
echo "Câu 3: ";
echo "<br>";
$fahrenheit = readline("Nhập vào nhiệt độ Fahrenheit: ");

$celsius = (5 / 9) * ($fahrenheit - 32);

echo "Nhiệt độ tương đương là: $celsius độ Celsius";
?>


<?php
$fahrenheit = readline("Nhập vào nhiệt độ Fahrenheit: ");

$celsius = (5 / 9) * ($fahrenheit - 32);

echo "Nhiệt độ tương đương là: $celsius độ Celsius";
?>



<?php
echo "<br>";
echo "Câu 4:";
echo "<br>";
$a = 2;
$b = 5;

if ($a == 0) {
    if ($b == 0) {
        echo "Phương trình có vô số nghiệm";
    } else {
        echo "Phương trình vô nghiệm";
    }
} else {
    $x = - ($b / $a);
    echo "Nghiệm của phương trình là x = $x";
}
?>



<?php
echo "<br>";
echo "Câu 5:";
echo "<br>";
$a = 5;
$b = 10;
$c = 7;
$maxValue = $a;


if ($b > $maxValue) {
    $maxValue = $b;
}


if ($c > $maxValue) {
    $maxValue = $c;
}

echo "Giá trị lớn nhất là: $maxValue";
?>



<?php

echo "<br>";
echo "Câu 6:";
echo "<br>";

echo "Nhập một số nguyên dương N có 2 chữ số: ";
$N = (int)trim(fgets(STDIN));


if ($N >= 10 && $N <= 99) {

    $tongChuSo = 0;
    $tongChuSo += $N % 10;
    $tongChuSo += (int)($N / 10);


    echo "Tổng các chữ số của $N là: $tongChuSo\n";
} else {
    echo "Vui lòng nhập một số nguyên dương có 2 chữ số.\n";
}

?>

<?php
echo "<br>";
echo "Câu 7:";
echo "<br>";
// Hàm chuyển đổi thời gian từ giây sang giờ, phút, giây
function chuyenDoiThoiGian($thoiGianGiay)
{
    $gio = floor($thoiGianGiay / 3600);
    $phut = floor(($thoiGianGiay % 3600) / 60);
    $giay = $thoiGianGiay % 60;

    return array('gio' => $gio, 'phut' => $phut, 'giay' => $giay);
}

// Nhập thời gian từ bàn phím
echo "Nhập thời gian (giây): ";
$thoiGianGiay = (int)trim(fgets(STDIN));

// Kiểm tra nếu thời gian nhập vào lớn hơn hoặc bằng 0
if ($thoiGianGiay >= 0) {
    // Gọi hàm chuyển đổi thời gian và lấy kết quả
    $thoiGianChuyenDoi = chuyenDoiThoiGian($thoiGianGiay);

    // Xuất kết quả
    echo "Thời gian chuyển đổi: ";
    echo $thoiGianChuyenDoi['gio'] . " giờ, ";
    echo $thoiGianChuyenDoi['phut'] . " phút, ";
    echo $thoiGianChuyenDoi['giay'] . " giây\n";
} else {
    echo "Vui lòng nhập một thời gian không âm.\n";
}

?>
