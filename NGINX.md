# nginx config

If you're running this site in nginx, you'll need the following rules in the server config:

```
  location / {
    index index.php index.html;
  }

  location /r/ {
    try_files $uri $uri/ /r/index.php?$args;
  }

  location /events/ {
    index index.php index.html;
    try_files $uri $uri/ /events/index.php?$args;
  }

  location /code/ {
    index index.php;
    try_files $uri $uri/ /code/index.php?$args;
  }

  location /vendor/ {
    deny all;
  }

  location ~ \.php$ {
    fastcgi_pass    php-pool;
    fastcgi_index   index.php;
    fastcgi_split_path_info ^(.+\.php)(.*)$;
    include fastcgi_params;
    fastcgi_param   SCRIPT_FILENAME $document_root$fastcgi_script_name;
  }
```
