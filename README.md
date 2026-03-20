# SmartPanel (SMM Panel)

A modular Social Media Marketing (SMM) panel built on **CodeIgniter 3 + HMVC**.
It provides customer and admin workflows for service ordering, wallet top-ups, provider synchronization, subscriptions, drip-feed orders, and API-based automation.

## Project Overview

- **Backend framework:** CodeIgniter 3 (with Modular Extensions / HMVC)
- **Language:** PHP
- **Database:** MySQL / MariaDB
- **Entry point:** `/index.php`
- **Installer:** `/install/`
- **Main app directory:** `/app`
- **Themes:** `/themes/pergo` and `/themes/regular`
- **Database schema dump:** `/smartsh1_smm.sql`

## Repository Structure

```text
/
├── index.php                  # Main front controller
├── .htaccess                  # Rewrite rules to index.php
├── app/
│   ├── config/                # CI routing, autoload, db config
│   ├── core/                  # CI core + MY_* extensions
│   ├── helpers/               # Shared helper functions
│   ├── libraries/             # Bundled PHP libraries
│   ├── modules/               # HMVC feature modules
│   └── views/                 # Shared views
├── assets/                    # Global CSS/JS/images/plugins
├── themes/                    # Frontend themes (pergo, regular)
├── install/                   # Web installer
└── smartsh1_smm.sql           # SQL schema and seed data
```

See also:
- [docs/ARCHITECTURE.md](docs/ARCHITECTURE.md)
- [docs/INSTALLATION.md](docs/INSTALLATION.md)
- [docs/USAGE.md](docs/USAGE.md)
- [docs/API.md](docs/API.md)
- [docs/CONTRIBUTING.md](docs/CONTRIBUTING.md)

## Core Features

- User authentication (sign-in, sign-up, reset password)
- Service browsing and ordering
- Drip-feed and subscription order support
- Wallet and add-funds workflows
- Multiple payment gateway integrations (module-based)
- Provider sync and order-status sync
- Ticketing, notifications, profile management
- Public API endpoint for client automation (`/api/v1`)

## Quick Start

1. Configure a web server root to this repository.
2. Import database schema from `smartsh1_smm.sql`.
3. Set DB credentials in `app/config.php`.
4. Ensure Apache/Nginx routes requests to `index.php`.
5. Open the site and complete setup in admin settings.

Detailed steps: [docs/INSTALLATION.md](docs/INSTALLATION.md)

## Runtime & Boot Flow

- `index.php` sets environment and framework paths.
- It loads `app/config.php` for DB/timezone/encryption values.
- CodeIgniter bootstrap runs from `app/core/system/core/CodeIgniter.php`.
- `app/config/routes.php` determines the active theme controller from `themes/config.json`.

## Configuration

Primary files:
- `app/config.php` (DB host/user/pass/db name, timezone, encryption key)
- `app/config/database.php` (CodeIgniter DB driver settings)
- `app/config/routes.php` (routes and cron endpoints)
- `themes/config.json` (active theme)

## Modules

Feature modules are in `app/modules/` (HMVC). Major modules include:
- `auth`, `home`, `services`, `order`, `api`, `api_provider`
- `add_funds`, `subscriptions`, `dripfeed`
- `tickets`, `transactions`, `statistics`, `users`, `setting`

Full map: [docs/ARCHITECTURE.md](docs/ARCHITECTURE.md)

## API

- Docs page: `/api/docs`
- Endpoint: `/api/v1`
- Actions: `services`, `add`, `status`, `balance`

Reference and examples: [docs/API.md](docs/API.md)

## Build, Lint, and Test Status

This repository does **not** include a root build/test pipeline.

- No root `package.json`
- No PHPUnit config at root
- Vendored plugin subdirectories contain their own legacy package manifests

Operational validation is typically done by running the app and exercising main flows in browser.

## Security Notes

- Rotate any default credentials in `app/config.php` before deployment.
- Use a strong, unique encryption key.
- Restrict access to installer after setup.
- Keep bundled dependencies updated.

## Contribution

Please follow [docs/CONTRIBUTING.md](docs/CONTRIBUTING.md).
