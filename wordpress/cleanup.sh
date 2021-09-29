 #!/bin/bash

if [ "$1" = "db" ] ; then
    echo "Creating Backup of DB"
    docker-compose exec db mysqldump -u admin --password=root --no-tablespaces feedbackdb --result-file=//docker-entrypoint-initdb.d//feedbackdb.sql
fi

echo "Stopping Containers"
docker-compose down -v
