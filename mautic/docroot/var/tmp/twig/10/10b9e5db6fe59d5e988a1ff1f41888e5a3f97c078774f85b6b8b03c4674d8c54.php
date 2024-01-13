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

/* @bundles/WebhookBundle/Views/Helper/labelcode.html.php */
class __TwigTemplate_845fd12a4224b45bc66655d7bdf0fb2efd37e0de277ee15a9aa2189139ae066b extends Template
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
if (\$code >= 200 && \$code < 300): ?>
    <span class=\"label label-success\">
         <?php echo \$code; ?>
    </span>
<?php elseif (\$code >= 300 && \$code < 500): ?>
    <span class=\"label label-warning\">
         <?php echo \$code; ?>
    </span>
<?php elseif (\$code >= 500): ?>
    <span class=\"label label-warning\">
         <?php echo \$code; ?>
    </span>
<?php else: ?>
    <span class=\"label label-default\">
         <?php echo \$code; ?>
    </span>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Views/Helper/labelcode.html.php";
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
        return new Source("", "@bundles/WebhookBundle/Views/Helper/labelcode.html.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Views/Helper/labelcode.html.php");
    }
}
