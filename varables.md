

```markdown
# 📘 PHP Variables Guide

This guide covers the fundamentals of **variables in PHP**.

---

## 🟣 What is a Variable?

A variable is a container for storing data like text, numbers, or more complex types.

---

## ✅ Syntax Rules

1. Start with a **`$`** symbol.
2. The name must begin with a **letter or underscore** (not a number).
3. No spaces or special characters.
4. **Case-sensitive**: `$name` and `$Name` are different.

---

## ✍️ Example: Basic Variables

```php
<?php
    $name = "Manish";          // String
    $age = 21;                 // Integer
    $height = 5.9;             // Float
    $isStudent = true;         // Boolean

    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "Height: $height<br>";
    echo "Student: $isStudent<br>";  // Outputs 1 (true)
?>
```

---

## 🧠 Data Types in Variables

| Type     | Example                       |
|----------|-------------------------------|
| String   | `$city = "Delhi";`            |
| Integer  | `$year = 2025;`               |
| Float    | `$price = 99.99;`             |
| Boolean  | `$isOnline = false;`          |
| Array    | `$colors = ["red", "blue"];`  |
| Object   | Created from a class          |
| NULL     | `$value = NULL;`              |

---

## 🔁 Type Juggling

PHP automatically converts types when needed.

```php
<?php
    $a = "10";     // String
    $b = 20;       // Integer
    $c = $a + $b;  // "10" becomes 10, then added to 20

    echo $c;       // Outputs: 30
?>
```

---

## 📌 Notes

- PHP is loosely typed — you don’t declare the type, PHP figures it out.
- Always name your variables meaningfully for better understanding.

-