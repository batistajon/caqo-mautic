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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/flash/images/placeholder.png */
class __TwigTemplate_56efe9e080bc9507056297381d6b127873a5ef528a5c1f4f87d5ad3cc0808b1a extends Template
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
        echo "�PNG

\000\000\000
IHDR\000\000\000;\000\000\000\000\000\000�W�\000\000\0003PLTE�33�\000\000�\"\"��DD����������ww�������������UU�ii����ff�M3j\000\000\000�IDATx^�I
�0\0005�׬��kk��\\
Yz��\"�x\$���,B��q���H5ۄ����������awU���@�J��N�Ht7x��I_כ�֚m�s���V��E�Wf��@�r}�uq\"ꉲ&�t�o��t���
��/�=}�\000\000\000\000IEND�B`�";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/flash/images/placeholder.png";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/flash/images/placeholder.png", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/flash/images/placeholder.png");
    }
}
