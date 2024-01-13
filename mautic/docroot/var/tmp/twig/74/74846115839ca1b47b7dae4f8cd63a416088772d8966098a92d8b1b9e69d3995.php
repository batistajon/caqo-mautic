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

/* @bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php */
class __TwigTemplate_0e237d2747d1ebaf0e4372d9df7a81a2a94dc67d8df4114a6cae5b153e69c1af extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\Form\\Type\\FormFieldFileType;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\FormBundle\\Helper\\FormUploader;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Templating\\Helper\\AvatarHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SetContactAvatarFormSubscriber implements EventSubscriberInterface
{
    /**
     * @var AvatarHelper
     */
    private \$avatarHelper;

    /**
     * @var FormUploader
     */
    private \$uploader;

    /**
     * @var LeadModel
     */
    private \$leadModel;

    public function __construct(AvatarHelper \$avatarHelper, FormUploader \$uploader, LeadModel \$leadModel)
    {
        \$this->avatarHelper = \$avatarHelper;
        \$this->uploader     = \$uploader;
        \$this->leadModel    = \$leadModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            FormEvents::FORM_ON_SUBMIT => ['onFormSubmit', 0],
        ];
    }

    public function onFormSubmit(SubmissionEvent \$submissionEvent)
    {
        \$fields  = \$submissionEvent->getForm()->getFields();
        \$contact = \$submissionEvent->getLead();
        \$results = \$submissionEvent->getResults();

        if (!\$contact) {
            return;
        }

        /** @var Field \$field */
        foreach (\$fields as \$field) {
            switch (\$field->getType()) {
                case 'file':
                    \$properties = \$field->getProperties();
                    if (empty(\$properties[FormFieldFileType::PROPERTY_PREFERED_PROFILE_IMAGE])) {
                        break;
                    }
                    if (empty(\$results[\$field->getAlias()])) {
                        break;
                    }
                    try {
                        \$filePath = \$this->uploader->getCompleteFilePath(\$field, \$results[\$field->getAlias()]);
                        \$this->avatarHelper->createAvatarFromFile(\$contact, \$filePath);
                        \$contact->setPreferredProfileImage('custom');
                        \$this->leadModel->saveEntity(\$contact);

                        return;
                    } catch (\\Exception \$exception) {
                    }

                    break;
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
        return "@bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php");
    }
}
