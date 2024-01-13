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

/* @bundles/CoreBundle/Templating/Twig/Extension/ButtonExtension.php */
class __TwigTemplate_f5cdc7d2a6f2e77cebe728a0d1b52d18fa20a9920a1a5670f8b35c2da8865dd5 extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class ButtonExtension extends AbstractExtension
{
    protected ButtonHelper \$buttonHelper;
    protected RequestStack \$requestStack;

    public function __construct(ButtonHelper \$buttonHelper, RequestStack \$requestStack)
    {
        \$this->buttonHelper = \$buttonHelper;
        \$this->requestStack = \$requestStack;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('buttonResetAndRender', [\$this, 'resetAndRender'], ['is_safe' => ['all']]),
        ];
    }

    public function resetAndRender(string \$location): string
    {
        return \$this->buttonHelper->reset(
            \$this->requestStack->getCurrentRequest(),
            \$location
        )->renderButtons();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/ButtonExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/ButtonExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/ButtonExtension.php");
    }
}
