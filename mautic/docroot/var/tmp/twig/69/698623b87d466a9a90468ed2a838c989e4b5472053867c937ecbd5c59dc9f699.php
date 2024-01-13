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

/* @bundles/FormBundle/DataFixtures/ORM/LoadFormData.php */
class __TwigTemplate_57f8ad88ff81d50fc95097665e00880acb5564f2ee746195472d36f93ae90df3 extends Template
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

namespace Mautic\\FormBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\FormBundle\\Entity\\Action;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Model\\ActionModel;
use Mautic\\FormBundle\\Model\\FieldModel;
use Mautic\\FormBundle\\Model\\FormModel;

class LoadFormData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @var FormModel
     */
    private \$formModel;

    /**
     * @var FieldModel
     */
    private \$formFieldModel;

    /**
     * @var ActionModel
     */
    private \$actionModel;

    public function __construct(FormModel \$formModel, FieldModel \$formFieldModel, ActionModel \$actionModel)
    {
        \$this->formModel      = \$formModel;
        \$this->formFieldModel = \$formFieldModel;
        \$this->actionModel    = \$actionModel;
    }

    public function load(ObjectManager \$manager)
    {
        \$forms        = CsvHelper::csv_to_array(__DIR__.'/fakeformdata.csv');
        \$formEntities = [];
        foreach (\$forms as \$count => \$rows) {
            \$form = new Form();
            \$key  = \$count + 1;
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);

                    if (in_array(\$col, ['dateAdded'])) {
                        \$form->\$setter(new \\DateTime(\$val));
                    } elseif (in_array(\$col, ['cachedHtml'])) {
                        \$val = stripslashes(\$val);
                        \$form->\$setter(\$val);
                    } else {
                        \$form->\$setter(\$val);
                    }
                }
            }
            \$this->formModel->getRepository()->saveEntity(\$form);
            \$formEntities[] = \$form;
            \$this->setReference('form-'.\$key, \$form);
        }

        //import fields
        \$fields = CsvHelper::csv_to_array(__DIR__.'/fakefielddata.csv');
        foreach (\$fields as \$count => \$rows) {
            \$field = new Field();
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);

                    if (in_array(\$col, ['form'])) {
                        \$form = \$this->getReference('form-'.\$val);
                        \$field->\$setter(\$form);
                        \$form->addField(\$count, \$field);
                    } elseif (in_array(\$col, ['customParameters', 'properties'])) {
                        \$val = Serializer::decode(stripslashes(\$val));
                        \$field->\$setter(\$val);
                    } else {
                        \$field->\$setter(\$val);
                    }
                }
            }
            \$this->formFieldModel->getRepository()->saveEntity(\$field);
        }

        //import actions
        \$actions = CsvHelper::csv_to_array(__DIR__.'/fakeactiondata.csv');
        foreach (\$actions as \$rows) {
            \$action = new Action();
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);

                    if (in_array(\$col, ['form'])) {
                        \$action->\$setter(\$this->getReference('form-'.\$val));
                    } elseif (in_array(\$col, ['properties'])) {
                        \$val = Serializer::decode(stripslashes(\$val));
                        if ('settings' == \$col) {
                            \$val['callback'] = stripslashes(\$val['callback']);
                        }

                        \$action->\$setter(\$val);
                    } else {
                        \$action->\$setter(\$val);
                    }
                }
            }
            \$this->actionModel->getRepository()->saveEntity(\$action);
        }

        //create the tables
        foreach (\$formEntities as \$form) {
            //create the HTML
            \$this->formModel->generateHtml(\$form);

            //create the schema
            \$this->formModel->createTableSchema(\$form, true, true);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 8;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/DataFixtures/ORM/LoadFormData.php";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/LoadFormData.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/DataFixtures/ORM/LoadFormData.php");
    }
}
