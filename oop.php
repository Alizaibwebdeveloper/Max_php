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
?>











