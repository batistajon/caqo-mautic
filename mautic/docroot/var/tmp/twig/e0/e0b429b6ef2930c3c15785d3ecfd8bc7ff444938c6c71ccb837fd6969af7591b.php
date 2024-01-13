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

/* @bundles/ConfigBundle/Event/ConfigBuilderEvent.php */
class __TwigTemplate_f8c368f6ac342cf22ca2fce0caf3230ab386957f744dc2ac28632f4d939038d7 extends Template
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

namespace Mautic\\ConfigBundle\\Event;

use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Symfony\\Component\\EventDispatcher\\Event;

class ConfigBuilderEvent extends Event
{
    /**
     * @var array
     */
    private \$forms = [];

    /**
     * @var array
     */
    private \$formThemes = [
        'MauticConfigBundle:FormTheme',
    ];

    /**
     * @var BundleHelper
     */
    private \$bundleHelper;

    /**
     * @var array
     */
    protected \$encodedFields = [];

    public function __construct(BundleHelper \$bundleHelper)
    {
        \$this->bundleHelper = \$bundleHelper;
    }

    /**
     * Set new form to the forms array.
     *
     * @return \$this
     */
    public function addForm(array \$form)
    {
        if (isset(\$form['formTheme'])) {
            \$this->formThemes[] = \$form['formTheme'];
        }

        \$this->forms[\$form['formAlias']] = \$form;

        return \$this;
    }

    /**
     * Remove a form to the forms array.
     *
     * @param string \$formAlias
     *
     * @return bool
     */
    public function removeForm(\$formAlias)
    {
        if (isset(\$this->forms[\$formAlias])) {
            unset(\$this->forms[\$formAlias]);

            return true;
        }

        return false;
    }

    /**
     * Returns the forms array.
     *
     * @return array
     */
    public function getForms()
    {
        return \$this->forms;
    }

    /**
     * Returns the formThemes array.
     *
     * @return array
     */
    public function getFormThemes()
    {
        return \$this->formThemes;
    }

    /**
     * Get default parameters from config defined in bundles.
     *
     * @param \$bundle
     *
     * @return array
     */
    public function getParametersFromConfig(\$bundle)
    {
        static \$allBundles;

        if (empty(\$allBundles)) {
            \$allBundles = \$this->bundleHelper->getMauticBundles(true);
        }

        if (isset(\$allBundles[\$bundle]) && \$allBundles[\$bundle]['config']['parameters']) {
            return \$allBundles[\$bundle]['config']['parameters'];
        } else {
            return [];
        }
    }

    /**
     * @param \$fields
     *
     * @return \$this
     */
    public function addFileFields(\$fields)
    {
        \$this->encodedFields = array_merge(\$this->encodedFields, (array) \$fields);

        return \$this;
    }

    /**
     * @return array
     */
    public function getFileFields()
    {
        return \$this->encodedFields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Event/ConfigBuilderEvent.php";
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
        return new Source("", "@bundles/ConfigBundle/Event/ConfigBuilderEvent.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Event/ConfigBuilderEvent.php");
    }
}
