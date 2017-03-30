# php-cs-fixer-ruleset
DavaHome Ruleset for php-cs-fixer

# Installation

```bash
php composer.phar require --dev davahome/php-cs-fixer-ruleset
```

# Usage

**php_cs.php**
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

return \DavaHome\PhpCsFixer::createFromDir(__DIR__)->getRuleSet();
```

**php-cs-fixer.phar**
```bash
php php-cs-fixer.phar fix --config=php_cs.php --allow-risky=yes
php php-cs-fixer.phar fix --dry-run --diff --config=php_cs.php --allow-risky=yes
```

# Examples

```php
<?php

use DavaHome\PhpCsFixer;
use PhpCsFixer\Finder;

require_once __DIR__ . '/vendor/autoload.php';

$finder = Finder::create()
    ->in(__DIR__)
    ->notPath('/module\/TeamSpeak\/lib/');

return (new PhpCsFixer($finder))
    ->getRuleSet()
    ->setLineEnding("\n")
    ->setCacheFile(__DIR__ . '/data/cache/.php_cs.cache')
    ->setIndent('    ')
    ->setRiskyAllowed(true)
    ->setUsingCache(true);

```
