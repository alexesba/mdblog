<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Login the user as an admin');
$I->amOnPage('/home');
$I->see('login');
$I->fillField('email', 'alexesba@gmail.com');
$I->fillField('password', '123456');
$I->click('button[type=submit]');
$I->see('There were some problems with your input.');
