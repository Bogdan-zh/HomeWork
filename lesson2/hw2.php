<?php 

// Д.З. №2. Богдан Жалдак.
//ЗАДАЧА №1

/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/

$hour = (int)strftime('%H');
//$hour = date('G'); // Такой вариант тоже подошел бы
$welcome = ''; // Инициализируем переменную для приветствия

if ($hour >= 0 and $hour <= 5) {
    $welcome = 'Доброй ночи';
} elseif ($hour >= 6 and $hour <= 11) {
    $welcome = 'Доброе утро';
} elseif ($hour >= 12 and $hour <= 17) {
    $welcome = 'Добрый день';
} elseif ($hour >= 18 and $hour <= 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброй ночи';
}

?>
<h1><?php echo $welcome ?>, Гость! </h1>

<!-- ЗАДАЧА №2 -->
<?php
$leftMenu = array(
    'home'=>'index.php', 
    'about'=>'about.php', 
    'contacts'=>'contact.php',
    'table'=>'table.php',
    'calc'=>'calc.php'
    );

    ?>
    <style>
       body {
          font-family: Tahoma;
      }
      .menu {
          background: black;
          margin: 0 -8px;
      }
      .menu li {
          list-style: none;
          display: inline-block;
      }
      .menu li a {
          padding: 10px 20px;
          font-size: 20px;
          text-decoration: none;
          display: block;
          color: white;
      }
      .menu li a:hover {
          text-decoration: underline;
      }
  </style>
  <ul class="menu">
   <li><a href="<?= $leftMenu['home']?>">Домой</a></li>
   <li><a href="<?= $leftMenu['about']?>">О нас</a></li>
   <li><a href="<?= $leftMenu['contacts']?>">Контакты</a></li>
   <li><a href="<?= $leftMenu['table']?>">Таблица</a></li>
   <li><a href="<?= $leftMenu['calc']?>">Калькулятор</a></li>
</ul>


<!-- ЗАДАЧА №3 -->
<?php 
echo "<br>";
$dayOfWeek = date('N');
switch ($dayOfWeek) {
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
  echo "Это рабочий день <br>";
  break;
  case '6':
  case '7':
  echo "Это выходной день <br>";
  break;
  default:
  echo "Неведомый мне день <br>";
  break;
}


// ЗАДАЧА №4 -->
echo "<hr>";
// 4.1
$firstNum = 10;
$secondNum = 20;
$res1 = $firstNum % 3;
$res2 = $secondNum % 5;
echo "Остаток от деления числа $firstNum на 3 = $res1 <br>";
echo "Остаток от деления числа $secondNum на 5 = $res2 <br>";



echo "<br>";
// 4.2
$thirdNum = 100;
echo "Увеличение числа $thirdNum, на 30%: " . $thirdNum * 1.3 . '<br>';
echo "Увеличение числа $thirdNum, на 120%: " . $thirdNum * 2.2 . '<br>';



echo "<br>";
//4.3
$num1 = 10;
$num2 = 100;
$num1 *= 0.4;
$num2 *= 0.84;
echo $num1 + $num2;



echo "<hr>";
// ЗАДАЧА №5
//5.1
$myNumber = 100;
//решил попробовать тернарный оператор
$myNumber = ($myNumber > 10) ? $myNumber += 100 : $myNumber -=30; 
echo "$myNumber <br>";



echo "<br>";
//5.2
$var = (int)10;
$var = ($var % 2 == 0) ? $var /= 2 : $var *= 3; 
echo $var . "<br>";



echo "<br>";
//5.3
$var = 51;
if ($var > 50) {
  echo $var = pow($var, 2) . "<br>";
} elseif ($var > 10 and $var < 30) {
    echo 0 . "<br>";
} else {
    echo "Ошибка <br>";
}



echo "<br>";
//5.4
$var1 = 1;
$var2 = 2;
$res = ($var1 > $var2) ? $var1 : $var2;
echo $res . "<br>";



echo "<br>";
//5.5
$var1 = 1;
$var2 = 101;
if (($var1 - $var2) == 100 or ($var2 - $var1) == 100) {
    echo 'Да' . "<br>";
} else {
    echo 'Нет' . "<br>";
}



echo "<br>";
//5.6
$var1 = 50;
$var2 = 5;
if ((($var1 > $var2) and ($var1 - $var2) < 20) or (($var2 > $var1) and ($var2 - $var1) < 20)){
    echo "Да <br>";
} else {
    echo "Нет <br>";
}



echo "<br>";
//5.6
//$month = 5; // либо так
$month = date("m"); // либо так
switch ($month) {
    case '03':
    case '04':
    case '05':
    echo "Текущий сезон весна <br>";
    break;

    case '06':
    case '07':
    case '08':
    echo "Текущий сезон лето <br>";
    break;

    case '09':
    case '10':
    case '11':
    echo "Текущий сезон осень <br>";
    break;

    case '12':
    case '1':
    case '2':
    echo "Текущий сезон зима <br>";
    break;

    default:
    echo "Ошибка <br>";
    break;
}



echo "<br>";
//5.7
// абсолютно без понятия как решать это задание
/*если нужно было написать выражение в php коде, 
и чтобы потом подставлять значения в неизвестные, тогда вот оно*/
$x1 = 1;
$y1 = 1;
$res = (pow($x1, 2) - 4 * sqrt($y1 - 1))/(sin(2*$x1) + abs($x1));
echo round($res, 3) . "<br>";


echo "<hr>";
?>




<!-- ЗАДАЧА 6 -->
<?php 
// Перебирал различные варианты записи этих функций. остановился на этом. 
// В дальнейшем функции находятся в чейках таблицы
function my_gettype($x) {
    echo gettype($x);
}

function my_empty($x) {
    echo empty($x) ? "true" : "false";
}

function my_isset($x) {
    echo isset($x) ? "true" : "false";
}

function my_boolval($x) {
    echo boolval($x) ? "true" : "false";
}

?>


<style>
    table {
        width: 100%;
        border-collapse: collapse;
        border: 4px solid black;
    }
    td {
        padding: 10px 20px;
        border: 1px double black;

    }
    th {
        padding: 10px 20px;
    }
    td:not(:first-child) {
        width: 17%;
        text-transform: uppercase;
    }
</style>

<table>
    <tr>
        <th>Выражение</th>
        <th>gettype()</th>
        <th>empty()</th>
        <th>isset()</th>
        <th>boolean : if($x)</th>
    </tr>
    <tr>
        <td>$x = "";</td>
        <td><?php my_gettype($x = ""); ?></td>
        <td><?php my_empty($x = ""); ?></td>
        <td><?php my_isset($x = ""); ?></td>
        <td><?php my_boolval($x = ""); ?></td>
    </tr>
    <tr>
        <td>$x = null;</td>
        <td><?php my_gettype($x = null); ?></td>
        <td><?php my_empty($x = null); ?></td>
        <td><?php my_isset($x = null); ?></td>
        <td><?php my_boolval($x = null); ?></td>
    </tr>
    <tr>
        <td>$x неопределена</td>
        <td><?php my_gettype($x); ?></td>
        <td><?php my_empty($x); ?></td>
        <td><?php my_isset($x); ?></td>
        <td><?php my_boolval($x); ?></td>
    </tr>
    <tr>
        <td>$x = array(); </td>
        <td><?php my_gettype($x = array()); ?></td>
        <td><?php my_empty($x = array()); ?></td>
        <td><?php my_isset($x = array()); ?></td>
        <td><?php my_boolval($x = array()); ?></td>
    </tr>
    <tr>
        <td>$x = false; </td>
        <td><?php my_gettype($x = false); ?></td>
        <td><?php my_empty($x = false); ?></td>
        <td><?php my_isset($x = false); ?></td>
        <td><?php my_boolval($x = false); ?></td>
    </tr>
    <tr>
        <td>$x = true; </td>
        <td><?php my_gettype($x = true); ?></td>
        <td><?php my_empty($x = true); ?></td>
        <td><?php my_isset($x = true); ?></td>
        <td><?php my_boolval($x = true); ?></td>
    </tr>
    <tr>
        <td>$x = 1; </td>
        <td><?php my_gettype($x = 1); ?></td>
        <td><?php my_empty($x = 1); ?></td>
        <td><?php my_isset($x = 1); ?></td>
        <td><?php my_boolval($x = 1); ?></td>
    </tr>
    <tr>
        <td>$x = 42; </td>
        <td><?php my_gettype($x = 42); ?></td>
        <td><?php my_empty($x = 42); ?></td>
        <td><?php my_isset($x = 42); ?></td>
        <td><?php my_boolval($x = 42); ?></td>
    </tr>
    <tr>
        <td>$x = 0; </td>
        <td><?php my_gettype($x = 0); ?></td>
        <td><?php my_empty($x = 0); ?></td>
        <td><?php my_isset($x = 0); ?></td>
        <td><?php my_boolval($x = 0); ?></td>
    </tr>
    <tr>
        <td>$x = -1; </td>
        <td><?php my_gettype($x = -1); ?></td>
        <td><?php my_empty($x = -1); ?></td>
        <td><?php my_isset($x = -1); ?></td>
        <td><?php my_boolval($x = -1); ?></td>
    </tr>
    <tr>
        <td>$x = "1"; </td>
        <td><?php my_gettype($x = "1"); ?></td>
        <td><?php my_empty($x = "1"); ?></td>
        <td><?php my_isset($x = "1"); ?></td>
        <td><?php my_boolval($x = "1"); ?></td>
    </tr>
    <tr>
        <td>$x = "0"; </td>
        <td><?php my_gettype($x = "0"); ?></td>
        <td><?php my_empty($x = "0"); ?></td>
        <td><?php my_isset($x = "0"); ?></td>
        <td><?php my_boolval($x = "0"); ?></td>
    </tr>
    <tr>
        <td>$x = "-1";</td>
        <td><?php my_gettype($x = "-1"); ?></td>
        <td><?php my_empty($x = "-1"); ?></td>
        <td><?php my_isset($x = "-1"); ?></td>
        <td><?php my_boolval($x = "-1"); ?></td>
    </tr>
    <tr>
        <td>$x = "php"; </td>
        <td><?php my_gettype($x = "php"); ?></td>
        <td><?php my_empty($x = "php"); ?></td>
        <td><?php my_isset($x = "php"); ?></td>
        <td><?php my_boolval($x = "php"); ?></td>
    </tr>
    <tr>
        <td>$x = "true";</td>
        <td><?php my_gettype($x = "true"); ?></td>
        <td><?php my_empty($x = "true"); ?></td>
        <td><?php my_isset($x = "true"); ?></td>
        <td><?php my_boolval($x = "true"); ?></td>
    </tr>
    <tr>
        <td>$x = "false";</td>
        <td><?php my_gettype($x = "false"); ?></td>
        <td><?php my_empty($x = "false"); ?></td>
        <td><?php my_isset($x = "false"); ?></td>
        <td><?php my_boolval($x = "false"); ?></td>
    </tr>
</table>
<hr>

<!-- ЗАДАЧА №7 -->
<?php 

$var1 = 1;
$var2 = 2;
$var3 = 3;

if ($var1 == $var2 or $var1 == $var3 or $var2 == $var3) {
    echo "Тут нет среднего числа <br>";
} elseif (($var1 > $var2 and $var1 < $var3) or ($var1 < $var2 and $var1 > $var3)) {
    echo "$var1 среднее число <br>";
} elseif (($var2 > $var1 and $var2 < $var3) or ($var2 < $var1 and $var2 > $var3)) {
    echo "$var2 среднее число <br>";
} else {
    echo "$var3 среднее число <br>";
}

echo "<hr>";


// ДОПОЛНИТЕЛЬНАЯ ЗАДАЧА №1

//1.1

// function my_string_replace($str) {
//   return preg_replace("/(\w)(\w)(\w)(\w)(\w)/","\\5\\4\\3\\2\\1",$str);
//   }
// echo my_string_replace('hello');


function reverse($param) { 
    if(strlen($param)!=0) { 
        echo $param[strlen($param)-1];             
        $newparam = substr($param, 0, strlen($param)-1); 
        reverse($newparam); 
    } 
}     
$var = 'Hello world!'; 
$new_var = reverse($var); 


echo "<br>";
echo "<br>";

//1.2

$decc = 255;
echo decbin($decc);


echo "<br>";
echo "<br>";
//1.3


?>



<h3>Доп. 3</h3>
<?php
$str_arr = mt_rand();
echo "Дана строка: $str_arr. <br>разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся.";
echo '<br>';
echo '<br>';

$arr = array();
$length_array = 0;
$length_string = mb_strlen($str_arr);

for($i = 0; $i < $length_string - $length_array; ++$i){
    $el1 = mb_substr(($str_arr), $length_array, 1 + $i);
    $length_array = $length_array + mb_strlen($el1);
    $arr[] = $el1;
}

echo "Ответ: ";
if ($length_string > 0) {
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i] . "  ";
    }
    if ($length_string > ($length_array)) {
        echo "Остаток строки " . mb_substr(($str_arr), $length_array, $length_string - $length_array) . ".";
    }
} else {
    echo "Строка пустая.";
}
?>
<br>