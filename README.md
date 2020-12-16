# PHP Alpaka Main

Require the package by using composer:
```bash
composer require palpaka/main
```

Use the ```__main__``` function to detect if the script was directly called:
```php
<?php

require __DIR__ . '/vendor/autoload.php';

function main(): int
{
    return 0;
}

if (__main__())
{
    main();
}
```
