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

/* @bundles/FormBundle/Tests/Controller/FormControllerFunctionalTest.php */
class __TwigTemplate_d8463cd1ecff935594a8569da2f7e5ffddb4e766d351a851c3331fd3e7a0bd0b extends Template
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

namespace Mautic\\FormBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class FormControllerFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    /**
     * Index should return status code 200.
     */
    public function testIndexActionWhenNotFiltered(): void
    {
        \$this->client->request('GET', '/s/forms');
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    /**
     * Filtering should return status code 200.
     */
    public function testIndexActionWhenFiltering(): void
    {
        \$this->client->request('GET', '/s/forms?search=has%3Aresults&tmpl=list');
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    /**
     * Get form's create page.
     */
    public function testNewActionForm(): void
    {
        \$this->client->request('GET', '/s/forms/new/');
        \$this->assertTrue(\$this->client->getResponse()->isOk());
    }

    /**
     * @see https://github.com/mautic/mautic/issues/10453
     */
    public function testSaveActionForm(): void
    {
        \$crawler = \$this->client->request('GET', '/s/forms/new/');
        \$this->assertTrue(\$this->client->getResponse()->isOk());

        \$form = \$crawler->filterXPath('//form[@name=\"mauticform\"]')->form();
        \$form->setValues(
            [
                'mauticform[name]'        => 'Test',
                'mauticform[renderStyle]' => '0',
            ]
        );
        \$crawler = \$this->client->submit(\$form);
        \$this->assertTrue(\$this->client->getResponse()->isOk());

        \$form = \$crawler->filterXPath('//form[@name=\"mauticform\"]')->form();
        \$form->setValues(
            [
                'mauticform[renderStyle]' => '0',
            ]
        );

        // The form failed to save when saved for the second time with renderStyle=No.
        \$this->client->submit(\$form);
        \$this->assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());
        \$this->assertStringNotContainsString('Internal Server Error - Expected argument of type \"null or string\", \"boolean\" given', \$this->client->getResponse()->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Controller/FormControllerFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Controller/FormControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Controller/FormControllerFunctionalTest.php");
    }
}
