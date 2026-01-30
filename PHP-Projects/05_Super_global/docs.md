🧩 PHP Superglobals & Input Handling — Summary Notes
🌐 PHP Superglobals — Overview

Superglobals are built-in PHP arrays that are always accessible. They allow PHP to receive user input, manage sessions, store cookies, and understand the request environment. Without them,, PHP cannot build dynamic or interactive web applications.

🔹 $_GET

Used to collect data sent through the URL using the GET method. Commonly used for search queries, filters, pagination, and links.

GET data is visible in the URL and should never be used for sensitive information.

🔹 $_POST

Used to collect data sent through HTML forms using the POST method. It is the standard method for handling sensitive data such as login credentials, registration forms, and payments.

POST data is hidden from the URL and supports larger payloads.

🔹 $_REQUEST

A combined array that can retrieve data from GET, POST, and COOKIE. It provides flexible input handling but must be used carefully due to security concerns.

In professional applications, direct use of $_GET and $_POST is preferred.

🔹 $_SERVER

Provides information about the server and the current HTTP request. It is essential for request validation, routing, redirects, and security checks.

Common uses include detecting request method (GET or POST), identifying the current URL, and logging client information.

🍪 $_COOKIE

Stores small pieces of data on the client’s browser. Cookies allow applications to remember users across visits.

Commonly used for language preference, theme selection, and “Remember Me” functionality. Cookies are not secure and should never store sensitive data.

🔐 $_SESSION

Stores user data on the server and is used to maintain user state between pages. Sessions are the backbone of authentication and authorization systems.

Sessions rely on cookies to associate a user with stored server-side data and must be started using session_start().

🧠 Input Safety & State Handling — Core Functions
🔹 isset()

Checks whether a variable or array key exists and is not null. It is primarily used to prevent undefined variable errors and to safely verify the presence of data.

isset() does not check whether the value is empty.

🔹 empty()

Checks whether a variable has no meaningful value. It returns true for empty strings, zero, false, null, or undefined variables.

Used mainly for validating form inputs and ensuring required fields are filled.

🔹 Null Coalescing Operator (??)

Provides a safe fallback value when a variable or array key does not exist or is null. It simplifies defensive coding and replaces longer isset() checks.

Commonly used when reading user input that may or may not be present.

🔍 isset() vs empty() — Key Differences

isset() answers: Does this variable exist?

empty() answers: Does this variable have a value?

isset() may return true even if a value is an empty string, while empty() considers empty strings and zero values as invalid input.

🔁 Authentication Flow — Real-World Pattern
🔹 Session-Based Authentication

The application checks whether a session variable exists to confirm that a user is logged in. If not, access to protected pages is denied.

🔹 Cookie-Based Auto Login

If a session is missing but a valid cookie exists, the system can restore the session automatically. This is commonly used in “Remember Me” implementations.

🔹 Redirect Protection

Unauthorized users are redirected to the login page using HTTP headers. Script execution is stopped immediately to prevent unauthorized content access.

🧠 Professional Mental Model

$_SERVER → Understand the request

$_GET / $_POST → Receive user input

isset() → Check existence

empty() → Validate input

$_COOKIE → Remember user preferences

$_SESSION → Authenticate users