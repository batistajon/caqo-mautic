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

/* @bundles/LeadBundle/Controller/Api/CustomFieldsApiControllerTrait.php */
class __TwigTemplate_176d08b661289074015084b6936621f6ef91d52aab4f5afe39e331ca7a388b8c extends Template
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

namespace Mautic\\LeadBundle\\Controller\\Api;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CustomFieldEntityInterface;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\Form\\Form;

trait CustomFieldsApiControllerTrait
{
    /**
     * Remove IpAddress and lastActive as it'll be handled outside the form.
     *
     * @param \$parameters
     * @param Lead \$entity
     * @param \$action
     *
     * @return mixed|void
     */
    protected function prepareParametersForBinding(\$parameters, \$entity, \$action)
    {
        if ('company' === \$this->entityNameOne) {
            \$object = 'company';
        } else {
            \$object = 'lead';
            unset(\$parameters['lastActive'], \$parameters['tags'], \$parameters['ipAddress']);
        }

        if (in_array(\$this->request->getMethod(), ['POST', 'PUT'])) {
            // If a new contact or PUT update (complete representation of the objectd), set empty fields to field defaults if the parameter
            // is not defined in the request

            /** @var FieldModel \$fieldModel */
            \$fieldModel = \$this->getModel('lead.field');
            \$fields     = \$fieldModel->getFieldListWithProperties(\$object);

            foreach (\$fields as \$alias => \$field) {
                // Set the default value if the parameter is not included in the request, there is no value for the given entity, and a default is defined
                \$currentValue = \$entity->getFieldValue(\$alias);
                if (!isset(\$parameters[\$alias]) && ('' === \$currentValue || null == \$currentValue) && '' !== \$field['defaultValue'] && null !== \$field['defaultValue']) {
                    \$parameters[\$alias] = \$field['defaultValue'];
                }
            }
        }

        return \$parameters;
    }

    /**
     * Flatten fields into an 'all' key for dev convenience.
     *
     * @param string \$action
     */
    protected function preSerializeEntity(&\$entity, \$action = 'view')
    {
        if (\$entity instanceof CustomFieldEntityInterface) {
            \$fields        = \$entity->getFields();
            \$fields['all'] = \$entity->getProfileFields();

            // Temporary hack to address numbers being type casted to float which broke some API implementations because M2 used to return
            // these as strings and values are normalized in a dozen differneet ways throughout LeadModel::setFieldValues methods and became
            // too risky to hotfix
            \$fields = \$this->fixNumbers(\$fields);

            \$entity->setFields(\$fields);
        }
    }

    private function fixNumbers(array \$fields): array
    {
        \$numberFields = [];
        foreach (\$fields as \$group => \$groupFields) {
            if ('all' === \$group) {
                continue;
            }

            foreach (\$groupFields as \$field => \$fieldDefinition) {
                if ('points' === \$field) {
                    // Points were always a number in M2
                    \$numberFields[\$field] = (int) \$fields[\$group][\$field]['value'];
                }

                if ('number' !== \$fieldDefinition['type'] || null === \$fields[\$group][\$field]['value']) {
                    continue;
                }

                // Some requests don't seem to have properties unserialized by default (even in M2)
                if (!isset(\$fieldDefinition['properties'])) {
                    \$fieldDefinition['properties'] = [];
                }
                \$properties = is_string(\$fieldDefinition['properties']) ? unserialize(\$fieldDefinition['properties']) : \$fieldDefinition['properties'];

                \$fields[\$group][\$field]['value']           = empty(\$properties['scale']) ? (int) \$fields[\$group][\$field]['value']
                    : (float) \$fields[\$group][\$field]['value'];
                \$fields[\$group][\$field]['normalizedValue'] = empty(\$properties['scale']) ? (int) \$fields[\$group][\$field]['normalizedValue']
                    : (float) \$fields[\$group][\$field]['normalizedValue'];

                \$numberFields[\$field] = \$fields[\$group][\$field]['value'];
            }
        }

        // Fix \"all\" fields
        \$fields['all'] = array_merge(\$fields['all'], \$numberFields);

        return \$fields;
    }

    /**
     * @return array
     */
    protected function getEntityFormOptions()
    {
        \$object = ('company' === \$this->entityNameOne) ? 'company' : 'lead';
        \$fields = \$this->getModel('lead.field')->getEntities(
            [
                'filter' => [
                    'force' => [
                        [
                            'column' => 'f.isPublished',
                            'expr'   => 'eq',
                            'value'  => true,
                        ],
                        [
                            'column' => 'f.object',
                            'expr'   => 'eq',
                            'value'  => \$object,
                        ],
                    ],
                ],
                'hydration_mode' => 'HYDRATE_ARRAY',
            ]
        );

        return ['fields' => \$fields];
    }

    /**
     * @param Lead|Company \$entity
     * @param Form         \$form
     * @param array        \$parameters
     * @param bool         \$isPostOrPatch
     */
    protected function setCustomFieldValues(\$entity, \$form, \$parameters, \$isPostOrPatch = false)
    {
        //set the custom field values
        //pull the data from the form in order to apply the form's formatting
        foreach (\$form as \$f) {
            \$parameters[\$f->getName()] = \$f->getData();
        }

        if (\$isPostOrPatch) {
            // Don't overwrite the contacts accumulated points
            if (isset(\$parameters['points']) && empty(\$parameters['points'])) {
                unset(\$parameters['points']);
            }

            // When merging a contact because of a unique identifier match in POST /api/contacts//new or PATCH /api/contacts//edit all 0 values must be unset because
            // we have to assume 0 was not meant to overwrite an existing value. Other empty values will be caught by LeadModel::setFieldValues
            \$parameters = array_filter(
                \$parameters,
                function (\$value) {
                    if (is_numeric(\$value)) {
                        return 0 !== (int) \$value;
                    }

                    return true;
                }
            );
        }

        \$overwriteWithBlank = !\$isPostOrPatch;
        if (isset(\$parameters['overwriteWithBlank']) && !empty(\$parameters['overwriteWithBlank'])) {
            \$overwriteWithBlank = true;
            unset(\$parameters['overwriteWithBlank']);
        }

        \$this->model->setFieldValues(\$entity, \$parameters, \$overwriteWithBlank);
    }

    /**
     * @param string \$object
     */
    protected function setCleaningRules(\$object = 'lead')
    {
        \$fields = \$this->getModel('lead.field')->getFieldListWithProperties(\$object);
        foreach (\$fields as \$field) {
            if (!empty(\$field['properties']['allowHtml'])) {
                \$this->dataInputMasks[\$field['alias']]  = 'html';
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
        return "@bundles/LeadBundle/Controller/Api/CustomFieldsApiControllerTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/CustomFieldsApiControllerTrait.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/Api/CustomFieldsApiControllerTrait.php");
    }
}
