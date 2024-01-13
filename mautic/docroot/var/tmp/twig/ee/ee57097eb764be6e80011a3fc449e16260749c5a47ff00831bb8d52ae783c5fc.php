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

/* @bundles/CoreBundle/Helper/PageHelper.php */
class __TwigTemplate_4d0958566ba63b22d69590e67777b9907e3873d7c969281e1f5d8ddb69ebfccb extends Template
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

use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

final class PageHelper implements PageHelperInterface
{
    /**
     * @var SessionInterface
     */
    private \$session;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var string
     */
    private \$sessionPrefix;

    /**
     * @var int
     */
    private \$page;

    public function __construct(
        SessionInterface \$session,
        CoreParametersHelper \$coreParametersHelper,
        string \$sessionPrefix,
        int \$page
    ) {
        \$this->session              = \$session;
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->sessionPrefix        = \$sessionPrefix;
        \$this->page                 = \$page;
    }

    public function getLimit(): int
    {
        return (int) \$this->session->get(
            \"{\$this->sessionPrefix}.limit\",
            \$this->coreParametersHelper->get('default_pagelimit')
        );
    }

    public function countPage(int \$count): int
    {
        \$currentPage = (int) (ceil(\$count / \$this->getLimit())) ?: 1;

        return (1 === \$count) ? 1 : \$currentPage;
    }

    public function getStart(): int
    {
        \$start = (\$this->page - 1) * \$this->getLimit();

        if (\$start < 0) {
            return 0;
        }

        return \$start;
    }

    public function rememberPage(int \$page): void
    {
        \$this->session->set(\"{\$this->sessionPrefix}.page\", \$page);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/PageHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PageHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/PageHelper.php");
    }
}
