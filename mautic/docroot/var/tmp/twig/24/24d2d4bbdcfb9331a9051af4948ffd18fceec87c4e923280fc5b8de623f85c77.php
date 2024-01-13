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

/* @bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php */
class __TwigTemplate_ca31d06074144466dd057c502b9e83e7d3fa59af112b3e8231ec3d2b8f26abb4 extends Template
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

class DisplayCounter
{
    /**
     * @var int
     */
    private \$displayedFields = 0;

    /**
     * @var int
     */
    private \$alreadyAlwaysDisplayed = 0;

    /**
     * @var Form
     */
    private \$form;

    /**
     * DisplayCounter constructor.
     */
    public function __construct(Form \$form)
    {
        \$this->form = \$form;
    }

    public function increaseDisplayedFields()
    {
        ++\$this->displayedFields;
    }

    /**
     * @return int
     */
    public function getDisplayFields()
    {
        return \$this->displayedFields;
    }

    public function increaseAlreadyAlwaysDisplayed()
    {
        ++\$this->alreadyAlwaysDisplayed;
    }

    /**
     * @return int
     */
    public function getAlreadyAlwaysDisplayed()
    {
        return \$this->alreadyAlwaysDisplayed;
    }

    /**
     * @return int
     */
    public function getAlwaysDisplayFields()
    {
        \$i= 0;
        /** @var Field \$field */
        foreach (\$this->form->getFields()->toArray() as \$field) {
            if (\$field->isAlwaysDisplay()) {
                ++\$i;
            }
        }

        return \$i;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php";
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
        return new Source("", "@bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php");
    }
}
