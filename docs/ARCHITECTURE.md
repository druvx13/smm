# Architecture

## Stack

- **Framework:** CodeIgniter 3
- **Pattern:** HMVC (Modular Extensions via `MY_Loader` / `MX_Loader`)
- **Language:** PHP
- **DB:** MySQL/MariaDB

## Boot Sequence

1. Request reaches `/index.php`
2. `ENVIRONMENT` is set (currently `production`)
3. `app/config.php` is required (DB constants, timezone, encryption key)
4. Core bootstrap executes via `app/core/system/core/CodeIgniter.php`
5. Routing resolves controller in `app/config/routes.php`
6. Default controller is selected based on `themes/config.json`

## High-Level Components

### 1) Framework Core

- `app/core/system/` → CodeIgniter system files
- `app/core/MY_Loader.php` and `app/core/MY_Router.php` → custom extension points

### 2) Application Layer

- `app/config/` → configuration, routes, autoload, constants
- `app/helpers/` → utility helpers used across modules
- `app/libraries/` → bundled third-party and custom libraries
- `app/views/` → shared rendering templates

### 3) Feature Modules (`app/modules`)

Each module follows HMVC conventions with `controllers/`, `models/`, `views/`, and optional `libraries/`.

Current modules:
- `add_funds`, `api`, `api_provider`, `auth`, `blocks`, `category`, `client`, `custom_page`
- `dripfeed`, `email`, `faqs`, `file_manager`, `home`, `language`, `maintenance`, `module`
- `news`, `notification`, `order`, `profile`, `services`, `setting`, `statistics`, `subscribers`
- `subscriptions`, `tickets`, `transactions`, `users`

### 4) Presentation Layer

- `themes/pergo`
- `themes/regular`

Theme contains:
- `controllers/`, `models/`, `views/`
- `assets/` (theme CSS/JS/images/plugins)
- `language/`

### 5) Global Assets

- `assets/css`, `assets/js`, `assets/images`, `assets/plugins`

## Data Flow (Example: Place Order)

1. User authenticates through `auth` module
2. User browses services (`services` module)
3. User submits order (`order` module)
4. Balance/transactions are checked (`transactions` module)
5. Provider actions can be delegated/synced (`api_provider` module)
6. Status updates pulled via cron routes

## Integration Points

- `/api/v1` for external clients
- Payment gateway modules in `app/modules/add_funds`
- Provider sync logic in `app/modules/api_provider`

## Scheduled/Cron Routes (from routes config)

- `/cron/order`
- `/cron/status`
- `/cron/status_subscriptions`
- `/coinpayments/cron`
- `/coinbase/cron`

## Installer Subsystem

- Separate entrypoint: `install/index.php`
- Installer app lives in `install/install/*`
- Writes/updates app configuration and initial setup state
