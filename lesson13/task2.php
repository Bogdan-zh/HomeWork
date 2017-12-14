<meta charset="utf-8">
<?php 

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $name = !empty($name) ? $this->name = $name : 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $age = !empty($age) ? $this->checkAge($age) ? $this->age = $age : 0 : 0;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $salary = !empty($salary) ? $this->salary = $salary : 0;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        $age = !empty($age) ? ($age >= 1 && $age <=100) ? $this->age = $age : 0 : 0;
    }
}

$firstWorker = new Worker();
$secondWorker = new Worker();

$firstWorker->setName('Иван');
$firstWorker->setAge(25);
$firstWorker->setSalary(1000);

$secondWorker->setName('Вася');
$secondWorker->setAge(26);
$secondWorker->setSalary(2000);

echo 'Сумма зарплат Ивана и Васи: ' . ($firstWorker->getSalary() + $secondWorker->getSalary());
echo '<br>';
echo 'Сумма возрастов Ивана и Васи: ' . ($firstWorker->getAge() + $secondWorker->getAge());
echo '<br>';

 ?>