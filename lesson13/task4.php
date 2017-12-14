<meta charset="utf-8">
<?php 

class User
{
    protected $name;
    protected $age;

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
        $age = !empty($age) ? $this->age = $age : 0;
    }


    public function getAge()
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $salary = !empty($salary) ? $this->salary = $salary : 0;
    }
}

$firstUser = new Worker();
$firstUser->setName('Иван');
$firstUser->setAge(25);
$firstUser->setSalary(1000);

$secondUser = new Worker();
$secondUser->setName('Вася');
$secondUser->setAge(26);
$secondUser->setSalary(2000);

echo 'Сумма зарплат Ивана и Васи: ' . ($firstUser->getSalary() + $secondUser->getSalary());

?>