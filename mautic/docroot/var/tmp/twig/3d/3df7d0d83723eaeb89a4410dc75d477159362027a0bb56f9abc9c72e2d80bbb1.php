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

/* @bundles/CoreBundle/Templating/Twig/Extension/MenuExtension.php */
class __TwigTemplate_3ae2f66609a502290fefaa1beb34edbc6f64a7f2a286ea2dbdafdff8d1859bd3 extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\MenuHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class MenuExtension extends AbstractExtension
{
    protected MenuHelper \$menuHelper;

    public function __construct(MenuHelper \$menuHelper)
    {
        \$this->menuHelper = \$menuHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('menuRender', [\$this, 'menuRender'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Renders a menu with the specified renderer.
     *
     * @param \\Knp\\Menu\\ItemInterface|string|array<mixed> \$menu
     * @param array<mixed>                                \$options
     */
    public function menuRender(\$menu, array \$options = [], ?string \$renderer = null): string
    {
        return \$this->menuHelper->render(\$menu, \$options, \$renderer);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/MenuExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/MenuExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/MenuExtension.php");
    }
}
