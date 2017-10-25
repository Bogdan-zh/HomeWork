<h3>Задача №1</h3>

<?php 
function login() {
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'])) {

        $name = $_POST['name'];
        if (file_put_contents('guest.txt', date("Y-m-d H:i:s - ") . "$name\n", FILE_APPEND)) {
            echo 'Все сработало!';
        } else {
            echo 'Что-то пошло не так';
        }
    }
}

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

 ?>
<form method="post">
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="submit" name="ok" value="OK">
</form>
<?php login(); ?>

<hr>





<h3>Задача №2</h3>

<?php 
/*-------------------------------------------------------------------*/
// ПЕРВЫЙ ВАРИАНТ С ФУНКЦИЕЙ 'FILE()'


// ini_set('display_errors', 'Off');
// file_put_contents('numbers.txt', "");
// file_put_contents('even.txt', "");
// file_put_contents('odd.txt', "");
// $count = 1000;
// $numbers_array = file('numbers.txt');

// if(is_array($numbers_array) && count($numbers_array) != $count) {
    
//  for($i = $count; $i--;) {
//      $num = rand(1, 500);
//      file_put_contents('numbers.txt', $num."\n", FILE_APPEND);
//  }

//  foreach (file('numbers.txt') as $number) {
//      if($number % 2 == 0) {
//          file_put_contents('even.txt', "$number", FILE_APPEND);
//      } else {
//          file_put_contents('odd.txt', "$number", FILE_APPEND);
//      }
//  }
// }
// echo "<pre>";
// print_r(file('numbers.txt'));
// echo "</pre>";
/*-------------------------------------------------------------------*/


// ВТОРОЙ ВАРИАНТ РЕШЕНИЯ, БЕЗ 'FILE()'
echo 'Все файлы созданы и записаны в папке numb/';

$numbers = fopen("numb/numbers.txt", 'w+');
$even = fopen("numb/even.txt", 'w+');
$odd = fopen("numb/odd.txt", 'w+');

for ($i = 1000; $i--;) {
    fwrite($numbers, rand(1, 500) . "\n");
}

$numbers = fopen("numb/numbers.txt", 'r');

while ($line = fgets($numbers)) {
    $res[] = trim($line); 
}

foreach ($res as $key => $numb) {
    if ($numb % 2 == 0) {
        fwrite($even, $key . '=>' . trim($numb) . "\n");
    } else {
        fwrite($odd, $key . '=>' . trim($numb) . "\n");
    }
}

// echo "<pre>";
// print_r($res);
// echo "</pre>";
/*-------------------------------------------------------------------*/

 ?>
