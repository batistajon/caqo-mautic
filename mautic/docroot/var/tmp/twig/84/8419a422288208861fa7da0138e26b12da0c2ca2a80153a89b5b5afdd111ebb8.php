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

/* @bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php */
class __TwigTemplate_4958e92efa4aaac46324372ff8cf4ede1372a4f84af12fe886ac3adbec19652f extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator;

use Mautic\\LeadBundle\\Event\\LeadListFiltersDecoratorDelegateEvent;
use Mautic\\LeadBundle\\Exception\\FilterNotFoundException;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionFactory;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecoratorFactory
{
    /**
     * @var ContactSegmentFilterDictionary
     */
    private \$contactSegmentFilterDictionary;

    /**
     * @var BaseDecorator
     */
    private \$baseDecorator;

    /**
     * @var CustomMappedDecorator
     */
    private \$customMappedDecorator;

    /**
     * @var CompanyDecorator
     */
    private \$companyDecorator;

    /**
     * @var DateOptionFactory
     */
    private \$dateOptionFactory;

    /**
     * @var EventDispatcherInterface
     */
    private \$eventDispatcher;

    public function __construct(
        ContactSegmentFilterDictionary \$contactSegmentFilterDictionary,
        BaseDecorator \$baseDecorator,
        CustomMappedDecorator \$customMappedDecorator,
        DateOptionFactory \$dateOptionFactory,
        CompanyDecorator \$companyDecorator,
        EventDispatcherInterface \$eventDispatcher
    ) {
        \$this->baseDecorator                  = \$baseDecorator;
        \$this->customMappedDecorator          = \$customMappedDecorator;
        \$this->dateOptionFactory              = \$dateOptionFactory;
        \$this->contactSegmentFilterDictionary = \$contactSegmentFilterDictionary;
        \$this->companyDecorator               = \$companyDecorator;
        \$this->eventDispatcher                = \$eventDispatcher;
    }

    /**
     * @return FilterDecoratorInterface
     */
    public function getDecoratorForFilter(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$decoratorEvent = new LeadListFiltersDecoratorDelegateEvent(\$contactSegmentFilterCrate);

        \$this->eventDispatcher->dispatch(LeadEvents::SEGMENT_ON_DECORATOR_DELEGATE, \$decoratorEvent);
        if (\$decorator = \$decoratorEvent->getDecorator()) {
            return \$decorator;
        }

        if (\$contactSegmentFilterCrate->isDateType()) {
            \$dateDecorator = \$this->dateOptionFactory->getDateOption(\$contactSegmentFilterCrate);

            if (\$contactSegmentFilterCrate->isCompanyType()) {
                return new DateCompanyDecorator(\$dateDecorator);
            }

            return \$dateDecorator;
        }

        \$originalField = \$contactSegmentFilterCrate->getField();

        try {
            \$this->contactSegmentFilterDictionary->getFilter(\$originalField);

            return \$this->customMappedDecorator;
        } catch (FilterNotFoundException \$e) {
            if (\$contactSegmentFilterCrate->isCompanyType()) {
                return \$this->companyDecorator;
            }

            return \$this->baseDecorator;
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
        return "@bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/DecoratorFactory.php");
    }
}
