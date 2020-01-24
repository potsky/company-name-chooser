# Company Name Chooser

This is a company name generator which checks for available domain names according to rules.

## Requirements

You need :

- PHP
- whois command installed on your system
- grep command installed on your system

## Configuration

- Copy `config.inc.php.example` to `config.inc.php`
- Configure `config.inc.php` to fit your needs

## Run

Run one of script below and copy paste in your favorite spreadsheet 🚀

### Generate a name according to syllables

```
php syllable.php > syllables.csv
```

### Generate a name according to a 5 characters palindrome

```
php palindrome.php > syllables.csv
```
