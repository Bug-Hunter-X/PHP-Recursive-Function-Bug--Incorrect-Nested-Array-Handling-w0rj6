```php
function fixedFunction($array) {
  if (empty($array)) {
    return []; 
  }

  $result = [];
  foreach ($array as $key => $value) {
    if (is_array($value)) {
       //Properly handles nested arrays
       $result[$key] = fixedFunction($value); 
    } else if (is_numeric($value)){
      $result[$key] = $value * 2; 
    } else {
        $result[$key] = $value; // handles non-numeric values
    }
  }
  return $result; 
}

$myArray = [1, 2, [3, 4], 5, "a"];
$result = fixedFunction($myArray);
print_r($result); // Correct output
```