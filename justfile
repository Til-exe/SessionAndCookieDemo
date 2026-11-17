#Standart-Befehl (Listet alles Befehle auf)
default:
    @just --list

#Startet einen Localen Webserver auf Port 8000
run_local_web:
    php -S localhost:8000 -t public

#Unit-Tests ausführen
test *ARGS="":
    ./vendor/bin/phpunit -c phpunit.xml --display-deprecations --display-errors --display-notices --display-phpunit-deprecations --display-warnings {{ARGS}}

#Unit-Tests Report erstellen
test-coverage:
    vendor/bin/phpunit
    @echo "HTML coverage report: build/coverage/html/index.html"
    
#Unit-Tests Report öffnen
test-report: test-coverage
    xdg-open coverage/html/index.html

#Mutation-Testing
infect:
    vendor/bin/infection --threads=max --show-mutations

#Mutation-Test Report
infect-report:
    xdg-open build/infection/infection.html