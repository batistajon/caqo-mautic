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

/* @bundles/EmailBundle/Helper/UrlMatcher.php */
class __TwigTemplate_a9d4b8aeafa27c055874c72059cec16570857aaa26ee350f40309e6584f519e6 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

class UrlMatcher
{
    /**
     * @param \$urlToFind
     *
     * @return bool
     */
    public static function hasMatch(array \$urlsToCheckAgainst, \$urlToFind)
    {
        \$urlToFind = self::sanitizeUrl(\$urlToFind);

        foreach (\$urlsToCheckAgainst as \$url) {
            \$url = self::sanitizeUrl(\$url);

            if (preg_match('/'.preg_quote(\$url, '/').'/i', \$urlToFind)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param \$url
     *
     * @return mixed|string
     */
    private static function sanitizeUrl(\$url)
    {
        // Handle escaped forward slashes as BC
        \$url = str_replace('\\\\/', '/', \$url);

        // Ignore ending slash
        \$url = rtrim(\$url, '/');

        // Ignore http/https
        \$url = str_replace(['http://', 'https://'], '', \$url);

        // Remove preceding //
        if (0 === strpos(\$url, '//')) {
            \$url = str_replace('//', '', \$url);
        }

        return \$url;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Helper/UrlMatcher.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/UrlMatcher.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Helper/UrlMatcher.php");
    }
}
