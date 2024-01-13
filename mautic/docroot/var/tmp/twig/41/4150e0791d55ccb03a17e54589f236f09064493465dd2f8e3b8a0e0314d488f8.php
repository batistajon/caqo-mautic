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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ru.html.js */
class __TwigTemplate_76649b1248b2342ef6b458aa486c7328e48b50d2193aab7933b3f98cc792138d extends Template
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
        echo "<h2>Советы по работе</h2>
<p>Работа с пользовательским интерфейсом похожа на стандартный файловый менеджер операционной системы. Однако перетаскивание в мобильных браузерах невозможно.</p>
<ul>
\t<li>Щелкните правой кнопкой мыши или используйте «длинный тап», чтобы отобразить контекстное меню.</li>
\t<li>Перетащите в дерево папок или текущую рабочую область для перемещения / копирования элементов.</li>
\t<li>Выбор элемента в рабочей области может быть расширен с помощью клавиши Shift или Alt (Option).</li>
\t<li>Перетащите в папку назначения или рабочую область для загрузки файлов и папок.</li>
\t<li>В диалоговом окне загрузки можно использовать вставку данных или списков URL-адресов из буфера обмена, а также перетаскивать из других браузеров или файловых менеджеров и т.д.</li>
\t<li>Начните перетаскивание, нажав Alt (Option), чтобы перетащить за пределы браузера. Это запустить процесс скачивания в Google Chrome.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ru.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ru.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ru.html.js");
    }
}
