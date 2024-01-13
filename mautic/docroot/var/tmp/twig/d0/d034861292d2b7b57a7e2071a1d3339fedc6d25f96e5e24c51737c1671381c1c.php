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

/* @bundles/IntegrationsBundle/Controller/UpdateFieldController.php */
class __TwigTemplate_f569569d97ed692d8f234776af55aa3e7c3a28e74497c2c4e3c11e0ed7246d47 extends Template
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

namespace Mautic\\IntegrationsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class UpdateFieldController extends CommonController
{
    /**
     * @return JsonResponse
     */
    public function updateAction(Request \$request, string \$integration, string \$object, string \$field)
    {
        // Clear the session of previously stored fields in case it got stuck
        \$session       = \$this->get('session');
        \$updatedFields = \$session->get(sprintf('%s-fields', \$integration), []);

        if (!isset(\$updatedFields[\$object])) {
            \$updatedFields[\$object] = [];
        }

        if (!isset(\$updatedFields[\$object][\$field])) {
            \$updatedFields[\$object][\$field] = [];
        }

        if (\$mappedField = \$request->request->get('mappedField')) {
            \$updatedFields[\$object][\$field]['mappedField'] = \$mappedField;
        }

        if (\$syncDirection = \$request->request->get('syncDirection')) {
            \$updatedFields[\$object][\$field]['syncDirection'] = \$syncDirection;
        }

        \$session->set(sprintf('%s-fields', \$integration), \$updatedFields);

        return new JsonResponse([]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Controller/UpdateFieldController.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Controller/UpdateFieldController.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Controller/UpdateFieldController.php");
    }
}
