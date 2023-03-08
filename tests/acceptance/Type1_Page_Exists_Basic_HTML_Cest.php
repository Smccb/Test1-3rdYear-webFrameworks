<?php
use \Codeception\Example;
use \Codeception\Util\HttpCode;


/**
 * Web 1 tests
 * - Valid HTML & heading 1 for the page
 */
class Type1_Page_Exists_Basic_HTML_Cest
{
    /**
     * @example { "url": "/"}
     * @example { "url": "/?action=about"}
     * @example { "url": "/?action=list"}
     */
    public function test_TYPE_1_01_page_response_okay(AcceptanceTester $I, Example $example)
    {
        $url = $example['url'];
        $I->amOnPage($url);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }


    /**
     * @example { "url": "/", "expected_text" : "ERROR - no default page content!", "css_selector" : "body p"}
     */
    public function test_TYPE_1_02_contentPage(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }

    /**
     * @example { "url": "/?action=about", "expected_text" : "we like books", "css_selector" : "body p"}
     * @example { "url": "/?action=list", "expected_text" : "list of all books", "css_selector" : "body h1"}
     * @example { "url": "/?action=list", "expected_text" : "(in our database)", "css_selector" : "body h2"}
     */
    public function test_TYPE_1_03_contentPage2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


}
