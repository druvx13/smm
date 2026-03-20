# Usage Guide

## User Flows

### 1) Authentication

- Login: `/auth/login`
- Sign up: `/auth/signup`
- Forgot password: `/auth/forgot_password`

Note: route names are defined by controller method names in `app/modules/auth/controllers/auth.php`, so they are intentionally mixed style (`login`, `signup`, `forgot_password`).

Auth controller: `app/modules/auth/controllers/auth.php`

### 2) Browse Services and Place Orders

- Services page module: `app/modules/services`
- Order module: `app/modules/order`
- Drip-feed module: `app/modules/dripfeed`
- Subscription module: `app/modules/subscriptions`

### 3) Add Funds

Add funds module: `app/modules/add_funds`

Typical flow:
1. Select amount/payment method
2. Submit add funds request
3. Complete payment in gateway form or redirect
4. See transaction result in wallet/transactions

## Admin Flows

Primary modules:
- `setting` (system settings)
- `users` (user management)
- `services` + `category` (catalog)
- `api_provider` (provider sync)
- `transactions`, `statistics`, `tickets`, `news`, `faqs`

## Theme Management

Active theme is set in:

- `themes/config.json`

Controllers and views are loaded according to active theme.

## Cron/Scheduled Operations

Configure cron jobs to hit routes such as:

- `/cron/order`
- `/cron/status`
- `/cron/status_subscriptions`

Payment-related cron/webhook handlers:

- `/coinpayments/cron`
- `/coinbase/cron`

## Operational Checks

- Verify login and signup
- Verify service listing and order creation
- Verify add funds flow in configured gateway
- Verify provider sync and cron status updates
- Verify API key calls via `/api/v1`
