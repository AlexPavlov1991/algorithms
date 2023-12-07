#!/bin/bash
if [ -n "$1" ]
then
    script="$1"
else
    script="test.php"
fi
docker run --rm -v $(pwd):/app -w /app/ php:8.2.13 php index.php "/app/php/"${script}