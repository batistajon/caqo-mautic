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

/* @bundles/CoreBundle/Templating/Twig/Extension/GravatarExtension.php */
class __TwigTemplate_10b58f80e012a7b8280ee51ddd10add1beb856da8bd6368bff2901cb538b93e8 extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\GravatarHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class GravatarExtension extends AbstractExtension
{
    protected GravatarHelper \$gravatarHelper;

    public function __construct(GravatarHelper \$gravatarHelper)
    {
        \$this->gravatarHelper = \$gravatarHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('gravatarGetImage', [\$this, 'getImage'], ['is_safe' => ['all']]),
        ];
    }

    public function getImage(string \$email, string \$size = '250', ?string \$default = null): string
    {
        return \$this->gravatarHelper->getImage(\$email, \$size, \$default);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/GravatarExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/GravatarExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/GravatarExtension.php");
    }
}
