#Standart-Befehl (Listet alles Befehle auf)
default:
    @just --list

#Startet einen Localen Webserver auf Port 8000
run_local_web:
    php -S localhost:8000 -t public

#UnitTests ausführen
test *ARGS="":
    ./vendor/bin/phpunit -c phpunit.xml --display-deprecations --display-errors --display-notices --display-phpunit-deprecations --display-warnings {{ARGS}}

# Mutation Test
infect:
    vendor/bin/infection --threads=max --show-mutations

# Run mutation testing and open the HTML report in the browser
infect-report: infect
    xdg-open build/infection/infection.html