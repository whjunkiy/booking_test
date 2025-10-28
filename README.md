```

services:
    app:
        build:
            context: ./docker/php
            dockerfile: Dockerfile
        container_name: laravel_app
        restart: unless-stopped
        working_dir: /var/www
        volumes:
            - ./:/var/www
        networks:
            - laravel

    nginx:
        image: nginx:alpine
        container_name: laravel_nginx
        restart: unless-stopped
        ports:
            - "8000:80"
        volumes:
            - ./:/var/www
            - ./docker/nginx/default.conf:/etc/nginx/conf.d/default.conf
        networks:
            - laravel

    db:
        image: postgres:15-alpine
        container_name: laravel_db
        restart: unless-stopped
        environment:
            POSTGRES_DB: ${DB_DATABASE}
            POSTGRES_USER: ${DB_USERNAME}
            POSTGRES_PASSWORD: ${DB_PASSWORD}
        volumes:
            - laravel_db_data:/var/lib/postgresql/data
        networks:
            - laravel

    workspace:
        build:
            context: ./docker/php
            dockerfile: Dockerfile
        container_name: laravel_workspace
        volumes:
            - ./:/var/www
        networks:
            - laravel

networks:
    laravel:
        driver: bridge

volumes:
    laravel_db_data:
        driver: local
****
