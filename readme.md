# map-range [![Build Status](https://img.shields.io/travis/srph/map-range.svg?style=flat-square)](https://travis-ci.org/srph/map-range?branch=master)
```
composer require srph/map-range
```
A more efficient `foreach`-`range`.

## Usage

```php
SRPH\MapRange\map_range(function($index) {
	// do something
}, $from, $to);
```

For PHP >=v5.6, you can use the use function (aka import function) syntax:

```php
use function SRPH\MapRange\map_range;

map_range(function($index) {
	// do something
}, $from, $to);
```

Note that it iterates *while* `$from <= $to`.

## Why
Because some developers prefer this
```php
foreach(range(0, 10) as $i) {
	// ..
} 
```

Over this:
```php
for ( $i = 0; $i < 10; $i++ ) {
	//
}
```

In which the first example generates a buffer array first (which is terrible for performance).
