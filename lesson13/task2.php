<meta charset="utf-8">
<?php 

class Worker
{
    private $name;
    private $age;
    private $salary;

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
            if($this->checkAge($age)) {
                $this->age = $age;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        if(!empty($salary)) {
            $this->salary = $salary;
        } else {
            return false;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge($age)
    {
        if(!empty($age)) {
            if($age >= 1 && $age <=100) {
                $this->age = $age;
            } else {
                return false;
            }
        } else {
            return false;
        }
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