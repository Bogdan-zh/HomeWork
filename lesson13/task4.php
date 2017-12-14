<meta charset="utf-8">
<?php 

class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        if(!empty($name)) {
            $this->name = $name;
        } else {
            return false;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if(!empty($age)) {
            $this->age = $age;
        } else {
            return false;
        }
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
        if(!empty($salary)) {
            $this->salary = $salary;
        } else {
            return false;
        }
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