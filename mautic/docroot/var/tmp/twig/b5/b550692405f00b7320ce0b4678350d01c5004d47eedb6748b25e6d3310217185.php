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

/* @bundles/ApiBundle/Views/Client/authorized.html.php */
class __TwigTemplate_72e47aaa525407d528ad89fc6be315fe0bb1a6ec2f9d646cf5a758d6335feb2a extends Template
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
?>
<table class=\"table table-striped table-hover\">
    <thead>
        <tr>
            <th style=\"width: 50px;\"></th>
            <th><?php echo \$view['translator']->trans('mautic.core.name'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (\$clients as \$k): ?>
        <tr>
            <td>
                <?php echo \$view->render('MauticCoreBundle:Helper:confirm.html.php',
                    [
                        'btnClass'      => 'btn btn-danger btn-xs',
                        'message'       => \$view['translator']->trans('mautic.api.client.form.confirmrevoke', ['%name%' => \$k->getName()]),
                        'confirmText'   => \$view['translator']->trans('mautic.api.client.form.revoke'),
                        'confirmAction' => \$view['router']->path('mautic_client_action', ['objectAction' => 'revoke', 'objectId' => \$k->getId()]),
                        'iconClass'     => 'fa fa-trash-o',
                        'btnText'       => \$view['translator']->trans('mautic.api.client.form.revoke'),
                    ]
                ); ?>
            </td>
            <td><?php echo \$k->getName(); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Views/Client/authorized.html.php";
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
        return new Source("", "@bundles/ApiBundle/Views/Client/authorized.html.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Views/Client/authorized.html.php");
    }
}
