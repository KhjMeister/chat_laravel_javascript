# [Chat App]

![image](https://user-images.githubusercontent.com/95680946/193211210-bf8f2b48-f10d-429c-829e-486f358873c9.png)

![image](https://user-images.githubusercontent.com/95680946/193211472-6bd3574a-45d6-42fd-857a-022580e04488.png)


---


### Prerequisites
- PHP >= 7.4
- Laravel >= 8.42
- MySQL >= 8.x
- [PHPREDIS](https://github.com/phpredis/phpredis/blob/develop/INSTALL.markdown) if using `redis` for drivers, which our default `.env.example` has set.


# Installation

#### Clone or download this repository
```bash
git clone https://github.com/KhjMeister/chat_laravel_javascript.git
```

#### Composer install
```bash
composer install
```

#### Rename the `.env.example` to `.env` and configure your environment, including your pusher keys if you use pusher.
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=1234
DB_DATABASE=demo
DB_USERNAME=root
DB_PASSWORD=password
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
MESSENGER_SOCKET_PUSHER=true
MESSENGER_SOCKET_KEY="${PUSHER_APP_KEY}"
MESSENGER_SOCKET_CLUSTER="${PUSHER_APP_CLUSTER}"
#etc
```

#### Run the Install Command
- This command will generate your `APP_KEY` for you, as well as migrating fresh and downloading our documentation files.
  - This will `WIPE` any data in your database as it runs `migrate:fresh` under the hood.
```bash
php artisan demo:install
```

---

## Running locally:

#### Run these commands in their own terminal inside your project folder
```bash
php artisan serve
php artisan queue:work --queue=messenger,messenger-bots
```

---

## Default seeded admin account:

### Email `admin@example.net`

### Password: `messenger`

### All other seeded accounts use `messenger` password as well


