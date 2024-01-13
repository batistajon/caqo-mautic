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

/* @bundles/FormBundle/Event/FormFieldEvent.php */
class __TwigTemplate_02032d7cf68e232b8c796fe758000b62d3be829418384112424d32cbe9b77b1f extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\FormBundle\\Entity\\Field;
use Symfony\\Component\\EventDispatcher\\Event;

final class FormFieldEvent extends Event
{
    /**
     * @var Field
     */
    private \$entity;

    /**
     * @var bool
     */
    private \$isNew;

    public function __construct(Field \$field, bool \$isNew = false)
    {
        \$this->entity = \$field;
        \$this->isNew  = \$isNew;
    }

    public function getField(): Field
    {
        return \$this->entity;
    }

    public function isNew(): bool
    {
        return \$this->isNew;
    }

    public function setField(Field \$field): void
    {
        \$this->entity = \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/FormFieldEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FormFieldEvent.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Event/FormFieldEvent.php");
    }
}
