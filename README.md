# Docker-Compose-Joomla-PostgreSQL-Nginx

### Install
```
cp docker-compose.yml makedb.php nginx.conf /home/user/
docker-compose -f docker-compose.yml up -d
```
### joomla web config db
- Type db: PostgreSQL
- Server db: db
- User name: postgres
- Db password: mysecretpassword
- Db name: db
- Next
- 123
