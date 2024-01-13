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

/* @bundles/ConfigBundle/Form/Helper/RestrictionHelper.php */
class __TwigTemplate_89d250040f7b3182adb608d7bb76aaaeefbc397c7fc837c789347efd18949942 extends Template
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

namespace Mautic\\ConfigBundle\\Form\\Helper;

use Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper as FieldHelper;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class RestrictionHelper
{
    const MODE_REMOVE = 'remove';
    const MODE_MASK   = 'mask';

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var array
     */
    private \$restrictedFields;

    /**
     * @var string
     */
    private \$displayMode;

    /**
     * RestrictionHelper constructor.
     */
    public function __construct(TranslatorInterface \$translator, array \$restrictedFields, \$mode)
    {
        \$this->translator       = \$translator;
        \$this->restrictedFields = FieldHelper::prepareRestrictions(\$restrictedFields);
        \$this->displayMode      = \$mode;
    }

    public function applyRestrictions(FormInterface \$childType, FormInterface \$parentType, array \$restrictedFields = null)
    {
        if (null === \$restrictedFields) {
            \$restrictedFields = \$this->restrictedFields;
        }

        \$fieldName = \$childType->getName();
        if (array_key_exists(\$fieldName, \$restrictedFields)) {
            if (is_array(\$restrictedFields[\$fieldName])) {
                // Part of the collection of fields are restricted
                foreach (\$childType as \$grandchild) {
                    \$this->applyRestrictions(\$grandchild, \$childType, \$restrictedFields[\$fieldName]);
                }

                return;
            }

            \$this->restrictField(\$childType, \$parentType);
        }
    }

    private function restrictField(FormInterface \$childType, FormInterface \$parentType)
    {
        switch (\$this->displayMode) {
            case self::MODE_MASK:
                \$parentType->add(
                    \$childType->getName(),
                    get_class(\$childType->getConfig()->getType()->getInnerType()),
                    array_merge(
                        \$childType->getConfig()->getOptions(),
                        [
                            'required' => false,
                            'mapped'   => false,
                            'disabled' => true,
                            'attr'     => array_merge(\$childType->getConfig()->getOptions()['attr'] ?? [], [
                                'placeholder' => \$this->translator->trans('mautic.config.restricted'),
                                'readonly'    => true,
                            ]),
                        ]
                    )
                );
                break;
            case self::MODE_REMOVE:
                \$parentType->remove(\$childType->getName());
                break;
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
        return "@bundles/ConfigBundle/Form/Helper/RestrictionHelper.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Helper/RestrictionHelper.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Form/Helper/RestrictionHelper.php");
    }
}
