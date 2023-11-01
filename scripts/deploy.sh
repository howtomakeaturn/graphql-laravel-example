#!/bin/bash

set -e
echo Start deploying to main server...
ssh root@tony-main-server 'cd "/home/graphql-laravel-example.tw" && git pull'
echo Finish deploying.
