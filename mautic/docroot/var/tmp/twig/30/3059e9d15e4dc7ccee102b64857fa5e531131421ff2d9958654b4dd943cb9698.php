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

/* @bundles/CoreBundle/Templating/Twig/Extension/MautibotExtension.php */
class __TwigTemplate_b5330bd47235ea2f897cf17fc4b361ca935eb9b396672d502937c27255ec029d extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\MautibotHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class MautibotExtension extends AbstractExtension
{
    protected MautibotHelper \$mautibotHelper;

    public function __construct(MautibotHelper \$mautibotHelper)
    {
        \$this->mautibotHelper = \$mautibotHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('mautibotGetImage', [\$this, 'getImage'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @param string \$image One of openMouth | smile | wave
     */
    public function getImage(string \$image): string
    {
        return \$this->mautibotHelper->getImage(\$image);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/MautibotExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/MautibotExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/MautibotExtension.php");
    }
}
