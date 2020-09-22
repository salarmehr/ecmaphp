EcmaPHP
============
PHP implementation of some fundamental JS classes, which do not have a PHP counterpart.
If you know JS, you don't need to learn a new API. The API of these classes are compatible with JS.  

Requires PHP 7.2+ and the mbstring extension

Classes
---------
- [String](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String) class as `Str`
- [Array](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array) class as `Arr`

Installation
============
Make sure the `php-mbstring` extension is installed and enabled by checking `php -m` command and run
~~~    
composer require salarmehr/ecmaphp
~~~ 


Examples
=======
Please see [examples.php](examples.php) file. 

Links
=====
- [alecgorge PHP-String-Class](https://github.com/alecgorge/PHP-String-Class) EcmaPHP is inspired by this package. 

Licence
=======
MIT
