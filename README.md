# Oil Change Check

A small Laravel 12 app that determines whether a car is due for an oil change based on odometer and date inputs.

A car needs an oil change if either:

- it has been more than 5000 km since the last oil change, or
- it has been more than 6 months since the last oil change.

## Requirements

- PHP 8.2+
- Composer
- SQLite

## Setup

1. Install PHP dependencies:

```bash
composer install
```

2. Copy the environment file if you do not already have one:

```bash
cp .env.example .env
```

3. Generate an application key if `APP_KEY` is empty in `.env`:

```bash
php artisan key:generate
```

4. Create the SQLite database file if it does not exist:

```bash
touch database/database.sqlite
```

`.env.example` is already configured with `DB_CONNECTION=sqlite`.

5. Run migrations:

```bash
php artisan migrate
```

6. Start the app:

```bash
php artisan serve
```

Then open http://127.0.0.1:8000 in your browser.
