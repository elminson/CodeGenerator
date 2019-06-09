<?php


class CodeGenerator
{

    function generate($starting_code, $end_code)
    {

        preg_match_all('/([a-zA-Z]+|[0-9]+)/', $starting_code, $arr_start);
        preg_match_all('/([a-zA-Z]+|[0-9]+)/', $end_code, $arr_end);

        $generated = [];

        $start = $arr_start[0][1];
        $end = $arr_end[0][1];
        $string_code = $arr_start[0][0];

        if (!is_numeric($start) || !is_numeric($end)) {
            return "Invalid Imput!\n";
        }
        $len = strlen($start);
        for ($index = $start; $index <= $end; $index++) {
            $code_number = str_pad($index, $len, "0", STR_PAD_LEFT);;
            $generated[] = (string)$string_code . $code_number;
        }

        return $generated;
    }
}

$starting_code = "S001";
$end_code = "S015";
$codeGenerator = new CodeGenerator();
$codes = $codeGenerator->generate($starting_code, $end_code);
print_r($codes);
//
//
//> Result
//
//    Array
//    (
//        [0] => ZA11
//        [1] => ZA12
//[2] => ZA13
//[3] => ZA14
//[4] => ZA15
//    )


