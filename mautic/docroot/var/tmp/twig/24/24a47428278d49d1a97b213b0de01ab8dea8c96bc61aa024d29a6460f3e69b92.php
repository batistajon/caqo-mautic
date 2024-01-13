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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php */
class __TwigTemplate_04a332531727fd29c307e8cbd1d882be0cacbbd7329ce7900c7708baa355a822 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper;

/**
 * Class Category.
 */
class Category
{
    /**
     * @var string
     */
    private \$category;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var bool
     */
    private \$isPermanent;

    /**
     * Category constructor.
     *
     * @param \$category
     * @param \$type
     * @param \$isPermanent
     */
    public function __construct(\$category, \$type, \$isPermanent)
    {
        \$this->category    = \$category;
        \$this->type        = \$type;
        \$this->isPermanent = \$isPermanent;

        return \$this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return bool
     */
    public function isPermanent()
    {
        return \$this->isPermanent;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Mapper/Category.php");
    }
}
