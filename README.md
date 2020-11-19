# php-dict

[![PHP Version](https://img.shields.io/badge/php-%5E7.4-blue.svg)](https://img.shields.io/badge/php-%5E7.4-blue.svg)
[![Build Status](https://travis-ci.org/amaccis/php-dict.svg?branch=master)](https://travis-ci.org/amaccis/php-dict)

# The DICT Protocol

As per [RFC 2229](https://www.ietf.org/rfc/rfc2229.txt), the Dictionary Server Protocol (DICT) is a TCP transaction based query/response protocol that allows a client to access dictionary definitions from a set of natural language dictionary databases. For more details see [dict.org](http://www.dict.org/w/). 

## Installation

php-dict is available on [Packagist](http://packagist.org/packages/amaccis/php-dict), 
you can install it using [Composer](http://getcomposer.org).

```shell
composer require amaccis/php-stemmer
```

## Usage

```php
<?php

use Amaccis\Dict\Client;
use Amaccis\Dict\Query\CommandInterface;

$client = new Client();
$parameters = [
    'command' => CommandInterface::COMMAND_DEFINE,
    'word' => 'hacker',
    'database' => 'jargon'
];
$response = $client->query('dict.org', $parameters);
var_dump($response);
/*
array(6) {
  [0] =>
  class Amaccis\Dict\Response\Response#358 (2) {
    private $code =>
    string(3) "220"
    private $text =>
    string(84) "dict dictd 1.12.1/rf on Linux 4.19.0-10-amd64 <auth.mime> <534.2367.1605732508@dict>"
  }
  [1] =>
  class Amaccis\Dict\Response\Response#357 (2) {
    private $code =>
    string(3) "250"
    private $text =>
    string(2) "ok"
  }
  [2] =>
  class Amaccis\Dict\Response\Response#356 (2) {
    private $code =>
    string(3) "150"
    private $text =>
    string(23) "1 definitions retrieved"
  }
  [3] =>
  class Amaccis\Dict\Response\Response#355 (2) {
    private $code =>
    string(3) "151"
    private $text =>
    string(2516) ""hacker" jargon "The Jargon File (version 4.4.7, 29 Dec 2003)"
hacker
 n.

    [originally, someone who makes furniture with an axe]

    1. A person who enjoys exploring the details of programmable systems and
    how to stretch their capabilities, as opposed to most users, who prefer to
    learn only the minimum necessary. RFC1392, the Internet Users' Glossary,
    usefully amplifies this as: A person who delights in having an intimate
    understanding of the internal workings of a system, com"...
  }
  [4] =>
  class Amaccis\Dict\Response\Response#354 (2) {
    private $code =>
    string(3) "250"
    private $text =>
    string(41) "ok [d/m/c = 1/0/10; 0.000r 0.000u 0.000s]"
  }
  [5] =>
  class Amaccis\Dict\Response\Response#353 (2) {
    private $code =>
    string(3) "221"
    private $text =>
    string(41) "bye [d/m/c = 0/0/0; 0.000r 0.000u 0.000s]"
  }
}
*/
```

## License
All files are MIT &copy; [Andrea Maccis](https://twitter.com/andreamaccis)