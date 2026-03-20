# Installation & Setup

## Requirements

From installer checks (`install/install/views/install.php`):

- PHP >= 5.6
- MySQLi extension
- cURL extension
- GD extension
- ZIP extension
- `allow_url_fopen = On`
- Writable files:
  - `/app/config.php`
  - `/index.php`

## 1) Prepare Web Server

Point web root to this repository directory and ensure rewrite support:

### Apache

Uses existing root `.htaccess`:

```apacheconf
RewriteEngine On
Options +FollowSymLinks
Options -Indexes
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteRule . index.php [L,QSA]
```

### Nginx (example)

```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## 2) Database Setup

```sql
CREATE DATABASE smart CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

Import schema:

```bash
mysql -u <user> -p smart < /home/runner/work/smm/smm/smartsh1_smm.sql
```

## 3) Configure App

Edit `/app/config.php`:

- `DB_HOST`
- `DB_USER`
- `DB_PASS`
- `DB_NAME`
- `TIMEZONE`
- `ENCRYPTION_KEY`

Then verify `/app/config/database.php` uses these constants.

## 4) Optional: Use Web Installer

Open:

- `/install/`

Installer controller: `install/install/controllers/install.php`

## 5) Permissions

Ensure writable directories needed by runtime are writable by web server user (for cache/log/uploads depending on use).

## 6) Post-Install Hardening

- Rotate default DB credentials
- Rotate encryption key
- Restrict/remove installer exposure in production
- Enforce HTTPS
- Keep dependencies updated
