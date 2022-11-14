## File structure
```bash
├── app
...
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── AddressController.php
│   │   │   ├── Auth
│   │   │   │   ├── AuthenticatedSessionController.php
                ...
│   │   │   └── Controller.php
│   │   ├── Kernel.php
...
│   ├── Models
│   │   ├── Address.php
│   │   └── User.php
│   ├── Policies
│   │   └── AddressPolicy.php
...
├── routes
│   ├── api.php
│   ├── auth.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
```

## Start service locally
Add the attached .env file to the root directory first please.

Run ``composer install``
Run ``php artisan migrate``
Run ``php artisan serve``

