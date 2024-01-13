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

/* @bundles/PageBundle/Model/Tracking404Model.php */
class __TwigTemplate_bec35b7e10d817f8b83675094a82b5ae3af2da96e552cc741fc6619556fc8139 extends Template
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

namespace Mautic\\PageBundle\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Entity\\Redirect;
use Symfony\\Component\\HttpFoundation\\Request;

class Tracking404Model
{
    /**
     * @var ContactTracker
     */
    private \$contactTracker;

    /**
     * @var PageModel
     */
    private \$pageModel;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * Tracking404Model constructor.
     */
    public function __construct(
        CoreParametersHelper \$coreParametersHelper,
        ContactTracker \$contactTracker,
        PageModel \$pageModel
    ) {
        \$this->coreParametersHelper = \$coreParametersHelper;
        \$this->contactTracker       = \$contactTracker;
        \$this->pageModel            = \$pageModel;
    }

    /**
     * @param Page|Redirect \$entity
     *
     * @throws \\Exception
     */
    public function hitPage(\$entity, Request \$request): void
    {
        \$this->pageModel->hitPage(\$entity, \$request, 404);
    }

    /**
     * @return bool
     */
    public function isTrackable()
    {
        if (!\$this->coreParametersHelper->get('do_not_track_404_anonymous')) {
            return true;
        }
        // already tracked and identified contact
        if (\$lead = \$this->contactTracker->getContactByTrackedDevice()) {
            if (!\$lead->isAnonymous()) {
                return true;
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
        return "@bundles/PageBundle/Model/Tracking404Model.php";
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
        return new Source("", "@bundles/PageBundle/Model/Tracking404Model.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Model/Tracking404Model.php");
    }
}
