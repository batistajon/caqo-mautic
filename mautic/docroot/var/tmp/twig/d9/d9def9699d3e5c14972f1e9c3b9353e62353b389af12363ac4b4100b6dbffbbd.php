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

/* @bundles/FormBundle/ProgressiveProfiling/DisplayManager.php */
class __TwigTemplate_5e3ac5a10cfc555f1b3f38440c7131f0d977a619f42440dd0c2cf46f3bceff68 extends Template
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

namespace Mautic\\FormBundle\\ProgressiveProfiling;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;

class DisplayManager
{
    /**
     * @var Form
     */
    private \$form;

    /**
     * @var array
     */
    private \$viewOnlyFields;

    /**
     * @var DisplayCounter
     */
    private \$displayCounter;

    /**
     * DisplayManager constructor.
     */
    public function __construct(Form \$form, array \$viewOnlyFields = [])
    {
        \$this->form           = \$form;
        \$this->viewOnlyFields = \$viewOnlyFields;
        \$this->displayCounter = new DisplayCounter(\$form);
    }

    /**
     * @return bool
     */
    public function showForField(Field \$field)
    {
        if (in_array(\$field->getType(), \$this->viewOnlyFields)) {
            return true;
        }

        // Always Display field priority until hit limit
        if (\$field->isAlwaysDisplay()) {
            if (\$this->form->getProgressiveProfilingLimit() <= \$this->displayCounter->getDisplayFields()) {
                return false;
            } else {
                \$this->displayCounter->increaseAlreadyAlwaysDisplayed();

                return true;
            }
        }

        if (\$this->shouldDisplayNotAlwaysDisplayField(\$field)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    private function shouldDisplayNotAlwaysDisplayField(Field \$field)
    {
        /** @var Field \$fieldFromArray */
        \$fields = \$this->form->getFields()->toArray();
        foreach (\$fields as \$fieldFromArray) {
            if (in_array(\$field->getType(), \$this->viewOnlyFields)) {
                continue;
            }

            if (\$field->getId() === \$fieldFromArray->getId()) {
                if ((\$this->displayCounter->getDisplayFields() + (\$this->displayCounter->getAlwaysDisplayFields() - \$this->displayCounter->getAlreadyAlwaysDisplayed())) >= \$this->form->getProgressiveProfilingLimit()) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * @return bool
     */
    public function useProgressiveProfilingLimit()
    {
        return '' != \$this->form->getProgressiveProfilingLimit();
    }

    /**
     * @return DisplayCounter
     */
    public function getDisplayCounter()
    {
        return \$this->displayCounter;
    }

    public function increaseDisplayedFields(Field \$field)
    {
        if (!in_array(\$field->getType(), \$this->viewOnlyFields)) {
            \$this->displayCounter->increaseDisplayedFields();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/ProgressiveProfiling/DisplayManager.php";
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
        return new Source("", "@bundles/FormBundle/ProgressiveProfiling/DisplayManager.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/ProgressiveProfiling/DisplayManager.php");
    }
}
