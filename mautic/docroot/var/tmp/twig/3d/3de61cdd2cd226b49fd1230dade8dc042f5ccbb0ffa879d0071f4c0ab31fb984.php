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

/* @bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php */
class __TwigTemplate_94e42f33bcb520f97e1ed08d1654c1bdbb829a345bb92ff8d84716f0ce8e59e4 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\QueryFormatter;

/**
 * Help generate SQL statements to format column data.
 *
 * Class AbstractFormat
 */
class MysqlFormatter extends AbstractFormatter
{
    /**
     * Format field to datetime.
     *
     * @param        \$field
     * @param string \$format
     *
     * @return mixed
     */
    public function toDateTime(\$field, \$format = '%Y-%m-%d %k:%i:%s')
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to date.
     *
     * @param        \$field
     * @param string \$format
     *
     * @return mixed
     */
    public function toDate(\$field, \$format = '%Y-%m-%d')
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to time.
     *
     * @param        \$field
     * @param string \$format
     *
     * @return mixed
     */
    public function toTime(\$field, \$format = '%k:%i:%s')
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to a numeric.
     *
     * @param \$field
     *
     * @return mixed
     */
    public function toNumeric(\$field)
    {
        return \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php");
    }
}
