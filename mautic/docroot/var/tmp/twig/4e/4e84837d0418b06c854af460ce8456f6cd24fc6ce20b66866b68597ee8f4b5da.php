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

/* @bundles/CampaignBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_6d0663c7e132e49f3397913522a61f9e72225b9fe7dbf5d9fb6e32637bb018f3 extends Template
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
        echo "mautic.campaign.error.contact_not_in_campaign=\"The contact %contact% is not in the campaign %campaign%.\"
mautic.campaign.error.event_already_executed=\"The event %event% in the campaign %campaign% has already been executed at %dateTriggered% for the contact %contact%.\"
mautic.campaign.error.event_must_be_scheduled=\"The event %event% in the campaign %campaign% must be scheduled or marked as complete as the contact %contact% does not have a log entry yet.\"
mautic.campaign.error.edit_events.request_invalid=\"contactId and/or eventId are misssing from this item's parameters.\"
mautic.campaign.error.decision_cannot_be_scheduled=\"A decision type event cannot be scheduled. Event: %event%, campaign: %campaign%, contact: %contact%.\"
mautic.campaign.error.notfound=\"No campaign with an id of %id% was found!\"
mautic.campaign.notice.batch_deleted=\"%count% campaigns have been deleted!\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/CampaignBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Translations/en_US/flashes.ini");
    }
}
