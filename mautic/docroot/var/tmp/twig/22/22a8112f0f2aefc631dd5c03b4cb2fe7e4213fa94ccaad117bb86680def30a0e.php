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

/* @bundles/EmailBundle/Exception/InvalidEmailException.php */
class __TwigTemplate_5fc088bfd4a02bc4cb22915d029982bec6050681bdfd0b379c09e7c9271e23ec extends Template
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

namespace Mautic\\EmailBundle\\Exception;

use Mautic\\CoreBundle\\Exception\\InvalidValueException;
use Throwable;

class InvalidEmailException extends InvalidValueException
{
    /**
     * @var string
     */
    protected \$emailAddress;

    /**
     * @param string \$emailAddress
     * @param string \$message
     * @param int    \$code
     */
    public function __construct(\$emailAddress, \$message = '', \$code = 0, Throwable \$previous = null)
    {
        \$this->emailAddress = \$emailAddress;

        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return \$this->emailAddress;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Exception/InvalidEmailException.php";
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
        return new Source("", "@bundles/EmailBundle/Exception/InvalidEmailException.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Exception/InvalidEmailException.php");
    }
}
