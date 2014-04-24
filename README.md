SmartSubstr
===========


Description
---------

SmartSubstr is a PHP Substring function to avoid breaking words.

The function has 4 parameters :
* $str (required) : The input string.
* $maxLength (required) : Maximum number of characters that will be returned.
* $separator (optional, default value is " " / space) : The boundary string.
* $tail (optional, default value is "...") : If $maxLength is reached, this string will be added after the result.


Quick Example
---------

```php
<?php

require 'Pagawa/SmartSubstr/smartSubstr.php';

$example = "Lorem ipsum dolor sit amet, consectetur adipisicing";

# Without SmartSubstr
echo mb_substr($example, 0, 45) . '...';

echo "\n\n";

# With SmartSubtr
echo smartSubstr($example, 45) . '...';
```

This above example will output :

```php
Lorem ipsum dolor sit amet, consectetur adipi...

Lorem ipsum dolor sit amet, consectetur...
```


Requirements
---------

PHP 4 (>= 4.0.6) or PHP 5 (minimal version)


Contributing
---------

All any issues or pull requests must be submitted through GitHub.

* To report an issue or a feature request, please use [GitHub Issues](https://github.com/Pagawa/SmartSubstr/issues).
* To make a pull request, please create a new branch for each feature or issue.


ChangeLog
---------

* 2014-04-08 - First commit
