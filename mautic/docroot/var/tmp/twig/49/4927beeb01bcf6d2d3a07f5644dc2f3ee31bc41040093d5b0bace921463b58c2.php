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

/* @bundles/MarketplaceBundle/DTO/GitHubInfo.php */
class __TwigTemplate_4ca6133a5bebcda74a0c34e9b0eb3befa43df1755c9e6f3b994161558f0bae6f extends Template
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

namespace Mautic\\MarketplaceBundle\\DTO;

final class GitHubInfo
{
    public int \$stars;
    public int \$watchers;
    public int \$forks;
    public int \$openIssues;

    public function __construct(int \$stars, int \$watchers, int \$forks, int \$openIssues)
    {
        \$this->stars      = \$stars;
        \$this->watchers   = \$watchers;
        \$this->forks      = \$forks;
        \$this->openIssues = \$openIssues;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/DTO/GitHubInfo.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/GitHubInfo.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/DTO/GitHubInfo.php");
    }
}
