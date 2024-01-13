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

/* @bundles/ApiBundle/Helper/RequestHelper.php */
class __TwigTemplate_4d68efc9c15c5d8d58bb23610e575c3651ac731b546d5395083facd822f5afb7 extends Template
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

namespace Mautic\\ApiBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;

class RequestHelper
{
    public static function hasBasicAuth(Request \$request): bool
    {
        return 0 === strpos(strtolower(\$request->headers->get('Authorization')), 'basic');
    }

    public static function isApiRequest(Request \$request): bool
    {
        \$requestUrl = \$request->getRequestUri();

        // Check if /oauth or /api
        \$isApiRequest = (false !== strpos(\$requestUrl, '/oauth') || false !== strpos(\$requestUrl, '/api'));

        defined('MAUTIC_API_REQUEST') or define('MAUTIC_API_REQUEST', \$isApiRequest);

        return \$isApiRequest;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Helper/RequestHelper.php";
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
        return new Source("", "@bundles/ApiBundle/Helper/RequestHelper.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Helper/RequestHelper.php");
    }
}
