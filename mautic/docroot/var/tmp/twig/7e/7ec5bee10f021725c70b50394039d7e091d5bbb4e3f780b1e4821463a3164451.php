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

/* @bundles/WebhookBundle/Views/Webhook/index.html.php */
class __TwigTemplate_1f2d9bf75f681c2acfdb69f3a6939d4f5aa75b791c3233d0a2210adbfcfc317c extends Template
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
\$view['slots']->set('mauticContent', 'mauticWebhook');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.webhook.webhooks'));

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => \$permissions['webhook:webhooks:create'],
            ],
            'routeBase' => 'webhook',
        ]
    )
);
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue' => \$searchValue,
            'searchHelp'  => 'mautic.page.help.searchcommands',
            'action'      => \$currentRoute,
        ]
    ); ?>
    <div class=\"page-list\">
        <?php \$view['slots']->output('_content'); ?>
    </div>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Views/Webhook/index.html.php";
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
        return new Source("", "@bundles/WebhookBundle/Views/Webhook/index.html.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Views/Webhook/index.html.php");
    }
}
