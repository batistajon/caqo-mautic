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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-vi.js */
class __TwigTemplate_6147666837dc73346d6f3dad5c16177e80792ddf4e4fa4171276cafe23be0865 extends Template
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
        echo "/*! jQuery UI - v1.12.1 - 2016-09-15
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.vi={closeText:\"Đóng\",prevText:\"&#x3C;Trước\",nextText:\"Tiếp&#x3E;\",currentText:\"Hôm nay\",monthNames:[\"Tháng Một\",\"Tháng Hai\",\"Tháng Ba\",\"Tháng Tư\",\"Tháng Năm\",\"Tháng Sáu\",\"Tháng Bảy\",\"Tháng Tám\",\"Tháng Chín\",\"Tháng Mười\",\"Tháng Mười Một\",\"Tháng Mười Hai\"],monthNamesShort:[\"Tháng 1\",\"Tháng 2\",\"Tháng 3\",\"Tháng 4\",\"Tháng 5\",\"Tháng 6\",\"Tháng 7\",\"Tháng 8\",\"Tháng 9\",\"Tháng 10\",\"Tháng 11\",\"Tháng 12\"],dayNames:[\"Chủ Nhật\",\"Thứ Hai\",\"Thứ Ba\",\"Thứ Tư\",\"Thứ Năm\",\"Thứ Sáu\",\"Thứ Bảy\"],dayNamesShort:[\"CN\",\"T2\",\"T3\",\"T4\",\"T5\",\"T6\",\"T7\"],dayNamesMin:[\"CN\",\"T2\",\"T3\",\"T4\",\"T5\",\"T6\",\"T7\"],weekHeader:\"Tu\",dateFormat:\"dd/mm/yy\",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.vi),a.regional.vi});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-vi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-vi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-vi.js");
    }
}