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

/* @bundles/SmsBundle/Helper/SmsHelper.php */
class __TwigTemplate_819baa55aed7dbc8e5ffcdc66f8c46e25efc88e932285c8e4558cf0d8b39f589 extends Template
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

namespace Mautic\\SmsBundle\\Helper;

use Doctrine\\ORM\\EntityManager;
use libphonenumber\\PhoneNumberFormat;
use Mautic\\CoreBundle\\Helper\\PhoneNumberHelper;
use Mautic\\LeadBundle\\Entity\\DoNotContact as DoNotContactEntity;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\SmsBundle\\Model\\SmsModel;

class SmsHelper
{
    /**
     * @var EntityManager
     */
    protected \$em;

    /**
     * @var LeadModel
     */
    protected \$leadModel;

    /**
     * @var PhoneNumberHelper
     */
    protected \$phoneNumberHelper;

    /**
     * @var SmsModel
     */
    protected \$smsModel;

    /**
     * @var IntegrationHelper
     */
    protected \$integrationHelper;

    /**
     * @var DoNotContact
     */
    private \$doNotContact;

    public function __construct(
        EntityManager \$em,
        LeadModel \$leadModel,
        PhoneNumberHelper \$phoneNumberHelper,
        SmsModel \$smsModel,
        IntegrationHelper \$integrationHelper,
        DoNotContact \$doNotContact
    ) {
        \$this->em                   = \$em;
        \$this->leadModel            = \$leadModel;
        \$this->phoneNumberHelper    = \$phoneNumberHelper;
        \$this->smsModel             = \$smsModel;
        \$this->integrationHelper    = \$integrationHelper;
        \$this->doNotContact         = \$doNotContact;
    }

    public function unsubscribe(\$number)
    {
        \$number = \$this->phoneNumberHelper->format(\$number, PhoneNumberFormat::E164);

        /** @var LeadRepository \$repo */
        \$repo = \$this->em->getRepository('MauticLeadBundle:Lead');

        \$args = [
            'filter' => [
                'force' => [
                    [
                        'column' => 'mobile',
                        'expr'   => 'eq',
                        'value'  => \$number,
                    ],
                ],
            ],
        ];

        \$leads = \$repo->getEntities(\$args);

        if (!empty(\$leads)) {
            \$lead = array_shift(\$leads);
        } else {
            // Try to find the lead based on the given phone number
            \$args['filter']['force'][0]['column'] = 'phone';

            \$leads = \$repo->getEntities(\$args);

            if (!empty(\$leads)) {
                \$lead = array_shift(\$leads);
            } else {
                return false;
            }
        }

        return \$this->doNotContact->addDncForContact(\$lead->getId(), 'sms', DoNotContactEntity::UNSUBSCRIBED);
    }

    /**
     * @return bool
     */
    public function getDisableTrackableUrls()
    {
        \$integration = \$this->integrationHelper->getIntegrationObject('Twilio');
        \$settings    = \$integration->getIntegrationSettings()->getFeatureSettings();

        return !empty(\$settings['disable_trackable_urls']) ? true : false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Helper/SmsHelper.php";
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
        return new Source("", "@bundles/SmsBundle/Helper/SmsHelper.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Helper/SmsHelper.php");
    }
}
