<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Test/Hooks/MauticExtension.php */
class __TwigTemplate_ff297db1e22823cd0f7d4e9db9905903b2c4c37ee308b458e3ab453a8119d94a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Test\\Hooks;

use Mautic\\CoreBundle\\Test\\EnvLoader;
use PHPUnit\\Framework\\TestFailure;
use PHPUnit\\Framework\\TestSuite;
use PHPUnit\\Runner\\AfterTestHook;
use PHPUnit\\Runner\\BeforeFirstTestHook;

/**
 * This extension allows you to run an arbitrary test after every test in the current suite which is
 * extremely helpful when hunting down a functional test that causes your test fail.
 * When your test fails, the execution is stopped immediately and the name of problematic test is written to STDOUT.
 *
 * Example of usage: `MAUTIC_TEST_EXECUTE_TEST_AFTER=\"Fully\\\\Qualified\\\\Class\\\\NameTest\" bin/phpunit`.
 */
class MauticExtension implements AfterTestHook, BeforeFirstTestHook
{
    public function executeAfterTest(string \$test, float \$time): void
    {
        \$testClass = getenv('MAUTIC_TEST_EXECUTE_TEST_AFTER');

        if (false === \$testClass) {
            return;
        }

        \$testSuite = new TestSuite();
        \$testSuite->addTestSuite(\$testClass);
        \$result = \$testSuite->run();

        if (!\$result->wasSuccessful()) {
            \$failures = array_map(function (TestFailure \$testFailure) {
                return \$testFailure->getExceptionAsString();
            }, array_merge(\$result->failures(), \$result->errors()));

            exit(sprintf('The previous test was: \"%s\". Your test errored with: %s', \$test, implode(PHP_EOL, \$failures)));
        }
    }

    /**
     * To set a custom table prefix clear test cache and run.
     *
     * Example usage: `MAUTIC_DB_PREFIX='custom_prefix_' php bin/phpunit`
     */
    public function executeBeforeFirstTest(): void
    {
        EnvLoader::load();
        \$prefix = false === getenv('MAUTIC_DB_PREFIX') ? 'test_' : getenv('MAUTIC_DB_PREFIX');
        define('MAUTIC_TABLE_PREFIX', \$prefix);
        echo 'using db prefix \"'.\$prefix.'\"'.PHP_EOL;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/Hooks/MauticExtension.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Test/Hooks/MauticExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/Hooks/MauticExtension.php");
    }
}
