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

/* @bundles/LeadBundle/Form/Type/ContactColumnsType.php */
class __TwigTemplate_54600dd42490207aa9164cae76a9771af5d5216fd561faa31c4ab2170d02aab7 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\LeadBundle\\Services\\ContactColumnsDictionary;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class ContactColumnsType extends AbstractType
{
    private \$columnsDictionary;

    /**
     * ContactColumnsType constructor.
     */
    public function __construct(ContactColumnsDictionary \$columnsDictionary)
    {
        \$this->columnsDictionary = \$columnsDictionary;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
          [
              'choices'    => array_flip(\$this->columnsDictionary->getFields()),
              'label'      => false,
              'label_attr' => ['class' => 'control-label'],
              'required'   => false,
              'multiple'   => true,
              'expanded'   => false,
              'attr'       => [
                  'class'         => 'form-control',
              ],
          ]
        );
    }

    /**
     * @return string|\\Symfony\\Component\\Form\\FormTypeInterface|null
     */
    public function getParent()
    {
        return ChoiceType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/ContactColumnsType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/ContactColumnsType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/ContactColumnsType.php");
    }
}
