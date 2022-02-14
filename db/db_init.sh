#!/bin/bash
mysqli -u root -e "CREATE DATABASE trucorp-db"
mysqli -u root trucorp-db < /var/www/html/trucorp-db.sql
