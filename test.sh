#! /usr/bin/bash

cmd=./vendor/bin/phpunit

for x in $@
do
    if [ $x == --verbose ]
        then
            cmd="$cmd --testdox"
    fi

    if [ $x == --color ]
        then
            cmd="$cmd --color=always"
    fi
done

echo "`$cmd`"