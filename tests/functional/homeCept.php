<?php
$I = new FunctionalTester($scenario);
$I->wantTo('open home page of site');
$I->amOnPage('/posts');
$I->see('alexesba', 'div');
