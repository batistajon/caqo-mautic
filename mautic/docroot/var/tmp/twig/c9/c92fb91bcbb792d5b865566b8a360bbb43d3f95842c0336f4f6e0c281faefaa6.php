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

/* @bundles/FormBundle/EventListener/FormConditionalSubscriber.php */
class __TwigTemplate_5359e0317aa238b811567e5c0121abbaf2c6eb656128ba4c832f4d270044d577 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\FormBundle\\Event\\FormEvent;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\FormBundle\\Model\\FieldModel;
use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class FormConditionalSubscriber implements EventSubscriberInterface
{
    /**
     * @var FormModel
     */
    private \$formModel;

    /**
     * @var FieldModel
     */
    private \$fieldModel;

    public function __construct(FormModel \$formModel, FieldModel \$fieldModel)
    {
        \$this->formModel  = \$formModel;
        \$this->fieldModel = \$fieldModel;
    }

    /**
     * @return array<string,mixed[]>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_POST_SAVE => ['onFormPostSave', 0],
        ];
    }

    /**
     * Replace session field Id with field Id after save entity.
     */
    public function onFormPostSave(FormEvent \$event): void
    {
        \$form = \$event->getForm();

        // Process temporary field ID to real field ID
        \$actualFieldIds = [];
        foreach (\$form->getFields() as \$field) {
            \$actualFieldIds[] = \$field->getId();
            if (false !== strpos((string) \$field->getParent(), 'new')) {
                foreach (\$form->getFields() as \$parentField) {
                    if (\$field->getParent() === \$parentField->getSessionId()) {
                        \$field->setParent((string) \$parentField->getId());
                        \$this->fieldModel->saveEntity(\$field);
                    }
                }
            }
        }

        // Delete child fields
        \$deleteIds = [];
        foreach (\$form->getFields() as \$field) {
            if (\$field->getParent() && !in_array(\$field->getParent(), \$actualFieldIds)) {
                \$deleteIds[] = \$field->getId();
            }
        }

        if (!empty(\$deleteIds)) {
            \$this->formModel->deleteFields(\$form, \$deleteIds);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/EventListener/FormConditionalSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/FormConditionalSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/EventListener/FormConditionalSubscriber.php");
    }
}
