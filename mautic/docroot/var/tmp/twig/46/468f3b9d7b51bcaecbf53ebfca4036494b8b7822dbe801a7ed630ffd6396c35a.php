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

/* @bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php */
class __TwigTemplate_c9a2e1455969c13323779c6092a2687751de982915b203ce76b7c799d14ef199 extends Template
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

namespace Mautic\\IntegrationsBundle\\Form\\Type\\Auth;

use Mautic\\IntegrationsBundle\\Form\\Type\\NotBlankIfPublishedConstraintTrait;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

trait Oauth1aTwoLeggedKeysTrait
{
    use NotBlankIfPublishedConstraintTrait;

    private function addKeyFields(FormBuilderInterface \$builder): void
    {
        \$builder->add(
            'consumerKey',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.consumer.key',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'consumerSecret',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.consumer.secret',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'token',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.token',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'tokenSecret',
            TextType::class,
            [
                'label'      => 'mautic.integration.oauth1a.token.secret',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Form/Type/Auth/Oauth1aTwoLeggedKeysTrait.php");
    }
}
