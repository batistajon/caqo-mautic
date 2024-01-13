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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/quicklook.unzip.js */
class __TwigTemplate_fb894bdf1af5e8cb557bbc0ed58c66d8062823d0f510ed8fda2c6f9fbb68a894 extends Template
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
\tunzipFiles = function() {
\t\t/** @type {Array.<string>} */
\t\tvar filenameList = [];
\t\t/** @type {number} */
\t\tvar i;
\t\t/** @type {number} */
\t\tvar il;
\t\t/** @type {Array.<Zlib.Unzip.FileHeader>} */
\t\tvar fileHeaderList;
\t\t// need check this.Y when update cdns.zlibUnzip
\t\tthis.Y();
\t\tfileHeaderList = this.i;
\t\tfor (i = 0, il = fileHeaderList.length; i < il; ++i) {
\t\t\t// need check fileHeaderList[i].J when update cdns.zlibUnzip
\t\t\tfilenameList[i] = fileHeaderList[i].filename + (fileHeaderList[i].J? ' ({formatSize(' + fileHeaderList[i].J + ')})' : '');
\t\t}
\t\treturn filenameList;
\t},
\ttarFiles = function(tar) {
\t\tvar filenames = [],
\t\t\ttarlen = tar.length,
\t\t\toffset = 0,
\t\t\ttoStr = function(arr) {
\t\t\t\treturn String.fromCharCode.apply(null, arr).replace(/\\0+\$/, '');
\t\t\t},
\t\t\th, name, prefix, size, dbs;
\t\twhile (offset < tarlen && tar[offset] !== 0) {
\t\t\th = tar.subarray(offset, offset + 512);
\t\t\tname = toStr(h.subarray(0, 100));
\t\t\tif (prefix = toStr(h.subarray(345, 500))) {
\t\t\t\tname = prefix + name;
\t\t\t}
\t\t\tsize = parseInt(toStr(h.subarray(124, 136)), 8);
\t\t\tdbs = Math.ceil(size / 512) * 512;
\t\t\tif (name === '././@LongLink') {
\t\t\t\tname = toStr(tar.subarray(offset + 512, offset + 512 + dbs));
\t\t\t}
\t\t\t(name !== 'pax_global_header') && filenames.push(name + (size? ' ({formatSize(' + size + ')})': ''));
\t\t\toffset = offset + 512 + dbs;
\t\t}
\t\treturn filenames;
\t};

self.res = {};
if (type === 'tar') {
\tself.res.files = tarFiles(new Uint8Array(bin));
} else if (type === 'zip') {
\tself.res.files = unzipFiles.call(new Zlib.Unzip(new Uint8Array(bin)));
} else if (type === 'gzip') {
\tself.res.files = tarFiles((new Zlib.Gunzip(new Uint8Array(bin))).decompress());
} else if (type === 'bzip2') {
\tself.res.files = tarFiles(self.bzip2.simple(self.bzip2.array(new Uint8Array(bin))));
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/quicklook.unzip.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/quicklook.unzip.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/worker/quicklook.unzip.js");
    }
}
