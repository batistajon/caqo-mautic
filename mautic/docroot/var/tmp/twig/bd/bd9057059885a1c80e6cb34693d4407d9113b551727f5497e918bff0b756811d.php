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

/* @bundles/QueueBundle/Helper/QueueRequestHelper.php */
class __TwigTemplate_dc87286a602ad212e40952df31702abc01b624cef9faa47de6dd5539fd48c145 extends Template
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

namespace Mautic\\QueueBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;

class QueueRequestHelper
{
    public static function flattenRequest(Request \$request)
    {
        return [
            'attributes' => \$request->attributes->all(),
            'request'    => \$request->request->all(),
            'query'      => \$request->query->all(),
            'cookies'    => \$request->cookies->all(),
            'files'      => \$request->files->all(),
            'server'     => \$request->server->all(),
            'headers'    => \$request->headers->all(),
        ];
    }

    public static function buildRequest(array \$request)
    {
        if (!isset(\$request['attributes'])) {
            throw new \\InvalidArgumentException('Request does not have expected keys. Use QueueRequestHelper::flattenRequest to prepare a Request object');
        }

        return new Request(
            \$request['query'],
            \$request['request'],
            \$request['attributes'],
            \$request['cookies'],
            \$request['files'],
            \$request['server']
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Helper/QueueRequestHelper.php";
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
        return new Source("", "@bundles/QueueBundle/Helper/QueueRequestHelper.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Helper/QueueRequestHelper.php");
    }
}
