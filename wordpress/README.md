This is a Dockerized [Wordpress](https://wordpress.org/) project

## Getting Started

First, create the containers Wordpress and MySQL using docker-compose

```bash
docker-compose up -d
```

Once containers are spun up, you can visit the Wordpress site:
- [http://localhost:8080](http://localhost:8080) to browse the homepage
- [http://localhost:8080/wp-admin](http://localhost:8080/wp-admin) to login & view the Wordpress CMS

When you are ready to tear down the containers, run the cleanup script 

```bash
./cleanup.sh
# or 
./cleanup.sh db # Tear down containers and backup database
```