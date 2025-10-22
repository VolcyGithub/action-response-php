# Action Response PHP

**Action Response PHP** is a lightweight PHP library for handling structured messages in different languages, HTTP responses, client detection, and JSON responses. It is built with modularity in mind and follows modern PHP best practices.

## ✨ Key Feature: The Responder Class

The `Responder` class is the heart of this library, providing a unified interface for handling responses:

```php
use ARP\Responder;

// Quick JSON responses
Responder::sendJson('auth.login.success');

// Get localized text
Responder::getRawText('auth.login.success');

// Custom responses with data
Responder::sendJson('auth.login.success', ['token' => 'xyz']);

// Error responses
Responder::sendError('auth.login.invalid_credentials');
```

Note: The library ships with predefined messages organized by namespace (e.g., `auth`, `user`, `payment`).

Example of available messages:

```php
return [
    'auth' => [
        'login' => [
            'success' => ['code' => 1001, 'http_status' => 200, 'message' => ['en' => 'Login successful', 'fr' => 'Connexion réussie'], 'type' => 'success'],
            'invalid_credentials' => ['code' => 1002, 'http_status' => 401, 'message' => ['en' => 'Invalid credentials', 'fr' => 'Identifiants invalides'], 'type' => 'error'],
        ]
    ],
];
```

## 📦 Installation

```bash
composer require volcy/action-response
```

## 📞 Core Components

```
src/
│  ├─ Responder.php      # Main class for handling responses
│  ├─ Http/
│  ├─ Message/
│  ├─ Factory/
│  └─ Support/
```

## 🍰 Usage Examples

### 1. Basic Response Handling

```php
use ARP\Responder;

// Success response
Responder::sendJson('user.create.success');

// Error response with custom data
Responder::sendError('user.create.failed', [
    'errors' => $validationErrors
]);

// Get raw message text
echo Responder::getRawText('user.create.success', 'fr');
```

### 2. Advanced Features

```php
use ARP\Responder;

// With custom HTTP headers
Responder::sendJson('payment.success', [], ['X-Transaction-ID' => '123']);

// Custom status code
Responder::sendJson('custom.message', [], [], 418);

// Language detection
Responder::setDefaultLanguage('fr');
```

### 3. Working with Messages

```php
use ARP\Factory\MessageFactory;

$message = MessageFactory::getInstance()->createMessage('auth.login.success');
echo $message->status();        // 200
```

## 🛠️ Requirements

- PHP >= 8.1
- Composer

## 📜 License

MIT License © Yowensly
