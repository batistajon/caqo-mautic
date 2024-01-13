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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/SendGridWrapper.php */
class __TwigTemplate_65c91ef7a315300c68c502941e3ecc0b358fb4322e96b0aabd81fc85145b9f2e extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid;

use SendGrid\\Mail;
use SendGrid\\Response;

/**
 * Class SendGridWrapper
 * We need to wrap \\SendGrid class because of magic methods and testing.
 */
class SendGridWrapper
{
    /**
     * @var \\SendGrid
     */
    private \$sendGrid;

    public function __construct(\\SendGrid \$sendGrid)
    {
        \$this->sendGrid = \$sendGrid;
    }

    /**
     * @return Response
     */
    public function send(Mail \$mail)
    {
        return \$this->sendGrid->client->mail()->send()->post(\$mail);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridWrapper.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/SendGridWrapper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/SendGridWrapper.php");
    }
}
