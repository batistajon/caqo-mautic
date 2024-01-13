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

/* @bundles/IntegrationsBundle/Sync/Exception/FieldNotFoundException.php */
class __TwigTemplate_c541b59f669128b2c1c3c2263b38f343164eef7277f17e79912718f8ad101fe6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Exception;

class FieldNotFoundException extends \\Exception
{
    /**
     * @param                 \$field
     * @param                 \$object
     * @param int             \$code
     * @param \\Exception|null \$previous
     */
    public function __construct(\$field, \$object, \$code = 0, ?\\Throwable \$previous = null)
    {
        parent::__construct(sprintf('The %s field is not mapped for the %s object.', \$field, \$object), \$code, \$previous);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Exception/FieldNotFoundException.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Exception/FieldNotFoundException.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Exception/FieldNotFoundException.php");
    }
}
