# CodeGenerator

I have range of strings starting with random amount of letters (from 0 to more than 10) and ending with numbers:

* example 1: S001, S002, ..., S015

* example 2: AB67116, AB67117, ..., AB67128

* example 3: G07, G08, G09, G10, G11

* How can I generate all of them in array if I'm given just the starting one and the ending one?

* e.g. from ZS11 to ZS15 I need an array with ZS11, ZS12, ZS13, ZS14, ZS15

Use
```php
<?php
include "CodeGenerate.php";

$starting_code = "S001";
$end_code = "S015";
$codeGenerator = new CodeGenerator();
$codes = $codeGenerator->generate($starting_code, $end_code);
print_r($codes);

```
