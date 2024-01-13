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

/* @bundles/CoreBundle/Helper/TrackingPixelHelper.php */
class __TwigTemplate_1bc52da9ee2d724764b90c7cc53a7170c1836978fcae76c655354f234f47a6df extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class TrackingPixelHelper
{
    public static function sendResponse(Request \$request)
    {
        \$response = self::getResponse(\$request);
        \$response->send();
    }

    /**
     * @return Response
     */
    public static function getResponse(Request \$request)
    {
        \$response = new Response();

        if ('test' === MAUTIC_ENV) {
            return \$response;
        }

        if (ini_get('ignore_user_abort')) {
            ignore_user_abort(true);
        }

        //turn off gzip compression
        if (function_exists('apache_setenv')) {
            apache_setenv('no-gzip', 1);
        }

        ini_set('zlib.output_compression', '0');

        //removing any content encoding like gzip etc.
        \$response->headers->set('Content-Encoding', 'none');

        //check to ses if request is a POST
        if ('GET' == \$request->getMethod()) {
            if ('HTTP/1.1' == \$request->getProtocolVersion()) {
                \$response->headers->set('Connection', 'close');
            }

            //return 1x1 pixel transparent gif
            \$response->headers->set('Content-Type', 'image/gif');
            //avoid cache time on browser side
            \$response->headers->set('Content-Length', '43');
            \$response->headers->set('Cache-Control', 'private, no-cache, no-cache=Set-Cookie, proxy-revalidate');
            \$response->headers->set('Expires', 'Wed, 11 Jan 2000 12:59:00 GMT');
            \$response->headers->set('Last-Modified', 'Wed, 11 Jan 2006 12:59:00 GMT');
            \$response->headers->set('Pragma', 'no-cache');

            \$response->setContent(self::getImage());
        } else {
            \$response->setContent(' ');
        }

        return \$response;
    }

    /**
     * @return string
     */
    public static function getImage()
    {
        return base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/TrackingPixelHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/TrackingPixelHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/TrackingPixelHelper.php");
    }
}
