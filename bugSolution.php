```php
function calculate_sum($a, $b) {
  // Explicit type casting to ensure numerical addition
  return (int)$a + (int)$b;
}

$result = calculate_sum(10, '20');
var_dump($result); // Output: int(30)
```