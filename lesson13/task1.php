<meta charset="utf-8">
<?php 

class Worker 
{
    public $name;
    public $age;
    public $salary;
}

$firstWorker = new Worker();
$firstWorker->name = 'Иван';
$firstWorker->age = 25;
$firstWorker->salary = 1000;

$secondWorker = new Worker();
$secondWorker->name = 'Вася';
$secondWorker->age = 26;
$secondWorker->salary = 2000;

echo 'Сумма возрастов Ивана и Васи: ' . ($firstWorker->age + $secondWorker->age);

?>