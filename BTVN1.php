<?php

// bài 1:Viết chương trình giải phương trình bậc nhất ax^2 + bx + c = 0 với a,b và c là 3 giá trị truyền vào biến $a, $b, $c.
echo "Bài 1:<br>";
$a = 1;
$b = 5;
$c = 4;
$denta = pow($b, 2) - 4*$a*$c;
$nk = -$b/2*$a;
$x1 = (-$b+sqrt($denta))/2*$a;
$x2 = (-$b-sqrt($denta))/2*$a;

if ($denta < 0) {
	# code...
	echo "Phương trình vô nghiệm <br>";
}
if ($denta == 0) {
	# code...
	echo "Phương trình có nghiệm kép:$nk <br>";
}
if ($denta>0) {
	# code...
	echo "Phương trình có 2 nghiệm: $x1, $x2<br>";
 	}
  //bài 2: Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!
	echo "Bài 2:<br>";
	$gt = 1;
	$n = 3;
	$kq =0;
 	for ($i=1; $i <=$n ; $i++) { 
 		 			$gt *=$i;
 		 			$kq +=$i/$gt;
 	}
 	echo "Tổng S = $kq<br>";
 //bài 3: In ra bảng cửu chương dùng vòng lặp for
	echo "Bài 3:";
	for ($i=2; $i<10 ; $i++) { 
		echo "<br>";

		# code...
		for ($j=1; $j<=10  ; $j++) { 
		# code...
			echo "$i x $j =".$i*$j."<br>";
		}
	}
//bài 4:Khởi tạo mảng $arr = array(1,4,2,6,9,100,45,8,20); Tìm phần tử lớn nhất của mảng !
	echo "Bài 4: <br>";
	$arr = array(14,2,6,9,100,45,8,20);
	$maxarr =0;
	for ($i=0; $i <count($arr) ; $i++) 
	{ 
		if( $arr[$i] > $maxarr )
		 {
			$maxarr=$arr[$i];
		}
	}
	echo "phẩn tử lớn nhất của mảng là :$maxarr<br>";

//bài 5: in theo thứ tự ngược các phần tử của mảng
	echo "Bài 5: <br>";
	 $arr1 = array(1,4,2,6,9,100,4,);
	 for ($i=(count($arr1)-1); $i >=0 ; $i--) { 
	 	# code...
	 	echo "$arr1[$i]  ";
	 }




 ?>