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

/* @bundles/CoreBundle/Templating/Helper/AnalyticsHelper.php */
class __TwigTemplate_c1ec6207d9c675088aeed561367d8ff599df4c0046f69121058cc4426444e33b extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Templating\\Helper\\Helper;

class AnalyticsHelper extends Helper
{
    /**
     * @var string
     */
    private \$code;

    /**
     * AnalyticsHelper constructor.
     */
    public function __construct(CoreParametersHelper \$parametersHelper)
    {
        \$this->code = htmlspecialchars_decode(\$parametersHelper->get('google_analytics', ''));
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return \$this->code;
    }

    /**
     * @param string \$content
     */
    public function addCode(\$content)
    {
        // Add analytics
        \$analytics = \$this->getCode();

        // Check for html doc
        if (false === strpos(\$content, '<html')) {
            \$content = \"<html>\\n<head>{\$analytics}</head>\\n<body>{\$content}</body>\\n</html>\";
        } elseif (false === strpos(\$content, '<head>')) {
            \$content = str_replace('<html>', \"<html>\\n<head>\\n{\$analytics}\\n</head>\", \$content);
        } elseif (!empty(\$analytics)) {
            \$content = str_replace('</head>', \$analytics.\"\\n</head>\", \$content);
        }

        return \$content;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'analytics';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/AnalyticsHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/AnalyticsHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/AnalyticsHelper.php");
    }
}
