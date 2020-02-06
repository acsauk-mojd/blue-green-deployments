#!/bin/sh
set -e

./bin/phpunit -c ./phpunit.xml.dist --group smoke
