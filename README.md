## Demo
[Demo in Heroku](http://ci3-bs4-auth.herokuapp.com/auth/login)

## Requirements

* PHP 5.6 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* MySQL 5+

### Installation

1. Download/clone this repo and unzip to your web server

2. Run composer to install dependencies
```
$ composer install
```

3. Import database file

```
application/sql/ion_auth.sql
```

4. Adjust application/config/database.php with your DB connection string and application/config/config.php if you wish to change the base_url
* Set your app environment at public/index.php

5. Test login:
```
u: admin@admin.com
p: password

```

That's it

#### Third Party Libraries I used in this project

[Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth)

[Material Design for Bootstrap 4](https://mdbootstrap.com/)

[Material Design Iconic Font](http://zavoloklom.github.io/material-design-iconic-font/)