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

/* @bundles/UserBundle/Views/FormTheme/Config/_config_userconfig_widget.html.php */
class __TwigTemplate_340f0278f1e80f81399fd4e5af7d0e4585315312e59b82810196d68d78c3efda extends Template
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
\$fields    = \$form->children;
\$fieldKeys = array_keys(\$fields);
?>

<?php if (count(array_intersect(\$fieldKeys, ['saml_idp_metadata', 'saml_idp_own_certificate', 'saml_idp_own_private_key', 'saml_idp_own_password']))): ?>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.user.config.header.saml'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"alert alert-info\"><?php echo \$view['translator']->trans('mautic.user.config.form.saml.idp_entity_id', ['%entityId%' => \$entityId]); ?></div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_metadata'], ['fieldValue' => \$formConfig['parameters']['saml_idp_metadata']]); ?>
            </div>
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_default_role']); ?>
            </div>
        </div>
        <hr />
        <div class=\"alert alert-info\"><?php echo \$view['translator']->trans('mautic.user.config.form.saml.idp_attributes'); ?></div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_email_attribute']); ?>
            </div>
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_username_attribute']); ?>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_firstname_attribute']); ?>
            </div>
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_lastname_attribute']); ?>
            </div>
        </div>
        <hr />
        <div class=\"alert alert-info\"><?php echo \$view['translator']->trans('mautic.user.config.form.saml.idp.own_certificate.description'); ?></div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_own_certificate'], ['fieldValue' => \$formConfig['parameters']['saml_idp_own_certificate']]); ?>
            </div>
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_own_private_key'], ['fieldValue' => \$formConfig['parameters']['saml_idp_own_private_key']]); ?>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$fields['saml_idp_own_password']); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/FormTheme/Config/_config_userconfig_widget.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/FormTheme/Config/_config_userconfig_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/FormTheme/Config/_config_userconfig_widget.html.php");
    }
}
