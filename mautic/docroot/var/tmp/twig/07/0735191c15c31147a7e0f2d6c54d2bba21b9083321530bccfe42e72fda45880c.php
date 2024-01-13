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

/* @bundles/CoreBundle/Views/Helper/details.html.php */
class __TwigTemplate_7571bcf5232c7ee04f5722d613244842f7111bf9129884d72bf6129b55a77292 extends Template
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
<?php echo \$view['content']->getCustomContent('details.top', \$mauticTemplateVars); ?>
<?php if (method_exists(\$entity, 'getCategory')): ?>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.core.category'); ?></span></td>
    <td><?php echo is_object(\$entity->getCategory()) ? \$entity->getCategory()->getTitle() : \$view['translator']->trans('mautic.core.form.uncategorized'); ?></td>
</tr>
<?php endif; ?>

<?php if (method_exists(\$entity, 'getCreatedByUser')): ?>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.core.createdby'); ?></span></td>
    <td><?php echo \$entity->getCreatedByUser(); ?></td>
</tr>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.core.created'); ?></span></td>
    <td><?php echo \$view['date']->toFull(\$entity->getDateAdded()); ?></td>
</tr>
<?php endif; ?>
<?php
if (method_exists(\$entity, 'getModifiedByUser')):
\$modified = \$entity->getModifiedByUser();
if (\$modified):
    ?>
    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.core.modifiedby'); ?></span></td>
        <td><?php echo \$entity->getModifiedByUser(); ?></td>
    </tr>
    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.core.modified'); ?></span></td>
        <td><?php echo \$view['date']->toFull(\$entity->getDateModified()); ?></td>
    </tr>
<?php endif; ?>
<?php endif; ?>
<?php if (method_exists(\$entity, 'getPublishUp')): ?>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.page.publish.up'); ?></span></td>
    <td><?php echo (!is_null(\$entity->getPublishUp())) ? \$view['date']->toFull(\$entity->getPublishUp()) : \$view['date']->toFull(\$entity->getDateAdded()); ?></td>
</tr>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.page.publish.down'); ?></span></td>
    <td><?php echo (!is_null(\$entity->getPublishDown())) ? \$view['date']->toFull(\$entity->getPublishDown()) : \$view['translator']->trans('mautic.core.never'); ?></td>
</tr>
<?php endif; ?>
<?php if (method_exists(\$entity, 'getId')): ?>
    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\"><?php echo \$view['translator']->trans('mautic.core.id'); ?></span></td>
        <td><?php echo \$entity->getId(); ?></td>
    </tr>
<?php endif; ?>
<?php echo \$view['content']->getCustomContent('details.bottom', \$mauticTemplateVars); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/details.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/details.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/details.html.php");
    }
}
