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

/* @bundles/LeadBundle/Tests/Templating/DncReasonHelperTest.php */
class __TwigTemplate_d352b34f87e3a8678fe4bea5aa9ec5ec35112f469b81c93ec23ba3104755bdfe extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Templating;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Mautic\\LeadBundle\\Templating\\Helper\\DncReasonHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DncReasonHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$reasonTo = [
        DoNotContact::IS_CONTACTABLE => 'mautic.lead.event.donotcontact_contactable',
        DoNotContact::UNSUBSCRIBED   => 'mautic.lead.event.donotcontact_unsubscribed',
        DoNotContact::BOUNCED        => 'mautic.lead.event.donotcontact_bounced',
        DoNotContact::MANUAL         => 'mautic.lead.event.donotcontact_manual',
    ];

    private \$translations = [
        'mautic.lead.event.donotcontact_contactable'  => 'a',
        'mautic.lead.event.donotcontact_unsubscribed' => 'b',
        'mautic.lead.event.donotcontact_bounced'      => 'c',
        'mautic.lead.event.donotcontact_manual'       => 'd',
    ];

    public function testToText()
    {
        foreach (\$this->reasonTo as \$reasonId => \$translationKey) {
            \$translationResult = \$this->translations[\$translationKey];

            \$translator = \$this->createMock(TranslatorInterface::class);
            \$translator->expects(\$this->once())
                ->method('trans')
                ->with(\$translationKey)
                ->willReturn(\$translationResult);

            \$dncReasonHelper = new DncReasonHelper(\$translator);

            \$this->assertSame(\$translationResult, \$dncReasonHelper->toText(\$reasonId));
        }

        \$translator      = \$this->createMock(TranslatorInterface::class);
        \$dncReasonHelper = new DncReasonHelper(\$translator);
        \$this->expectException(UnknownDncReasonException::class);
        \$dncReasonHelper->toText(999);
    }

    public function testGetName()
    {
        \$translator      = \$this->createMock(TranslatorInterface::class);
        \$dncReasonHelper = new DncReasonHelper(\$translator);
        \$this->assertSame('lead_dnc_reason', \$dncReasonHelper->getName());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Templating/DncReasonHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Templating/DncReasonHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Templating/DncReasonHelperTest.php");
    }
}
