<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/numerimondes/.github/refs/heads/main/assets/brands/numerimondes/identity/logos/v2/faviconV2_Numerimondes.png" width="70" alt="Laravel Logo"></a>
</p>
<h1 align="center">Webkernel Dependencies</h1>

<p align="center">
Centralized dependency bundle for the Webkernel ecosystem.  
This package defines and validates all required libraries for consistent development and deployment.
</p>

<p align="center">
<a href="https://github.com/numerimondes/webkernel-dependencies"><img src="https://github.com/laravel/prompts/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/webkernel/dependencies"><img src="https://img.shields.io/packagist/dt/webkernel/dependencies?color=blue" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/webkernel/dependencies"><img src="https://img.shields.io/packagist/v/webkernel/dependencies?color=blue" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/webkernel/dependencies"><img src="https://img.shields.io/packagist/l/webkernel/dependencies?color=blue" alt="License"></a>
</p>


## Requirements

- PHP ^8.4
- Composer
- Laravel Framework ^12.0
- Filament ^4.0
- Octane ^2.12
- Sushi ^2.5
- Domain Parser ^6.4
- Laravel Prompts ^0.3.8
- Laravel Tinker ^2.10.1


## Webkernel Installation

```bash
composer require webkernel/dependencies
composer update   # use in development to refresh versions and update composer.lock
composer install  # use in production to respect composer.lock
```


## Validation

To ensure the `composer.json` file is correct and reproducible:

```bash
composer validate --no-check-lock --strict
```

## Continuous Integration

GitHub Actions workflow validates dependencies and generates the coverage badge.  
The badge is stored at `.github/badges/coverage.svg` and can be displayed in the README:

```markdown
![Test coverage](.github/badges/coverage.svg)
```

## License

Licensed under the [MPL-2.0](https://www.mozilla.org/en-US/MPL/2.0/).
