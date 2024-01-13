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

/* @bundles/CoreBundle/Helper/PageHelperInterface.php */
class __TwigTemplate_410fb7c1289a6ac7922caab25922531c0b57c0c793e331852aaf872e3573ef2b extends Template
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

namespace Mautic\\CoreBundle\\Helper;

interface PageHelperInterface
{
    public function getLimit(): int;

    /**
     * The number of entities can be less then the current page so calculate the last page.
     */
    public function countPage(int \$count): int;

    public function getStart(): int;

    /**
     * Remember what page currently on so that we can return here after form submission/cancellation.
     */
    public function rememberPage(int \$page): void;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/PageHelperInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PageHelperInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/PageHelperInterface.php");
    }
}
