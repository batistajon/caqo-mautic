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

/* @bundles/PageBundle/Helper/TokenHelper.php */
class __TwigTemplate_b07290d944dee142fd0f423a6d33a854ea4d20a65e8f84df0ad1488015ce5a85 extends Template
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

namespace Mautic\\PageBundle\\Helper;

use Mautic\\PageBundle\\Model\\PageModel;

class TokenHelper
{
    /**
     * @var PageModel
     */
    protected \$model;

    public function __construct(PageModel \$model)
    {
        \$this->model = \$model;
    }

    /**
     * @param \$content
     * @param \$clickthrough
     *
     * @return array
     */
    public function findPageTokens(\$content, \$clickthrough = [])
    {
        preg_match_all('/{pagelink=(.*?)}/', \$content, \$matches);

        \$tokens = [];
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$pageId) {
                \$token = \$matches[0][\$key];
                if (!empty(\$tokens[\$token])) {
                    continue;
                }

                \$page = \$this->model->getEntity(\$pageId);

                if (!\$page) {
                    continue;
                }

                \$tokens[\$token] = \$this->model->generateUrl(\$page, true, \$clickthrough);
            }

            unset(\$matches);
        }

        return \$tokens;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/PageBundle/Helper/TokenHelper.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Helper/TokenHelper.php");
    }
}
