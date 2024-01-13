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

/* @bundles/CoreBundle/Helper/HashHelper/HashHelper.php */
class __TwigTemplate_bbbc37e14b21b482063e1e62ba89fdd46516979fa806e9fb454d71b57373c65c extends Template
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
 * Class HashHelper.
 */
final class HashHelper implements HashHelperInterface
{
    /**
     * @param string \$algo
     * @param string \$data
     * @param bool   \$raw_output
     *
     * @return string
     */
    public function hash(\$algo, \$data, \$raw_output = false)
    {
        return hash(\$algo, \$data, \$raw_output);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/HashHelper/HashHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/HashHelper/HashHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/HashHelper/HashHelper.php");
    }
}
