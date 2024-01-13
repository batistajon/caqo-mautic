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

/* @bundles/PageBundle/Views/SubscribedEvents/PageToken/sharebtn_css.html.php */
class __TwigTemplate_76f813d9e7f37410b65553a5e579aaeed0cc92c234302709f2e9a9ecac1997df extends Template
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

\$css = <<<'CSS'
.share-buttons { display: block; }
.share-button { float: left; margin-right: 5px; }
.share-button.facebook-share-button.layout-box_count.action-like  iframe { width: 50px !important; }
.share-button.facebook-share-button.layout-box_count { margin-right: 10px !important; }
.share-button.twitter-share-button.layout-horizontal { width: 75px !important; }
CSS;

\$view['assets']->addStyleDeclaration(\$css);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/SubscribedEvents/PageToken/sharebtn_css.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/SubscribedEvents/PageToken/sharebtn_css.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/SubscribedEvents/PageToken/sharebtn_css.html.php");
    }
}
