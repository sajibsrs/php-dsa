#! /usr/bin/bash

for x in $@
do
    if [ $x == --test ]
        then
            ./vendor/bin/phpunit --testdox --color=always
    fi

    if [ $x == --coverage ]
        then
            XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-text --color=always
    fi
done