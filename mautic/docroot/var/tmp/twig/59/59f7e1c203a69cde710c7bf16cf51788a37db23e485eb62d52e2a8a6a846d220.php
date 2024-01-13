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

/* @bundles/CoreBundle/Helper/ColorHelper.php */
class __TwigTemplate_2f2c53b184f44e344e318e4a43b0980d33b7a2aa282c2a233eed7f2361881c7a extends Template
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

namespace Mautic\\CoreBundle\\Helper;

/**
 * Helper class for operations with colors.
 */
class ColorHelper
{
    /**
     * @var int
     */
    protected \$red = 0;

    /**
     * @var int
     */
    protected \$green = 0;

    /**
     * @var int
     */
    protected \$blue = 0;

    /**
     * Constructor.
     *
     * @param  string in format #xxxxxx or #xxx
     */
    public function __construct(\$hex = null)
    {
        if (\$hex) {
            \$this->setHex(\$hex);
        }
    }

    /**
     * Sets random values to RGB properties. It will avoid too black or too wight colors.
     *
     * @return ColorHelper
     */
    public function buildRandomColor()
    {
        \$this->red   = rand(20, 236);
        \$this->green = rand(20, 236);
        \$this->blue  = rand(20, 236);

        return \$this;
    }

    /**
     * Populate color from hexadecimal code.
     *
     * @param  string in format #xxxxxx or #xxx
     *
     * @return ColorHelper
     */
    public function setHex(\$hex)
    {
        if (4 === strlen(\$hex)) {
            \$format          = '#%1s%1s%1s';
            list(\$r, \$g, \$b) = sscanf(\$hex, \$format);
            \$this->red       = hexdec(\"\$r\$r\");
            \$this->green     = hexdec(\"\$g\$g\");
            \$this->blue      = hexdec(\"\$b\$b\");
        } else {
            \$format                                     = '#%2x%2x%2x';
            list(\$this->red, \$this->green, \$this->blue) = sscanf(\$hex, \$format);
        }

        return \$this;
    }

    /**
     * Returns array of [R, G, B] of current state.
     *
     * @return array
     */
    public function getColorArray()
    {
        return [\$this->red, \$this->green, \$this->blue];
    }

    /**
     * Returns array of [R, G, B] of current state.
     *
     * @return string
     */
    public function toRgb()
    {
        return sprintf('rgb(%d,%d,%d)', \$this->red, \$this->green, \$this->blue);
    }

    /**
     * Returns array of [R, G, B] of current state with alpha.
     *
     * @param  float (0 - 1)
     *
     * @return string
     */
    public function toRgba(\$alpha = 1)
    {
        return sprintf('rgba(%d,%d,%d,%g)', \$this->red, \$this->green, \$this->blue, (float) \$alpha);
    }

    /**
     * Returns current color to hexadecimal hash.
     *
     * @return string
     */
    public function toHex()
    {
        \$hex = '#';
        \$hex .= str_pad(dechex(\$this->red), 2, '0', STR_PAD_LEFT);
        \$hex .= str_pad(dechex(\$this->green), 2, '0', STR_PAD_LEFT);
        \$hex .= str_pad(dechex(\$this->blue), 2, '0', STR_PAD_LEFT);

        return \$hex;
    }

    public function getRed(): int
    {
        return \$this->red;
    }

    public function getGreen(): int
    {
        return \$this->green;
    }

    public function getBlue(): int
    {
        return \$this->blue;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ColorHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ColorHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/ColorHelper.php");
    }
}
