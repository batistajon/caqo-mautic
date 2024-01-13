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

/* @bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php */
class __TwigTemplate_54ecb1a509f91c4299f4b92f52904ee57ce67b69b4f094fd78b5e00692663ecb extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection\\DAO;

class StatDAO
{
    /**
     * @var array
     */
    private \$stats = [];

    /**
     * @param \$key
     * @param \$value
     *
     * @return \$this
     */
    public function addStat(\$key, \$value)
    {
        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = 0;
        }

        \$this->stats[\$key] += \$value;

        return \$this;
    }

    /**
     * @param \$key
     *
     * @return mixed
     */
    public function getStat(\$key)
    {
        if (!isset(\$this->stats[\$key])) {
            throw new \\InvalidArgumentException(\$key.' does not exist');
        }

        return \$this->stats[\$key];
    }

    /**
     * @return array
     */
    public function getStats()
    {
        return \$this->stats;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Aggregate/Collection/DAO/StatDAO.php");
    }
}
