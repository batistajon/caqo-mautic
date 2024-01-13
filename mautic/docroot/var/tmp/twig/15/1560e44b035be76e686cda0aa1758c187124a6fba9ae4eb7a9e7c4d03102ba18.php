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

/* @bundles/ConfigBundle/Controller/SysinfoController.php */
class __TwigTemplate_a1753f70a09c4d55d9e854acdf3cbb57da94e79e4d9600fd080738921c9e11fa extends Template
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

namespace Mautic\\ConfigBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController;
use Symfony\\Component\\HttpFoundation\\JsonResponse;

class SysinfoController extends FormController
{
    /**
     * @return JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function indexAction()
    {
        if (!\$this->user->isAdmin() || \$this->coreParametersHelper->get('sysinfo_disabled')) {
            return \$this->accessDenied();
        }

        /** @var \\Mautic\\ConfigBundle\\Model\\SysinfoModel \$model */
        \$model = \$this->getModel('config.sysinfo');

        return \$this->delegateView([
            'viewParameters' => [
                'phpInfo'         => \$model->getPhpInfo(),
                'requirements'    => \$model->getRequirements(),
                'recommendations' => \$model->getRecommendations(),
                'folders'         => \$model->getFolders(),
                'log'             => \$model->getLogTail(200),
                'dbInfo'          => \$model->getDbInfo(),
            ],
            'contentTemplate' => 'MauticConfigBundle:Sysinfo:index.html.php',
            'passthroughVars' => [
                'activeLink'    => '#mautic_sysinfo_index',
                'mauticContent' => 'sysinfo',
                'route'         => \$this->generateUrl('mautic_sysinfo_index'),
            ],
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Controller/SysinfoController.php";
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
        return new Source("", "@bundles/ConfigBundle/Controller/SysinfoController.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Controller/SysinfoController.php");
    }
}
