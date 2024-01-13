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

/* @bundles/CoreBundle/Assets/js/libraries/11.jquery.playsound.js */
class __TwigTemplate_713f81f199cb15e4a7932364f0518e67a7d209f884dabd70f6410cc0359ac783 extends Template
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
        echo "/**
 * @author Alexander Manzyuk <admsev@gmail.com>
 * Copyright (c) 2012 Alexander Manzyuk - released under MIT License
 * https://github.com/admsev/jquery-play-sound
 * Usage: \$.playSound('http://example.org/sound.mp3');
 **/

(function(\$){

    \$.extend({
        playSound: function(){
            return \$(\"<embed src='\"+arguments[0]+\".mp3' hidden='true' autostart='true' loop='false' class='playSound'>\" + \"<audio class='playSound' autoplay='autoplay' style='display:none;' controls='controls'><source src='\"+arguments[0]+\".mp3' /><source src='\"+arguments[0]+\".ogg' /></audio>\").appendTo('#app-content');
        }
    });

})(jQuery);";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/11.jquery.playsound.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/11.jquery.playsound.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/11.jquery.playsound.js");
    }
}
