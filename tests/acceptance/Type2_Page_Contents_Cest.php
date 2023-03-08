<?php
use \Codeception\Example;

/**
 * Web 2 tests
 * - Basic Text Content
 */
class Type2_Page_Contents_Cest
{
    /**
     * @example { "url": "/?action=about", "expected_text" : "bookshop about page", "css_selector" : "head title"}
     * @example { "url": "/?action=about", "expected_text" : "we are a small bookshop,", "css_selector" : "body p"}
     * @example { "url": "/?action=about", "expected_text" : "selling books recommended for our modules", "css_selector" : "body p"}
     * @example { "url": "/?action=about", "expected_text" : "About the university bookshop", "css_selector" : "body h1"}
     * @example { "url": "/?action=about", "expected_text" : "Links", "css_selector" : "body footer"}
     */
    public function test_TYPE_2_01_contentPage1(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);

        $I->dontSeeLink('Logout');
    }

    /**
     * @example { "url": "/?action=list", "expected_text" : "bookshop all books list page", "css_selector" : "head title"}
     * @example { "url": "/?action=list", "expected_text" : "Links", "css_selector" : "body footer"}
     */
    public function test_TYPE_2_02_contentPage2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }

    /**
     * @example { "url": "/", "not_expected_text" : "home", "css_selector" : "head title"}
     * @example { "url": "/", "not_expected_text" : "page", "css_selector" : "head title"}
     * @example { "url": "/", "not_expected_text" : "home", "css_selector" : "head h1"}
     * @example { "url": "/", "not_expected_text" : "page", "css_selector" : "head title"}
     * @example { "url": "/", "not_expected_text" : "home", "css_selector" : "body"}
     * @example { "url": "/", "not_expected_text" : "home page", "css_selector" : "body"}
     */
    public function test_TYPE_2_03_notExpectedContent(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $notExpectedText = $example['not_expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->dontSee($notExpectedText, ['css' => $cssSelector]);
    }

}
