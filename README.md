# Drivemark

## Quick Installation

```
$ git clone https://github.com/[account]/assessments-drivemark.git
$ cd assessments-drivemark && composer install && npm install && npm run dev
$ cp .env.example .env
```

update your `.env` values with the database details then:

```
$ php artisan migrate:fresh --seed
```
