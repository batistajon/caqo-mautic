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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ko.html.js */
class __TwigTemplate_eb61f89f3313427f935c7d275b412b42162a97673ce99733263d576932590d2a extends Template
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
        echo "<h2>사용 팁</h2>
<p>UI 조작은 운영체제의 표준 파일 관리자를 사용하는 방법과 비슷합니다. 하지만 모바일 브라우저에서는 드래그앤드롭을 사용할 수 없습니다. </p>
<ul>
\t<li>오른쪽 클릭하거나 길게 누르면 컨텍스트 메뉴가 나타납니다.</li>
\t<li>이동/복사하려면 폴더 트리 또는 원하는 폴더로 드래그앤드롭하십시오.</li>
\t<li>작업공간에서 항목을 선택하려면 Shift또는 Alt(Option) 키를 사용하여 선택 영역을 넓힐 수 있습니다.</li>
\t<li>업로드 대상 폴더 또는 작업 영역으로 파일및 폴더를 드래그앤드롭하여 업로드할 수 있습니다.</li>
\t<li>다른 브라우저 또는 파일관리자등에서 드래그앤드롭하거나, 클립보드를 통해 데이터또는 URL을 복사/붙여넣어 업로드할 수 있습니다.</li>
\t<li>크롬브라우저의 경우, Alt(Option) 키를 누른 상태에서 브라우저 밖으로 드래그앤드롭하면 다운로드가 가능합니다.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ko.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ko.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ko.html.js");
    }
}
