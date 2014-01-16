% Introduction to PHP and MySQL
% Andrew Taylor

![](images/hackademy.png)

# Connection information #

| Domain:       |        |
| FTP Port:     |     21 |
| Username:     |        |
| cPanel Login: | cpanel |
| Password:     |        |

# Course Outline #

1. Intro
1. What is PHP?
1. PHP Files and "Hello World!"
1. Delimiters
1. Comments
1. Variables and Operators
1. Data Types
1. Type Juggling
1. Functions, Parameters, and Return Values
1. PHP.net
1. Conditional Statements	
1. User Defined Functions
1. Variable Scope
1. Arrays
1. Loops

# Client-Server Model #

![PHP execution occurs on the *server* before the response document is sent back to the *client*.](images/client-server-model.png)

## PHP Files and Basic Syntax ##

PHP files are parsed and executed in real-time on the server, so they’re formatted just like text files when they are written and stored. PHP files can have several different extensions to support different conditions, but the best extension to use is `.php`.

Don’t forget to use *delimiters* around your PHP code. Only code between the delimiters is executed. Anything outside the delimiters is treated as plain text and passed through untouched.

Remember to end each instruction with a semicolon (`;`). Your script will not execute and throw errors if you forget one.

Don’t forget to add comments in your code to help yourself and others. Comments are ways of explaining what each section of your code is doing. There are three styles of comments in PHP and you can use them all interchangeably.

## Function Syntax ##

Remember to use or capture the return value of a function if required. Parameters are separated by a single comma if there is more than one.

## Operators ##

### Arithmetic Operators ###

| Example | Type           | Result                                 |
|---------+----------------+----------------------------------------|
| `-5`    | Negation       | Opposite of 5 `[(int)-5]`              |
| `5 + 5` | Addition       | Sum of 5 and 5 `[(int)10]`             |
| `5 - 3` | Subtraction    | Difference of 5 and 3 `[(int)2)]`      |
| `3 * 4` | Multiplication | Product of 3 and 4 `[(int)12]`         |
| `3 / 5` | Division       | Quotient of 3 and 5 `[(float)0.6]`     |
| `5 % 3` | Modulus        | Remainder of 5 divided by 3 `[(int)2]` |

### Assignment Operators ###

| Assignment | Same as        |
|------------+----------------|
| `$a = $b`  | N/A            |
| `$a += $b` | `$a = $a + $b` |
| `$a -= $b` | `$a = $a - $b` |
| `$a *= $b` | `$a = $a * $b` |
| `$a /= $b` | `$a = $a / $b` |
| `$a %= $b` | `$a = $a % $b` |
| `$a .= $b` | `$a = $a . $b` |

### Comparison Operators ###

| Example     | Name                     | Result                                                                 |
|-------------+--------------------------+------------------------------------------------------------------------|
| `$a == $b`  | Equal                    | `TRUE` if `$a` is equal to `$b` after type juggling.                   |
| `$a === $b` | Identical                | `TRUE` if `$a` is equal to `$b`, and they are of the same type.        |
| `$a != $b`  | Not equal                | `TRUE` if `$a` is not equal to `$b` after type juggling.               |
| `$a <> $b`  | Not equal                | `TRUE` if `$a` is not equal to `$b` after type juggling.               |
| `$a !== $b` | Not identical            | `TRUE` if `$a` is not equal to `$b`, or they are not of the same type. |
| `$a < $b`   | Less than                | `TRUE` if `$a` is strictly less than `$b`.                             |
| `$a > $b`   | Greater than             | `TRUE` if `$a` is strictly greater than `$b`.                          |
| `$a <= $b`  | Less than or equal to    | `TRUE` if `$a` is less than or equal to `$b`.                          |
| `$a >= $b`  | Greater than or equal to | `TRUE` if `$a` is greater than or equal to `$b`.                       |

### String Operators ###

| Example   | Name          | Result                           |
|-----------+---------------+----------------------------------|
| `$a . $b` | Concatenation | Connect the two strings into one |

### Logical Operators ###

| Example     | Name | Result                                         |    |                                  |
|-------------+------+------------------------------------------------+----+----------------------------------|
| `$a and $b` | And  | TRUE if both $a and $b are TRUE.               |    |                                  |
| `$a or $b`  | Or   | TRUE if either $a or $b is TRUE.               |    |                                  |
| `$a xor $b` | Xor  | TRUE if either $a or $b is TRUE, but not both. |    |                                  |
| `! $a`      | Not  | TRUE if $a is not TRUE.                        |    |                                  |
| `$a && $b`  | And  | TRUE if both $a and $b are TRUE.               |    |                                  |
| `$a         |      | $b`                                            | Or | TRUE if either $a or $b is TRUE. |

The reason for the two different variations of "and" and "or" operators is that they operate at different precedences. (See Operator Precedence on PHP.net.)

## Label Rules ##

A valid label in PHP starts with a letter or underscore, followed by any number of letters, numbers, or underscores. This applies to variables, functions, objects, and constants. Generally speaking, a label is PHP should be descriptive. For example, a function name should be descriptive of what the function does; likewise, a variable name should be descriptive of what that variable contains.

## Variables ##

PHP variables are used to store information during the execution of a script. Variable syntax is as follows.

## Data Types ##

### Integers ###

An integer is a whole number. -3, -2, -1, 1, 2, 3, 4, 5 … are examples of integers. An integer is typed literally and does not need quotes around it.

### Strings ###

A String is text. A string is defined with quotations. Strings that are defined with double quotes instead of single quotes will automatically expand variables and special characters like newlines (\n).

### Booleans ###

Booleans are the simplest data type. Booleans are true or false, and defined using those constants.

### Floating Point Numbers ###

Also known as "floats", "doubles", or "real numbers". Floats are decimal or exponential numbers. We aren’t going to be working with them today, but if you would like to know more about them you can read about them on the PHP.net website.

### Type Juggling ###

PHP variables are scalar. This means that they do not need to have a data type explicitly defined, and that the data type of a variable will change depending on the context in which it is used. Let’s play around with it a little.

## Arrays ##

Arrays are a special data type that contain an index of data. An easy way to think about it is that arrays are a list of variables contained within a single variable. In PHP arrays can be indexed numerically or with a String. Arrays that have a String index are called associative arrays, but are also referred to as "hash tables" by some. A single array can have both numerical and String keys at the same time.

Arrays are indexed with integers starting with 0 by default. If you set only String keys and then append to the array it will take the next available integer value, which would be 0. If you set integer key 5 and then append it will take the next available integer key, which it will assume is 6.
Access the data within an array by referencing it’s key within square brackets after the array name.

## Conditional Statements ##

Conditional statements are used to execute specific code if certain conditions are met.

### Loops ###

Often times there is a requirement to repeat a certain section of code a number of times before carrying on. Rather than typing out that same section of code over and over again, we can use loops to do it for us.

### While ###

The while loop is the most basic of loops. The while loops checks for a condition, and as long as the condition proves true it will continue to execute the code within its braces. The condition check happens at the start of each loop iteration, which means the while loop will only execute if the condition proves true at the beginning. It also means that if the condition changes from true to false in the middle of an iteration, the code will continue to execute until the end of that iteration.

### Do-while ###

Do-while loops are basically the same thing as while loops. The exception being that a do-while checks the condition at the end of a loop iteration. This means that the code within the braces is executed once before the condition is checked.

This code will only execute once. Once the condition is checked it will prove false and not execute again. Do-while loops also support the conditional break statement. The break statement will end execution of the loop code and proceed with the rest of the script.

### For ###

For loops are one of the most complex loop types. For loops evaluate/execute three expressions as they run, and can be used any number of ways.

The first expression is evaluated/executed once at the beginning of the for loop. The second expression is evaluated at the beginning of each loop iteration. If it evaluates to true, the loop continues; otherwise the loop ends. The third expression is evaluated/executed at the end of each loop iteration. Each of the expression groups can have multiple expressions separated by a comma, or they can be left empty. If the second expression is left empty it defaults to true and the loop will run indefinitely.

For loops also support the break statement, to end execution at any point during the iteration.

Each of these examples will output the numbers 1 through 10.

### Foreach ###

A foreach loop is specifically purposed to loop through array and object values. An error will be generated if you try to run a foreach loop that references a non-array or object. It steps through each value of an array, and executes the code in its braces. The two syntaxes provide you with access to both the array key and the value, depending on which you use.

A foreach loop uses an array’s internal pointer to iterate through each value, so changing the pointer during the loop could have unexpected results. In this example, only the value of each array index is available. The following shows the alternate syntax allowing access to the key as well.

# License #

This document and all supporting documents are licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported license.
