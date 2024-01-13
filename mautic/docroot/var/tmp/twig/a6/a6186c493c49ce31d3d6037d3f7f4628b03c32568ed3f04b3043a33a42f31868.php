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

/* @bundles/CoreBundle/Helper/ListParser/JsonListParser.php */
class __TwigTemplate_45357f4c3a4a6054261795cdf44e61c32039ae023ad14c4dd8b21a0084f97860 extends Template
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

class JsonListParser implements ListParserInterface
{
    public function parse(\$list): array
    {
        if (!is_string(\$list)) {
            throw new FormatNotSupportedException();
        }

        \$parsedList = json_decode(\$list, true);
        if (!is_array(\$parsedList)) {
            throw new FormatNotSupportedException();
        }

        return \$parsedList;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ListParser/JsonListParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ListParser/JsonListParser.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/ListParser/JsonListParser.php");
    }
}
