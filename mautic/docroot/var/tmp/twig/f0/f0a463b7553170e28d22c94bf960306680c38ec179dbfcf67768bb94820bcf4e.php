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

/* @bundles/CoreBundle/Templating/Twig/Extension/SecurityExtension.php */
class __TwigTemplate_c27a2d9e50d719c4748d56fb0b6f5f289528efa921bc6220f1c92549de29de0c extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Twig\\Extension;

use Mautic\\CoreBundle\\Templating\\Helper\\SecurityHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class SecurityExtension extends AbstractExtension
{
    private SecurityHelper \$securityHelper;

    public function __construct(SecurityHelper \$securityHelper)
    {
        \$this->securityHelper = \$securityHelper;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('securityGetAuthenticationContext', [\$this, 'getContext']),
            new TwigFunction('securityGetCsrfToken', [\$this, 'getCsrfToken']),
        ];
    }

    public function getContext(): string
    {
        return \$this->securityHelper->getAuthenticationContent();
    }

    public function getCsrfToken(string \$intention): string
    {
        return \$this->securityHelper->getCsrfToken(\$intention);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/SecurityExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/SecurityExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/SecurityExtension.php");
    }
}
