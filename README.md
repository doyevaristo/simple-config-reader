Simple Configuration File Reader
========================
A really simple configuration reader. Loads your configuration file in a straight forward manner.

Setup
------------------------
composer require doyevaristo/simple-config-reader

Usage
------------------------
to load configuration file

```php
use Doyevaristo\ConfigReader;
$config = ConfigReader::load(__DIR__.'/config/config-database.php');
print_r($config);
```