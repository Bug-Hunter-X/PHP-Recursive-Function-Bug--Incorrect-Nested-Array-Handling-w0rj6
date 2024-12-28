```php
function buggyFunction($array) {
  if (empty($array)) {
    return []; // Handle empty array
  }

  $result = [];
  foreach ($array as $key => $value) {
    if (is_array($value)) {
      // Incorrect handling of nested arrays
      $result[$key] = buggyFunction($value); 
    } else {
      $result[$key] = $value * 2; 
    }
  }
  return $result; 
}

$myArray = [1, 2, [3, 4], 5];
$result = buggyFunction($myArray);
print_r($result); // Unexpected output
```