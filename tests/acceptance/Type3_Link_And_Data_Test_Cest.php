<?php
use \Codeception\Example;

/**
 * Web 3 tests
 * - link testing and more page content
 */
class Type3_Link_And_Data_Test_Cest
{
    /**
     * @example { "url": "/?action=about", "linked_url" : "/?action=about", "link_text" : "About page"}
     * @example { "url": "/?action=about", "linked_url" : "/?action=list", "link_text" : "List all books"}
     */
    public function test_TYPE_3_01_linksPage1(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $linkedUrl = $example['linked_url'];
        $linkText = $example['link_text'];


        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }

    /**
     * @example { "url": "/?action=list", "linked_url" : "/?action=about", "link_text" : "About page"}
     * @example { "url": "/?action=list", "linked_url" : "/?action=list", "link_text" : "List all books"}
     */
    public function test_TYPE_3_02_linksPage2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $linkedUrl = $example['linked_url'];
        $linkText = $example['link_text'];


        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }

    /**
     * @example { "url": "/", "link_text" : "About page"}
     * @example { "url": "/", "link_text" : "List all books"}
     */
    public function test_TYPE_3_03_Should_NOT_See_Link(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $linkText = $example['link_text'];

        $I->amOnPage($url);
        $I->dontSeeLink($linkText);
    }
}
