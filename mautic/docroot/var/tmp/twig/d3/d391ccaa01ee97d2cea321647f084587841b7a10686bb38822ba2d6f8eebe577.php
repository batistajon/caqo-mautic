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

/* @bundles/IntegrationsBundle/README.md */
class __TwigTemplate_d49cde2f44fbcf62958d1a0904d9d6073629505ab5c342e3083b8ef8d269708b extends Template
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
        echo "# Mautic Integrations

> Integrations solutions structured to mirror current Integrations and created as transition to final product.

## Install integrations bundle

Bundle is to be installed as any other common plugin even it is to be a part of Mautic in the future.

Create app/bundles/PluginBundle/Integration/UnifiedIntegrationInterface.php

```php
<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\\PluginBundle\\Integration;

/**
 * Interface UnifiedIntegrationInterface is used for type hinting.
 */
interface UnifiedIntegrationInterface
{
}
```

### Composer requirements and dependencies

### Sync command

`\$ bin/console mautic:integrations:sync Magento --first-time-sync --start-datetime=\"2019-09-12T12:00:00\"`

This is how you should use it when you configure an integration (Magento in this case) and run the sync for the first time. Specify also from what date it should look for the entities to sync. This way you can controll how big batch of records you will sync with one command. If you want to sync with multiple chunks by date ranges, `--end-datetime` option will be helpful too.

The sync command in basic use looks like this:

`\$ bin/console mautic:integrations:sync Magento`

It will sync all new records from and to Mautic for Magento. There is no need to specify the date range as Mautic is smart enough to read the start date from the records it has already synchronized. And the end date is \"now\".

`\$ bin/console mautic:integrations:sync Magento --disable-pull --mautic-object-id=contact:12 --mautic-object-id=contact:13`

There is also option to force sync of specific objects. With the `--disable-pull` flag the sync will skip the pull process. If some `--mautic-object-id` options are set it will not sync by a date range but rather only the IDs you will specify. `--disable-push` only disables the push. Pulling specific records by ID is not implemented yet.

The format of the `--mautic-object-id` values is `object type[colon]object ID`. Mautic can sync 2 object types: `contact` and `company`. The latter is not implemented yet.

The `--integration-object-id` uses the same format as `--mautic-object-id` but it's up to each integration to support it.

Similarly, you can push specific Mautic contacts to the integration you are developing like the following example. It can be useful if you want to push as a campaign/form/point action.

```php
\$mauticObjectIds = new \\Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\ObjectIdsDAO();
\$mauticObjectIds->addObjectId('contact', '12');
\$mauticObjectIds->addObjectId('contact', '13');

\$inputOptions = new Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO(
    [
        'integration'      => 'Magento',
        'disable-pull'     => true,
        'mautic-object-id' => \$mauticObjectIds,
    ]
);

/** @var \\Mautic\\IntegrationsBundle\\Sync\\SyncService\\SyncServiceInterface \$syncService **/
\$syncService->processIntegrationSync(\$inputOptions);
```

## Tests

This plugin is covered with some unit tests, functional tests, static analysis and code style check that run also in CI on every push.

### Useful commands

Always run following commands from the `plugins/IntegrationsBundle` directory.

#### `\$ composer test`

With this command you can run all the tests for this plugin. Functional tests included.

#### `\$ composer quicktest`

With this command you can run all the tests for this plugin except functional tests which makes it fast.

#### `\$ composer phpunit -- --filter x`

With this command you can filter which tests you want to run. Replace `x` with whatever test class name or method you focus on.

#### `\$ composer fixcs`

If you wan to automatically fix code styles then run this.";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/README.md";
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
        return new Source("", "@bundles/IntegrationsBundle/README.md", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/README.md");
    }
}
