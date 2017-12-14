<meta charset="utf-8">
<?php 

class Worker
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$worker = new Worker('Дима', 1000);
$worker->getName();
$worker->age = 25;
$worker->getSalary();

echo 'Произведение возраста и зарплаты Димы: ' . ($worker->age * $worker->getSalary());


 ?>