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

/* @bundles/LeadBundle/Validator/CustomFieldValidator.php */
class __TwigTemplate_39593423adaa679f7224345ca5f5130734496a5851075944ed3140e441c7e146 extends Template
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

namespace Mautic\\LeadBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\InvalidValueException;
use Mautic\\CoreBundle\\Exception\\RecordNotFoundException;
use Mautic\\CoreBundle\\Exception\\RecordNotPublishedException;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CustomFieldValidator
{
    private FieldModel \$fieldModel;

    private TranslatorInterface \$translator;

    public function __construct(FieldModel \$fieldModel, TranslatorInterface \$translator)
    {
        \$this->fieldModel = \$fieldModel;
        \$this->translator = \$translator;
    }

    /**
     * @throws RecordNotFoundException
     * @throws RecordNotPublishedException
     * @throws InvalidValueException
     */
    public function validateFieldType(string \$alias, string \$fieldType): void
    {
        \$field = \$this->getPublishedFieldByAlias(\$alias);

        if (\$field->getType() !== \$fieldType) {
            throw new InvalidValueException(\$this->translator->trans('mautic.lead.contact.wrong.field.type', ['%alias%' => \$alias, '%fieldType%' => \$field->getType(), '%expectedType%' => \$fieldType], 'validators'));
        }
    }

    /**
     * @throws RecordNotFoundException
     * @throws RecordNotPublishedException
     */
    private function getPublishedFieldByAlias(string \$alias): LeadField
    {
        \$field = \$this->getFieldByAlias(\$alias);

        if (!\$field->getIsPublished()) {
            throw new RecordNotPublishedException(\$this->translator->trans('mautic.lead.contact.field.not.published', ['%alias%' => \$alias], 'validators'));
        }

        return \$field;
    }

    /**
     * @throws RecordNotFoundException
     */
    private function getFieldByAlias(string \$alias): LeadField
    {
        /** @var LeadField|null */
        \$field = \$this->fieldModel->getEntityByAlias(\$alias);

        if (!\$field) {
            throw new RecordNotFoundException(\$this->translator->trans('mautic.lead.contact.field.not.found', ['%alias%' => \$alias], 'validators'));
        }

        return \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Validator/CustomFieldValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/CustomFieldValidator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Validator/CustomFieldValidator.php");
    }
}
