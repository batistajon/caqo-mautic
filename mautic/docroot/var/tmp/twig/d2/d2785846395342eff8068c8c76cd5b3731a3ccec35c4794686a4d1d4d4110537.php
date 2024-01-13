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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php */
class __TwigTemplate_a49eac0d6f2aad1c467d2823d2d03f50d02320de6e14e792e9d85caa161f4f63 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

class PreUpdateCheckError
{
    public string \$key;

    /**
     * @var array<string,string>
     */
    public array \$parameters;

    /**
     * Create a new error. Errors are supposed to be translatable, so please provide proper translation keys. If that's not possible, please provide a clear error message in English.
     *
     * @param string               \$key        The translation key (e.g. mautic.core.update.check.phpversion)
     * @param array<string,string> \$parameters Optional parameters that you want to pass to the translation key, e.g. ['%currentversion%' => '7.4.2']
     */
    public function __construct(string \$key, array \$parameters = [])
    {
        \$this->key        = \$key;
        \$this->parameters = \$parameters;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckError.php");
    }
}
