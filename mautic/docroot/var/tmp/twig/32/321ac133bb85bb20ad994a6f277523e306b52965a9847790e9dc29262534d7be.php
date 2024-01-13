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

/* @bundles/LeadBundle/Views/Lead/devices.html.php */
class __TwigTemplate_77d9d0281bcb4b6197efd889b599376ef5f6f18e27c4d48042b96814a53d4cca extends Template
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
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

use DeviceDetector\\Parser\\Device\\AbstractDeviceParser;
use Mautic\\CoreBundle\\Helper\\Serializer;

?>

<table class=\"table table-bordered table-striped mb-0\">
    <thead>
        <tr>
            <th class=\"timeline-icon\"></th>
            <th><?php echo \$view['translator']->trans('mautic.lead.device.header'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.lead.device_os_name.header'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.lead.device_os_version.header'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.lead.device_browser.header'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.lead.device_brand.header'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.core.date.added'); ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach (\$devices as \$device): ?>
        <tr>
            <td>
                <i class=\"fa fa-fw fa-<?php echo ('smartphone' === \$device['device']) ? 'mobile' : \$device['device']; ?>\"></i>
            </td>
            <td><?php echo \$view['translator']->transConditional('mautic.lead.device.'.\$device['device'], ucfirst(\$device['device'])); ?></td>
            <td><?php echo \$device['device_os_name']; ?></td>
            <td><?php echo \$device['device_os_version']; ?></td>
            <td>
                <?php
                \$clientInfo = Serializer::decode(\$device['client_info']);
                echo (is_array(\$clientInfo) && isset(\$clientInfo['name'])) ? \$clientInfo['name'] : '';
                ?>
            </td>
            <td>
                <?php
                // Short codes are being removed from DeviceParser but there are values stored in the DB that may still depend on it
                \$brandName = AbstractDeviceParser::getFullName(\$device['device_brand']);
                echo \$brandName ?: \$device['device_brand'];
                ?>
            </td>
            <td><?php echo \$view['date']->toText(\$device['date_added'], 'utc'); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/devices.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/devices.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/devices.html.php");
    }
}
