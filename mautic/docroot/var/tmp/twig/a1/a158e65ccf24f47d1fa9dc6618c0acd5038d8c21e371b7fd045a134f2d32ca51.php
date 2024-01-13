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

/* @bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php */
class __TwigTemplate_0129393edcc416e997ad129989070ed2de0f1cec1730c4867261b8caaf11c078 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Model\\AjaxLookupModelInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

trait AjaxLookupControllerTrait
{
    /**
     * @return JsonResponse
     */
    protected function getLookupChoiceListAction(Request \$request)
    {
        \$dataArray = [];
        \$modelName = InputHelper::clean(\$request->query->get('searchKey'));
        \$search    = InputHelper::clean(\$request->query->get(str_replace('.', '_', \$modelName)));
        \$limit     = (int) \$request->query->get('limit', 0);
        \$start     = (int) \$request->query->get('start', 0);
        \$options   = \$request->query->all();

        if (!empty(\$modelName) && !empty(\$search)) {
            /** @var ModelFactory \$modelFactory */
            \$modelFactory = \$this->get('mautic.model.factory');

            if (\$modelFactory->hasModel(\$modelName)) {
                \$model = \$modelFactory->getModel(\$modelName);

                if (\$model instanceof AjaxLookupModelInterface) {
                    \$results = \$model->getLookupResults(\$modelName, \$search, \$limit, \$start, \$options);

                    foreach (\$results as \$group => \$result) {
                        \$option = [];
                        if (is_array(\$result)) {
                            if (!isset(\$result['value'])) {
                                // Grouped options
                                \$option = [
                                    'group' => true,
                                    'text'  => \$group,
                                    'items' => \$result,
                                ];

                                foreach (\$result as \$value => \$label) {
                                    if (is_array(\$label) && isset(\$label['label'])) {
                                        \$option['items'][\$value]['text'] = \$label['label'];
                                    }
                                }
                            } else {
                                if (isset(\$result['label'])) {
                                    \$option['text'] = \$result['label'];
                                }

                                \$option['value'] = \$result['value'];
                            }
                        } else {
                            \$option[\$group] = \$result;
                        }

                        if (!empty(\$option)) {
                            \$dataArray[] = \$option;
                        }
                    }
                }
            }
        }

        return new JsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php");
    }
}
