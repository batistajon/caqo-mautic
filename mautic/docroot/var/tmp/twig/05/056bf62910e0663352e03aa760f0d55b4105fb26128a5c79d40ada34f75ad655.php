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

/* @bundles/LeadBundle/Views/Import/new.html.php */
class __TwigTemplate_b5c26eb363239b837c42777974b654f9e4276771d6f6e491b0eb1805a9600130 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');

\$objectName = \$view['translator']->trans(\$objectName);

\$view['slots']->set('mauticContent', 'leadImport');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.lead.import.leads', ['%object%' => \$objectName]));

?>
<?php if (isset(\$step) && \\Mautic\\LeadBundle\\Controller\\ImportController::STEP_UPLOAD_CSV === \$step): ?>
<?php echo \$view->render('MauticLeadBundle:Import:upload_form.html.php', ['form' => \$form]); ?>
<?php else: ?>
<?php echo \$view->render('MauticLeadBundle:Import:mapping_form.html.php', ['form' => \$form]); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Import/new.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/new.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/new.html.php");
    }
}
