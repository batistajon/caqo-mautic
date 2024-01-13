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

/* @bundles/FormBundle/Event/ValidationEvent.php */
class __TwigTemplate_715ba2d04c59a638bc1c1c39925c1fc94fc314e02b630feadb9321348de18464 extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;

class ValidationEvent extends CommonEvent
{
    /**
     * @var Field
     */
    private \$field;

    /**
     * @var mixed
     */
    private \$value;

    /**
     * @var bool
     */
    private \$valid = true;

    /**
     * @var string
     */
    private \$invalidReason = '';

    /**
     * @param Form \$form
     * @param bool \$isNew
     */
    public function __construct(Field \$field, \$value)
    {
        \$this->field = \$field;
        \$this->value = \$value;
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return \$this->field;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @param \$reason
     */
    public function failedValidation(\$reason)
    {
        \$this->valid         = false;
        \$this->invalidReason = \$reason;

        \$this->stopPropagation();
    }

    /**
     * Is the field valid.
     *
     * @return bool
     */
    public function isValid()
    {
        return \$this->valid;
    }

    /**
     * Get the reason this field was invalidated.
     *
     * @return string
     */
    public function getInvalidReason()
    {
        return \$this->invalidReason;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/ValidationEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/ValidationEvent.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Event/ValidationEvent.php");
    }
}
