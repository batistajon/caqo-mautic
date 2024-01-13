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

/* @bundles/FormBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_dae292271def8fe6065a54345b4a3597cd34ca13e3284638f33c095c7e0ff1a9 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\Form\\Type\\CampaignEventFormFieldValueType;
use Mautic\\FormBundle\\Form\\Type\\CampaignEventFormSubmitType;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Mautic\\FormBundle\\Model\\FormModel;
use Mautic\\FormBundle\\Model\\SubmissionModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    /**
     * @var FormModel
     */
    private \$formModel;

    /**
     * @var SubmissionModel
     */
    private \$formSubmissionModel;

    /**
     * @var RealTimeExecutioner
     */
    private \$realTimeExecutioner;

    /**
     * @var FormFieldHelper
     */
    private \$formFieldHelper;

    public function __construct(FormModel \$formModel, SubmissionModel \$formSubmissionModel, RealTimeExecutioner \$realTimeExecutioner, FormFieldHelper \$formFieldHelper)
    {
        \$this->formModel           = \$formModel;
        \$this->formSubmissionModel = \$formSubmissionModel;
        \$this->realTimeExecutioner = \$realTimeExecutioner;
        \$this->formFieldHelper     = \$formFieldHelper;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD         => ['onCampaignBuild', 0],
            FormEvents::FORM_ON_SUBMIT                => ['onFormSubmit', 0],
            FormEvents::ON_CAMPAIGN_TRIGGER_DECISION  => ['onCampaignTriggerDecision', 0],
            FormEvents::ON_CAMPAIGN_TRIGGER_CONDITION => ['onCampaignTriggerCondition', 0],
        ];
    }

    /**
     * Add the option to the list.
     */
    public function onCampaignBuild(CampaignBuilderEvent \$event)
    {
        \$trigger = [
            'label'       => 'mautic.form.campaign.event.submit',
            'description' => 'mautic.form.campaign.event.submit_descr',
            'formType'    => CampaignEventFormSubmitType::class,
            'eventName'   => FormEvents::ON_CAMPAIGN_TRIGGER_DECISION,
        ];
        \$event->addDecision('form.submit', \$trigger);

        \$trigger = [
            'label'       => 'mautic.form.campaign.event.field_value',
            'description' => 'mautic.form.campaign.event.field_value_descr',
            'formType'    => CampaignEventFormFieldValueType::class,
            'formTheme'   => 'MauticFormBundle:FormTheme\\FieldValueCondition',
            'eventName'   => FormEvents::ON_CAMPAIGN_TRIGGER_CONDITION,
        ];
        \$event->addCondition('form.field_value', \$trigger);
    }

    /**
     * Trigger campaign event for when a form is submitted.
     */
    public function onFormSubmit(SubmissionEvent \$event)
    {
        \$form = \$event->getSubmission()->getForm();
        \$this->realTimeExecutioner->execute('form.submit', \$form, 'form', \$form->getId());
    }

    public function onCampaignTriggerDecision(CampaignExecutionEvent \$event)
    {
        \$eventDetails = \$event->getEventDetails();

        if (null === \$eventDetails) {
            return \$event->setResult(true);
        }

        \$limitToForms = \$event->getConfig()['forms'];

        //check against selected forms
        if (!empty(\$limitToForms) && !in_array(\$eventDetails->getId(), \$limitToForms)) {
            return \$event->setResult(false);
        }

        return \$event->setResult(true);
    }

    public function onCampaignTriggerCondition(CampaignExecutionEvent \$event)
    {
        \$lead = \$event->getLead();

        if (!\$lead || !\$lead->getId()) {
            return \$event->setResult(false);
        }

        \$operators = \$this->formModel->getFilterExpressionFunctions();
        \$form      = \$this->formModel->getRepository()->findOneById(\$event->getConfig()['form']);

        if (!\$form || !\$form->getId()) {
            return \$event->setResult(false);
        }

        \$field = \$this->formModel->findFormFieldByAlias(\$form, \$event->getConfig()['field']);

        \$filter = \$this->formFieldHelper->getFieldFilter(\$field->getType());
        \$value  = InputHelper::_(\$event->getConfig()['value'], \$filter);

        \$result = \$this->formSubmissionModel->getRepository()->compareValue(
            \$lead->getId(),
            \$form->getId(),
            \$form->getAlias(),
            \$event->getConfig()['field'],
            \$value,
            \$operators[\$event->getConfig()['operator']]['expr'],
            \$field ? \$field->getType() : null
        );

        \$event->setChannel('form', \$form->getId());

        return \$event->setResult(\$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/CampaignSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/EventListener/CampaignSubscriber.php");
    }
}
