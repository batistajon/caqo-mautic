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

/* @bundles/LeadBundle/Tracker/DeviceTracker.php */
class __TwigTemplate_0d94c8811afc7f47b0d32b3ac819b8fb54a65792e7c85a4945d3e7c6a4c17ca3 extends Template
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

namespace Mautic\\LeadBundle\\Tracker;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory\\DeviceDetectorFactoryInterface;
use Mautic\\LeadBundle\\Tracker\\Service\\DeviceCreatorService\\DeviceCreatorServiceInterface;
use Mautic\\LeadBundle\\Tracker\\Service\\DeviceTrackingService\\DeviceTrackingServiceInterface;
use Monolog\\Logger;

class DeviceTracker
{
    /**
     * @var DeviceCreatorServiceInterface
     */
    private \$deviceCreatorService;

    /**
     * @var DeviceDetectorFactoryInterface
     */
    private \$deviceDetectorFactory;

    /**
     * @var DeviceTrackingServiceInterface
     */
    private \$deviceTrackingService;

    /**
     * @var Logger
     */
    private \$logger;

    /**
     * @var bool
     */
    private \$deviceWasChanged = false;

    /**
     * @var LeadDevice[]
     */
    private \$trackedDevice = [];

    /**
     * DeviceTracker constructor.
     */
    public function __construct(
        DeviceCreatorServiceInterface \$deviceCreatorService,
        DeviceDetectorFactoryInterface \$deviceDetectorFactory,
        DeviceTrackingServiceInterface \$deviceTrackingService,
        Logger \$logger
    ) {
        \$this->deviceCreatorService  = \$deviceCreatorService;
        \$this->deviceDetectorFactory = \$deviceDetectorFactory;
        \$this->deviceTrackingService = \$deviceTrackingService;
        \$this->logger                = \$logger;
    }

    /**
     * @param \$userAgent
     *
     * @return \\Mautic\\LeadBundle\\Entity\\LeadDevice|null
     */
    public function createDeviceFromUserAgent(Lead \$trackedContact, \$userAgent)
    {
        \$signature = \$trackedContact->getId().\$userAgent;
        if (isset(\$this->trackedDevice[\$signature])) {
            // Prevent subsequent calls within the same session from creating multiple entries
            return \$this->trackedDevice[\$signature];
        }

        \$this->trackedDevice[\$signature] = \$trackedDevice = \$this->deviceTrackingService->getTrackedDevice();

        \$deviceDetector = \$this->deviceDetectorFactory->create(\$userAgent);
        \$deviceDetector->parse();
        \$currentDevice = \$this->deviceCreatorService->getCurrentFromDetector(\$deviceDetector, \$trackedContact);

        if ( // Do not create a new device if
            // ... the device is new
            \$trackedDevice && \$trackedDevice->getId()
            && // ... the device is the same
            \$trackedDevice->getSignature() === \$currentDevice->getSignature()
            && // ... the contact given is the same as the owner of the device tracked
            \$trackedDevice->getLead()->getId() === \$trackedContact->getId()
        ) {
            return \$trackedDevice;
        }

        // New device so record it and track it
        \$this->deviceWasChanged = true;

        \$this->trackedDevice[\$signature] = \$this->deviceTrackingService->trackCurrentDevice(\$currentDevice, true);

        return \$this->trackedDevice[\$signature];
    }

    /**
     * @return \\Mautic\\LeadBundle\\Entity\\LeadDevice|null
     */
    public function getTrackedDevice()
    {
        \$trackedDevice = \$this->deviceTrackingService->getTrackedDevice();

        if (null !== \$trackedDevice) {
            \$this->logger->addDebug(\"LEAD: Tracking ID for this device is {\$trackedDevice->getTrackingId()}\");
        }

        return \$trackedDevice;
    }

    /**
     * @return bool
     */
    public function wasDeviceChanged()
    {
        return \$this->deviceWasChanged;
    }

    public function clearTrackingCookies()
    {
        \$this->deviceTrackingService->clearTrackingCookies();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/DeviceTracker.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/DeviceTracker.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tracker/DeviceTracker.php");
    }
}
