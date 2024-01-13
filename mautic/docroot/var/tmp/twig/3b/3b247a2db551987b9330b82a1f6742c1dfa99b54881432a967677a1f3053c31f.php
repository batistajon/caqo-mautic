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

/* @bundles/LeadBundle/Security/Permissions/LeadPermissions.php */
class __TwigTemplate_f00e1731dc7fe5252a37d03372d5556f9a17a6d68a97a89daa346c92c7fa42a0 extends Template
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

namespace Mautic\\LeadBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\UserBundle\\Form\\Type\\PermissionListType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class LeadPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);

        \$this->permissions = [
            'lists' => [
                'viewother'   => 2,
                'editother'   => 8,
                'deleteother' => 64,
                'full'        => 1024,
            ],
            'fields' => [
                'full' => 1024,
                'view' => 1,
            ],
        ];
        \$this->addExtendedPermissions('leads', false);
        \$this->addStandardPermissions('imports');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lead';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$this->addExtendedFormFields('lead', 'leads', \$builder, \$data, false);

        \$builder->add(
            'lead:lists',
            PermissionListType::class,
            [
                'choices' => [
                    'mautic.core.permissions.viewother'   => 'viewother',
                    'mautic.core.permissions.editother'   => 'editother',
                    'mautic.core.permissions.deleteother' => 'deleteother',
                    'mautic.core.permissions.full'        => 'full',
                ],
                'label'             => 'mautic.lead.permissions.lists',
                'data'              => (!empty(\$data['lists']) ? \$data['lists'] : []),
                'bundle'            => 'lead',
                'level'             => 'lists',
            ]
        );

        \$builder->add(
            'lead:fields',
            PermissionListType::class,
            [
                'choices' => [
                    'mautic.core.permissions.manage' => 'full',
                    'mautic.core.permissions.view'   => 'view',
                ],
                'label'             => 'mautic.lead.permissions.fields',
                'data'              => (!empty(\$data['fields']) ? \$data['fields'] : []),
                'bundle'            => 'lead',
                'level'             => 'fields',
            ]
        );

        \$this->addStandardFormFields(\$this->getName(), 'imports', \$builder, \$data);
    }

    public function analyzePermissions(array &\$permissions, \$allPermissions, \$isSecondRound = false)
    {
        parent::analyzePermissions(\$permissions, \$allPermissions, \$isSecondRound);

        //make sure the user has access to own leads as well if they have access to lists, notes or fields
        \$viewPerms = ['viewown', 'viewother', 'full'];
        if (
            (!isset(\$permissions['leads']) || (array_intersect(\$viewPerms, \$permissions['leads']) == \$viewPerms)) &&
            (isset(\$permissions['lists']) || isset(\$permissions['fields']))
        ) {
            \$permissions['leads'][] = 'viewown';
        }

        return false;
    }

    /**
     * @return array
     */
    protected function getSynonym(\$name, \$level)
    {
        if ('fields' === \$name) {
            //set some synonyms
            switch (\$level) {
                case 'publishown':
                case 'publishother':
                    \$level = 'full';
                    break;
            }
        }

        if ('lists' === \$name) {
            switch (\$level) {
                case 'view':
                case 'viewown':
                    \$name = 'leads';
                    break;
            }
        }

        return parent::getSynonym(\$name, \$level);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Security/Permissions/LeadPermissions.php";
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
        return new Source("", "@bundles/LeadBundle/Security/Permissions/LeadPermissions.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Security/Permissions/LeadPermissions.php");
    }
}
