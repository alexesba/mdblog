<?php 
$I = new FunctionalTester($scenario);
$I->am('an admin user');

$I->wantTo('be able to create a post');

$I->amOnPage('/admin/posts');

//Then
$I->see('add Post');
//When
$I->click('add Post');
//Then
$I->seeCurrentUrlEquals('/admin/posts/create');