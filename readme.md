PHPEcma
============
PHP implementation of some fundamental JS classes 
If you know JS, you don't need to learn a new API. You can use this package straght ahead. 

See examples.php for examples.

Requires PHP 7.2+ and the mbstring extension

JS (Ecmascript) Classes
---------
- JS String class (most methods)
- JS Array class (some methods)

Installation
============
Make sure the `php-mbstring` extension is installed and enabled by checking `php -m` command and run
~~~    
composer require salarmehr/ecmaphp
~~~ 


Example
--------

~~~php
<?php
require 'vendor/autoload.php';

use Salarmehr\Ecma\Arr;
use Salarmehr\Ecma\Str;

// a new "string"
$a = new Str('1234567890');

// splits at each character and then outputs each character with its key.
// output:
/*
0: 1
1: 2
2: 3
3: 4
4: 5
5: 6
6: 7
7: 8
8: 9
9: 0
*/
$a->split()->each(function ($value, $key) {
    echo "{$key}: {$value}\n";
});

// it works in foreach too.
// this is gives the same output as above
foreach ($a->split() as $key => $value) {
    echo "{$key}: {$value}\n";
}

// regex too!
// output:
/*
Number found: 9
Number found: 1000
*/
$b = new Str('This 9 word sentence is less than 1000 letters long.');
$b->match("/([0-9]+)/")->each(function ($value) {
    echo "Number found: {$value}\n";
});

// replaces all numbers with NUMBER. Third arg must be true because last arg is a regular expression
// output: This NUMBER word sentence is less than NUMBER letters long.
echo $b->replace("/([0-9]+)/", 'NUMBER') . "\n";

// not using regular expressions, and lowercase
// output: this9wordsentenceislessthan1000letterslong.
echo $b->replace(' ', '')->toLower() . "\n";

// something a bit more complex
// strips the trailing 0's and 9's and splits it into an array, adds an element, reverse sorts it and turns it into an array
// output:
/*
Array
(
    [8] => hi there!
    [7] => 8
    [6] => 7
    [5] => 6
    [4] => 5
    [3] => 4
    [2] => 3
    [1] => 2
    [0] => 1
)
*/
print_r($a->rtrim('09')->split()->push('hi there!')->rsort()->toArray());


// turning a standard array into a special array
$c = new Arr(['hi', 'there', 'how', 'are', 'you?']);

// output: hi there how are you?
echo $c->join(' ') . "\n";

// you can still use the String class like an array:
$d = new Str('012345');

// output: string(1) "3"
var_dump($d[3]);

~~~

Links
=====
- [alecgorge PHP-String-Class](https://github.com/alecgorge/PHP-String-Class) Ecma PHP is a re-write of this package. 


How to collaborate?
=================
 Help by creating PR or in any way you can ☺
 
 TODO
 =====
 - adding more Ecma classes
 - adding more methods to the current classes
 - creating unit tests 

Licence
=======
MIT
