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

/* @bundles/StatsBundle/Event/Options/FetchOptions.php */
class __TwigTemplate_ea3c8f7910433ae08e0438be4275a8c495da741322a0c534b98db2b1a479643f extends Template
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

namespace Mautic\\StatsBundle\\Event\\Options;

class FetchOptions
{
    /**
     * @var array
     */
    private \$options = [];

    /**
     * @var int|null
     */
    private \$itemId;

    /**
     * @param int \$value
     *
     * @return \$this
     */
    public function setItemId(\$value)
    {
        \$this->itemId = \$value;

        return \$this;
    }

    /**
     * @return int|null
     */
    public function getItemId()
    {
        return \$this->itemId;
    }

    /**
     * @param string \$key
     * @param mixed  \$value
     *
     * @return \$this
     */
    public function setOption(\$key, \$value)
    {
        \$this->options[\$key] = \$value;

        return \$this;
    }

    /**
     * @param string \$key
     * @param null   \$default
     *
     * @return mixed
     */
    public function getOption(\$key, \$default = null)
    {
        if (isset(\$this->options[\$key])) {
            return \$this->options[\$key];
        }

        return \$default;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Event/Options/FetchOptions.php";
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
        return new Source("", "@bundles/StatsBundle/Event/Options/FetchOptions.php", "/var/www/html/mautic/docroot/app/bundles/StatsBundle/Event/Options/FetchOptions.php");
    }
}
