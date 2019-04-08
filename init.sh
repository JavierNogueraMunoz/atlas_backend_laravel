#!/bin/bash

docker exec -i "LaravelBackend" mysql -umyuser -pmypassword < sql.sql

echo "Load finish"sudo 

exit 0