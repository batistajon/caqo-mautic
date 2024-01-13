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

/* @bundles/LeadBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_e78ee5e4f6efa001e9f210d668107ae8f6c33a1906f356417f793197a4b40ac5 extends Template
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
        echo "mautic.company.notice.batch_deleted=\"{0} 0 companies deleted|{1} 1 company deleted|]1,Inf[ %count% company deleted\"
mautic.company.error.notfound=\"Company not found.\"
mautic.lead.batch_leads_affected=\"{0} 0 contacts affected|{1} 1 contact affected|]1,Inf[ %count% contacts affected\"
mautic.lead.email.error.failed=\"Failed to send to %email%: %error%\"
mautic.lead.email.notice.sent=\"&quot;%subject%&quot; sent to %email%\"
mautic.lead.field.error.notfound=\"No field with an id of %id% was found!\"
mautic.lead.field.notice.batch_deleted=\"%count% fields have been deleted!\"
mautic.lead.lead.error.notfound=\"No contact with an id of %id% was found!\"
mautic.lead.lead.notice.addedtolists=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_contact_index'><strong>%name% (%id%)</strong></a> has been added to %list%.\"
mautic.lead.lead.notice.batch_deleted=\"%count% contacts have been deleted!\"
mautic.lead.lead.notice.removedfromlists=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_contact_index'><strong>%name% (%id%)</strong></a> has been removed from %list%.\"
mautic.lead.list.error.notfound=\"No list with an id of %id% was found!\"
mautic.lead.list.error.cannot.delete=\"Segment cannot be deleted, it is required by %segments%.\"
mautic.lead.list.error.cannot.delete.batch=\"%segments% cannot be deleted, it is required by other segments.\"
mautic.lead.list.notice.batch_deleted=\"%count% lists have been deleted!\"
mautic.lead.list.frequency.rules.msg=\"No \"
mautic.lead.batch.import.created=\"Import process was successfully created. You will be notified when finished.\"
mautic.import.file.missing=\"File '%file%' cannot be found in the filesystem. Please try again.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/LeadBundle/Translations/en_US/flashes.ini", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Translations/en_US/flashes.ini");
    }
}
