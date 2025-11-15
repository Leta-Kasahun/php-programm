🐘 PHP Functions — Summary Notes
🔹 Functions

Functions are reusable blocks of code designed to perform a specific task.
They help reduce repetition, organize programs, and improve readability.

🔹 Parameterized Functions

These are functions that accept inputs (parameters).
Parameters allow you to send information into a function so it can work with different data whenever it is called.

🔹 Default Arguments

Default arguments give parameters a predefined value.
If no value is provided when calling the function, the default value is used automatically.
This makes functions more flexible and prevents errors when arguments are missing.

🔹 Variable Number of Arguments

PHP allows functions to accept any number of inputs using the ... (spread operator).
This is useful when you don’t know how many values will be provided.
All extra values are collected into an array inside the function.

🔹 Return Values

Functions can send back a result to the place where they were called.
A return value ends the function and passes data out of it.
Return values are useful for calculations, text generation, database processing, and more.

🔹 Pass by Value

By default, PHP sends a copy of the variable to a function.
Changes made inside the function do not affect the original variable.
This is safe and prevents accidental modifications.

🔹 Pass by Reference

When passing by reference (using &), PHP sends the actual variable, not a copy.
Changes made inside the function directly modify the original value.
This is useful when the function must update or modify external data.