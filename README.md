# PHP Type Juggling Bug
This example demonstrates a common issue in PHP related to type juggling. When performing arithmetic operations with a mix of integers and strings, PHP's loose typing can lead to unexpected string concatenation instead of the expected numerical addition. 

The `calculate_sum` function intends to add two numbers, but due to the implicit type conversion, it concatenates the string '20' to the integer 10.  This results in the string "1020" rather than the numerical sum 30.  This can be a source of difficult-to-find bugs in PHP applications.