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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/tr.html.js */
class __TwigTemplate_cd096b41660ff6aa54235fe7eb7fe6cd5aa8b7ef0423e4a84d6f814945eb688a extends Template
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
        echo "<h2>İşlem İpuçları</h2>
<p>Kullanıcı arayüzündeki işlem, işletim sisteminin standart dosya yöneticisine benzer. Ancak Sürükle ve Bırak özelliği mobil tarayıcılarda mümkün değildir. </p>
<ul>
\t<li>Bağlam menüsünü göstermek için sağ tıklayın veya uzun dokunun.</li>
\t<li>Öğeleri taşımak/kopyalamak için klasör ağacına veya geçerli çalışma alanına sürükleyip bırakın.</li>
\t<li>Çalışma alanındaki öğe seçimi Shift veya Alt (Seçenek) tuşuyla genişletilebilir.</li>
\t<li>Dosya ve klasör yüklemek için hedef klasöre veya çalışma alanına sürükleyip bırakın.</li>
\t<li>Yükleme iletişim kutusu, pano verilerini veya URL listelerini yapıştırma/bırakma ve diğer tarayıcı veya dosya yöneticilerinden Sürükle ve Bırak vb.</li>
\t<li>Dış tarayıcıya sürüklemek için Alt (Seçenek) tuşuna basarak sürükleyin. Google Chrome ile indirme işlemi olacak.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/tr.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/tr.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/tr.html.js");
    }
}
