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

/* @bundles/CoreBundle/Helper/Serializer.php */
class __TwigTemplate_14d5313c4605d950f2ffc057c318a50d5aecad4e0160e2421fbe0aba35992dfc extends Template
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

class Serializer
{
    /**
     * Unserializing a string can be a security vulnerability as it can contain classes that can execute a PHP code.
     * PHP >=7 has the `['allowed_classes' => false]` option to disable classes altogether or whitelist those needed.
     * PHP <7 do not accept the second parameter, throw warning and return false so we have to handle it differently.
     * This helper method is secure for PHP >= 7 by default and handle all PHP versions.
     *
     * PHP does not recommend untrusted user input even with ['allowed_classes' => false]
     *
     * @param string \$serializedString
     *
     * @return mixed
     */
    public static function decode(\$serializedString, array \$options = ['allowed_classes' => false])
    {
        if (1 === preg_match('/(^|;|{|})O:\\+?[0-9]+:\"/', \$serializedString)) {
            throw new \\InvalidArgumentException(sprintf('The string %s contains an object.', \$serializedString));
        }

        if (version_compare(phpversion(), '7.0.0', '<')) {
            return unserialize(\$serializedString);
        }

        return unserialize(\$serializedString, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Serializer.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Serializer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/Serializer.php");
    }
}
