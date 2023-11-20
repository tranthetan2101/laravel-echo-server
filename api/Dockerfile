FROM php:8.1.0-fpm

WORKDIR /var/www/

RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    libzip-dev \
    supervisor \
    git \
    curl \
    zip \
    unzip

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pcntl zip

# Install Swoole extension
RUN pecl install swoole && docker-php-ext-enable swoole

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir -p /etc/crontabs
RUN chown www-data:www-data /etc/crontabs && chmod 700 /etc/crontabs

# Configure Supervisor
COPY .dev/supervisord /etc/supervisord
RUN mkdir -p /var/log/supervisord

# Configure entrypoint script
COPY .dev/docker-entrypoint.sh /var/www/.dev/docker-entrypoint.sh
RUN chmod +x /var/www/.dev/docker-entrypoint.sh \
    && chown www-data:www-data /var/www/.dev/docker-entrypoint.sh
RUN chown -R www-data:www-data .
USER root:www-data

ENV ENABLE_CRONTAB 1
ENV ENABLE_HORIZON 1

ENTRYPOINT ["/bin/bash","/var/www/.dev/docker-entrypoint.sh"]

EXPOSE 9000

CMD ["supervisord", "-n", "-c", "/etc/supervisord/supervisord.conf"]
