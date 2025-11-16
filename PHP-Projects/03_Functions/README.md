🐘 PHP Functions — Summary Notes
🔹 Functions
Functions are reusable code blocks created to perform a specific task.
They reduce repetition, make programs easier to manage, and improve overall organization.

🔹 Parameterized Functions
These functions accept inputs called parameters.
Parameters let the function work with different data each time it is used, making it flexible and reusable.

🔹 Default Arguments
Default arguments provide built-in values for parameters.
If a value is not supplied during the function call, PHP uses the default value automatically.
This avoids errors and makes the function easier to work with.

🔹 Variable Number of Arguments
PHP can collect multiple inputs using the ... operator.
This allows a function to accept an unlimited number of arguments, which are grouped into an array for easy handling.

🔹 Return Values
Functions can send back a result using the return statement.
Returning values allows the output of a function to be reused, stored, or displayed elsewhere in the program.

🔹 Pass by Value
By default, PHP passes a copy of the variable to the function.
Changes made inside the function do not affect the original variable, ensuring safety and preventing unexpected modifications.

🔹 Pass by Reference
When using &, PHP passes the actual variable instead of a copy.
This means changes inside the function directly update the original value.
It is useful when the function needs to modify external data.