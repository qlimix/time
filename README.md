# Time

[![Travis CI](https://api.travis-ci.org/qlimix/time.svg?branch=master)](https://travis-ci.org/qlimix/time)
[![Coveralls](https://img.shields.io/coveralls/github/qlimix/time.svg)](https://coveralls.io/qlimix/time)
[![Packagist](https://img.shields.io/packagist/v/qlimix/time.svg)](https://packagist.org/packages/qlimix/time)
[![MIT License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/qlimix/time/blob/master/LICENSE)

An interface to lapse time

## Install

Using Composer:

~~~
$ composer require qlimix/time
~~~

## usage
```php
<?php

use \Qlimix\Time\SleepTimeLapse;
use \Qlimix\Time\USleepTimeLapse;

$time = new SleepTimeLapse(1);
$time = new USleepTimeLapse(1);

$time->lapse();
```

## Testing
To run all unit tests locally with PHPUnit:

~~~
$ vendor/bin/phpunit
~~~

## Quality
To ensure code quality run grumphp which will run all tools:

~~~
$ vendor/bin/grumphp run
~~~

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.
