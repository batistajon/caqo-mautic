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

/* @bundles/CoreBundle/Templating/Twig/Extension/FormExtension.php */
class __TwigTemplate_d894f0ec3ddf086dfd0447b1959ee89ba94defd304125552403985482244bf3e extends Template
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

use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class FormExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('formFieldFormatList', [\$this, 'formatList'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @param array<string> \$v
     */
    public function formatList(string \$format, array \$v): string
    {
        return FormFieldHelper::formatList(\$format, \$v);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/FormExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/FormExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/FormExtension.php");
    }
}
