<?php
include "CodeGenerate.php";

$starting_code = "S001";
$end_code = "S015";
$codeGenerator = new CodeGenerator();
$codes = $codeGenerator->generate($starting_code, $end_code);
print_r($codes);

