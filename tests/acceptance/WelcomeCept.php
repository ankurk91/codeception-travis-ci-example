<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Fill login form on home page');
$I->amOnPage('/');

$I->see('Please login');

$I->fillField('username', 'name');
$I->fillField('password', 'password');

$I->click('Login');
