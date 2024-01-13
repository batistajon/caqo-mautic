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

/* @bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php */
class __TwigTemplate_ec03076ba5e3fff3daa7a4f1529bef410d49e8ec7a7dc94e78076fc9b9e53b81 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\HashHelper;

/**
 * Interface HashHelperInterface.
 */
interface HashHelperInterface
{
    /**
     * Generate a hash value.
     *
     * @param string \$algo       Name of selected hashing algorithm (i.e. \"md5\", \"sha256\", \"haval160,4\", etc..)
     * @param string \$data       Message to be hashed
     * @param bool   \$raw_output When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.
     *
     * @return string a string containing the calculated message digest as lowercase hexits
     *                unless <i>raw_output</i> is set to true in which case the raw
     *                binary representation of the message digest is returned
     */
    public function hash(\$algo, \$data, \$raw_output = false);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/HashHelper/HashHelperInterface.php");
    }
}
