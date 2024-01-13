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

/* @bundles/EmailBundle/Stats/StatHelperContainer.php */
class __TwigTemplate_b5aab17ddd2f67f10d082bda541b4c0751ff2747fad48548a9fd5c56f7d4a872 extends Template
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

namespace Mautic\\EmailBundle\\Stats;

use Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException;
use Mautic\\EmailBundle\\Stats\\Helper\\StatHelperInterface;

class StatHelperContainer
{
    private \$helpers = [];

    public function addHelper(StatHelperInterface \$helper)
    {
        \$this->helpers[\$helper->getName()] = \$helper;
    }

    /**
     * @param \$name
     *
     * @return StatHelperInterface
     *
     * @throws InvalidStatHelperException
     */
    public function getHelper(\$name)
    {
        if (!isset(\$this->helpers[\$name])) {
            throw new InvalidStatHelperException(\$name.' has not been registered');
        }

        return \$this->helpers[\$name];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stats/StatHelperContainer.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/StatHelperContainer.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Stats/StatHelperContainer.php");
    }
}
