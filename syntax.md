

---

```markdown
# 📘 PHP Basic Syntax Guide

Welcome to your first steps in PHP! This guide introduces the basic syntax every beginner should know.

---

## 🟤 1. PHP Tags

Every PHP script begins and ends with these tags:

```php
<?php
    // Your PHP code goes here
?>
```

> Always open with `<?php` and close with `?>`.

---

## 🟤 2. Echo Statement (Output)

Used to print or display output:

```php
<?php
    echo "Hello, World!";
?>
```

---

## 🟤 3. Variables

Variables in PHP start with a dollar sign `$`:

```php
<?php
    $name = "Manish";
    $age = 20;
    echo "My name is $name and I am $age years old.";
?>
```

---

## 🟤 4. Comments

Commenting makes your code easier to understand:

```php
// Single-line comment
# Another single-line comment
/* Multi-line
   comment */
```

---

## 🟤 5. Data Types

PHP supports the following types:
- String
- Integer
- Float (Decimal)
- Boolean
- Array
- Object
- NULL

---

## 🟤 6. Conditional Statements

Control your program's flow with conditions:

```php
<?php
    $score = 75;
    if ($score >= 50) {
        echo "Passed!";
    } else {
        echo "Failed!";
    }
?>
```

---

## 🟤 7. Loops

### For Loop Example:

```php
<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i <br>";
    }
?>
```

---

## 🟤 8. Functions

Create reusable blocks of code:

```php
<?php
    function greet($name) {
        return "Hello, $name!";
    }

    echo greet("Manish");
?>
```

---

## 📌 Note:

To run PHP scripts:
- Install a server environment like **XAMPP** or **WAMP**
- Place files in the `htdocs` (XAMPP) or `www` (WAMP) directory
- Access via `http://localhost/yourfile.php`