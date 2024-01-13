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

/* @bundles/FormBundle/EventListener/FormValidationSubscriber.php */
class __TwigTemplate_9cb7dc5a6d5ec80daf7b1c5cf3232b62f70048229e04bab213092b88f873f0f8 extends Template
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

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumberUtil;
use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\FormBundle\\Event as Events;
use Mautic\\FormBundle\\Form\\Type\\FormFieldEmailType;
use Mautic\\FormBundle\\Form\\Type\\FormFieldTelType;
use Mautic\\FormBundle\\FormEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FormValidationSubscriber implements EventSubscriberInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(TranslatorInterface \$translator, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->translator           = \$translator;
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::FORM_ON_BUILD    => ['onFormBuilder', 0],
            FormEvents::ON_FORM_VALIDATE => ['onFormValidate', 0],
        ];
    }

    /**
     * Add a simple email form.
     */
    public function onFormBuilder(Events\\FormBuilderEvent \$event)
    {
        \$event->addValidator(
            'phone.validation',
            [
                'eventName' => FormEvents::ON_FORM_VALIDATE,
                'fieldType' => 'tel',
                'formType'  => FormFieldTelType::class,
            ]
        );

        if (!empty(\$this->coreParametersHelper->get('do_not_submit_emails'))) {
            \$event->addValidator(
                'email.validation',
                [
                    'eventName' => FormEvents::ON_FORM_VALIDATE,
                    'fieldType' => 'email',
                    'formType'  => FormFieldEmailType::class,
                ]
            );
        }
    }

    /**
     * Custom validation.
     */
    public function onFormValidate(Events\\ValidationEvent \$event)
    {
        \$value = \$event->getValue();

        if (!empty(\$value)) {
            \$this->fieldTelValidation(\$event);
            \$this->fieldEmailValidation(\$event);
        }
    }

    private function fieldEmailValidation(Events\\ValidationEvent \$event)
    {
        \$field = \$event->getField();
        \$value = \$event->getValue();
        if ('email' === \$field->getType() && !empty(\$field->getValidation()['donotsubmit'])) {
            // Check the domains using shell wildcard patterns
            \$donotSubmitFilter = function (\$doNotSubmitArray) use (\$value) {
                return fnmatch(\$doNotSubmitArray, \$value, FNM_CASEFOLD);
            };
            \$notNotSubmitEmails = \$this->coreParametersHelper->get('do_not_submit_emails');
            if (array_filter(\$notNotSubmitEmails, \$donotSubmitFilter)) {
                \$event->failedValidation(ArrayHelper::getValue('donotsubmit_validationmsg', \$field->getValidation()));
            }
        }
    }

    private function fieldTelValidation(Events\\ValidationEvent \$event)
    {
        \$field = \$event->getField();
        \$value = \$event->getValue();

        if ('tel' === \$field->getType() && !empty(\$field->getValidation()['international'])) {
            \$phoneUtil = PhoneNumberUtil::getInstance();
            try {
                \$phoneUtil->parse(\$value, PhoneNumberUtil::UNKNOWN_REGION);
            } catch (NumberParseException \$e) {
                if (!empty(\$field->getValidation()['international_validationmsg'])) {
                    \$event->failedValidation(\$field->getValidation()['international_validationmsg']);
                } else {
                    \$event->failedValidation(\$this->translator->trans('mautic.form.submission.phone.invalid', [], 'validators'));
                }
            }
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
        return "@bundles/FormBundle/EventListener/FormValidationSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/FormValidationSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/EventListener/FormValidationSubscriber.php");
    }
}
