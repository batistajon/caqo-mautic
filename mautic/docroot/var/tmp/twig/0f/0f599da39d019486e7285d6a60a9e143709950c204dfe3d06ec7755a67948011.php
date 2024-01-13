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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/vi.js */
class __TwigTemplate_ed532976fc02ec169e3fbc5f826a63439978c12dc5e68c9ce3f284a5316360d0 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"vi\",{btnIgnore:\"Bỏ qua\",btnIgnoreAll:\"Bỏ qua tất cả\",btnReplace:\"Thay thế\",btnReplaceAll:\"Thay thế tất cả\",btnUndo:\"Phục hồi lại\",changeTo:\"Chuyển thành\",errorLoading:\"Lỗi khi đang nạp dịch vụ ứng dụng: %s.\",ieSpellDownload:\"Chức năng kiểm tra chính tả chưa được cài đặt. Bạn có muốn tải về ngay bây giờ?\",manyChanges:\"Hoàn tất kiểm tra chính tả: %1 từ đã được thay đổi\",noChanges:\"Hoàn tất kiểm tra chính tả: Không có từ nào được thay đổi\",noMispell:\"Hoàn tất kiểm tra chính tả: Không có lỗi chính tả\",
noSuggestions:\"- Không đưa ra gợi ý về từ -\",notAvailable:\"Xin lỗi, dịch vụ này hiện tại không có.\",notInDic:\"Không có trong từ điển\",oneChange:\"Hoàn tất kiểm tra chính tả: Một từ đã được thay đổi\",progress:\"Đang tiến hành kiểm tra chính tả...\",title:\"Kiểm tra chính tả\",toolbar:\"Kiểm tra chính tả\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/vi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/vi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/vi.js");
    }
}
