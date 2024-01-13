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

/* @bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php */
class __TwigTemplate_87f4e6e03d1dd6f313a9b6bc1a85ea0f695b52f418c54749fd9797e9504c359a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\LeadBundle\\Form\\Type\\ContactChannelsType;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Form\\FormInterface;

final class ContactChannelsTypeTest extends AbstractMauticTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['show_contact_pause_dates'] = true;
        parent::setUp();
    }

    public function testPauseDatesAreProperlyConfigured(): void
    {
        \$form = \$this->createForm(true);
        \$this->assertOptions(\$form, 'contact_pause_start_date_email', true);
        \$this->assertOptions(\$form, 'contact_pause_end_date_email', true);

        \$form = \$this->createForm(false);
        \$this->assertOptions(\$form, 'contact_pause_start_date_email', false);
        \$this->assertOptions(\$form, 'contact_pause_end_date_email', false);
    }

    /**
     * @param FormInterface<FormInterface> \$form
     */
    private function assertOptions(FormInterface \$form, string \$name, bool \$hasHtml5): void
    {
        \$config = \$form->get(\$name)->getConfig();
        Assert::assertSame(\$hasHtml5, \$config->getOption('html5'));
        Assert::assertSame('yyyy-MM-dd', \$config->getOption('format'));
    }

    /**
     * @return FormInterface<FormInterface>
     */
    private function createForm(bool \$publicView): FormInterface
    {
        return self::\$container->get('form.factory')->create(
            ContactChannelsType::class,
            null,
            [
                'channels'    => ['Email' => 'email'],
                'public_view' => \$publicView,
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php");
    }
}
