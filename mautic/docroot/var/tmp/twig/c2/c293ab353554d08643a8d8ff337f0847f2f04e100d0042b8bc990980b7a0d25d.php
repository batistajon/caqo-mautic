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

/* @bundles/ConfigBundle/Tests/Event/ConfigEventTest.php */
class __TwigTemplate_01f055c875d27f39f2879df753e758213994dd1b692bbdde63d1303b77069f61 extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Event;

use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ConfigEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetSetConfig()
    {
        // Config not defined
        \$config   = [];
        \$paramBag = \$this->createMock(ParameterBag::class);
        \$event    = new ConfigEvent(\$config, \$paramBag);
        \$key      = 'undefined';
        \$this->assertEquals([], \$event->getConfig(\$key));

        // Config defined with setter
        \$key    = 'defined';
        \$config = ['config' => []];
        \$this->assertNull(\$event->setConfig(\$config, \$key));
        \$this->assertEquals(\$config, \$event->getConfig(\$key));

        // Config not found by key so complete config returned;
        \$undefinedKey = 'undefined';
        \$this->assertEquals([], \$event->getConfig(\$undefinedKey));

        // Get complete config
        \$config = [\$key => \$config];
        \$this->assertEquals(\$config, \$event->getConfig());
    }

    public function testGetSetPreserved()
    {
        \$config   = [];
        \$paramBag = \$this->createMock(ParameterBag::class);
        \$event    = new ConfigEvent(\$config, \$paramBag);

        \$this->assertEquals([], \$event->getPreservedFields());

        \$preserved = 'preserved';
        \$result    = [\$preserved];
        \$this->assertNull(\$event->unsetIfEmpty(\$preserved));
        \$this->assertEquals(\$result, \$event->getPreservedFields());

        \$preserved = ['preserved' => 'value'];
        \$result    = array_merge(\$result, \$preserved);
        \$this->assertNull(\$event->unsetIfEmpty(\$preserved));
        \$this->assertEquals(\$result, \$event->getPreservedFields());
    }

    public function testGetSetErrors()
    {
        \$config   = [];
        \$paramBag = \$this->createMock(ParameterBag::class);
        \$event    = new ConfigEvent(\$config, \$paramBag);

        \$this->assertEquals([], \$event->getErrors());

        \$message  = 'message';
        \$messages = [\$message => []];
        \$this->assertEquals(\$event, \$event->setError(\$message));
        \$this->assertEquals(\$messages, \$event->getErrors());

        \$message     = 'message';
        \$messageVars = ['var' => 'value'];
        \$messages    = [\$message => \$messageVars];
        \$this->assertEquals(\$event, \$event->setError(\$message, \$messageVars));
        \$this->assertEquals(\$messages, \$event->getErrors());

        \$message                   = 'message';
        \$messageVars               = ['var' => 'value'];
        \$key                       = 'key';
        \$field                     = 'field';
        \$fieldErrors[\$key][\$field] = [
            \$message,
            \$messageVars,
        ];
        \$this->assertEquals(\$event, \$event->setError(\$message, \$messageVars, \$key, \$field));
        \$this->assertEquals(\$fieldErrors, \$event->getFieldErrors());
    }

    public function testGetFileContent()
    {
        \$config   = [];
        \$paramBag = \$this->createMock(ParameterBag::class);
        \$event    = new ConfigEvent(\$config, \$paramBag);

        \$fileContent = 'content';
        \$fileHandler = tmpfile();
        \$realPath    = stream_get_meta_data(\$fileHandler)['uri'];
        fwrite(\$fileHandler, ' '.\$fileContent);

        \$uploadedFile = \$this->createMock(UploadedFile::class);
        \$uploadedFile->expects(\$this->once())
            ->method('getRealPath')
            ->willReturn(\$realPath);

        \$this->assertEquals(\$fileContent, \$event->getFileContent(\$uploadedFile));
        \$this->assertFalse(file_exists(\$realPath));
    }

    public function testEncodeFileContents()
    {
        \$config   = [];
        \$paramBag = \$this->createMock(ParameterBag::class);
        \$event    = new ConfigEvent(\$config, \$paramBag);

        \$string = 'řčžýřžýčř';
        \$result = 'xZnEjcW+w73FmcW+w73EjcWZ';
        \$this->assertEquals(\$result, \$event->encodeFileContents(\$string));
    }

    public function testNormalizedDataGetSet()
    {
        \$config   = [];
        \$paramBag = \$this->createMock(ParameterBag::class);
        \$event    = new ConfigEvent(\$config, \$paramBag);

        \$origNormData = ['orig'];

        \$this->assertInstanceOf(ConfigEvent::class, \$event->setOriginalNormData(\$origNormData));
        \$this->assertEquals(\$origNormData, \$event->getOriginalNormData());

        \$normData = ['norm'];

        \$this->assertNull(\$event->setNormData(\$normData));
        \$this->assertEquals(\$normData, \$event->getNormData());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Tests/Event/ConfigEventTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Event/ConfigEventTest.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Tests/Event/ConfigEventTest.php");
    }
}