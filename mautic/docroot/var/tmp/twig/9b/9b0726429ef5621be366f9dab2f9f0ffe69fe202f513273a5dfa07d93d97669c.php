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

/* @bundles/CoreBundle/IpLookup/GeobytesLookup.php */
class __TwigTemplate_2679054ae30bccc3790d964e7f64a6df44867628abc2a1e2be550b5404e3a4d4 extends Template
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

namespace Mautic\\CoreBundle\\IpLookup;

class GeobytesLookup extends AbstractRemoteDataLookup
{
    /**
     * @return string
     */
    public function getAttribution()
    {
        return '<a href=\"http://geobytes.com/\" target=\"_blank\">Geobytes</a> offers both free (16,000 lookups per hour) and VIP (paid) offerings.';
    }

    /**
     * @return string
     */
    protected function getUrl()
    {
        return \"http://getcitydetails.geobytes.com/GetCityDetails?fqcn={\$this->ip}\";
    }

    /**
     * @param \$response
     */
    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);
        foreach (\$data as \$key => \$value) {
            \$key        = str_replace('geobytes', '', \$key);
            \$this->\$key = \$value;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/IpLookup/GeobytesLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/GeobytesLookup.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/GeobytesLookup.php");
    }
}
