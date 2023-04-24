# Memcached IDE helper

This package contains IDE help files for [PECL memcached extension](https://github.com/php-memcached-dev/php-memcached/). It may be used for autocomplete in your IDE and type checking. 

This package is up to date with **PECL memcached extension version 3.2** and uses types **compatible with PHP 8.0+**. Additionally it uses type annotations based on [Psalm](https://psalm.dev/).

**This package is for you, if** you do not want to install libmemcached and the PECL memcached extension in your development environment, but you do not want to abstain from type checking and IDE autocomplete.

## Installation

You should not use this package in production. Thereby add the `--dev` flag when requiring.

```bash
composer require --dev cracksalad/memcached-ide-helper
```