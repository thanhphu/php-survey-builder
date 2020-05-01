# php-survey-builder

*php-survey-builder* is a PHP web application that lets you create surveys and collect survey responses. The results can be viewed on charts and exported to CSV. The survey data is stored within a sqlite3 database by default, and can also be stored in a mysql or postgresql database.  Edit config/Database.ini to use mysql or postgresql.

## Default login

The default login is 'admin' with a password of '12345'. You can add and remove logins from the Users tab.

## Quick Start
```sh
git clone https://github.com/thanhphu/php-survey-builder.git
cd php-survey-builder
php -S localhost:8080
```

## Troubleshooting

Be sure that your data/ directory is writable by your web server.
