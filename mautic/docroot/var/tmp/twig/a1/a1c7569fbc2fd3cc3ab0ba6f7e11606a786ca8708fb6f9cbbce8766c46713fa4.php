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

/* @bundles/FormBundle/Tests/Helper/FormFieldHelperTest.php */
class __TwigTemplate_c8d780ee6e230484afd8e5872bde859ccb0219c9aa2f814e4e6d9e98f8e7a9ba extends Template
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

namespace Mautic\\FormBundle\\Tests\\Helper;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class FormFieldHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var FormFieldHelper
     */
    protected \$fixture;

    protected function setUp(): void
    {
        \$translatorMock = \$this->getMockBuilder(TranslatorInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$validatorMock = \$this->getMockBuilder(ValidatorInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->fixture = new FormFieldHelper(\$translatorMock, \$validatorMock);
    }

    /**
     * @dataProvider fieldProvider
     */
    public function testPopulateField(\$field, \$value, \$formHtml, \$expectedValue, \$message)
    {
        \$this->fixture->populateField(\$field, \$value, 'mautic', \$formHtml);

        \$this->assertEquals(\$expectedValue, \$formHtml, \$message);
    }

    /**
     * @return array
     */
    public function fieldProvider()
    {
        return [
            [
                \$this->getField('First Name', 'text'),
                '%22%2F%3E%3Cscript%3Ealert%280%29%3C%2Fscript%3E',
                '<input id=\"mauticform_input_mautic_firstname\" value=\"\" />',
                '<input id=\"mauticform_input_mautic_firstname\" value=\"&quot;/&gt;alert(0)\" />',
                'Tags should be stripped from text field values submitted via GET to prevent XSS.',
            ],
            [
                \$this->getField('First Name', 'text'),
                '%22%20onfocus=%22alert(123)',
                '<input id=\"mauticform_input_mautic_firstname\" value=\"\" />',
                '<input id=\"mauticform_input_mautic_firstname\" value=\"&quot; onfocus=&quot;alert(123)\" />',
                'Inline JS values should not be allowed via GET to prevent XSS.',
            ],
            [
                \$this->getField('Description', 'textarea'),
                '%22%2F%3E%3Cscript%3Ealert%280%29%3C%2Fscript%3E',
                '<textarea id=\"mauticform_input_mautic_description\"></textarea>',
                '<textarea id=\"mauticform_input_mautic_description\">&quot;/&gt;alert(0)</textarea>',
                'Tags should be stripped from textarea field values submitted via GET to prevent XSS.',
            ],
            [
                \$this->getField('Description', 'textarea'),
                '%22%20onfocus=%22alert(123)',
                '<textarea id=\"mauticform_input_mautic_description\"></textarea>',
                '<textarea id=\"mauticform_input_mautic_description\">&quot; onfocus=&quot;alert(123)</textarea>',
                'Tags should be stripped from textarea field values submitted via GET to prevent XSS.',
            ],
            [
                \$this->getField('Checkbox Single', 'checkboxgrp'),
                'myvalue',
                '<input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Single').'1\" value=\"myvalue\"/><input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Single').'2\" value=\"notmyvalue\"/>',
                '<input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Single').'1\" value=\"myvalue\" checked /><input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Single').'2\" value=\"notmyvalue\"/>',
                'Single value checkbox groups should have their values set appropriately via GET.',
            ],
            [
                \$this->getField('Checkbox Multi', 'checkboxgrp'),
                'myvalue|alsomyvalue',
                '<input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Multi').'1\" value=\"myvalue\"/><input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Multi').'2\" value=\"alsomyvalue\"/><input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Multi').'3\" value=\"notmyvalue\"/>',
                '<input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Multi').'1\" value=\"myvalue\" checked /><input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Multi').'2\" value=\"alsomyvalue\" checked /><input id=\"mauticform_checkboxgrp_checkbox_'.\$this->getAliasFromName('Checkbox Multi').'3\" value=\"notmyvalue\"/>',
                'Multi-value checkbox groups should have their values set appropriately via GET.',
            ],
            [
                \$this->getField('Radio Single', 'radiogrp'),
                'myvalue',
                '<input id=\"mauticform_radiogrp_radio_'.\$this->getAliasFromName('Radio Single').'1\" value=\"myvalue\"/><input id=\"mauticform_radiogrp_radio_'.\$this->getAliasFromName('Radio Single').'1\" value=\"notmyvalue\"/>',
                '<input id=\"mauticform_radiogrp_radio_'.\$this->getAliasFromName('Radio Single').'1\" value=\"myvalue\" checked /><input id=\"mauticform_radiogrp_radio_'.\$this->getAliasFromName('Radio Single').'1\" value=\"notmyvalue\"/>',
                'Single value radio groups should have their values set appropriately via GET.',
            ],
            [
                \$this->getField('Select', 'select'),
                'myvalue',
                '<select id=\"mauticform_input_mautic_select\"><option value=\"myvalue\">My Value</option></select>',
                '<select id=\"mauticform_input_mautic_select\"><option value=\"myvalue\" selected=\"selected\">My Value</option></select>',
                'Select lists should have their values set appropriately via GET.',
            ],
        ];
    }

    /**
     * @param string \$name
     * @param string \$type
     *
     * @return Field
     */
    protected function getField(\$name, \$type)
    {
        \$field = new Field();

        \$field->setLabel(\$name);
        \$field->setAlias(\$this->getAliasFromName(\$name));
        \$field->setType(\$type);

        return \$field;
    }

    /**
     * @param string \$name
     *
     * @return string
     */
    private function getAliasFromName(\$name)
    {
        return strtolower(str_replace(' ', '', \$name));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Helper/FormFieldHelperTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Helper/FormFieldHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Helper/FormFieldHelperTest.php");
    }
}
