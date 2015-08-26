# map-range
```
composer require srph/map-range
```
A more efficient `foreach`-`range`.

## Usage

```php
map_range(function($index) {
	// do something
}, $from, $to);
```

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