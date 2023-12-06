#!/bin/bash
if [ -n "$1" ]
then
    script_name="$1"
else
    script_name="test.php"
fi
docker run --rm -v $(pwd):/app -w /app/php php:8.2.13 php ${script_name}