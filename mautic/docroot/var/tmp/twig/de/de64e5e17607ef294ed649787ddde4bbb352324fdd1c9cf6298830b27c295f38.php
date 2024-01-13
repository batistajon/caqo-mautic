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

/* @bundles/PageBundle/Event/TrackingEvent.php */
class __TwigTemplate_c27bbde35de8c4bec74145a12b81fadf96118d89e7ba04f5e3c9e378a50cc1a4 extends Template
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

/*
 * @copyright   2020 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

declare(strict_types=1);

namespace Mautic\\PageBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;

class TrackingEvent extends Event
{
    /**
     * @var Lead
     */
    private \$contact;

    /**
     * @var Request
     */
    private \$request;

    /**
     * @var ParameterBag
     */
    private \$response;

    public function __construct(Lead \$contact, Request \$request, array \$mtcSessionResponses)
    {
        \$this->contact  = \$contact;
        \$this->request  = \$request;
        \$this->response = new ParameterBag(\$mtcSessionResponses);
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getResponse(): ParameterBag
    {
        return \$this->response;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/TrackingEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/TrackingEvent.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Event/TrackingEvent.php");
    }
}
