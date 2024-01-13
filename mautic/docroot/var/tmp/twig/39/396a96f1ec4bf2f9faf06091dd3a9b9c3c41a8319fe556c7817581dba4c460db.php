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

/* @bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php */
class __TwigTemplate_b5614b12a43e8017f62e059437bb8698e6fbbccf0a75b25e0cb3e7dbaaf43a8d extends Template
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

namespace Mautic\\DynamicContentBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

final class ContactFiltersEvaluateEvent extends Event
{
    /**
     * @var mixed[]
     */
    private array \$filters;

    private bool \$isEvaluated = false;
    private Lead \$contact;
    private bool \$isMatched = false;

    /**
     * @param mixed[] \$filters
     */
    public function __construct(array \$filters, Lead \$contact)
    {
        \$this->filters = \$filters;
        \$this->contact = \$contact;
    }

    public function isMatch(): bool
    {
        return \$this->isEvaluated() ? \$this->isMatched : false;
    }

    public function isEvaluated(): bool
    {
        return \$this->isEvaluated;
    }

    public function setIsEvaluated(bool \$evaluated): ContactFiltersEvaluateEvent
    {
        \$this->isEvaluated = \$evaluated;

        return \$this;
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }

    public function setContact(Lead \$contact): ContactFiltersEvaluateEvent
    {
        \$this->contact = \$contact;

        return \$this;
    }

    /**
     * @return mixed[]
     */
    public function getFilters(): array
    {
        return \$this->filters;
    }

    public function isMatched(): bool
    {
        return \$this->isMatched;
    }

    public function setIsMatched(bool \$isMatched): ContactFiltersEvaluateEvent
    {
        \$this->isMatched = \$isMatched;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Event/ContactFiltersEvaluateEvent.php");
    }
}
