[![Laravel Logo](https://laramate.de/laramate.webp)](https://laramate.de)

# Statamic Custom Data Sources — Example Repository

This repository accompanies the Laramate blog post [**Integrating Custom Data Sources in Statamic**](https://laramate.de/blog/statamic-individuelle-datenquellen-integrieren).

It demonstrates two approaches to loading external API data into a Statamic Page Builder section — and explains why only one of them is recommended.

> **Note:** This is an example project for educational purposes. It is not intended for production use.

## What This Example Covers

- **Dictionary Fieldset** — Populate a Control Panel dropdown from an external API without writing a custom Fieldtype
- **Quick & Dirty** — Loading data directly in a Blade template via `@php` blocks *(not recommended)*
- **View Components** — The recommended approach: clean separation of data logic and presentation
- **Action Pattern** — Using the [laramate/support](https://packagist.org/packages/laramate/support) `Action` class to encapsulate business logic
- **Service Layer** — Wrapping external HTTP communication in a dedicated service class
- **Caching** — Preventing repeated API calls in the Control Panel via Laravel's cache

## Requirements

- PHP 8.2+
- Laravel 11+
- Statamic 5+

## Installation

```bash
git clone https://github.com/Laramate/statamic-custom-data-example.git
cd statamic-custom-data-example

composer i
npm i && npm run build

cp .env.example .env
php artisan key:generate
```

Create a Statamic super user:

```bash
php artisan statamic:make:user
```

or use `admin@laramate.de` with password `secret` to log into the Control Panel and explore the Page Builder with both section types.

## Project Structure

```
app/
├── Actions/
│   ├── GetProductsAction.php
│   └── GetProductCategoriesAction.php
├── Dictionaries/
│   └── ProductCategories.php
├── Services/
│   └── ProductApiService.php
└── View/Components/
    └── ProductListing.php
resources/views/
├── components/
│   ├── product-listing.blade.php
│   └── product-card.blade.php
└── page_builder/
    ├── recommended_way.blade.php
    └── quick_and_dirty.blade.php
```

## Related Resources

- 📖 [Blog Post: Integrating Custom Data Sources in Statamic](https://laramate.de/blog/statamic-individuelle-datenquellen-integrieren)
- 📖 [Blog Post: Actions — More Structure in Laravel Business Logic](https://laramate.de/blog/actions-mehr-ordnung-in-der-laravel-business-logik)
- 📦 [laramate/support on Packagist](https://packagist.org/packages/laramate/support)

---

### About Laramate

We build high-performance custom software and CRM systems that adapt to you. Leveraging
the power of Laravel, React, and Statamic, we create digital experiences tailored
specifically to your operational needs.

---

© 2026 Laramate
•  [www.laramate.de](https://laramate.de)
•  [github.com/Laramate](https://github.com/Laramate)
