# Laravel Docker Mysql(MariaDB) Project

this docker setup forked from https://github.com/aschmelyun/docker-compose-laravel by Andrew Schmelyun

# How to run this project
1. Make sure to have docker & docker-compose installed => running docker
2. Install Postman desktop => for trying api
3. Install Dbeaver => optional to check data in db
4. Install Vscode and terminal => checking code and run terminal command
5. All Laravel main code on src folder
6. Log can be seen on src/storage/logs/laravel.log

## How to run
1. to start the docker run command `docker-compose up -d --build site`

make sure open localhost in browser and will displaying laravel homepage

## Migrate database up
1. first change directory to src `cd src`
2. run `docker-compose run --rm artisan migrate`

## Get the postman
import collection and environment json from postman folder

## API LIST:
1. Login
2. Logout
3. Register
4. Get Authenticated User
5. Get All User
6. Get User By ID
7. Update User By ID

## Trying api
1. Register one user via Register api
2. Login with the username and password
3. Token automatically copied to access-token variable env
4. You can try get all, get authenticated user, get by id, update user 
5. (Optional) Can check via dbeaver for user data

```
MYSQL_DATABASE: homestead
MYSQL_USER: homestead
MYSQL_PASSWORD: secret
```
     
extra note:
## docker compose down to reset
`docker-compose down -v`

## migrate down
`cd src`
`docker-compose run --rm artisan migrate:rollback`