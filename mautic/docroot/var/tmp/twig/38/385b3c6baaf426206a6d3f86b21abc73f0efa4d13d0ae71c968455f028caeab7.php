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

/* @bundles/CoreBundle/Templating/Twig/Extension/FormatterExtension.php */
class __TwigTemplate_794bad2663f104fc30e69220e7a0ab7e2da12ce72a325cb33ad9ad29c91f081b extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class FormatterExtension extends AbstractExtension
{
    protected FormatterHelper \$formatterHelper;

    public function __construct(FormatterHelper \$formatterHelper)
    {
        \$this->formatterHelper = \$formatterHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('format', [\$this, '_'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Format a string.
     *
     * @param mixed \$val
     */
    public function _(\$val, string \$type = 'html', bool \$textOnly = false, int \$round = 1): string
    {
        return \$this->formatterHelper->_(\$val, \$type, \$textOnly, \$round);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/FormatterExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/FormatterExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/FormatterExtension.php");
    }
}
