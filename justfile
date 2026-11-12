#Standart-Befehl (Listet alles Befehle auf)
default:
    @just --list

#Startet einen Localen Webserver auf Port 8000
run_local_web:
    php -S localhost:8000 -t public
