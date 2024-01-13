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

/* @bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php */
class __TwigTemplate_c093f4af1f319aa67e49807846afdc960a82a507b112b33e045bac12a0485926 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Type;

use Mautic\\CoreBundle\\Form\\Type\\GatedVideoType;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Form\\ChoiceList\\ArrayChoiceList;
use Symfony\\Component\\Form\\FormFactory;

class GatedVideoTypeTest extends MauticMysqlTestCase
{
    public function testFormSelect(): void
    {
        \$this->prepareForm('published1', true);
        \$this->prepareForm('unpublished1', false);
        \$this->prepareForm('published2', true);

        \$this->em->flush();

        /** @var FormFactory \$formFactory */
        \$formFactory = self::\$container->get('form.factory');

        \$form            = \$formFactory->create(GatedVideoType::class);
        \$formChoiceField = \$form->get('formid');
        \$attributes      = \$formChoiceField->getConfig()->getAttributes();

        /** @var ArrayChoiceList \$choiceList */
        \$choiceList = \$attributes['choice_list'];

        // There should be 2 choices - the 2 published forms.
        Assert::assertCount(2, \$choiceList->getChoices());
    }

    private function prepareForm(string \$alias, bool \$published): Form
    {
        \$form = new Form();
        \$form->setName(\$alias);
        \$form->setAlias(\$alias);
        \$form->setIsPublished(\$published);
        \$this->em->persist(\$form);

        return \$form;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Type/GatedVideoTypeTest.php");
    }
}
