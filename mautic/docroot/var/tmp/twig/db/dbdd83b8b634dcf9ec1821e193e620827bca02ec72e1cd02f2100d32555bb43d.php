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

/* @bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php */
class __TwigTemplate_f4e734500ffa008996419f284be7dcd7f29510fa2b44d0978aeb777498ceb100 extends Template
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

use Doctrine\\DBAL\\Connection;

/**
 * Help generate SQL statements to format column data.
 *
 * Class AbstractFormat
 */
abstract class AbstractFormatter
{
    protected \$db;
    protected \$platform;
    protected \$name;

    /**
     * @return AbstractFormatter
     */
    public static function createFormatter(Connection \$db)
    {
        \$name  = \$db->getDatabasePlatform()->getName();
        \$class = '\\Mautic\\CoreBundle\\Doctrine\\QueryFormatter\\\\'.ucfirst(\$name).'Formatter';

        return new \$class(\$db);
    }

    public function __construct(Connection \$db)
    {
        \$this->db       = \$db;
        \$this->platform = \$this->db->getDatabasePlatform();
        \$this->name     = \$this->platform->getName();
    }

    /**
     * Format field to datetime.
     *
     * @param        \$field
     * @param string \$format
     *
     * @return mixed
     */
    abstract public function toDateTime(\$field, \$format = 'Y-m-d H:i:s');

    /**
     * Format field to date.
     *
     * @param        \$field
     * @param string \$format
     *
     * @return mixed
     */
    abstract public function toDate(\$field, \$format = 'Y-m-d');

    /**
     * Format field to time.
     *
     * @param        \$field
     * @param string \$format
     *
     * @return mixed
     */
    abstract public function toTime(\$field, \$format = 'H:i:s');

    /**
     * Format field to a numeric.
     *
     * @param \$field
     *
     * @return mixed
     */
    abstract public function toNumeric(\$field);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php");
    }
}
