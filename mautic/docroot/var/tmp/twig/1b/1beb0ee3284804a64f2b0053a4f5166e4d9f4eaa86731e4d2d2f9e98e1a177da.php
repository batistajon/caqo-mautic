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

/* @bundles/FormBundle/Tests/Controller/Api/FormApiControllerFunctionalTest.php */
class __TwigTemplate_d711c5fe413b2ca67e4667fe06eb247051a29f4bf457caa7e9d126b89e64c8b3 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Controller\\Api;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Symfony\\Component\\HttpFoundation\\Response;

class FormApiControllerFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    public function testFormWorkflow()
    {
        \$payload = [
            'name'        => 'Form API test',
            'formType'    => 'standalone',
            'isPublished' => true,
            'description' => 'Functional API test',
            'fields'      => [
                [
                    'label'     => 'Email',
                    'alias'     => 'email',
                    'type'      => 'text',
                    'leadField' => 'email',
                ],
            ],
        ];

        // Create:
        \$this->client->request('POST', '/api/forms/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        if (!empty(\$response['errors'][0])) {
            \$this->fail(\$response['errors'][0]['code'].': '.\$response['errors'][0]['message']);
        }
        \$this->assertSame(Response::HTTP_CREATED, \$clientResponse->getStatusCode(), 'Return code must be 201.');

        \$formId = \$response['form']['id'];
        \$this->assertGreaterThan(0, \$formId);
        \$this->assertEquals(\$payload['name'], \$response['form']['name']);
        \$this->assertEquals(\$payload['formType'], \$response['form']['formType']);
        \$this->assertEquals(\$payload['isPublished'], \$response['form']['isPublished']);
        \$this->assertEquals(\$payload['description'], \$response['form']['description']);
        \$this->assertIsArray(\$response['form']['fields']);
        \$this->assertCount(count(\$payload['fields']), \$response['form']['fields']);
        for (\$i = 0; \$i < count(\$payload['fields']); ++\$i) {
            \$this->assertEquals(\$payload['fields'][\$i]['label'], \$response['form']['fields'][\$i]['label']);
            \$this->assertEquals(\$payload['fields'][\$i]['alias'], \$response['form']['fields'][\$i]['alias']);
            \$this->assertEquals(\$payload['fields'][\$i]['type'], \$response['form']['fields'][\$i]['type']);
            \$this->assertEquals(\$payload['fields'][\$i]['leadField'], \$response['form']['fields'][\$i]['leadField']);
        }

        // Edit:
        \$this->client->request('PATCH', \"/api/forms/{\$formId}/edit\", ['name' => 'Form API renamed']);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$this->assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());
        \$this->assertSame(\$formId, \$response['form']['id'], 'ID of the created form does not match with the edited one.');
        \$this->assertEquals('Form API renamed', \$response['form']['name']);
        \$this->assertEquals(\$payload['formType'], \$response['form']['formType']);
        \$this->assertEquals(\$payload['isPublished'], \$response['form']['isPublished']);
        \$this->assertEquals(\$payload['description'], \$response['form']['description']);
        \$this->assertIsArray(\$response['form']['fields']);
        \$this->assertCount(count(\$payload['fields']), \$response['form']['fields']);
        for (\$i = 0; \$i < count(\$payload['fields']); ++\$i) {
            \$this->assertEquals(\$payload['fields'][\$i]['label'], \$response['form']['fields'][\$i]['label']);
            \$this->assertEquals(\$payload['fields'][\$i]['alias'], \$response['form']['fields'][\$i]['alias']);
            \$this->assertEquals(\$payload['fields'][\$i]['type'], \$response['form']['fields'][\$i]['type']);
            \$this->assertEquals(\$payload['fields'][\$i]['leadField'], \$response['form']['fields'][\$i]['leadField']);
        }

        // Get:
        \$this->client->request('GET', \"/api/forms/{\$formId}\");
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$this->assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());
        \$this->assertSame(\$formId, \$response['form']['id'], 'ID of the created form does not match with the fetched one.');
        \$this->assertEquals('Form API renamed', \$response['form']['name']);
        \$this->assertEquals(\$payload['formType'], \$response['form']['formType']);
        \$this->assertEquals(\$payload['isPublished'], \$response['form']['isPublished']);
        \$this->assertEquals(\$payload['description'], \$response['form']['description']);
        \$this->assertIsArray(\$response['form']['fields']);
        \$this->assertCount(count(\$payload['fields']), \$response['form']['fields']);
        for (\$i = 0; \$i < count(\$payload['fields']); ++\$i) {
            \$this->assertEquals(\$payload['fields'][\$i]['label'], \$response['form']['fields'][\$i]['label']);
            \$this->assertEquals(\$payload['fields'][\$i]['alias'], \$response['form']['fields'][\$i]['alias']);
            \$this->assertEquals(\$payload['fields'][\$i]['type'], \$response['form']['fields'][\$i]['type']);
            \$this->assertEquals(\$payload['fields'][\$i]['leadField'], \$response['form']['fields'][\$i]['leadField']);
        }

        // Delete:
        \$this->client->request('DELETE', \"/api/forms/{\$formId}/delete\");
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());

        // Get (ensure it's deleted):
        \$this->client->request('GET', \"/api/forms/{\$formId}\");
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        \$this->assertSame(404, \$clientResponse->getStatusCode());
        \$this->assertSame(404, \$response['errors'][0]['code']);
    }

    public function testFormWithChangeTagsAction()
    {
        // Create tag:
        \$tag1Payload = ['tag' => 'add this'];
        \$tag2Payload = ['tag' => 'remove this'];

        \$this->client->request('POST', '/api/tags/new', \$tag1Payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$tag1Id         = \$response['tag']['id'];

        \$this->client->request('POST', '/api/tags/new', \$tag2Payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);
        \$tag2Id         = \$response['tag']['id'];

        \$payload = [
            'name'        => 'Form API test',
            'formType'    => 'standalone',
            'isPublished' => true,
            'description' => 'Functional API test',
            'fields'      => [
                [
                    'label'     => 'lab',
                    'alias'     => 'email',
                    'type'      => 'text',
                    'leadField' => 'email',
                ],
            ],
            'actions' => [
                [
                    'name'        => 'Add tags to contact',
                    'description' => 'action description',
                    'type'        => 'lead.changetags',
                    'order'       => 1,
                    'properties'  => [
                        'add_tags'    => [\$tag1Id],
                        'remove_tags' => [\$tag2Id],
                    ],
                ],
            ],
        ];

        // Create form with lead.changetags action:
        \$this->client->request('POST', '/api/forms/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        if (!empty(\$response['errors'][0])) {
            \$this->fail(\$response['errors'][0]['code'].': '.\$response['errors'][0]['message']);
        }
        \$this->assertSame(Response::HTTP_CREATED, \$clientResponse->getStatusCode(), 'Return code must be 201.');

        \$formId = \$response['form']['id'];
        \$this->assertGreaterThan(0, \$formId);
        \$this->assertEquals(\$payload['name'], \$response['form']['name']);
        \$this->assertEquals(\$payload['formType'], \$response['form']['formType']);
        \$this->assertEquals(\$payload['isPublished'], \$response['form']['isPublished']);
        \$this->assertEquals(\$payload['description'], \$response['form']['description']);
        \$this->assertIsArray(\$response['form']['fields']);
        \$this->assertCount(count(\$payload['fields']), \$response['form']['fields']);
        for (\$i = 0; \$i < count(\$payload['fields']); ++\$i) {
            \$this->assertEquals(\$payload['fields'][\$i]['label'], \$response['form']['fields'][\$i]['label']);
            \$this->assertEquals(\$payload['fields'][\$i]['alias'], \$response['form']['fields'][\$i]['alias']);
            \$this->assertEquals(\$payload['fields'][\$i]['type'], \$response['form']['fields'][\$i]['type']);
            \$this->assertEquals(\$payload['fields'][\$i]['leadField'], \$response['form']['fields'][\$i]['leadField']);
        }
        \$this->assertIsArray(\$response['form']['actions']);
        \$this->assertCount(count(\$payload['actions']), \$response['form']['actions']);
        \$this->assertEquals(\$payload['actions'][0]['name'], \$response['form']['actions'][0]['name']);
        \$this->assertEquals(\$payload['actions'][0]['description'], \$response['form']['actions'][0]['description']);
        \$this->assertEquals(\$payload['actions'][0]['type'], \$response['form']['actions'][0]['type']);
        \$this->assertEquals(\$payload['actions'][0]['order'], \$response['form']['actions'][0]['order']);
        \$this->assertIsArray(\$response['form']['actions'][0]['properties']['add_tags']);
        \$this->assertIsArray(\$response['form']['actions'][0]['properties']['remove_tags']);
        \$this->assertEquals(\$tag1Payload['tag'], \$response['form']['actions'][0]['properties']['add_tags'][0]);
        \$this->assertEquals(\$tag2Payload['tag'], \$response['form']['actions'][0]['properties']['remove_tags'][0]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Controller/Api/FormApiControllerFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Controller/Api/FormApiControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Controller/Api/FormApiControllerFunctionalTest.php");
    }
}
