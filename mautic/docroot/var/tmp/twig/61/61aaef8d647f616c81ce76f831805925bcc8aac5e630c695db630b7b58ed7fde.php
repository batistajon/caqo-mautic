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

/* @bundles/LeadBundle/Event/DoNotContactAddEvent.php */
class __TwigTemplate_cbe46fc760fd8b792064a8ce43cd5d1dd99de784d2b04149260deb167e788108 extends Template
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

use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

final class DoNotContactAddEvent extends Event
{
    public const ADD_DONOT_CONTACT = 'mautic.lead.add_donot_contact';

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var string
     */
    private \$channel;

    /**
     * @var string
     */
    private \$comments;

    /**
     * @var int
     */
    private \$reason;

    /**
     * @var bool
     */
    private \$persist;

    /**
     * @var bool
     */
    private \$checkCurrentStatus;

    /**
     * @var bool
     */
    private \$override;

    public function __construct(Lead \$lead, string \$channel, string \$comments = '', int \$reason = DNC::BOUNCED, bool \$persist = true, bool \$checkCurrentStatus = true, bool \$override = true)
    {
        \$this->lead               = \$lead;
        \$this->channel            = \$channel;
        \$this->comments           = \$comments;
        \$this->reason             = \$reason;
        \$this->persist            = \$persist;
        \$this->checkCurrentStatus = \$checkCurrentStatus;
        \$this->override           = \$override;
    }

    public function getLead(): Lead
    {
        return \$this->lead;
    }

    public function getChannel(): string
    {
        return \$this->channel;
    }

    public function getComments(): string
    {
        return \$this->comments;
    }

    public function getReason(): int
    {
        return \$this->reason;
    }

    public function isPersist(): bool
    {
        return \$this->persist;
    }

    public function isCheckCurrentStatus(): bool
    {
        return \$this->checkCurrentStatus;
    }

    public function isOverride(): bool
    {
        return \$this->override;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/DoNotContactAddEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/DoNotContactAddEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/DoNotContactAddEvent.php");
    }
}
