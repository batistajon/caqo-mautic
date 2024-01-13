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

/* @bundles/FormBundle/Views/SubscribedEvents/Timeline/index.html.php */
class __TwigTemplate_0ed25a51b34b17bcafa379e76a80c9cbfd37e2b83737897a4ec372652b4602e5 extends Template
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
\$form       = \$event['extra']['form'];
\$page       = \$event['extra']['page'];
\$submission = \$event['extra']['submission'];
\$results    = \$submission->getResults();

?>

<?php if (isset(\$event['extra'])) : ?>
<dl class=\"dl-horizontal\">
<?php if (isset(\$link)) : ?>
\t<dt><?php echo \$view['translator']->trans('mautic.core.source'); ?></dt>
\t<dd><?php echo \$link; ?></dd>
<?php endif; ?>
<?php if (\$form->getDescription()) : ?>
\t<dt><?php echo \$view['translator']->trans('mautic.core.description'); ?></dt>
\t<dd><?php echo \$form->getDescription(); ?></dd>
    <?php if (isset(\$event['extra'])) : ?>
        <?php if (\$descr = \$form->getDescription()): ?>
        <p><?php echo \$descr; ?></p>
    <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
\t<dt><?php echo \$view['translator']->trans('mautic.form.result.thead.referrer'); ?></dt>
\t<dd><?php echo \$view['assets']->makeLinks(\$submission->getReferer()); ?></dd>
<?php if (is_array(\$results)) : ?>
\t<?php foreach (\$form->getFields() as \$field) : ?>
\t\t<?php if (array_key_exists(\$field->getAlias(), \$results) && '' != \$results[\$field->getAlias()]
&& null != \$results[\$field->getAlias()]
&& [] != \$results[\$field->getAlias()]
) : ?>
\t\t\t<dt><?php echo \$field->getLabel(); ?></dt>
\t\t\t<dd>
                <?php if (\$field->isFileType()) : ?>
                <a href=\"<?php echo \$view['router']->path('mautic_form_file_download', ['submissionId' => \$submission->getId(), 'field' => \$field->getAlias()]); ?>\">
                    <?php echo \$results[\$field->getAlias()]; ?>
                </a>
                <?php else : ?>
                    <?php echo \$results[\$field->getAlias()]; ?>
                <?php endif; ?>
            </dd>
\t\t<?php endif; ?>
\t<?php endforeach; ?>
<?php endif; ?>
</dl>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/SubscribedEvents/Timeline/index.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/SubscribedEvents/Timeline/index.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/SubscribedEvents/Timeline/index.html.php");
    }
}
