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

/* @bundles/LeadBundle/Tests/Entity/TagTest.php */
class __TwigTemplate_4a9f37ca50789d9d74f838ce1fdf47b1898ad4d14b2d5f13b8066aafc3b8abdf extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\Tag;

class TagTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSetTagByConstructor()
    {
        \$entity = new Tag('tagA');

        \$this->assertSame('tagA', \$entity->getTag());
    }

    public function testSetTagBySetter()
    {
        \$entity = new Tag();
        \$entity->setTag('tagA');

        \$this->assertSame('tagA', \$entity->getTag());
    }

    public function testTagValidation(): void
    {
        \$sampleTags = [
            'hello world'        => 'hello world',
            'hello\" world'       => 'hello\" world',
            'trim whitespace'    => ' trim whitespace ',
            'trim tab'           => \"\\ttrim tab\\t\",
            'console.log(hello)' => '<script>console.log(hello)</script>',
            'oěř§ůú.'            => 'oěř§ůú.',
        ];

        foreach (\$sampleTags as \$expected => \$tag) {
            \$entity = new Tag(\$tag);
            \$this->assertSame(\$expected, \$entity->getTag());
        }
    }

    public function testDisabledValidation()
    {
        \$sampleTags = [
            'hello world'      => 'hello world',
            'hello&#34; world' => 'hello&#34; world',
            'oěř§ůú.'          => 'oěř§ůú.',
        ];

        foreach (\$sampleTags as \$expected => \$tag) {
            \$entity = new Tag(\$tag, false);
            \$this->assertSame(\$expected, \$entity->getTag());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/TagTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/TagTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/TagTest.php");
    }
}
