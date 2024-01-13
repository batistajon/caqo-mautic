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

/* @bundles/EmailBundle/Tests/Model/EmailModelFunctionalTest.php */
class __TwigTemplate_61afffe0c6ec85fc506ee2d6877078012f1a6821eb4d3e1d04a74a8ed88a7675 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\LeadBundle\\Entity\\LeadList;

class EmailModelFunctionalTest extends MauticMysqlTestCase
{
    public function testNotOverwriteChildrenTranslationEmailAfterSaveParent(): void
    {
        \$segment        = new LeadList();
        \$segmentName    = 'Test_segment';
        \$segment->setName(\$segmentName);
        \$segment->setPublicName(\$segmentName);
        \$segment->setAlias(\$segmentName);
        \$this->em->persist(\$segment);

        \$emailName        = 'Test';
        \$customHtmlParent = 'test EN';
        \$parentEmail      = new Email();
        \$parentEmail->setName(\$emailName);
        \$parentEmail->setSubject(\$emailName);
        \$parentEmail->setCustomHTML(\$customHtmlParent);
        \$parentEmail->setEmailType('template');
        \$parentEmail->setLanguage('en');
        \$this->em->persist(\$parentEmail);

        \$customHtmlChildren = 'test FR';
        \$childrenEmail      = clone \$parentEmail;
        \$childrenEmail->setLanguage('fr');
        \$childrenEmail->setCustomHTML(\$customHtmlChildren);
        \$childrenEmail->setTranslationParent(\$parentEmail);
        \$this->em->persist(\$parentEmail);

        \$this->em->clear();

        /** @var EmailModel \$emailModel */
        \$emailModel = self::\$container->get('mautic.email.model.email');
        \$parentEmail->setName('Test change');
        \$emailModel->saveEntity(\$parentEmail);

        self::assertSame(\$customHtmlParent, \$parentEmail->getCustomHtml());
        self::assertSame(\$customHtmlChildren, \$childrenEmail->getCustomHtml());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Model/EmailModelFunctionalTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Model/EmailModelFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Model/EmailModelFunctionalTest.php");
    }
}
