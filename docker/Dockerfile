# =================================================================
# Development image
# =================================================================
FROM serversideup/php:8.2-fpm-nginx AS development

USER root

RUN install-php-extensions intl exif \
  && apt-get update \
  && apt-get install -y mariadb-client iputils-ping curl gnupg \
  && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get install -y nodejs \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

COPY --chmod=755 ./docker/nginx/nginx.conf.template /etc/nginx/nginx.conf.template
RUN chown -R www-data:www-data /var/log/nginx

# Configure shell aliases
RUN echo "alias ll='ls -al'" >> /etc/bash.bashrc && \
    echo "alias a='php artisan'" >> /etc/bash.bashrc && \
    echo "alias c='composer'" >> /etc/bash.bashrc && \
    \
    echo "alias logs='tail -n 100 -f storage/logs/laravel.log'" >> /etc/bash.bashrc && \
    echo "alias amfs='a migrate:fresh --seed'" >> /etc/bash.bashrc && \
    echo "alias aoc='a optimize:clear'" >> /etc/bash.bashrc && \
    \
    echo "alias am:fi-r='a make:filament-resource'" >> /etc/bash.bashrc && \
    echo "alias am:fi-rm='a make:filament-relation-manager'" >> /etc/bash.bashrc && \
    echo "alias am:fi-w='a make:filament-widget'" >> /etc/bash.bashrc

USER www-data
