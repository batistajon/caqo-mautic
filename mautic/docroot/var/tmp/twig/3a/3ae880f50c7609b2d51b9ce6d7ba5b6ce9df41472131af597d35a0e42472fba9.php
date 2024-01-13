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

/* @bundles/CoreBundle/Form/Type/SlotDynamicContentType.php */
class __TwigTemplate_caa8dc790402b348e9df547cdafe7cecd159135a809d9ed826e9cfa24b2a8873 extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * Class SlotDynamicContentType.
 */
class SlotDynamicContentType extends SlotType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'slot_dynamiccontent';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/SlotDynamicContentType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SlotDynamicContentType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/SlotDynamicContentType.php");
    }
}
