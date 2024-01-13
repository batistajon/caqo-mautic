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

/* @bundles/LeadBundle/Assets/WebhookPayload/lead_channel_subscription_changed.json */
class __TwigTemplate_d3d9bac61327664325932f2ff7a5d8b0a14cd8fe0091305b317db6caf4cde98a extends Template
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
        echo "[{\"contact\":{\"id\":38186,\"points\":0,\"color\":null,\"fields\":{\"core\":{\"points\":{\"id\":\"9\",\"label\":\"Points\",\"alias\":\"points\",\"type\":\"number\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"0\"},\"title\":{\"id\":\"1\",\"label\":\"Title\",\"alias\":\"title\",\"type\":\"lookup\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"firstname\":{\"id\":\"2\",\"label\":\"First Name\",\"alias\":\"firstname\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Test\"},\"lastname\":{\"id\":\"3\",\"label\":\"Last Name\",\"alias\":\"lastname\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Contact\"},\"company\":{\"id\":\"4\",\"label\":\"Company\",\"alias\":\"company\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"position\":{\"id\":\"5\",\"label\":\"Position\",\"alias\":\"position\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"email\":{\"id\":\"6\",\"label\":\"Email\",\"alias\":\"email\",\"type\":\"email\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Test@email.com\"},\"phone\":{\"id\":\"8\",\"label\":\"Phone\",\"alias\":\"phone\",\"type\":\"tel\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"mobile\":{\"id\":\"7\",\"label\":\"Mobile\",\"alias\":\"mobile\",\"type\":\"tel\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"address1\":{\"id\":\"11\",\"label\":\"Address Line 1\",\"alias\":\"address1\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"address2\":{\"id\":\"12\",\"label\":\"Address Line 2\",\"alias\":\"address2\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"city\":{\"id\":\"13\",\"label\":\"City\",\"alias\":\"city\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"state\":{\"id\":\"14\",\"label\":\"State\",\"alias\":\"state\",\"type\":\"region\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"zipcode\":{\"id\":\"15\",\"label\":\"Zip Code\",\"alias\":\"zipcode\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"country\":{\"id\":\"16\",\"label\":\"Country\",\"alias\":\"country\",\"type\":\"country\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"\"},\"fax\":{\"id\":\"10\",\"label\":\"Fax\",\"alias\":\"fax\",\"type\":\"tel\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"preferred_locale\":{\"id\":\"17\",\"label\":\"Preferred Locale\",\"alias\":\"preferred_locale\",\"type\":\"locale\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"attribution_date\":{\"id\":\"18\",\"label\":\"Attribution Date\",\"alias\":\"attribution_date\",\"type\":\"datetime\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"attribution\":{\"id\":\"19\",\"label\":\"Attribution\",\"alias\":\"attribution\",\"type\":\"number\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"website\":{\"id\":\"20\",\"label\":\"Website\",\"alias\":\"website\",\"type\":\"url\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"boolean\":{\"id\":\"43\",\"label\":\"Boolean\",\"alias\":\"boolean\",\"type\":\"boolean\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"multiple_contact\":{\"id\":\"44\",\"label\":\"Multiple Contact\",\"alias\":\"multiple_contact\",\"type\":\"multiselect\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null}},\"social\":{\"facebook\":{\"id\":\"21\",\"label\":\"Facebook\",\"alias\":\"facebook\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"foursquare\":{\"id\":\"22\",\"label\":\"Foursquare\",\"alias\":\"foursquare\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"instagram\":{\"id\":\"24\",\"label\":\"Instagram\",\"alias\":\"instagram\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"linkedin\":{\"id\":\"25\",\"label\":\"LinkedIn\",\"alias\":\"linkedin\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"skype\":{\"id\":\"26\",\"label\":\"Skype\",\"alias\":\"skype\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"twitter\":{\"id\":\"27\",\"label\":\"Twitter\",\"alias\":\"twitter\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null}},\"personal\":[],\"professional\":[]}},\"channel\":\"email\",\"old_status\":\"contactable\",\"new_status\":\"manual\",\"timestamp\":\"2017-12-01T00:05:18-06:00\"}]
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Assets/WebhookPayload/lead_channel_subscription_changed.json";
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
        return new Source("", "@bundles/LeadBundle/Assets/WebhookPayload/lead_channel_subscription_changed.json", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Assets/WebhookPayload/lead_channel_subscription_changed.json");
    }
}