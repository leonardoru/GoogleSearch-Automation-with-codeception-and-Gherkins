<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/

class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @When I search for :arg1
     */
    public function iSearchFor($arg1)
    {
        $this->amOnPage('/');
        $this->seeElement("input.gLFyf");
        $this->fillField('input.gLFyf', $arg1);
        $this->pressKey('input.gLFyf',WebDriverKeys::ENTER);
        // $this->module->pressKey('#name',  WebDriverKeys::ENTER);
        $this->wait('3');
    }

   /**
    * @Then I should see :arg1 on the results
    */
    public function iShouldSeeOnTheResults($arg1)
    {
        $this->comment("all good");
        $this->see($arg1);
    }





}
