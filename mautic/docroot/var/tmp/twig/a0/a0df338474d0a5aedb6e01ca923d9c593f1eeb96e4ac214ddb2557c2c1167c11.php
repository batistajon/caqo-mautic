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

/* @bundles/CoreBundle/Controller/BuilderControllerTrait.php */
class __TwigTemplate_7620abaf64ab1c9999c51075488a342f71be95c6a1a285ae6f9c8ac87c3f46d7 extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Symfony\\Component\\Routing\\RouterInterface;

trait BuilderControllerTrait
{
    /**
     * Get assets for builder.
     */
    protected function getAssetsForBuilder()
    {
        /** @var \\Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper \$assetsHelper */
        \$assetsHelper = \$this->get('templating.helper.assets');
        /** @var RouterInterface \$routerHelper */
        \$routerHelper = \$this->get('router');
        \$translator   = \$this->get('templating.helper.translator');
        \$assetsHelper
            ->setContext(AssetsHelper::CONTEXT_BUILDER)
            ->addScriptDeclaration(\"var mauticBasePath    = '\".\$this->request->getBasePath().\"';\")
            ->addScriptDeclaration(\"var mauticAjaxUrl     = '\".\$routerHelper->generate('mautic_core_ajax').\"';\")
            ->addScriptDeclaration(\"var mauticBaseUrl     = '\".\$routerHelper->generate('mautic_base_index').\"';\")
            ->addScriptDeclaration(\"var mauticAssetPrefix = '\".\$assetsHelper->getAssetPrefix(true).\"';\")
            ->addScriptDeclaration('var mauticLang        = '.\$translator->getJsLang().';')
            ->addCustomDeclaration(\$assetsHelper->getSystemScripts(true, true))
            ->addStylesheet('app/bundles/CoreBundle/Assets/css/libraries/builder.css');

        \$builderAssets = \$assetsHelper->getHeadDeclarations();

        // reset context to main
        \$assetsHelper->setContext();

        return \$builderAssets;
    }

    /**
     * @param \$slotTypes
     *
     * @return array
     */
    protected function buildSlotForms(\$slotTypes)
    {
        foreach (\$slotTypes as \$key => \$slotType) {
            if (!empty(\$slotType['form'])) {
                \$slotForm                = \$this->get('form.factory')->create(\$slotType['form']);
                \$slotTypes[\$key]['form'] = \$slotForm->createView();
            }
        }

        return \$slotTypes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/BuilderControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/BuilderControllerTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/BuilderControllerTrait.php");
    }
}
