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

/* @bundles/CoreBundle/Helper/ListParser/BarListParser.php */
class __TwigTemplate_0ab7b9dd364d0166e4dee0e7b3c1b40c146f86ec7bd92ee66b27c1cb9d0e1413 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\ListParser;

use Mautic\\CoreBundle\\Helper\\ListParser\\Exception\\FormatNotSupportedException;

class BarListParser implements ListParserInterface
{
    public function parse(\$list): array
    {
        if (!is_string(\$list)) {
            throw new FormatNotSupportedException();
        }

        if (false === strpos(\$list, '|')) {
            throw new FormatNotSupportedException();
        }

        // label/value pairs
        \$parts = explode('||', \$list);
        if (count(\$parts) > 1) {
            \$labels = explode('|', \$parts[0]);
            \$values = explode('|', \$parts[1]);

            return array_combine(\$values, \$labels);
        }

        // label and values are the same
        \$labels = explode('|', \$list);
        \$values = \$labels;

        return array_combine(\$values, \$labels);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ListParser/BarListParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ListParser/BarListParser.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/ListParser/BarListParser.php");
    }
}
