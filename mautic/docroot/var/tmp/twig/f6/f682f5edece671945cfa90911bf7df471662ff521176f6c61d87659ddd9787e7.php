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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/calcfilehash.js */
class __TwigTemplate_ad783f3c3eab5981e89fbb70605213c259c23deb6739f7827e1c9d23eedf761d extends Template
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
        echo "var type = self.data.type,
\tbin = self.data.bin,
\thashOpts = self.data.hashOpts;

self.res = {};
if (type === 'md5') {
\tlet sp = new self.SparkMD5.ArrayBuffer();
\tsp.append(bin);
\tself.res.hash = sp.end();
} else {
\tlet sha = new jsSHA('SHA' + (type.length === 5? type : ('-' + type)).toUpperCase(), 'ARRAYBUFFER'),
\t\topts = {};
\tif (type === 'ke128') {
\t\topts.shakeLen = hashOpts.shake128len;
\t} else if (type === 'ke256') {
\t\topts.shakeLen = hashOpts.shake256len;
\t}
\tsha.update(bin);
\tself.res.hash = sha.getHash('HEX', opts);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/calcfilehash.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/calcfilehash.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/calcfilehash.js");
    }
}
