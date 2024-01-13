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

/* @bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php */
class __TwigTemplate_775bac82559d9d4a0c35a4cfa1000a2775a3428d575ebb1039dafbeeacbec0dc extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Deduplicate\\Helper;

use Mautic\\LeadBundle\\Deduplicate\\Exception\\ValueNotMergeableException;
use Mautic\\LeadBundle\\Deduplicate\\Helper\\MergeValueHelper;

class MergeValueHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetMergeValueWhenNewAndOldValuesAreIdentical()
    {
        \$newerValue     = 'bbb';
        \$olderValue     = 'bbb';
        \$winnerValue    = null;
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$this->expectException(ValueNotMergeableException::class);
        MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);
    }

    public function testGetMergeValueWhenNewAndWinnerValuesAreIdentical()
    {
        \$newerValue     = 'bbb';
        \$olderValue     = 'aaa';
        \$winnerValue    = 'bbb';
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$this->expectException(ValueNotMergeableException::class);
        MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);
    }

    public function testGetMergeValueWhenNewerValueIsNotNull()
    {
        \$newerValue     = 'aaa';
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('aaa', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNotNullAndSameAsDefaultValueForAnonymousContact()
    {
        \$newerValue     = 'aaa';
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = 'aaa';
        \$newIsAnonymous = true;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('bbb', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNotNullAndSameAsDefaultValueForIdentifiedContact()
    {
        \$newerValue     = 'aaa';
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = 'aaa';
        \$newIsAnonymous = false;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('aaa', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNull()
    {
        \$newerValue     = null;
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('bbb', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNotNullAndDefaultValueIsZero()
    {
        \$newerValue     = 0;
        \$olderValue     = 1;
        \$winnerValue    = 1;
        \$defaultValue   = 0;
        \$newIsAnonymous = true;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame(\$winnerValue, \$value);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php");
    }
}
