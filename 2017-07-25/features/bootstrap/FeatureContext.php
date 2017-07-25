<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Mink\Exception\ResponseTextException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    public function __construct()
    {
        if(file_exists('.env')) {
            $dotenv = new Dotenv\Dotenv(__DIR__.'/../../');
            $dotenv->load();
        }
    }
    
    /**
     * Returns list of definition translation resources paths.
     *
     * @return array
     */
    public static function getTranslationResources() {
        return array_merge(self::getMinkTranslationResources(), glob(__DIR__ . '/../../i18n/*.xliff'));
    }
    
    /**
     * Based on Behat's own example
     * @see http://docs.behat.org/en/v2.5/cookbook/using_spin_functions.html#adding-a-timeout
     * @param $lambda
     * @param int $wait
     * @throws \Exception
     */
    public function spin($lambda, $wait = 60)
    {
        $time = time();
        $stopTime = $time + $wait;
        while (time() < $stopTime)
        {
            try {
                if ($lambda($this)) {
                    return;
                }
            } catch (\Exception $e) {
                // do nothing
            }
            
            usleep(250000);
        }
        
        throw new \Exception("Spin function timed out after {$wait} seconds");
    }

    /**
     * @When /^(?:|I )click in element "(?P<element>(?:[^"]|\\")*)"$/
     */
    public function clickInElement($element)
    {
        $session = $this->getSession();

        $locator = $this->fixStepArgument($element);
        $xpath = $session->getSelectorsHandler()->selectorToXpath('css', $locator);
        $element = $this->getSession()->getPage()->find(
            'xpath',
            $xpath
        );
        if (null === $element) {
            throw new \InvalidArgumentException(sprintf('Could not find element'));
        }
        $element->click();
    }
    
    /**
     * @When /^(?:|I )wait for element "(?P<element>(?:[^"]|\\")*)" to appear$/
     * @Then /^(?:|I )should see element "(?P<element>(?:[^"]|\\")*)" appear$/
     * @param $element
     * @throws \Exception
     */
    public function iWaitForElementToAppear($element)
    {
        $this->spin(function(FeatureContext $context) use ($element) {
            try {
                $context->assertElementOnPage($element);
                return true;
            }
            catch(ResponseTextException $e) {
                // NOOP
            }
            return false;
        });
    }
    
    /**
     * @When /^(?:|I )wait for element :element to disappear$/
     * @Then /^(?:|I )should see element :element disappear$/
     * @param $element
     * @throws \Exception
     */
    public function iWaitForElementToDisappear($element)
    {
        $this->spin(function(FeatureContext $context) use ($element) {
            try {
                $context->assertElementOnPage($element);
            }
            catch(ResponseTextException $e) {
                return true;
            }
            return false;
        });
    }
    
    /**
     * @When /^(?:|I )wait for text "(?P<text>(?:[^"]|\\")*)" to appear$/
     * @Then /^(?:|I )should see "(?P<text>(?:[^"]|\\")*)" appear$/
     * @param $text
     * @throws \Exception
     */
    public function iWaitForTextToAppear($text)
    {
        $this->spin(function(FeatureContext $context) use ($text) {
            try {
                $context->assertPageContainsText($text);
                return true;
            }
            catch(ResponseTextException $e) {
                // NOOP
            }
            return false;
        });
    }
    
    /**
     * @When /^(?:|I )wait for text :text to disappear$/
     * @Then /^(?:|I )should see :text disappear$/
     * @param $text
     * @throws \Exception
     */
    public function iWaitForTextToDisappear($text)
    {
        $this->spin(function(FeatureContext $context) use ($text) {
            try {
                $context->assertPageContainsText($text);
            }
            catch(ResponseTextException $e) {
                return true;
            }
            return false;
        });
    }
    
    /**
     * Follow url using OpenCart user_token
     * @When /^(?:|I )follow the route "(?P<link>(?:[^"]|\\")*)"$/
     */
    public function followTheRoute($link)
    {
        $session = $this->getSession();
        $url = $session->getCurrentUrl();
        $prefix = explode('?', $url)[0];
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $query);
        $user_token = $query['user_token'];
        $this->visit($url.'?'.$link.'&user_token='.$user_token);
    }
    
    /**
     * @Then instalo o OpenCart
     */
    public function installOpenCart()
    {
        $output = shell_exec(
            'mysql -u '.$_ENV['DB_USER'].' -p'.$_ENV['DB_PASSWORD'].' -e "DROP DATABASE IF EXISTS '.$_ENV['DB_NAME'].'" &'.
            'mysql -u '.$_ENV['DB_USER'].' -p'.$_ENV['DB_PASSWORD'].' -e "CREATE DATABASE '.$_ENV['DB_NAME'].'" &'.
            'php ../../install/cli_install.php install '.
            '--http_server http://localhost:8080/ '.
            '--db_username '.$_ENV['DB_USER'].' '.
            '--db_password '.$_ENV['DB_PASSWORD'].' '.
            '--password admin '.
            '--email admin-mundipagg@opencart.com'
        );
    }
    
    /**
     * @When preencho a secret key de produção
     */
    public function preenchoASecretKeyDeProducao()
    {
        $this->fillField('Secret key [production]', $_ENV['PROD_SECURITY_KEY']);
    }
}
