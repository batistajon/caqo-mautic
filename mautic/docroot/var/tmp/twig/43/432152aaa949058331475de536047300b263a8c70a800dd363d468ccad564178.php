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

/* @bundles/PageBundle/Helper/TrackingHelper.php */
class __TwigTemplate_b614b0dfc0fddd56bdcf82d99be79a12517c3ee25bb32f1cf5febcaf96e46755 extends Template
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

namespace Mautic\\PageBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

/**
 * Class TrackinHelper.
 */
class TrackingHelper
{
    /**
     * @var Session
     */
    protected \$session;

    /**
     * @var CoreParametersHelper
     */
    protected \$coreParametersHelper;

    /**
     * @var RequestStack
     */
    protected \$requestStack;

    /**
     * @var ContactTracker
     */
    protected \$contactTracker;

    /**
     * BuildJsSubscriber constructor.
     */
    public function __construct(
        Session \$session,
        CoreParametersHelper \$coreParametersHelper,
        RequestStack \$requestStack,
        ContactTracker \$contactTracker
    ) {
        \$this->session              = \$session;
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->requestStack         = \$requestStack;
        \$this->contactTracker       = \$contactTracker;
    }

    public function getEnabledServices()
    {
        \$keys = [
            'google_analytics' => 'Google Analytics',
            'facebook_pixel'   => 'Facebook Pixel',
        ];
        \$result = [];
        foreach (\$keys as \$key => \$service) {
            if ((\$id = \$this->coreParametersHelper->get(\$key.'_id'))) {
                \$result[\$service] = \$key;
            }
        }

        return \$result;
    }

    public function getSessionName()
    {
        \$lead = \$this->contactTracker->getContact();
        if (\$lead instanceof Lead) {
            return 'mtc-tracking-pixel-events-'.\$lead->getId();
        }
    }

    /**
     * @param array \$values
     *
     * @return array
     */
    public function updateSession(\$values)
    {
        \$sessionName = \$this->getSessionName();
        \$this->session->set(\$sessionName, serialize(array_merge(\$values, \$this->getSession())));

        return (array) \$values;
    }

    /**
     * @return array
     */
    public function getSession(\$remove = false)
    {
        \$sessionName = \$this->getSessionName();
        \$sesionValue = Serializer::decode(\$this->session->get(\$sessionName));
        if (\$remove) {
            \$this->session->remove(\$sessionName);
        }

        return (array) \$sesionValue;
    }

    /**
     * @param \$service
     *
     * @return bool|mixed
     */
    public function displayInitCode(\$service)
    {
        \$pixelId = \$this->coreParametersHelper->get(\$service.'_id');

        if (\$pixelId && \$this->coreParametersHelper->get(\$service.'_landingpage_enabled') && \$this->isLandingPage()) {
            return \$pixelId;
        }
        if (\$pixelId && \$this->coreParametersHelper->get(\$service.'_trackingpage_enabled') && !\$this->isLandingPage()) {
            return \$pixelId;
        }

        return false;
    }

    /**
     * @return array|Lead|null
     */
    public function getLead()
    {
        return \$this->contactTracker->getContact();
    }

    public function getAnonymizeIp()
    {
        return \$this->coreParametersHelper->get('google_analytics_anonymize_ip');
    }

    /**
     * @return bool
     */
    protected function isLandingPage()
    {
        \$server = \$this->requestStack->getCurrentRequest()->server;
        if (false === strpos((string) \$server->get('HTTP_REFERER'), \$this->coreParametersHelper->get('site_url'))) {
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Helper/TrackingHelper.php";
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
        return new Source("", "@bundles/PageBundle/Helper/TrackingHelper.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Helper/TrackingHelper.php");
    }
}
