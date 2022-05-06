# example-wordpress
### An simple developer Wordpress built with Docker and Bedrock

A simple Wordpress for developing purposes using Docker and Bedrock.
Simply run `docker compose -f docker-compose.yml up` to start the service.

You can access the frontend under http://wordpress.localhost
The Backend is accessible under http://wordpress.localhost/wp/wp-admin

An Adminer instance is also included to access the database under http://adminer.wordpress.localhost
Use `wordpress` as username and `wordpress` as password. The database is called `wordpress`.
For internal MySQL connections the servername is `db`.

Also an Mailhog is available. The frontend is accessible under http://mailhog.wordpress.localhost.
To connect via SMTP use the servername `mailhog` and the port `1025` without TLS/SSL and no authentication.

For the first start, simply run `composer install` inside `src` directory.