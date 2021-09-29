 #!/bin/bash

if [ "$1" = "db" ] ; then
    echo "Creating Backup of DB"
    docker-compose exec db mysqldump -u admin --password=root --no-tablespaces feedbackdb --result-file=//docker-entrypoint-initdb.d//feedbackdb.sql
fi

echo "Stopping Containers"
docker-compose down -v

# echo "Cleaning wp-data Folder"
# cd wp-data

# find -maxdepth 1 ! -path . ! -path './wp-content' -not -path './wp-content/*' -type d -exec rm -rv {} +
# find . -maxdepth 1 ! -name 'wp-config.php' -not -path './wp-content/*' -type f -delete 
