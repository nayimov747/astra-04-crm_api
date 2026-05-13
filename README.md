# Astra CRM API

REST API backend for Astra CRM built with Symfony and API Platform.

![Symfony](https://img.shields.io/badge/Symfony-7-black?style=for-the-badge&logo=symfony)
![PHP](https://img.shields.io/badge/PHP-8.3-777bb4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-blue?style=for-the-badge&logo=mysql)
![JWT](https://img.shields.io/badge/JWT-Authentication-orange?style=for-the-badge)

---

## API Features

- JWT Authentication
- User management
- Company management
- Customer management
- RESTful API
- Doctrine ORM
- API Platform

---

## Frontend Repository

👉 [CRM Frontend](https://github.com/nayimov747/astra-04-crm_front)

---

## Installation

```bash
git clone https://github.com/nayimov747/astra-04-crm_api.git

cd crm-api

composer install
```
Create .env.local

```bash
DATABASE_URL=""
JWT_PASSPHRASE=""
```
Generate JWT keys:
```bash
php bin/console lexik:jwt:generate-keypair
```

Run migrations:
```bash
php bin/console doctrine:migrations:migrate
```

Start server:
```bash
symfony server:start
```


