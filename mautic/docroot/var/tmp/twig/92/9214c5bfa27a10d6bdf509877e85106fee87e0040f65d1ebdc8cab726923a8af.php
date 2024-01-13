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

/* @bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php */
class __TwigTemplate_c3a66fda1641f12b7e9e952cd7cf42f2606275f6a34dff366600e823d85e901b extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;

final class LeadListFiltersDecoratorDelegateEvent extends CommonEvent
{
    private ?FilterDecoratorInterface \$decorator = null;
    private ContactSegmentFilterCrate \$crate;

    public function __construct(ContactSegmentFilterCrate \$crate)
    {
        \$this->crate = \$crate;
    }

    public function getDecorator(): ?FilterDecoratorInterface
    {
        return \$this->decorator;
    }

    public function setDecorator(FilterDecoratorInterface \$decorator): self
    {
        \$this->decorator = \$decorator;

        return \$this;
    }

    public function getCrate(): ContactSegmentFilterCrate
    {
        return \$this->crate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/LeadListFiltersDecoratorDelegateEvent.php");
    }
}
