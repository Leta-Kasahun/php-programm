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

🔹 Essential Array Functions
Function	Purpose	Example
count()	Number of items	count($names)
array_push()	Add element to end	array_push($names, "Sara")
array_pop()	Remove last element	$last = array_pop($names)
array_unshift()	Add element to start	array_unshift($names,"Lina")
array_shift()	Remove first element	$first = array_shift($names)
array_merge()	Combine arrays	$all = array_merge($arr1,$arr2)
sort() / rsort()	Sort indexed arrays	sort($numbers)
asort() / arsort()	Sort assoc by value	asort($student)
ksort() / krsort()	Sort assoc by key	ksort($student)
in_array()	Check value exists	in_array("Leta",$names)
array_keys()	Get all keys	array_keys($student)
array_values()	Get all values	array_values($student)
array_search()	Find key by value	array_search("Sara",$names)
array_filter()	Filter values	$even = array_filter($numbers, fn($n)=>$n%2==0)
array_map()	Transform values	$squared = array_map(fn($n)=>$n*$n,$numbers)
array_reduce()	Aggregate values	$sum = array_reduce($numbers, fn($carry,$n)=>$carry+$n,0)

🔹 Why Arrays Matter?

Arrays help store large amounts of data efficiently, make programs cleaner, and work perfectly with loops and functions.