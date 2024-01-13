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

/* @bundles/FormBundle/Views/Public/videoembed.html.php */
class __TwigTemplate_54bca5c90e6cbc2eda656aebf2926c097810d38a4e2bfbf79aa13e7bc43c5d57 extends Template
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
        echo "<div id=\"mautic-video-form-embed\">
    <form method=\"post\" action=\"<?php echo \$view['router']->url('mautic_form_postresults', ['formId' => \$form->getId()]); ?>\">
        <?php
        /** @var \\Mautic\\FormBundle\\Entity\\Field \$f */
        foreach (\$form->getFields() as \$f):
            if (\$f->isCustom()):
                if (!isset(\$fieldSettings[\$f->getType()])):
                    continue;
                endif;
                \$params = \$fieldSettings[\$f->getType()];
                \$f->setCustomParameters(\$params);

                \$template = \$params['template'];
            else:
                \$template = 'MauticFormBundle:Field:'.\$f->getType().'.html.php';
            endif;

            echo \$view->render(\$template, ['field' => \$f->convertToArray(), 'id' => \$f->getAlias(), 'formName' => \$f->getForm()->generateFormName()]);
        endforeach;
        ?>
    </form>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Public/videoembed.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Public/videoembed.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Public/videoembed.html.php");
    }
}
