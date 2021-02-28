# Documentation

# Local
```bash
sed -i 's/www.rinologie.ro/rinologie.test/g' ./backup/database.sql # LINUX
#sed -i '' -e 's/www.rinologie.ro/rinologie.test/g' ./backup/database.sql # MACOS
```

Mysql dump database
```bash
mysqldump rinologie > ./backup/database.sql
```

Mysql import database
```bash
mysql -uhomestead -p rinologie < ./backup/initial_database.sql
```

# Contrib plugins installed

# Custom plugins

# Customizations

# Steps

