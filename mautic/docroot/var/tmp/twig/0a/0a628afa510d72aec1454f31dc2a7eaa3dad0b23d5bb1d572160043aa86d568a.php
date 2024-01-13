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

/* @bundles/LeadBundle/Views/SubscribedEvents/Timeline/ipadded.html.php */
class __TwigTemplate_39f104b97eb10a00d5087fe37847eee58ce0d6dc3b3dd67f9d63c495bcaef6cd extends Template
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
\$ip = \$event['extra']['ipDetails'];

if (!is_object(\$ip)) {
    // Somehow the IP entity wasn't found

    return;
}

\$details = \$ip->getIpDetails();
?>

<?php if (!empty(\$details['organization'])): ?>
    <i class=\"fa fa-building\"> <?php echo \$details['organization']; ?></i><br />
<?php endif; ?>

<?php
\$locations = [];
if (!empty(\$details['city'])):
    \$locations[] = \$details['city'];
endif;
if (!empty(\$details['region'])):
    \$locations[] = \$details['region'];
endif;
if (!empty(\$details['country'])):
    \$locations[] = \$details['country'];
endif;
\$location = implode(', ', \$locations);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/SubscribedEvents/Timeline/ipadded.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/SubscribedEvents/Timeline/ipadded.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/SubscribedEvents/Timeline/ipadded.html.php");
    }
}
