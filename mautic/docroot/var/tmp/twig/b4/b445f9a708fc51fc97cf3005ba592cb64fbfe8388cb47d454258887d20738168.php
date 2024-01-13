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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/es.html.js */
class __TwigTemplate_1dbfca775f91fbd1b86b39056002653ef008ba8ae0701aaac4a8566990515bda extends Template
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
        echo "<h2>Consejos de operaci&oacute;n</h2>
<p>Operar en la Interfaz del Usuario es similar al administrador de archivos estandar del sistema operativo. Sin embargo, Arrastrar y soltar no es posible con los navegadores m&oacute;viles.</p>
<ul>
\t<li>Click derecho o un tap largo para mostrar el men&uacute; de contexto.</li>
\t<li>Arrastrar y soltar dentro del &aacute;rbol de carpetas o el espacio de trabajo actual para mover/copiar elementos.</li>
\t<li>La selecci&oacute;n de elementos en el espacio de trabajo puede ampliarse con la tecla Shift o Alt (Opci&oacute;n).</li>
\t<li>Arrastrar y soltar a la carpeta de destino o &aacute;rea de trabajo para cargar archivos y carpetas.</li>
\t<li>El cuadro de di&aacute;logo de carga puede aceptar pegar/soltar datos del portapapeles o listas de URL y arrastrar y soltar desde otro navegador o administrador de archivos, etc.</li>
\t<li>Iniciar a arrastrar presionando la tecla Alt (Opci&oacute;n) para arrastrar fuera del navegador. Se convertir&aacute; en una operaci&oacute;n de descarga con Google Chrome.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/es.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/es.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/es.html.js");
    }
}
