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

/* @bundles/CoreBundle/Controller/JsController.php */
class __TwigTemplate_143b677dc38e42a65803b014ea5947944346004f75caa75c47f30a1f454e847c extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\BuildJsEvent;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Class JsController.
 */
class JsController extends CommonController
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        // Don't store a visitor with this request
        defined('MAUTIC_NON_TRACKABLE_REQUEST') || define('MAUTIC_NON_TRACKABLE_REQUEST', 1);

        \$dispatcher = \$this->dispatcher;
        \$debug      = \$this->factory->getKernel()->isDebug();
        \$event      = new BuildJsEvent(\$this->getJsHeader(), \$debug);

        if (\$dispatcher->hasListeners(CoreEvents::BUILD_MAUTIC_JS)) {
            \$dispatcher->dispatch(CoreEvents::BUILD_MAUTIC_JS, \$event);
        }

        return new Response(\$event->getJs(), 200, ['Content-Type' => 'application/javascript']);
    }

    /**
     * Build a JS header for the Mautic embedded JS.
     *
     * @return string
     */
    protected function getJsHeader()
    {
        \$year = date('Y');

        return <<<JS
/**
 * @package     MauticJS
 * @copyright   {\$year} Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
JS;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/JsController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/JsController.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/JsController.php");
    }
}
