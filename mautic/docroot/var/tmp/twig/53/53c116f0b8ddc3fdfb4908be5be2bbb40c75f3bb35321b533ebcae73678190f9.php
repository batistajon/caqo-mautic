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

/* @bundles/LeadBundle/Templating/Helper/DncReasonHelper.php */
class __TwigTemplate_315ce66b740a823e6f4b47207180e85ccd5777cd482700f283d6f4b42c85f4c1 extends Template
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

namespace Mautic\\LeadBundle\\Templating\\Helper;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Symfony\\Component\\Templating\\Helper\\Helper;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Convert DNC reason ID to text.
 */
class DncReasonHelper extends Helper
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * Convert DNC reason ID to text.
     *
     * @param int \$reasonId
     *
     * @return string
     *
     * @throws UnknownDncReasonException
     */
    public function toText(\$reasonId)
    {
        switch (\$reasonId) {
            case DoNotContact::IS_CONTACTABLE:
                \$reasonKey = 'mautic.lead.event.donotcontact_contactable';
                break;
            case DoNotContact::UNSUBSCRIBED:
                \$reasonKey = 'mautic.lead.event.donotcontact_unsubscribed';
                break;
            case DoNotContact::BOUNCED:
                \$reasonKey = 'mautic.lead.event.donotcontact_bounced';
                break;
            case DoNotContact::MANUAL:
                \$reasonKey = 'mautic.lead.event.donotcontact_manual';
                break;
            default:
                throw new UnknownDncReasonException(sprintf(\"Unknown DNC reason ID '%c'\", \$reasonId));
        }

        return \$this->translator->trans(\$reasonKey);
    }

    /**
     * Returns the canonical name of this helper.
     *
     * @return string The canonical name
     */
    public function getName()
    {
        return 'lead_dnc_reason';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Templating/Helper/DncReasonHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Templating/Helper/DncReasonHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Templating/Helper/DncReasonHelper.php");
    }
}
