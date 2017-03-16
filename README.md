## Codeception Acceptance Testing on Travis-CI

[![TravisCI Status](https://travis-ci.org/ankurk91/codeception-travis-ci-example.svg?branch=master)](https://travis-ci.org/ankurk91/codeception-travis-ci-example)
[![Codeship Status](https://codeship.com/projects/d89c33e0-6c40-0134-d75d-16e203ce6072/status?branch=master)](https://codeship.com/projects/177149)

### Prerequisites
* Git client (optionally you can download this repo directly from github)
* php v5.6+ with CURL extension
* [Composer](https://getcomposer.org/download) (global install) v1.3.x
* [Codeception](http://codeception.com/quickstart)  v2.2.x
* [Java runtime (JRE)](http://java.com/en/download/manual.jsp)
* Firefox Web Browser / Chrome Web Browser
* [Selenium standalone server](http://www.seleniumhq.org/download/)
* php [xDebug](https://xdebug.org/) for CodeCoverage
* NodeJS for PhantomJS browser

### Run on localhost
* 1. Clone the repo / Download the master branch
```
git clone https://github.com/ankurk91/codeception-travis-ci-example.git
cd codeception-travis-ci-example
```
* 2. Install dependencies
```
composer install
```
* 3. Run php inbuilt server, allow port 8000 in your firewall
```
php -S localhost:8000 -t app
```
* 4. In a new tab - Start selenium server and keep it running
```
java -jar selenium-server-standalone.jar
```
* 5. In a new tab - Execute tests on Firefox (default)
```
./vendor/bin/codecept run
```

### Google Chrome
* Above commands assume that you have pre-installed *Firefox*
* But if you want to test it with *Google Chrome*, then follow next steps
* Download the latest ```chromedriver_*.zip``` for your platform from [here](http://chromedriver.storage.googleapis.com/index.html)
* Extract that zip to a folder and specify the path in next command
* 4. In a new tab - Start selenium server 
```
 java -jar selenium-server-standalone.jar -Dwebdriver.chrome.driver=/full/path/to/chromedriver
```
* 5. In a new tab - Execute tests on chrome
```
./vendor/bin/codecept run --env chrome
```

### PhantomJS
* If you wants to speed up acceptance testing then consider moving to [PhantomJS](http://phantomjs.org/download.html) headless browser.
* First install [node js](https://nodejs.org/en/download/) and then install PhantomJS
* 4. In a new tab, Start PhantomJS, make sure port 4444 is free
```
phantomjs --webdriver=4444
```
* 5. In a new tab, Execute your test 
```
./vendor/bin/codecept run --env phantom
```

### Quick Links
* [Codeception](http://codeception.com/docs/02-GettingStarted)
* [Browser Testing on CodeShip](https://documentation.codeship.com/continuous-integration/browser-testing/)
* [GUI and Headless Browser Testing on Travis CI](https://docs.travis-ci.com/user/gui-and-headless-browsers/)

### TODOs
* [Dynamic configs](http://codeception.com/docs/06-ModulesAndHelpers#dynamic-configuration-with-parameters) using [phpdotenv](https://barryvanveen.nl/blog/36-environment-configuration-in-codeception-with-dotenv)

### License
[MIT](LICENSE.txt) License
