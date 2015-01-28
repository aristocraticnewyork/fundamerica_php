# FundAmerica PHP Bindings

## Requirements

* PHP 5.6.5
* curl extension

## Usage

```php
require_once('/path/to/lib/FundAmerica.php');

FundAmerica::APIKey('wtiq6AusP-juK5TdOE7o2lm-TDARBYu0');
$escrow_agreement = EscrowAgreement::create('eeb341cd-789c-4647-b3af-dddc116224e2');
```
