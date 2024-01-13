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

/* @bundles/LeadBundle/Event/ImportValidateEvent.php */
class __TwigTemplate_c988d8515e35450209b56ca2baac774ae53b11715920eb33fb342a9a0c3eaff1 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Form\\Form;

class ImportValidateEvent extends Event
{
    private string \$routeObjectName;
    private Form \$form;
    private ?int \$ownerId = null;
    private ?int \$list    = null;

    /**
     * @var mixed[]
     */
    private array \$matchedFields = [];

    /**
     * @var mixed[]
     */
    private array \$tags = [];

    public function __construct(string \$routeObjectName, Form \$form)
    {
        \$this->routeObjectName = \$routeObjectName;
        \$this->form            = \$form;
    }

    public function getForm(): Form
    {
        return \$this->form;
    }

    /**
     * Check if the form we're validating has errors.
     */
    public function hasErrors(): bool
    {
        return (bool) count(\$this->form->getErrors());
    }

    /**
     * Check if the import is for said route object and notes if the object exist.
     */
    public function importIsForRouteObject(string \$routeObject): bool
    {
        return \$this->getRouteObjectName() === \$routeObject;
    }

    public function getRouteObjectName(): string
    {
        return \$this->routeObjectName;
    }

    /**
     * Set the matchedFields in the event.
     *
     * @param mixed[] \$matchedFields
     */
    public function setMatchedFields(array \$matchedFields): void
    {
        \$this->matchedFields = \$matchedFields;
    }

    /**
     * @return mixed[]
     */
    public function getMatchedFields(): array
    {
        return \$this->matchedFields;
    }

    public function setOwnerId(?int \$ownerId = null): void
    {
        \$this->ownerId = \$ownerId;
    }

    public function getOwnerId(): ?int
    {
        return \$this->ownerId;
    }

    public function setList(?int \$list = null): void
    {
        \$this->list = \$list;
    }

    public function getList(): ?int
    {
        return \$this->list;
    }

    /**
     * @param mixed[] \$tags
     */
    public function setTags(array \$tags = []): void
    {
        \$this->tags = \$tags;
    }

    /**
     * @return mixed[]
     */
    public function getTags(): array
    {
        return \$this->tags;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ImportValidateEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ImportValidateEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/ImportValidateEvent.php");
    }
}
