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

/* @bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php */
class __TwigTemplate_cb41e4577eec63894017eab1a8d634a4b293b7c32cfbdcaed09a83f763da9871 extends Template
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

namespace Mautic\\InstallBundle\\InstallFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\DependencyInjection\\ContainerAwareInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class LeadFieldData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface, FixtureGroupInterface
{
    /**
     * @var ContainerInterface
     */
    private \$container;

    /**
     * {@inheritdoc}
     */
    public static function getGroups(): array
    {
        return ['group_install', 'group_mautic_install_data'];
    }

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface \$container = null)
    {
        \$this->container = \$container;
    }

    /**
     * @throws \\Doctrine\\DBAL\\Schema\\SchemaException
     */
    public function load(ObjectManager \$manager)
    {
        \$fieldGroups['lead']    = FieldModel::\$coreFields;
        \$fieldGroups['company'] = FieldModel::\$coreCompanyFields;

        \$translator   = \$this->container->get('translator');
        foreach (\$fieldGroups as \$fields) {
            \$order = 1;
            foreach (\$fields as \$alias => \$field) {
                \$type = isset(\$field['type']) ? \$field['type'] : 'text';

                \$entity = new LeadField();
                \$entity->setLabel(\$translator->trans('mautic.lead.field.'.\$alias, [], 'fixtures'));
                \$entity->setGroup(isset(\$field['group']) ? \$field['group'] : 'core');
                \$entity->setOrder(\$order);
                \$entity->setAlias(\$alias);
                \$entity->setIsRequired(isset(\$field['required']) ? \$field['required'] : false);
                \$entity->setType(\$type);
                \$entity->setObject(\$field['object']);
                \$entity->setIsUniqueIdentifer(!empty(\$field['unique']));
                \$entity->setProperties(isset(\$field['properties']) ? \$field['properties'] : []);
                \$entity->setIsFixed(!empty(\$field['fixed']));
                \$entity->setIsListable(!empty(\$field['listable']));
                \$entity->setIsShortVisible(!empty(\$field['short']));

                if (isset(\$field['default'])) {
                    \$entity->setDefaultValue(\$field['default']);
                }

                \$manager->persist(\$entity);
                \$manager->flush();

                if (!\$this->hasReference('leadfield-'.\$alias)) {
                    \$this->addReference('leadfield-'.\$alias, \$entity);
                }
                ++\$order;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 4;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php";
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
        return new Source("", "@bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php");
    }
}
