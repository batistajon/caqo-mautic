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

/* @bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php */
class __TwigTemplate_4e196896e86a065ab6966e86cc6bda4591a474d7615867b3004377256f51773c extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Service\\DeviceTrackingService;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Helper\\CookieHelper;
use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelperInterface;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Entity\\LeadDeviceRepository;
use Symfony\\Component\\HttpFoundation\\RequestStack;

final class DeviceTrackingService implements DeviceTrackingServiceInterface
{
    /**
     * @var CookieHelper
     */
    private \$cookieHelper;

    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var LeadDeviceRepository
     */
    private \$leadDeviceRepository;

    /**
     * @var RandomHelperInterface
     */
    private \$randomHelper;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    /**
     * @var LeadDevice
     */
    private \$trackedDevice;

    /**
     * @var CorePermissions
     */
    private \$security;

    public function __construct(
        CookieHelper \$cookieHelper,
        EntityManagerInterface \$entityManager,
        LeadDeviceRepository \$leadDeviceRepository,
        RandomHelperInterface \$randomHelper,
        RequestStack \$requestStack,
        CorePermissions \$security
    ) {
        \$this->cookieHelper         = \$cookieHelper;
        \$this->entityManager        = \$entityManager;
        \$this->randomHelper         = \$randomHelper;
        \$this->leadDeviceRepository = \$leadDeviceRepository;
        \$this->requestStack         = \$requestStack;
        \$this->security             = \$security;
    }

    /**
     * @return bool
     */
    public function isTracked()
    {
        return null !== \$this->getTrackedDevice();
    }

    /**
     * @return LeadDevice
     */
    public function getTrackedDevice()
    {
        if (!\$this->security->isAnonymous()) {
            // Do not track Mautic users
            return;
        }

        if (\$this->trackedDevice) {
            return \$this->trackedDevice;
        }

        \$trackingId = \$this->getTrackedIdentifier();
        if (null === \$trackingId) {
            return null;
        }

        return \$this->leadDeviceRepository->getByTrackingId(\$trackingId);
    }

    /**
     * @param bool \$replaceExistingTracking
     *
     * @return LeadDevice
     */
    public function trackCurrentDevice(LeadDevice \$device, \$replaceExistingTracking = false)
    {
        \$trackedDevice = \$this->getTrackedDevice();
        if (null !== \$trackedDevice && false === \$replaceExistingTracking) {
            return \$trackedDevice;
        }

        // Check for an existing device for this contact to prevent blowing up the devices table
        \$existingDevice = \$this->leadDeviceRepository->findOneBy(
            [
                'lead'        => \$device->getLead(),
                'device'      => \$device->getDevice(),
                'deviceBrand' => \$device->getDeviceBrand(),
                'deviceModel' => \$device->getDeviceModel(),
            ]
        );

        if (null !== \$existingDevice) {
            \$device = \$existingDevice;
        }

        if (null === \$device->getTrackingId()) {
            // Ensure all devices have a tracking ID (new devices will not and pre 2.13.0 devices may not)
            \$device->setTrackingId(\$this->getUniqueTrackingIdentifier());

            \$this->entityManager->persist(\$device);
            \$this->entityManager->flush();
        }

        \$this->createTrackingCookies(\$device);

        // Store the device in case a service uses this within the same session
        \$this->trackedDevice = \$device;

        return \$device;
    }

    public function clearTrackingCookies()
    {
        \$this->cookieHelper->deleteCookie('mautic_device_id');
        \$this->cookieHelper->deleteCookie('mtc_id');
        \$this->cookieHelper->deleteCookie('mtc_sid');
    }

    private function getTrackedIdentifier(): ?string
    {
        \$request = \$this->requestStack->getCurrentRequest();

        if (null === \$request) {
            return null;
        }

        if (\$this->trackedDevice) {
            // Use the device tracked in case the cookies were just created
            return \$this->trackedDevice->getTrackingId();
        }

        \$deviceTrackingId = \$this->cookieHelper->getCookie('mautic_device_id', null);
        if (null === \$deviceTrackingId) {
            \$deviceTrackingId = \$request->get('mautic_device_id', null);
        }

        return \$deviceTrackingId;
    }

    private function getUniqueTrackingIdentifier(): string
    {
        do {
            \$generatedIdentifier = \$this->randomHelper->generate(23);
            \$device              = \$this->leadDeviceRepository->getByTrackingId(\$generatedIdentifier);
        } while (null !== \$device);

        return \$generatedIdentifier;
    }

    private function createTrackingCookies(LeadDevice \$device)
    {
        // Device cookie
        \$this->cookieHelper->setCookie('mautic_device_id', \$device->getTrackingId(), 31536000);

        // Mainly for landing pages so that JS has the same access as 3rd party tracking code
        \$this->cookieHelper->setCookie('mtc_id', \$device->getLead()->getId(), null);
        \$this->cookieHelper->setCookie('mtc_sid', \$device->getTrackingId(), null);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php");
    }
}
