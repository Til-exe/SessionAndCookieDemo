# Quantify

**Willkommen bei Quantify!**

Quantify ist eine Anwendung zur Überwachung und Verwaltung von Gegenständen. Ziel des Projekts ist es, eine zentrale und übersichtliche Lösung bereitzustellen, mit der Gegenstände erfasst, verwaltet und überwacht werden können.

Das Projekt wurde im Auftrag der **Synatix GmbH** entwickelt.

---

## Projektinformationen

| Eigenschaft | Information |
|---|---|
| **Projektname** | Quantify |
| **Auftraggeber** | Synatix GmbH |
| **Programmiersprache** | PHP |
| **PHP-Version** | 8.5.12 |
| **Repository** | GitLab |

### Systemvoraussetzungen

Für den Betrieb und die Entwicklung von Quantify werden folgende Voraussetzungen benötigt:

- PHP **8.5.12**
- Git
- Eine geeignete Entwicklungsumgebung



Die aktuell installierte PHP-Version lässt sich mit folgendem Befehl überprüfen:

```bash
php --version
```

Informationen zur verwendeten PHP-Version findest du hier:

[PHP 8.5.12 – Offizielle Release-Seite](https://www.php.net/releases/8_5_12.php)

---

## Installation

### Repository klonen

Um das Projekt lokal einzurichten, muss zunächst das Git-Repository geklont werden.

```bash
git clone git@gitlab.synatix.cloud:synatixgroup/companies/synatix/it-academy/quantify/quantify.git
```

Anschließend kann in das Projektverzeichnis gewechselt werden:

```bash
cd quantify
```

### Abhängigkeiten installieren


Zuerst wird PHP installiert

```bash
sudo apt install php8.5-cli
```

Anschließend werden die Nötigen PHP-Abhängigkeiten mit Composer installiert 

```bash
composer install
```
Für den Webserver nutzen wird **Nginx**. Das wird mit folgendem Befehl installiert:

```bash
sudo apt install nginx
```

Damit der Webserver PHP Scripte ausführen kann, nutzen wir PHP FastCGI Process Manager
```bash
sudo apt install php-fpm
```

Nun sind alle abhängigkeiten installiert

### Konfiguration

```bash
# In den Ordner wechseln
cd /etc/nginx/sites-enabled

# Datei erstellen
touch Quantify

# Datei beschreiben
nano Quantify

# Symlink erstellen
ln -s /etc/nginx/sites-availabe/Quantify /etc/nginx/sites-enabled/

# Zertifikate erstellen
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048   -keyout /etc/nginx/ssl/quantify/quantify.key   -out /etc/nginx/ssl/quantify/quantify.crt   -subj "/CN=quantify"
```
key und crt in /etc/nginx/sites-available/quantify verlinkt:
```bash
server_name                 qa.quantify.synatix.com;

    ssl_certificate             /etc/nginx/ssl/quantify/quantify.crt;
    ssl_certificate_key         /etc/nginx/ssl/quantify/quantify.key;
```
---

## Qualitätssicherung & Tests

Um die Stabilität und Qualität des Projekts sicherzustellen, werden verschiedene Testverfahren eingesetzt.

### Unit-Tests

Unit-Tests überprüfen einzelne Komponenten und Funktionen unabhängig voneinander.

**Ziel:**
- Sicherstellung der korrekten Funktionsweise einzelner Methoden.
- Früherkennung von Fehlern.
- Vermeidung von Regressionen.

**Teststatus:** Noch nicht dokumentiert.

### Mutation-Tests

Mutation-Tests dienen dazu, die Qualität der vorhandenen Tests zu überprüfen.

Dabei werden gezielt kleine Änderungen am Quellcode vorgenommen, um festzustellen, ob die bestehenden Tests diese Fehler zuverlässig erkennen.

**Ziel:**
- Überprüfung der Aussagekraft der Unit-Tests.
- Identifikation unzureichender Testabdeckung.
- Verbesserung der allgemeinen Codequalität.

**Teststatus:** Noch nicht dokumentiert.

---

## Entwicklung

### Verwendete Technologien

| Technologie | Verwendung |
|---|---|
| PHP 8.5.12 | Backend-Entwicklung |
| Git | Versionsverwaltung |
| GitLab | Repository und Projektverwaltung |

---

## Changelog

In diesem Abschnitt werden Änderungen, Erweiterungen und Fehlerbehebungen dokumentiert.

### [Unreleased]

**Hinzugefügt**
- Initiale Projektdokumentation.

**Geplant**
- Weitere Funktionen und Erweiterungen werden hier dokumentiert.

---