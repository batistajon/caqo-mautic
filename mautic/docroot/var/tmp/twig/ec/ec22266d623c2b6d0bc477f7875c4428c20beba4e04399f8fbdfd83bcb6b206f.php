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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/cursors/cursor-disabled.svg */
class __TwigTemplate_2f629ceebc0b89fba8e1024ff33ef682951727495f15d8c251270f55584a739f extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>
<svg width=\"16px\" height=\"16px\" viewBox=\"0 0 256 256\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">

    <title>cursor_disabled</title>
    <desc></desc>
    <defs></defs>
    <g id=\"Page-4\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"cursor_disabled_5\">
            <g id=\"cursor_disabled_illustrator\" transform=\"translate(24.000000, 2.000000)\">
                <g id=\"Layer_1\">
                    <path d=\"M225,14 C227.8,14 230,11.8 230,9 L230,5 C230,2.2 227.8,0 225,0 L127,0 C124.2,0 122,2.2 122,5 L122,9 C122,11.8 124.2,14 127,14 L158,14 L158,26.3 C172.4,34 185,44.6 195,57.4 L195,14 L225,14 L225,14 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M158,228.7 L158,238 L134.5,238 C130.6,239.1 126.7,239.9 122.6,240.6 C122.2,241.3 121.9,242.1 121.9,243 L121.9,247 C121.9,249.8 124.1,252 126.9,252 L224.9,252 C227.7,252 229.9,249.8 229.9,247 L229.9,243 C229.9,240.2 227.7,238 224.9,238 L194.9,238 L194.9,197.6 C185,210.4 172.4,221 158,228.7 L158,228.7 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M54.7,107.6 C53.9,110.7 51.1,112.9 41.8,116.1 C35.6,118.3 31.9,121.1 29.5,124.5 C29.5,125.5 29.4,126.4 29.4,127.4 C29.4,134.1 30.3,140.7 32,146.9 L93.9,146.9 L54.7,107.6 L54.7,107.6 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M70.8,13 C70.7,13 70.6,13.1 70.5,13.3 C65.9,13.7 58.9,15.5 54.6,24.4 C63.2,20.2 72.5,17.1 82.2,15.1 C77.4,12.7 72.6,13 70.8,13 L70.8,13 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M55,170 L55,183.7 C58.7,187 62.7,189.9 67,192.3 L67,170 L78,170 L78,197.6 C81.9,199.1 85.9,200.2 90,201 L90,170 L101,170 L101,202.4 C102.2,202.5 103.3,202.5 104.5,202.5 C109.4,202.5 114.3,202 119.1,201.1 C119.3,193.5 119.5,182.8 119.6,172.6 L105.1,158 L36.1,158 C38.3,162.8 40.9,167.4 44,171.7 L44,170 L55,170 L55,170 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M26.3,211.5 C26.3,211.5 24.6,222.6 36.8,222.6 L40.8,222.6 C35.7,219.1 30.8,215.3 26.3,211.1 L26.3,211.5 L26.3,211.5 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M172.1,159.8 C176.9,149.8 179.4,138.7 179.4,127.5 C179.4,107.1 171.2,88.6 158,75.1 L158,145.7 L172.1,159.8 L172.1,159.8 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M72.2,59.9 L91.2,78.9 C92.3,73 93.7,65.4 94.1,53.3 C86.5,54.3 79.1,56.6 72.2,59.9 L72.2,59.9 Z\" id=\"Shape\" fill=\"#000000\"></path>
                    <path d=\"M119.7,158 L119.2,158 L119.7,158.5 L119.7,158 L119.7,158 Z\" id=\"Shape\" fill=\"#FF0000\"></path>
                    <path d=\"M195,75.3 C186.1,59.9 173.3,46.9 158,37.8 C142.3,28.4 124,23 104.5,23 C99.7,23 95,23.3 90.4,24 C86.3,24.6 82.3,25.3 78.3,26.4 C73.4,27.7 68.7,29.3 64.1,31.2 C59.6,33.1 55.3,35.3 51.2,37.7 C20.6,55.9 0,89.3 0,127.5 C0,153.8 9.8,177.9 25.9,196.3 C31.3,202.4 37.3,207.9 44,212.6 C47.5,215.1 51.2,217.4 55,219.5 C57,220.6 59,221.6 61.1,222.5 C74.3,228.6 89,231.9 104.5,231.9 C124,231.9 142.3,226.5 158,217.1 C173.3,207.9 186.1,195 195,179.6 C203.9,164.2 209,146.4 209,127.4 C209,108.5 203.9,90.7 195,75.3 L195,75.3 Z M151.2,198.5 C141.4,205 130.4,209.3 118.9,211.3 C114.2,212.1 109.4,212.5 104.5,212.5 C103.3,212.5 102.2,212.5 101,212.4 C97.3,212.2 93.6,211.8 90,211.2 C85.9,210.5 81.9,209.5 78,208.2 C74.2,207 70.5,205.5 67,203.7 C62.8,201.6 58.8,199.2 55,196.5 C51.1,193.7 47.4,190.5 44,187.1 C36,179 29.6,169.2 25.4,158.4 C21.6,148.8 19.6,138.4 19.6,127.5 C19.6,110.8 24.4,94.7 33.6,80.8 L37,75.7 L55.7,94.4 L108.4,147.1 L119.4,158.1 L119.9,158.1 L119.9,158.6 L156.5,195.2 L151.2,198.5 L151.2,198.5 Z M177.7,170.7 L174.4,176.2 L158,159.9 L89.4,91.3 L55.8,57.6 L61.3,54.3 C71.4,48.3 82.6,44.6 94.2,43.1 C97.6,42.7 101,42.5 104.5,42.5 C124.8,42.5 143.4,49.6 158,61.5 C177.2,77.1 189.4,100.8 189.4,127.4 C189.4,142.7 185.4,157.7 177.7,170.7 L177.7,170.7 Z\" id=\"Shape\" fill=\"#FF0000\"></path>
                </g>
            </g>
        </g>
    </g>
</svg>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/cursors/cursor-disabled.svg";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/cursors/cursor-disabled.svg", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/copyformatting/cursors/cursor-disabled.svg");
    }
}
