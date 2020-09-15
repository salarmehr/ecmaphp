<?php
require 'vendor/autoload.php';

use Salarmehr\Ecma\Arr;
use Salarmehr\Ecma\Str;

$str = new Str('123'); // a new "string"

$str->split()->each(function ($value, $key) {
    echo "$key:$value" . PHP_EOL;
});

// splits at each character and then outputs each character with its key.
/*
0: 1
1: 2
2: 3
*/

$str = new Str('This 9 word sentence is less than 1000 letters long.');
$str->matchAll("/[0-9]+/")->each(function ($value) {
    echo "Number found: {$value}\n";
});
/* prints
Number found: 9
Number found: 1000
*/

echo Str::create('1 and 2')->replace('1', 'one')->toLower() . "\n"; //rezasalarmehr!

// replaces all numbers with NUMBER. Third arg must be true because last arg is a regular expression
echo Str::create('1 and 2')->replaceRegexp("/[0-9]+/", 'NUMBER') . PHP_EOL; // NUMBER and NUMBER

// output:
/*
Array
(
    [8] => hi there!
    [7] => 8
    [6] => 7
)
*/

$chain= Str::create('reza!')->rtrim('!')->split()->push('hi there!')->rsort()->toArray();
print_r($chain);
/*
 Array
(
    [3] => a
    [1] => e
    [4] => hi there!
    [0] => r
    [2] => z
)
 * */

$greeting = new Arr(['hi', 'there', 'how', 'are', 'you?']);

// output: hi there how are you?
echo $greeting->join(' ') . "\n";

// array access on string
$str = new Str('012345');
print_r($str[3]);
// output: string(1) "3"
