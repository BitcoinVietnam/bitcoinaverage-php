# Composer installation #

Add the following to your composer.json:

```json
{
    "require": {
        "bitcoinvietnam/bitcoinaverage-php": "@dev"
    }
}
```

## Usage

Instantiate a Client object

```php
$client = new BitcoinVietnam\BitcoinAverage\Client();
```