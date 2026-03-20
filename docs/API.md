# API Reference

Controller: `app/modules/api/controllers/api.php`

## Base Endpoints

- API docs page: `/api/docs`
- API endpoint: `/api/v1`

## Authentication

Pass user API key in request parameter:

- `key=<api_key>`

## Supported Actions

- `services`
- `add`
- `status`
- `balance`

## Common Request Shape

```http
POST /api/v1
Content-Type: application/x-www-form-urlencoded

key=YOUR_API_KEY&action=services
```

## Examples

### Services

```bash
curl -X POST "https://your-domain/api/v1" \
  -d "key=YOUR_API_KEY" \
  -d "action=services"
```

### Add Order

```bash
curl -X POST "https://your-domain/api/v1" \
  -d "key=YOUR_API_KEY" \
  -d "action=add" \
  -d "service=123" \
  -d "link=https://example.com/post/1" \
  -d "quantity=100"
```

### Order Status

```bash
curl -X POST "https://your-domain/api/v1" \
  -d "key=YOUR_API_KEY" \
  -d "action=status" \
  -d "order=456"
```

### Balance

```bash
curl -X POST "https://your-domain/api/v1" \
  -d "key=YOUR_API_KEY" \
  -d "action=balance"
```

## Error Handling

The API returns JSON responses for success and error paths.
Common failures include:
- invalid/missing key
- invalid action
- missing required parameters
- invalid service id
