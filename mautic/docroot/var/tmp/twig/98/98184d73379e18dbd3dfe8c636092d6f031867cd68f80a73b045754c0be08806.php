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

/* @bundles/CoreBundle/Views/FormTheme/entity_properties.html.php */
class __TwigTemplate_5536c8b1373386407dc283f52d2a6421fdf04ca38d69cbde2aa6f387dd22d809 extends Template
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

if (!isset(\$idPrefix)) {
    // Used by JS to create new properties array for the form
    \$idPrefix = '';
}

if (!isset(\$namePrefix)) {
    // Used by JS to create new properties array for the form
    \$namePrefix = '';
}

if (!is_array(\$properties)) {
    \$properties = [\$properties];
}

if (!empty(\$appendAsPanel)) {
    \$addCallback = 'updateSortablePanel';
    if (!empty(\$clearFormOnCancel)) {
        \$cancelCallback = 'cancelSortablePanel';
    }
}

if (!isset(\$footerButtonClass)) {
    \$footerButtonClass = null;
}

if (!isset(\$modalAttr)) {
    \$modalAttr = '';
}

if (!isset(\$modalClass)) {
    \$modalClass = '';
}

echo \"<div id=\\\"{\$idPrefix}entity_properties\\\" class=\\\"entity-properties no-chosen\\\">\\n\";
// Build prototype modals for entity properties
/** @var \\Symfony\\Component\\Form\\Form \$property */
foreach (\$properties as \$property):
    \$cancelAttr = 'data-embedded-form=\"cancel\"';
    if (!empty(\$clearFormOnCancel)) {
        \$cancelAttr .= ' data-embedded-form-clear=\"true\"';
    }
    if (!empty(\$cancelCallback)) {
        \$cancelAttr .= ' data-embedded-form-callback=\"'.\$cancelCallback.'\"';
    }

    \$addAttr = 'data-embedded-form=\"add\"';
    if (!empty(\$addCallback)) {
        \$addAttr .= ' data-embedded-form-callback=\"'.\$addCallback.'\"';
    }

    echo \$view->render(
        'MauticCoreBundle:Helper:modal.html.php',
        [
            'id'             => \$idPrefix.\$property->vars['name'],
            'dismissible'    => false,
            'containerClass' => \$modalClass,
            'containerAttr'  => \$modalAttr.' data-name=\"'.\$property->vars['name'].'\" data-id-prefix=\"'.\$idPrefix.'\" data-name-prefix=\"'.\$namePrefix
                .'\"'.\$view['form']->block(\$property, 'widget_attributes'),
            'body'              => \$view['form']->widget(\$property),
            'header'            => (isset(\$header)) ? \$header : \$property->vars['label'],
            'footerButtonClass' => \$footerButtonClass,
            'footerButtons'     => [
                [
                    'class'    => 'btn-default btn-cancel btn-nospin',
                    'textIcon' => (isset(\$closeButtonIcon) ? \$closeButtonIcon : 'fa fa-times text-danger'),
                    'label'    => \$view['translator']->trans((isset(\$closeButtonText) ? \$closeButtonText : 'mautic.core.form.cancel')),
                    'attr'     => \$cancelAttr,
                ],
                [
                    'class'    => 'btn-default btn-add btn-nospin'.(!empty(\$update) ? ' hide' : ''),
                    'textIcon' => (isset(\$addButtonIcon) ? \$addButtonIcon : 'fa fa-plus'),
                    'label'    => \$view['translator']->trans((isset(\$addButtonText) ? \$addButtonText : 'mautic.core.form.add')),
                    'attr'     => \$addAttr,
                ],
                [
                    'class'    => 'btn-default btn-nospin btn-update'.(empty(\$update) ? ' hide' : ''),
                    'textIcon' => (isset(\$updateButtonIcon) ? \$updateButtonIcon : 'fa fa-save'),
                    'label'    => \$view['translator']->trans((isset(\$updateButtonText) ? \$updateButtonText : 'mautic.core.form.update')),
                    'attr'     => \$addAttr,
                ],
            ],
        ]
    );
endforeach;
echo \"</div>\\n\";
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/entity_properties.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/entity_properties.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/entity_properties.html.php");
    }
}
