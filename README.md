# # Opinionated Laravel React Starter Kit

## Introduction

Our React starter kit provides a robust, modern starting point for building Laravel applications with a React frontend using [Inertia](https://inertiajs.com).

Inertia allows you to build modern, single-page React applications using classic server-side routing and controllers. This lets you enjoy the frontend power of React combined with the incredible backend productivity of Laravel and lightning-fast Vite compilation.

This React starter kit utilizes React 19, TypeScript, Tailwind, and the [shadcn/ui](https://ui.shadcn.com) and [radix-ui](https://www.radix-ui.com) component libraries.

This repository is a custom starter kit for building Laravel and React applications. It includes a set of pre-configured packages and tools to help you get started quickly. Please note that this kit is opinionated, meaning that it reflects the preferences and best practices of the maintainers.

> [!IMPORTANT: PNPM Required]
> This repository uses PNPM (Performant NPM) instead of NPM. PNPM is a faster and more efficient package manager that is compatible with NPM. To use this repository, you must have PNPM installed on your system.

## Installation

To install this repository using the Laravel installer, run the following command:
```bash
laravel new my-app --using=zarchp/react-starter-kit
```

Note: Make sure you have PNPM installed on your system before running the above commands. If you don't have PNPM installed, you can install it by running `npm install -g pnpm` or by following the installation instructions on the PNPM website.

## Additional Packages

This repository includes the following additional packages:

### Composer

* `barryvdh/laravel-ide-helper` for generating IDE helper files to improve auto-completion and code navigation
* `barryvdh/laravel-debugbar` for providing a comprehensive debugging toolbar to aid in development and troubleshooting
* `laravel-shift/blueprint` for code generation tool for Laravel developers
* `rector/rector` for automatically refactoring PHP code to improve readability, maintainability, and performance
* `pint/pint` for optimizing PHP code styling and formatting to adhere to the PSR-12 standard
* `larastan/larastan` for performing static analysis and type checking on PHP code to catch errors and improve code quality
* `laravel/wayfinder` for generating optimized route definitions and improving application performance
* `laravel-lang/common` for providing a set of common language translations and localization tools
* `peckphp/peck` for identify pure wording or spelling (grammar) mistakes in your codebase
* `tightenco/duster` for optimizing PHP code styling and formatting
* `nunomaduro/essentials` for providing a set of essential tools and utilities for Laravel development
* `mantraideas/laravel-env-doctor` for analyzing and optimizing environment variables to improve application performance and security
* `spatie/laravel-csp` for Content Security Policy (CSP)

### NPM

* `@laravel/vite-plugin-wayfinder` for integrating Laravel's Wayfinder package with Vite to enable optimized route definitions

## Custom Commands

This repository includes the following custom commands:

### Linting

* `composer lint` to run PHP linter
* `pnpm lint` to run JavaScript linter

### Testing

* `composer test` to run PHP unit tests
* `pnpm test` to run JavaScript unit tests

### Fixing

* `composer fix` to fix PHP code style issues
* `pnpm fix` to fix JavaScript code style issues


## License

The Laravel + React starter kit is open-sourced software licensed under the MIT license.
