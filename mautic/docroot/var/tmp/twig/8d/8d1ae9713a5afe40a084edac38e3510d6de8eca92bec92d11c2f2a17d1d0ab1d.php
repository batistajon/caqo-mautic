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

/* @bundles/CategoryBundle/Tests/Controller/CategoryControllerFunctionalTest.php */
class __TwigTemplate_801f2671a3738fcd6053d6b6157b98548ad91fcb54c660887d35c5c8e35b474e extends Template
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

namespace Mautic\\CategoryBundle\\Tests\\Controller;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class CategoryControllerFunctionalTest extends MauticMysqlTestCase
{
    /**
     * Create two new categories.
     *
     * @throws \\Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        \$categoriesData = [
            [
                'title'  => 'TestTitleCategoryController1',
                'bundle' => 'page',
                ],
            [
                'title'  => 'TestTitleCategoryController2',
                'bundle' => 'global',
            ],
        ];
        /** @var CategoryModel \$model */
        \$model      = self::\$container->get('mautic.category.model.category');

        foreach (\$categoriesData as \$categoryData) {
            \$category = new Category();
            \$category->setIsPublished(true)
                ->setTitle(\$categoryData['title'])
                ->setBundle(\$categoryData['bundle']);
            \$model->saveEntity(\$category);
        }
    }

    /**
     * Get all results without filtering.
     */
    public function testIndexActionWhenNotFiltered(): void
    {
        \$this->client->request('GET', '/s/categories?tmpl=list&bundle=category');
        \$clientResponse         = \$this->client->getResponse();
        \$clientResponseContent  = \$clientResponse->getContent();

        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
        \$this->assertStringContainsString('TestTitleCategoryController1', \$clientResponseContent, 'The return must contain TestTitleCategoryController1');
        \$this->assertStringContainsString('TestTitleCategoryController2', \$clientResponseContent, 'The return must contain TestTitleCategoryController2');
    }

    /**
     * Get a result with filter.
     */
    public function testIndexActionWhenFiltered(): void
    {
        \$this->client->request('GET', '/s/categories/page?tmpl=list&bundle=page');
        \$clientResponse         = \$this->client->getResponse();
        \$clientResponseContent  = \$clientResponse->getContent();

        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
        \$this->assertStringContainsString('TestTitleCategoryController1', \$clientResponseContent, 'The return must contain TestTitleCategoryController1');
        \$this->assertStringNotContainsString('TestTitleCategoryController2', \$clientResponseContent, 'The return must not contain TestTitleCategoryController2');
    }

    public function testNewActionWithInForm()
    {
        \$crawler                = \$this->client->request(Request::METHOD_GET, 's/categories/category/new');
        \$clientResponse         = json_decode(\$this->client->getResponse()->getContent(), true);
        \$html                   = \$clientResponse['newContent'];
        \$crawler->addHtmlContent(\$html);
        \$saveButton = \$crawler->selectButton('category_form[buttons][save]');
        \$form       = \$saveButton->form();
        \$form['category_form[bundle]']->setValue('category');
        \$form['category_form[title]']->setValue('Test');
        \$form['category_form[isPublished]']->setValue(1);
        \$form['category_form[inForm]']->setValue(1);

        \$this->client->submit(\$form);
        Assert::assertTrue(\$this->client->getResponse()->isOk());
        \$clientResponse = \$this->client->getResponse();
        \$body           = json_decode(\$clientResponse->getContent(), true);
        \$this->assertArrayHasKey('categoryId', \$body);
        \$this->assertArrayHasKey('categoryName', \$body);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Tests/Controller/CategoryControllerFunctionalTest.php";
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
        return new Source("", "@bundles/CategoryBundle/Tests/Controller/CategoryControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Tests/Controller/CategoryControllerFunctionalTest.php");
    }
}
