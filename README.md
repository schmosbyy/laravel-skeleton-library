# Laravel Skeleton Library

## Overview

The Laravel Skeleton Library provides a basic structure for building Laravel packages. It includes essential components such as service providers, controllers, and views, allowing developers to quickly set up their own Laravel packages.

## Installation

To add the Laravel Skeleton Library to your project, you can include it in your `composer.json` file. **If the package is not available on Packagist**, you can add it as follows:

```json
{
    "require": {
        "vendor-name/laravel-skeleton-library": "dev-main"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/schmosbyy/laravel-skeleton-library.git"
        }
    ]
}
```

### Steps to Install

1. Add the above configuration to your `composer.json` file.
2. Run the following command to install the package:
```php
   composer update
```
## Adding to Packagist

To publish your package on Packagist, follow these steps:

1. **Create a GitHub Repository**: Ensure your package is hosted on GitHub (Eg URL:  `https://github.com/schmosbyy/laravel-skeleton-library.git`).

2. **Create a Packagist Account**: Go to [Packagist](https://packagist.org/) and create an account if you don't have one.

3. **Submit Your Package**:
    - Go to the "Submit" section on Packagist.
    - Enter the URL of your GitHub repository.
    - Click on "Check" to validate the repository.
    - Fill in any additional details required and submit.

4. **Set Up Webhooks**: After submitting, set up a webhook in your GitHub repository to notify Packagist of any new releases. You can find the webhook URL on your Packagist package page.

5. **Tag Your Releases**: Use Git tags to manage your package versions. Packagist will automatically update when you push new tags.

```json
{
  "require": {
    "vendor-name/laravel-skeleton-library": "^1.0"
  }
}
```

### Steps to Install  a Packagist Library
1. Add the above configuration to your `composer.json` file.
2. Run the following command to install the package:
```php
   composer update
```

## Using Symlink for Local Development

If you'd like to link your local version of the Laravel Skeleton Library to an external project without committing the library to Git or modifying the external project's `composer.json`, you can use **Composer's path repository type** with symlinks. 

### Steps to Set Up a Local Symlink with Composer

1. **Set Up the Symlink in the External Project:**

   In the external project's `composer.json`, add a **path repository** configuration pointing to the local directory where the Laravel Skeleton Library is located.

   Example `composer.json` configuration:

   ```json
   {
       "repositories": [
           {
               "type": "path",
               "url": "/path/to/your/local/laravel-skeleton-library"
           }
       ],
       "require": {
           "vendor-name/laravel-skeleton-library": "*"
       }
   }
2. **Create the Symlink:**

   In the external project folder, run the following Composer command:
```php         
 composer require vendor-name/laravel-skeleton-library:* --prefer-dist
```
This will create a symlink from the external project to your local library, so the external project can use the package without needing to commit or push it to a Git repository.

## Usage

Once installed, you can start using the components provided by the Laravel Skeleton Library in your Laravel application.

### More Information

For more detailed instructions on creating Laravel packages, you can refer to the official [Spatie Package Skeleton Laravel](https://github.com/spatie/package-skeleton-laravel) repository. It provides a comprehensive guide and skeleton setup for building Laravel packages with best practices.

## License
This package is open-source software licensed under the [MIT license](LICENSE).