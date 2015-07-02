<?php
$I = new AcceptanceTester($scenario);
$I->am('a CMS admin');
$I->wantTo('register a user');
$I->amOnPage('auth/register');
$I->fillField('name', 'alexesba');
$I->fillField('email','alexesba@gmail.com');
$I->fillField('password', '123456');
$I->fillField('password_confirmation', '123456');
$I->click('button[type=submit]');
$I->see('You are logged in!');
