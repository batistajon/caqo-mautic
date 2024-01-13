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

/* @bundles/CoreBundle/Menu/MenuRenderer.php */
class __TwigTemplate_f3324e16422a6f01774e86356cf0367da71e39b03160189f878985fcf6c56545 extends Template
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

namespace Mautic\\CoreBundle\\Menu;

use Knp\\Menu\\ItemInterface;
use Knp\\Menu\\Matcher\\MatcherInterface;
use Knp\\Menu\\Renderer\\RendererInterface;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine;

class MenuRenderer implements RendererInterface
{
    /**
     * @var DelegatingEngine
     */
    private \$engine;

    /**
     * @var MatcherInterface
     */
    private \$matcher;

    /**
     * @var array
     */
    private \$defaultOptions;

    public function __construct(MatcherInterface \$matcher, TemplatingHelper \$templatingHelper, array \$defaultOptions = [])
    {
        \$this->engine         = \$templatingHelper->getTemplating();
        \$this->matcher        = \$matcher;
        \$this->defaultOptions = array_merge(
            [
                'depth'             => null,
                'matchingDepth'     => null,
                'currentAsLink'     => true,
                'currentClass'      => 'active',
                'ancestorClass'     => 'open',
                'firstClass'        => 'first',
                'lastClass'         => 'last',
                'template'          => 'MauticCoreBundle:Menu:main.html.php',
                'compressed'        => false,
                'allow_safe_labels' => false,
                'clear_matcher'     => true,
            ],
            \$defaultOptions
        );
    }

    /**
     * Renders menu.
     */
    public function render(ItemInterface \$item, array \$options = []): string
    {
        \$options = array_merge(\$this->defaultOptions, \$options);

        if (\$options['clear_matcher']) {
            \$this->matcher->clear();
        }

        //render html
        \$html = \$this->engine->render(\$options['template'], [
            'item'    => \$item,
            'options' => \$options,
            'matcher' => \$this->matcher,
        ]);

        return \$html;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Menu/MenuRenderer.php";
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
        return new Source("", "@bundles/CoreBundle/Menu/MenuRenderer.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Menu/MenuRenderer.php");
    }
}
