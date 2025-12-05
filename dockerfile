FROM php:8.1-fpm-alpine

# Instala extensões necessárias, git e utilitários
RUN docker-php-ext-install pdo pdo_mysql

# Cria diretório de trabalho
WORKDIR /var/www/html

# Ajustes de permissões (opcional)
RUN addgroup -g 1000 appgroup && adduser -D -u 1000 -G appgroup appuser             && chown -R appuser:appgroup /var/www/html

USER appuser

EXPOSE 9000

CMD ["php-fpm"]
