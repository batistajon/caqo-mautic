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

/* @bundles/CoreBundle/Factory/PageHelperFactory.php */
class __TwigTemplate_4a3b5b18e2a1cd52b053e6978c7c7edd2f4a599bdda72af2d927ec1f6c4ad381 extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PageHelper;
use Mautic\\CoreBundle\\Helper\\PageHelperInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

final class PageHelperFactory implements PageHelperFactoryInterface
{
    /**
     * @var SessionInterface
     */
    private \$session;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(SessionInterface \$session, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->session              = \$session;
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    public function make(string \$sessionPrefix, int \$page): PageHelperInterface
    {
        return new PageHelper(\$this->session, \$this->coreParametersHelper, \$sessionPrefix, \$page);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Factory/PageHelperFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/PageHelperFactory.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Factory/PageHelperFactory.php");
    }
}
