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

/* @bundles/CoreBundle/Templating/Twig/Extension/SlotExtension.php */
class __TwigTemplate_73ded3fd868bd38d9f2d0d87147be260babd2d828af6a7a18c012ce2a612eab2 extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Twig\\Extension;

use Mautic\\CoreBundle\\Templating\\Helper\\SlotsHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class SlotExtension extends AbstractExtension
{
    /**
     * @var SlotsHelper
     */
    protected \$helper;

    public function __construct(SlotsHelper \$slotsHelper)
    {
        \$this->helper = \$slotsHelper;
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('slot', [\$this, 'getSlot'], ['is_safe' => ['html']]),
            new TwigFunction('slotHasContent', [\$this, 'slotHasContent'], ['is_safe' => ['html']]),
        ];
    }

    public function getName()
    {
        return 'slot';
    }

    public function getSlot(\$name, \$default = null)
    {
        ob_start();

        \$this->helper->output(\$name, \$default);

        return ob_get_clean();
    }

    public function slotHasContent(\$name)
    {
        return \$this->helper->hasContent(\$name);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/SlotExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/SlotExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/SlotExtension.php");
    }
}
