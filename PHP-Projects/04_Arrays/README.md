🐘 PHP Arrays — Summary Notes
🔹 What Are Arrays?

Arrays store multiple values in a single variable.
They help organize related data, avoid creating many separate variables, and make programs easier to manage.

🔹 Indexed Arrays

Indexed arrays use numeric keys (0, 1, 2…) to store values.
They are ideal when data is ordered and doesn’t require named labels.

Example:

$names = ["Leta", "Abel", "Sami"];

🔹 Associative Arrays

Associative arrays use named keys instead of numbers.
They work best when you want meaningful labels for each value.

Example:

$student = ["name" => "Leta", "age" => 21, "dept" => "CS"];

🔹 Multidimensional Arrays

These are arrays inside other arrays.
They help represent structured data, such as tables, lists of students, products, etc.

Example:

$stock = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2]
];

🔹 Array Functions

PHP provides many built-in functions to manage arrays.
They simplify sorting, searching, adding, removing, and transforming data.

Common examples:

count() → returns number of items

array_push() → adds an element

array_pop() → removes last element

array_merge() → joins arrays

sort() → sorts indexed arrays

asort() → sorts associative arrays by value

ksort() → sorts associative arrays by key

in_array() → checks if value exists

array_keys() → returns all keys

array_values() → returns all values

🔹 Why Arrays Matter?

Arrays help store large amounts of data efficiently, make programs cleaner, and work perfectly with loops and functions.