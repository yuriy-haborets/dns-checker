# DnsChecker Library for Laravel
This PHP library is specifically developed for the Laravel framework and enables you to fetch all DNS records associated with a given domain name. Its purpose is to provide a convenient way to retrieve and work with DNS information within Laravel-based applications.

## Requirements
- PHP v.8.2 or later
- Composer as dependency management

## Installation
- Open a terminal in your Laravel project directory.
- Run the following command to install the library via Composer:

```
  composer require yuriy-haborets/dns-checker
```

## Usage
- First import the DnsChecker class into your code:

```php
use DnsChecker\DnsChecker;
```

- Create an instance of the DnsChecker class:

```php
$dnsChecker = new DnsChecker();
```

- Use the getDnsRecords method to retrieve all DNS records for a domain:

```php
$domain = 'gmail.com';
$records = $dnsChecker->getDnsRecords($domain);
```

- The $records variable will hold an array of DNS records retrieved by the code snippet. You can iterate over the records array and perform any necessary operations on each record. Here's an example:

```php
foreach ($records as $record) {
    // Perform operations on each DNS record
    echo $record['host'] . ' ' . $record['type'] . ' ' . $record['target'] . "\n";
}
```

## Contributing
To contribute to this library, you can follow these guidelines:

1. Start by forking the repository on GitHub.
2. Create a new branch in your forked repository. This branch will be dedicated to your specific feature or bug fix.
3. Implement your modifications or fixes within the newly created branch.
4. Commit your changes as you make progress.
5. Push the branch to your forked repository on GitHub.
6. Finally, submit a pull request from your branch to the main repository. This will allow the project maintainers to review and consider your changes for merging into the main codebase.

By following these steps, you can contribute your improvements or bug fixes to the library and collaborate with the project's community.

## License
This library is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).
