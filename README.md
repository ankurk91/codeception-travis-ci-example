# Codeception Acceptance Testing on Travis-CI

[![TravisCI Status](https://travis-ci.org/ankurk91/codeception-travis-ci-example.svg?branch=master)](https://travis-ci.org/ankurk91/codeception-travis-ci-example)

## Prerequisites
* Git client (optionally you can download this repo directly from github)
* php v5.6+ with CURL extension
* [Composer](https://getcomposer.org/download) (global install) v1.4.2+
* [Codeception](http://codeception.com/quickstart)  v2.3.x (will be download by composer)
* [Java runtime (JRE)](http://java.com/en/download/manual.jsp) v8+
    - Ubuntu - [Tutorial](https://www.digitalocean.com/community/tutorials/how-to-manually-install-oracle-java-on-a-debian-or-ubuntu-vps)
    - Mac OS - `brew cask install java`
* Firefox / Chrome Web Browser (latest)
* [Selenium standalone server](http://www.seleniumhq.org/download/) jar v3.4+
* Web Driver for browsers
    - [gekodriver](https://github.com/mozilla/geckodriver/releases) for Mozilla Firefox
    - [chromedriver](http://chromedriver.storage.googleapis.com/index.html) for Google Chrome

### Prepare
* Clone the repo / Download the master branch
```
git clone https://github.com/ankurk91/codeception-travis-ci-example.git
cd codeception-travis-ci-example
```
* Install dependencies
```
composer install
```
* Run php inbuilt server, allow port 8000 in your firewall
```
php -S localhost:8000 -t app
```

### Chrome
* In a new tab - Start selenium server 
```
 java -Dwebdriver.chrome.driver=/full/path/to/chromedriver -jar selenium-server-standalone-3.4.0.jar 
```
* In a new tab - Execute tests on Chrome
```
./vendor/bin/codecept run --env chrome
```
* You can also try Chrome in headless mode
```
./vendor/bin/codecept run --env chrome-headless
```

### Firefox
* In a new tab - Start selenium server and keep it running
```
java -Dwebdriver.chrome.driver=/full/path/to/gekodriver -jar selenium-server-standalone-3.4.0.jar 
```
* In a new tab - Execute tests on Firefox
```
./vendor/bin/codecept run --env firefox
```

### Quick Links
* [Codeception](http://codeception.com/docs/02-GettingStarted)
* [Browser Testing on CodeShip](https://documentation.codeship.com/continuous-integration/browser-testing/)
* [GUI and Headless Browser Testing on Travis CI](https://docs.travis-ci.com/user/gui-and-headless-browsers/)
* [Chrome headless](https://developers.google.com/web/updates/2017/04/headless-chrome)

### TODOs
* [Dynamic configs](http://codeception.com/docs/06-ModulesAndHelpers#dynamic-configuration-with-parameters) using [phpdotenv](https://barryvanveen.nl/blog/36-environment-configuration-in-codeception-with-dotenv)

### License
[MIT](LICENSE.txt) License
