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

/* @bundles/LeadBundle/Views/SubscribedEvents/Timeline/donotcontact.html.php */
class __TwigTemplate_783a147ee1ee055fcee5ecb97c30e442c94c0e7d242680f1d47f3040af0cf3c8 extends Template
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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
\$dnc = \$event['extra']['dnc'];
?>

<p><strong><?php echo \$dnc['reason']; ?></strong></p>
<?php if (!empty(\$dnc['comments'])): ?>
<p class=\"small\"><?php echo \$dnc['comments']; ?></p>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/SubscribedEvents/Timeline/donotcontact.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/SubscribedEvents/Timeline/donotcontact.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/SubscribedEvents/Timeline/donotcontact.html.php");
    }
}
