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

/* @bundles/CategoryBundle/Controller/AjaxController.php */
class __TwigTemplate_361b689d39b1617ec6f1eb6d595c0742d097e1b9cdb766b102c4312c80d6420e extends Template
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

namespace Mautic\\CategoryBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function categoryListAction(Request \$request)
    {
        \$bundle    = InputHelper::clean(\$request->query->get('bundle'));
        \$filter    = InputHelper::clean(\$request->query->get('filter'));
        \$results   = \$this->getModel('category')->getLookupResults(\$bundle, \$filter, 10);
        \$dataArray = [];
        foreach (\$results as \$r) {
            \$dataArray[] = [
                'label' => \$r['title'].\" ({\$r['id']})\",
                'value' => \$r['id'],
            ];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/CategoryBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Controller/AjaxController.php");
    }
}
