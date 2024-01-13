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

/* @bundles/LeadBundle/Field/BackgroundService.php */
class __TwigTemplate_79d62d271773e423d26aa52fe8a3fe78febaadcfdff6c166098329652b07d3db extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnBackgroundJobDispatcher;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Mautic\\LeadBundle\\Field\\Notification\\CustomFieldNotification;
use Mautic\\LeadBundle\\Model\\FieldModel;

class BackgroundService
{
    /**
     * @var FieldModel
     */
    private \$fieldModel;

    /**
     * @var CustomFieldColumn
     */
    private \$customFieldColumn;

    /**
     * @var LeadFieldSaver
     */
    private \$leadFieldSaver;

    /**
     * @var FieldColumnBackgroundJobDispatcher
     */
    private \$fieldColumnBackgroundJobDispatcher;

    /**
     * @var CustomFieldNotification
     */
    private \$customFieldNotification;

    public function __construct(
        FieldModel \$fieldModel,
        CustomFieldColumn \$customFieldColumn,
        LeadFieldSaver \$leadFieldSaver,
        FieldColumnBackgroundJobDispatcher \$fieldColumnBackgroundJobDispatcher,
        CustomFieldNotification \$customFieldNotification
    ) {
        \$this->fieldModel                         = \$fieldModel;
        \$this->customFieldColumn                  = \$customFieldColumn;
        \$this->leadFieldSaver                     = \$leadFieldSaver;
        \$this->fieldColumnBackgroundJobDispatcher = \$fieldColumnBackgroundJobDispatcher;
        \$this->customFieldNotification            = \$customFieldNotification;
    }

    /**
     * @throws AbortColumnCreateException
     * @throws ColumnAlreadyCreatedException
     * @throws CustomFieldLimitException
     * @throws LeadFieldWasNotFoundException
     * @throws DBALException
     * @throws DriverException
     * @throws SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function addColumn(int \$leadFieldId, int \$userId): void
    {
        \$leadField = \$this->fieldModel->getEntity(\$leadFieldId);
        if (null === \$leadField) {
            throw new LeadFieldWasNotFoundException('LeadField entity was not found');
        }

        if (!\$leadField->getColumnIsNotCreated()) {
            \$this->customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
            throw new ColumnAlreadyCreatedException('Column was already created');
        }

        try {
            \$this->fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
        } catch (NoListenerException \$e) {
        }

        try {
            \$this->customFieldColumn->processCreateLeadColumn(\$leadField, false);
        } catch (DriverException | SchemaException | \\Mautic\\CoreBundle\\Exception\\SchemaException \$e) {
            \$this->customFieldNotification->customFieldCannotBeCreated(\$leadField, \$userId);
            throw \$e;
        } catch (CustomFieldLimitException \$e) {
            \$this->customFieldNotification->customFieldLimitWasHit(\$leadField, \$userId);
            throw \$e;
        }

        \$leadField->setColumnWasCreated();
        \$this->leadFieldSaver->saveLeadFieldEntity(\$leadField, false);

        \$this->customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/BackgroundService.php";
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
        return new Source("", "@bundles/LeadBundle/Field/BackgroundService.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/BackgroundService.php");
    }
}
