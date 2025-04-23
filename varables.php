<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>varibles in php</title>
</head>
<body>
<?php
   
   // 1. String
   $city = "Delhi";
   echo "City: $city<br>";
   
   // 2. Integer
   $year = 2025;
   echo "Year: $year<br>";
   
   // 3. Float (Decimal Number)
   $price = 99.99;
   echo "Price: ₹$price<br>";
   
   // 4. Boolean
   $isOnline = false;
   echo "Is Online: ";
   echo $isOnline ? "Yes" : "No";
   echo "<br>";
   
   // 5. Array
   $colors = ["Red", "Blue", "Green"];
   echo "Colors: " . implode(", ", $colors) . "<br>";
   
   // 6. Object
   class Person {
       public $name;
       public $age;
   
       function __construct($name, $age) {
           $this->name = $name;
           $this->age = $age;
       }
   
       function introduce() {
           return "I am $this->name and I am $this->age years old.";
       }
   }
   
   $person = new Person("Manish", 21);
   echo "Object: " . $person->introduce() . "<br>";
   
   // 7. NULL
   $value = NULL;
   echo "Value is ";
   echo is_null($value) ? "NULL" : $value;
   echo "<br>";
   ?>
   
</body>
</html>