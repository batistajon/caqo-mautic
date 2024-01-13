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

/* @bundles/FormBundle/Helper/TokenHelper.php */
class __TwigTemplate_285f2104685bc6cd7685fbe08f7b07a50480a9f3ab114b9af2fc3ca058bcbf5a extends Template
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

namespace Mautic\\FormBundle\\Helper;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Model\\FormModel;

/**
 * Class TokenHelper.
 */
class TokenHelper
{
    /**
     * @var FormModel
     */
    protected \$formModel;

    /**
     * @var CorePermissions
     */
    protected \$security;

    /**
     * TokenHelper constructor.
     */
    public function __construct(FormModel \$formModel, CorePermissions \$security)
    {
        \$this->formModel = \$formModel;
        \$this->security  = \$security;
    }

    /**
     * @param \$content
     *
     * @return array
     */
    public function findFormTokens(\$content)
    {
        \$tokens = [];

        preg_match_all('/{form=(.*?)}/', \$content, \$matches);

        if (count(\$matches[0])) {
            foreach (\$matches[1] as \$k => \$id) {
                \$token = \$matches[0][\$k];

                if (isset(\$tokens[\$token])) {
                    continue;
                }
                \$form = \$this->formModel->getEntity(\$id);
                if (null !== \$form &&
                    (
                        \$form->isPublished(false) ||
                        \$this->security->hasEntityAccess(
                            'form:forms:viewown', 'form:forms:viewother', \$form->getCreatedBy()
                        )
                    )
                ) {
                    \$formHtml = (\$form->isPublished()) ? \$this->formModel->getContent(\$form, false) :
                        '';

                    //pouplate get parameters
                    \$this->formModel->populateValuesWithGetParameters(\$form, \$formHtml);

                    \$tokens[\$token] = \$formHtml;
                } else {
                    \$tokens[\$token] = '';
                }
            }
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
        return "@bundles/FormBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/FormBundle/Helper/TokenHelper.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Helper/TokenHelper.php");
    }
}
