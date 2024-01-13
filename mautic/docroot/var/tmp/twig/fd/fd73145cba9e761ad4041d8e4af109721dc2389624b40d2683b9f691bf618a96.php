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

/* @bundles/SmsBundle/Exception/NumberNotFoundException.php */
class __TwigTemplate_cbf6b8ca8650c7a3defd0ba320a6a0c754e5543fe05a368db55373e5b2522dae extends Template
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

namespace Mautic\\SmsBundle\\Exception;

use Throwable;

class NumberNotFoundException extends \\Exception
{
    /***
     * @var string
     */
    private \$number;

    /**
     * NumberNotFoundException constructor.
     *
     * @param string \$number
     * @param string \$message
     * @param int    \$code
     */
    public function __construct(\$number, \$message = '', \$code = 0, Throwable \$previous = null)
    {
        \$this->number = \$number;

        if (!\$message) {
            \$message = \"Phone number '{\$number}' not found\";
        }

        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return \$this->number;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Exception/NumberNotFoundException.php";
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
        return new Source("", "@bundles/SmsBundle/Exception/NumberNotFoundException.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Exception/NumberNotFoundException.php");
    }
}
