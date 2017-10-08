<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ДЗ №3</title>
	<style>
	.first_task {
		border: 1px solid #000; 
		border-collapse: collapse;
	}

	* {
		box-sizing: border-box;
	}
	body {
		font-family: Tahoma;
	}
	header {
		background-color: #D9EDF7;
	}
	main {
		margin-top: 40px;
		margin-bottom: 100px;
	}
	.wrap {
		margin: 0 auto;
		max-width: 1160px;
		display: flex;
	}
	.menu a {
		display: inline-block;
		padding: 10px; 
		color: #2F7DBA; 
		text-decoration: none;
	}
	.aside {
		border: 1px solid #E4E5E5;
		border-radius: 3px;
		min-width: 250px;
		flex-grow: 1;
		//outline: 2px solid green;
		align-self: flex-start;
	}
	.aside h3 {
		background-color: #C9E7FC;
		line-height: 50px;
		margin: 0;
		text-align: center;
	}
	.aside ul li a {
		color: #2F7DBA; 
		text-decoration: none;
	}

	.container {
		border: 1px solid #E4E5E5;
		border-radius: 3px;
		display: flex;
		flex-wrap: wrap;
		flex-grow: 3;
		justify-content: center;
		//padding-right: 50px;
	}
	.container h2 {
		width: 100%;
		margin: 40px;

	}
	.box {
		border: 1px solid black;
		padding: 20px 25px;
		display: flex;
		position: relative;
		flex-direction: column;
		align-items: center;
		justify-content: space-between;
		text-align: center;
		flex-basis: 200px;
		margin: 0 25px 30px;
	}
	.box > a {
		color: #7DC0FF; 
		margin: 10px 0;
	}

	.stock{
		margin-top: auto;
		margin-bottom: 0;
	}
	.price {
		font-size: 18px;
		font-weight: bold;
		margin: 5px 0;
	}
	.created {
		position: absolute;
		top: 0;
		right: 0;
	}

	</style>
</head>
<body>
	


<!-- ЗАДАЧА №1 -->
<?php 
mb_internal_encoding("UTF-8");


echo 'ЗАДАЧА №1 <br><br>';

$area_height = 10;
$area_width = 10;
echo '<table class="first_task">'; 
for ($i = 0; $i < $area_height; $i++) { 
	echo "<tr>"; 
	for ($j = 0; $j < $area_width; $j++) { 
		$color = (($j + $i) % 2 != 0) ? "black" : "white"; 
		echo '<td style="width: 25px; height: 25px; background-color: '.$color.'"></td>'; 
	} 
	echo "</tr>"; 
} 
echo "</table>";
echo "<hr>";




// ЗАДАЧА #2
echo 'ЗАДАЧА №2 <br><br>';

$arr = array();
$amount = 0;
for ($i=0; $i < 10; $i++) { 
	$arr[] = rand(1, 10);
}
echo implode(", ", $arr) . ' - созданный массив' . '<br>'; 
echo count($arr) . ' - количество значений в массиве' . '<br>';

// Это первый вариант к которому я пришел
// foreach ($arr as $key => $value) {
// 	if ((($key + 1) % 3) == 0) {
// 		$amount += $value;
// 		echo $value.' ';
// 	}
// }

//Это второй вариант
$num = 1;
foreach($arr as $value){
	if(($num % 3) == 0){
		$amount += $value;
		echo $value.' ';
	}
	$num++;
}

echo ' - каждое третье число'.'<br>';
echo $amount . ' - сумма каждого третьего значения в массиве'.'<br>' ;
echo "<hr>";




// ЗАДАЧА #3
echo 'ЗАДАЧА №3 <br><br>';

$arr = array();
for ($i=0; $i < 10; $i++) { 
	$a = in_array($arr[] = rand(1, 10), $arr);
	$a = ($a) ? "true &nbsp;" : "false ";
	echo $a;
}
echo "<br>";
echo implode("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ", $arr) . ' - созданный массив' . '<br>'; 
echo "<hr>";




// ЗАДАЧА #4
echo 'ЗАДАЧА №4 <br><br>';

$arr1 = array();
for ($i=0; $i < 20; $i++) { 
	$arr1[] = rand(1, 20);
}

$arr2 = array();
for ($i=0; $i < 20; $i++) { 
	$arr2[] = rand(1, 20);
}
echo '<pre>';
print_r($arr1);
print_r($arr2);
print_r(array_diff($arr1, $arr2));
echo '</pre>';
echo "<hr>";
?>


<div class="qwerty">
	<p>ЗАДАЧИ №5 и 6</p>
	<header>
		<div class="wrap">

			<?php  // ЗАДАЧА #5
			include 'data_pages.php';
			?>
			
		</div>
	</header>
	<main>
		<div class="wrap">
			<div class="aside">
				<h3>Категории</h3>
				<?php include 'data_categories.php'; ?>
			</div>
			<div class="container">
				<h2>Детские товары</h2>
				<?php include 'data_products.php'; ?>
			</div>
		</div>
	</main>
</div>
















<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>