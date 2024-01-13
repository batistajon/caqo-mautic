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

/* @bundles/InstallBundle/Translations/en_US/fixtures.ini */
class __TwigTemplate_026c190f1aec3f50197cbd45108d2303495dc64d854e8771c890e16ccc8f6d71 extends Template
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
        echo "mautic.lead.field.attribution=\"Attribution\"
mautic.lead.field.attribution_date=\"Attribution Date\"
mautic.lead.field.last_active=\"Date Last Active\"
mautic.lead.field.firstname=\"First Name\"
mautic.lead.field.lastname=\"Last Name\"
mautic.lead.field.company=\"Primary company\"
mautic.lead.field.email=\"Email\"
mautic.lead.field.position=\"Position\"
mautic.lead.field.points=\"Points\"
mautic.lead.field.title=\"Title\"
mautic.lead.field.phone=\"Phone\"
mautic.lead.field.mobile=\"Mobile\"
mautic.lead.field.fax=\"Fax\"
mautic.lead.field.address1=\"Address Line 1\"
mautic.lead.field.address2=\"Address Line 2\"
mautic.lead.field.website=\"Website\"
mautic.lead.field.twitter=\"Twitter\"
mautic.lead.field.foursquare=\"Foursquare\"
mautic.lead.field.facebook=\"Facebook\"
mautic.lead.field.instagram=\"Instagram\"
mautic.lead.field.linkedin=\"LinkedIn\"
mautic.lead.field.skype=\"Skype\"
mautic.lead.field.city=\"City\"
mautic.lead.field.state=\"State\"
mautic.lead.field.zipcode=\"Zip Code\"
mautic.lead.field.country=\"Country\"
mautic.lead.field.gender=\"Gender\"
mautic.lead.field.preferred_locale=\"Preferred Locale\"
mautic.lead.field.timezone=\"Preferred Timezone\"
mautic.user.role.admin.name=\"Administrator\"
mautic.user.role.admin.description=\"Full system access\"
mautic.lead.field.companyemail=\"Company Email\"
mautic.lead.field.companyname=\"Company Name\"
mautic.lead.field.companyaddress1=\"Address 1\"
mautic.lead.field.companyaddress2=\"Address 2\"
mautic.lead.field.companycity=\"City\"
mautic.lead.field.companystate=\"State\"
mautic.lead.field.companycountry=\"Country\"
mautic.lead.field.companyzipcode=\"Zip Code\"
mautic.lead.field.companyindustry=\"Industry\"
mautic.lead.field.companyphone=\"Phone\"
mautic.lead.field.companydescription=\"Description\"
mautic.lead.field.companywebsite=\"Website\"
mautic.lead.field.companynumber_of_employees=\"Number of Employees\"
mautic.lead.field.companyfax=\"Fax\"
mautic.lead.field.companyannual_revenue=\"Annual Revenue\"
mautic.lead.field.timezone=\"Preferred Timezone\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Translations/en_US/fixtures.ini";
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
        return new Source("", "@bundles/InstallBundle/Translations/en_US/fixtures.ini", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Translations/en_US/fixtures.ini");
    }
}
