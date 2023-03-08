<?php
use \Codeception\Example;
use \Codeception\Util\Locator;


/**
 * Web 4 tests
 *  - page content from the entity repository test data
 */
class Type4_Data_Checks_Cest
{
    /**
     * @example { "url": "/?action=list", "expected_count" : "4", "css_selector" : "div"}
     */
    public function test_TYPE_4_01_seeItemCount(AcceptanceTester $I, Example $example)
    {
        $url = $example['url'];
        $expectedCount = intval($example['expected_count']);
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->seeNumberOfElements($cssSelector, $expectedCount);
    }

    /**
     * @example { "url": "/?action=list", "expected_text" : "Music Education: An Artificial Intelligence Approach", "css_selector" : "body div"}
     * @example { "url": "/?action=list", "expected_text" : "An Introduction to Symfony 6", "css_selector" : "body div"}
     * @example { "url": "/?action=list", "expected_text" : "Unity 2021 Cookbook", "css_selector" : "body div"}
     * @example { "url": "/?action=list", "expected_text" : "PHP Crash Course", "css_selector" : "body div"}
     */
    public function test_TYPE_4_02_seeDetailsForListOfRecords(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);

    }


    /**
     * @example { "url": "/?action=show&id=1", "expected_text" : "id: 1", "css_selector" : "h2"}
     * @example { "url": "/?action=show&id=1", "expected_text" : "Music Education: An Artificial Intelligence Approach", "css_selector" : "body div strong"}
     * @example { "url": "/?action=show&id=1", "expected_text" : "num pages = 200", "css_selector" : "body div"}
     */
    public function test_TYPE_4_03_seeDetailsForRecord2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);

    }

    /**
     * @example { "url": "/?action=show&id=4", "expected_text" : "id: 4", "css_selector" : "h2"}
     * @example { "url": "/?action=show&id=4", "expected_text" : "title = An Introduction to Symfony 6", "css_selector" : "body div"}
     * @example { "url": "/?action=show&id=4", "expected_text" : "An Introduction to Symfony 6", "css_selector" : "body div strong"}
     * @example { "url": "/?action=show&id=4", "expected_text" : "num pages = 500", "css_selector" : "body div"}
     */
    public function test_TYPE_4_04_seeDetailsForRecord2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }

    /**
     * @example { "url": "/?action=show&id=1", "image_file" : "/images/music.png"}
     * @example { "url": "/?action=show&id=2", "image_file" : "/images/cookbook.png"}
     * @example { "url": "/?action=show&id=3", "image_file" : "/images/php.png"}
     * @example { "url": "/?action=show&id=4", "image_file" : "/images/symfony.png"}
     */
    public function test_TYPE_4_05_seeImageElement(AcceptanceTester $I, \Codeception\Example $example)
    {
        // HINT
        // searching for <img> elements in the form:
        //      <img src="/images/symfony.png">
        //
        $url = $example['url'];
        $imageFileName = $example['image_file'];
        $imageElement =  Locator::find('img', ['src' => $imageFileName]);

        $I->amOnPage($url);
        $I->seeElement($imageElement);
    }

}
