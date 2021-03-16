# Documentation

# Local
```bash
sed -i 's,www.rinologie.ro,dev1.rinologie.ro,g' ./backup/database.sql # LINUX
#sed -i '' -e 's,www.rinologie.ro,dev1.rinologie.ro,g' ./backup/database.sql # MACOS
```

Mysql dump database
```bash
mysqldump rinologie > ./backup/database.sql
```

Mysql import database
```bash
mysql -uhomestead -p rinologie < ./backup/initial_database.sql
```

Create ```wp-config.php```
Edit following variables:
```bash
define( 'DB_NAME', 'rinologie' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

$table_prefix = 'ri_';

define( 'WP_DEBUG', true );
```


# Contrib plugins installed

# Custom plugins

# Customizations

# Steps

