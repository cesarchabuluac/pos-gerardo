#!/bin/bash

# =======================================
# Script de Deploy para un Cliente 
# Nginx + PHP 7.4 + MySQL + SSL + Restore DB
# =======================================

CLIENTE=$1
DOMAIN="$CLIENTE.dicrotictech.com"
WEBROOT="/var/www/clients/$CLIENTE"
TEMPLATE="/var/www/template"

DB_NAME="${CLIENTE}_db"
DB_USER="${CLIENTE}_user"
# DB_PASS=$(openssl rand -base64 12)
DB_PASS=$(tr -dc A-Za-z0-9 < /dev/urandom | head -c 16)

PHP_FPM_SOCK="/var/run/php/php7.4-fpm.sock"

SQL_BACKUP="$TEMPLATE/BASE DE DATOS/pos_moderno.sql"

EMAIL_SSL="gerardocg.1992@gmail.com"

# Validación
if [ -z "$CLIENTE" ]; then
    echo "Uso: deploy_cliente.sh nombre_cliente"
    exit 1
fi

echo "======================================="
echo " DEPLOY PARA CLIENTE: $CLIENTE"
echo " Dominio: $DOMAIN"
echo " BD: $DB_NAME"
echo "======================================="

# Crear directorio del cliente
echo "[1/7] Copiando template..."
mkdir -p "$WEBROOT"
cp -R "$TEMPLATE/"* "$WEBROOT/"
chown -R www-data:www-data "$WEBROOT"
chmod -R 755 "$WEBROOT"
echo "     ✔ Directorio creado"

# Crear base de datos
echo "[2/7] Creando Base de Datos..."
mysql -uroot -p <<EOF
CREATE DATABASE $DB_NAME;
CREATE USER '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';
FLUSH PRIVILEGES;
EOF

echo "     ✔ BD y usuario creados"

# Restaurar backup SQL
echo "[3/7] Restaurando backup SQL..."
if [ -f "$SQL_BACKUP" ]; then
    mysql -u root -p "$DB_NAME" < "$SQL_BACKUP"
    echo "     ✔ Backup restaurado"
else
    echo "     ⚠ Backup no encontrado: $SQL_BACKUP"
fi

# 4. Copiar config.php original y reemplazar credenciales
echo "[4/7] Generando config.php personalizado..."

cp "$TEMPLATE/config.php" "$WEBROOT/config.php"

# Reemplazar DB name
sed -i "s/'db' => '[^']*'/'db' => '$DB_NAME'/g" "$WEBROOT/config.php"

# Reemplazar DB user
sed -i "s/'user' => '[^']*'/'user' => '$DB_USER'/g" "$WEBROOT/config.php"

# Reemplazar DB pass
sed -i "s/'pass' => '[^']*'/'pass' => '$DB_PASS'/g" "$WEBROOT/config.php"

# Reemplazar SUBDIRECTORY a vacío siempre
sed -i "s/define('SUBDIRECTORY'.*/define('SUBDIRECTORY', '');/g" "$WEBROOT/config.php"

chown www-data:www-data "$WEBROOT/config.php"
chmod 644 "$WEBROOT/config.php"
echo "     ✔ config.php generado correctamente"

# Crear VirtualHost Nginx
echo "[5/7] Configurando Nginx..."
NGINX_CONF="/etc/nginx/sites-available/$CLIENTE.conf"

cat > "$NGINX_CONF" <<EOF
server {
    listen 80;
    server_name $DOMAIN;

    root $WEBROOT;
    index index.php index.html;

    location / {
        try_files \$uri \$uri/ /index.php;
    }

    location ~ \\.php\$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:$PHP_FPM_SOCK;
    }
}
EOF

ln -sf "$NGINX_CONF" "/etc/nginx/sites-enabled/$CLIENTE.conf"

systemctl reload nginx

echo "     ✔ Nginx configurado"

# Activar SSL automáticamente
echo "[6/7] Activando SSL..."
sudo certbot --nginx -d "$DOMAIN" --non-interactive --agree-tos -m "$EMAIL_SSL" || {
    echo "     ⚠ ERROR: No se pudo generar SSL (probable DNS sin propagar)"
}

# Final
echo "[7/7] Finalizando..."
systemctl restart nginx
systemctl restart php7.4-fpm

echo ""
echo "======================================="
echo " DEPLOY COMPLETADO PARA $CLIENTE"
echo " URL: https://$DOMAIN"
echo " BD: $DB_NAME"
echo " USER: $DB_USER"
echo " PASS: $DB_PASS"
echo "======================================="

Congratulations! You have successfully enabled HTTPS on https://pollito.dicrotictech.com

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
If you like Certbot, please consider supporting our work by:
 * Donating to ISRG / Let's Encrypt:   https://letsencrypt.org/donate
 * Donating to EFF:                    https://eff.org/donate-le
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
[7/7] Finalizando...

=======================================
 DEPLOY COMPLETADO PARA pollito
 URL: https://pollito.dicrotictech.com
 BD: pollito_db
 USER: pollito_user
 PASS: k47Ed8uGsD7bgDaR
=======================================
root@ubuntu-s-1vcpu-1gb-sfo2-01:/usr/local/bin#

