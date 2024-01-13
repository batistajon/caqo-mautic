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

/* @bundles/CoreBundle/Event/RouteEvent.php */
class __TwigTemplate_5038e8d4377f46cbd28b5bed91177c28aa643597f089d10eb4dfb98ef1161610 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\Config\\Loader\\Loader;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Routing\\RouteCollection;

class RouteEvent extends Event
{
    /**
     * @var Loader
     */
    protected \$loader;

    /**
     * @var RouteCollection
     */
    protected \$collection;

    /**
     * @var string
     */
    protected \$type;

    public function __construct(Loader \$loader, \$type = 'main')
    {
        \$this->loader     = \$loader;
        \$this->collection = new RouteCollection();
        \$this->type       = \$type;
    }

    /**
     * @param string \$path
     */
    public function addRoutes(\$path)
    {
        \$this->collection->addCollection(\$this->loader->import(\$path));
    }

    /**
     * @return RouteCollection
     */
    public function getCollection()
    {
        return \$this->collection;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/RouteEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/RouteEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/RouteEvent.php");
    }
}
