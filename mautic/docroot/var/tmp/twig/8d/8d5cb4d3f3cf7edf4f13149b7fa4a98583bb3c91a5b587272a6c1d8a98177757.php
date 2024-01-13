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

/* @bundles/EmailBundle/Helper/PointEventHelper.php */
class __TwigTemplate_92279131ee3f617b822a15a0c0c32b9b4fbf3a50fb04bf76dfb9a4d215405956 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\LeadBundle\\Entity\\Lead;

/**
 * Class PointEventHelper.
 */
class PointEventHelper
{
    /**
     * @param \$eventDetails
     * @param \$action
     *
     * @return int
     */
    public static function validateEmail(\$eventDetails, \$action)
    {
        if (null === \$eventDetails) {
            return false;
        }

        \$emailId = \$eventDetails->getId();

        if (isset(\$action['properties']['emails'])) {
            \$limitToEmails = \$action['properties']['emails'];
        }

        if (!empty(\$limitToEmails) && !in_array(\$emailId, \$limitToEmails)) {
            //no points change
            return false;
        }

        return true;
    }

    /**
     * @param \$event
     *
     * @return bool
     */
    public static function sendEmail(\$event, Lead \$lead, MauticFactory \$factory)
    {
        \$properties = \$event['properties'];
        \$emailId    = (int) \$properties['email'];

        /** @var \\Mautic\\EmailBundle\\Model\\EmailModel \$model */
        \$model = \$factory->getModel('email');
        \$email = \$model->getEntity(\$emailId);

        //make sure the email still exists and is published
        if (null != \$email && \$email->isPublished()) {
            \$leadFields = \$lead->getFields();
            if (isset(\$leadFields['core']['email']['value']) && \$leadFields['core']['email']['value']) {
                /** @var \\Mautic\\LeadBundle\\Model\\LeadModel \$leadModel */
                \$leadCredentials       = \$lead->getProfileFields();
                \$leadCredentials['id'] = \$lead->getId();

                \$options   = ['source' => ['trigger', \$event['id']]];
                \$emailSent = \$model->sendEmail(\$email, \$leadCredentials, \$options);

                return is_array(\$emailSent) ? false : true;
            }
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Helper/PointEventHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/PointEventHelper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Helper/PointEventHelper.php");
    }
}
