#Standart-Befehl (Listet alles Befehle auf)
default:
    @just --list

#Startet einen Localen Webserver auf Port 8000
run_local_web:
    php -S localhost:8000 -t public

#UnitTests ausführen
test *ARGS="":
    ./vendor/bin/phpunit -c phpunit.xml --display-deprecations --display-errors --display-notices --display-phpunit-deprecations --display-warnings {{ARGS}}


test-coverage:
    vendor/bin/phpunit
    @echo "HTML coverage report: build/coverage/html/index.html"

test-report: test-coverage
    xdg-open build/coverage/html/index.html

infect:
    vendor/bin/infection --threads=max --show-mutations

infect-report:
    xdg-open build/infection/infection.html