<?php
// class Rectangle {
//     private $length;
//     private $width;

//     public function __construct($length, $width) {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function getArea() {
//         return $this->length * $this->width;
//     }

//     public function getPerimeter() {
//         return 2 * ($this->length + $this->width);
//     }
// }

// $rectangle = new Rectangle(12, 9);
// echo "Area: " . $rectangle->getArea() . "</br>";
// echo "Perimeter: " . $rectangle->getPerimeter() . "</br>";



// ***********PHP class for circle: Area and circumference calculation*********


class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle(7);
echo "Area: " . $circle->getArea() . "</br>";
echo "Circumference: " . $circle->getCircumference() . "</br>";


// ******PHP Class Shape: Abstract method and subclass implementation***


abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$triangle = new Triangle(5, 7);
echo "Triangle Area: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";


// ********* PHP interface resizable: Resizing functionality in the square class


interface Resizable {
    public function resize($percentage);
}

class Square implements Resizable {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function resize($percentage) {
        $this->side = $this->side * ($percentage / 100);
    }

    public function getArea() {
        return pow($this->side, 2);
    }

    public function getSide() {
        return $this->side;
    }
}

$square = new Square(10);
echo "Initial Side Length: " . $square->getSide() . "</br>";

$square->resize(60); // Resize the square to 60% of its original size
echo "Resized Side Length: " . $square->getSide() . "</br>";

echo "Area: " . $square->getArea() . "</br>";



// ****************PHP class vehicle: Display vehicle details


class Vehicle {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Brand: " . $this->brand . "</br>";
        echo "Model: " . $this->model . "</br>";
        echo "Year: " . $this->year . "</br>";
    }
}
$car = new Vehicle("Ford", "F-150", 2020);
$car->displayDetails();



// **********PHP class hierarchy for library system***************



 class LibraryItem {
    protected $title;
    protected $author;
    protected $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }
}

class Book extends LibraryItem {
    protected $genre;

    public function __construct($title, $author, $year, $genre) {
        parent::__construct($title, $author, $year);
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function displayDetails() {
        echo "Title: " . $this->title . "</br>";
        echo "Author: " . $this->author . "</br>";
        echo "Year: " . $this->year . "</br>";
        echo "Genre: " . $this->genre . "</br>";
    }
}

class DVD extends LibraryItem {
    protected $duration;

    public function __construct($title, $author, $year, $duration) {
        parent::__construct($title, $author, $year);
        $this->duration = $duration;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function displayDetails() {
        echo "</br>Title: " . $this->title . "</br>";
        echo "Author: " . $this->author . "</br>";
        echo "Year: " . $this->year . "</br>";
        echo "Duration: " . $this->duration . " minutes";
    }
}

$book = new Book("Don Quixote", "Miguel de Cervantes", 1605, "Epic novel");
$book->displayDetails();

$dvd = new DVD("The Land Before Time", "Charles Grosvenor", 2010, 150);
$dvd->displayDetails();


// ***********PHP class for student information*********



class Student {
    public $name;
    public $age;
    public $grade;

    public function displayInfo() {
        echo "Name: " . $this->name . "</br>";
        echo "Age: " . $this->age . "</br>";
        echo "Grade: " . $this->grade . "</br>";
    }
}

$student = new Student();
$student->name = "Gwladus Andrea";
$student->age = 16;
$student->grade = 10;
$student->displayInfo();


// ***********PHP class for bank accounts: Deposit and withdraw***********



class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance</br>";
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance</br>";
        }
        else
        {
           echo "Want to withdrawn $amount?</br>";
           echo "Insufficient balance in account $this->accountNumber. Current balance: $this->balance</br>";
        }
    }
}

$account = new BankAccount("SB-1234");
echo "Account Number: " . $account->getAccountNumber() . "</br>";
echo "Initial Balance: " . $account->getBalance() . "</br>";

$account->deposit(1000);
$account->withdraw(600);
$account->withdraw(700);


// **************PHP OOP: Abstract class for animal


abstract class Animal
{
    abstract public function eat();
    abstract public function makeSound();
}

class Dog extends Animal
{
    public function eat()
    {
        echo "Dog is eating.</br>";
    }

    public function makeSound()
    {
        echo "Dog is barking.</br>";
    }
}

class Cat extends Animal
{
    public function eat()
    {
        echo "Cat is eating.</br>";
    }

    public function makeSound() {
        echo "Cat is meowing.</br>";
    }
}

class Bird extends Animal
 {
    public function eat()
    {
        echo "Bird is eating.</br>";
    }

    public function makeSound()
    {
        echo "Bird is chirping.</br>";
    }
}

$dog = new Dog();
$dog->eat();
$dog->makeSound();

$cat = new Cat();
$cat->eat();
$cat->makeSound();

$bird = new Bird();
$bird->eat();
$bird->makeSound();



// ************ PHP OOP: Class with magic method********


//  class Person {
//     private $name;
//     private $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function __toString() {
//         return "Name: " . $this->name . "</br>" .
//                "Age: " . $this->age . "</br>";
//     }
// }

// $person = new Person("Natalius Esther", 30);
// echo $person;


// *********PHP class inheritance with extended class********


 class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Name: " . $this->name . "\n" .
               "Age: " . $this->age . "\n";
    }
}

class Employee extends Person {
    private $salary;
    private $position;

    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getPosition() {
        return $this->position;
    }

    public function displayDetails() {
        echo "Name: " . $this->name . "</br>";
        echo "Age: " . $this->age . "</br>";
        echo "Salary: " . $this->salary . "</br>";
        echo "Position: " . $this->position . "</br>";
    }
}

$employee = new Employee("Pratik Octavius", 33, 6000, "Manager");
$employee->displayDetails();


?>


















