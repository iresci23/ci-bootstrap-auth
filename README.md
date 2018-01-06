## Requirements

* PHP 5.6 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* MySQL 5+

### Installation

1. Download and unzip to your web server

2. Run composer install to download dependencies
```
$ composer install
```

3. Import database file

```
application/sql/ion_auth.sql
```
Adjust application/config/database.php with your DB connection string

4. Test login:
```
u: admin@admin.com
p: password

```



#### Third Party Libraries I used in this project

[Ion Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth)

[Material Design for Bootstrap 4](https://mdbootstrap.com/)

[Material Design Iconic Font](http://zavoloklom.github.io/material-design-iconic-font/)