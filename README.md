# vnstat-php

Super simple dashboard page for **vnstat** using PHP. 
Useful in keeping track of bandwidth use for applications like php-proxy:

- https://github.com/Athlon1600/php-proxy

### Installation

Install actual `vnstat` package.

```shell
sudo apt-get -y install vnstat
```

Go to wherever your apache or nginx is installed (usually `/var/www/`), and download `vnstat.php`

```shell
wget https://raw.githubusercontent.com/Athlon1600/vnstat-php/master/vnstat.php -O vnstat.php
```

### Demo

![](https://cdn.proxynova.com/github/vnstat.png)

