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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/tui-icon-b.svg */
class __TwigTemplate_2ccb8c582c6c7b472b14431126eb53febf2f3e60fee34f4185a9cf679261b8f6 extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><defs/><symbol id=\"icon-b-ic-apply\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\"/>
        <path stroke=\"#555555\" d=\"M4 12.011l5 5L20.011 6\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-cancel\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\"/>
        <path stroke=\"#555555\" d=\"M6 6l12 12M18 6L6 18\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-crop\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\"/>
        <path fill=\"#555555\" d=\"M4 0h1v20a1 1 0 0 1-1-1V0zM20 17h-1V5h1v12zm0 2v5h-1v-5h1z\"/>
        <path fill=\"#555555\" d=\"M5 19h19v1H5zM4.762 4v1H0V4h4.762zM7 4h12a1 1 0 0 1 1 1H7V4z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-delete-all\" viewBox=\"0 0 24 24\">
    <g fill=\"#555555\" fill-rule=\"evenodd\">
        <path d=\"M5 23H3a1 1 0 0 1-1-1V6h1v16h2v1zm16-10h-1V6h1v7zM9 13H8v-3h1v3zm3 0h-1v-3h1v3zm3 0h-1v-3h1v3zM14.794 3.794L13 2h-3L8.206 3.794A.963.963 0 0 1 8 2.5l.703-1.055A1 1 0 0 1 9.535 1h3.93a1 1 0 0 1 .832.445L15 2.5a.965.965 0 0 1-.206 1.294zM14.197 4H8.803h5.394z\"/>
        <path d=\"M0 3h23v1H0zM11.286 21H8.714L8 23H7l1-2.8V20h.071L9.5 16h1l1.429 4H12v.2l1 2.8h-1l-.714-2zm-.357-1L10 17.4 9.071 20h1.858zM20 22h3v1h-4v-7h1v6zm-5 0h3v1h-4v-7h1v6z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-delete\" viewBox=\"0 0 24 24\">
    <g fill=\"#555555\" fill-rule=\"evenodd\">
        <path d=\"M3 6v16h17V6h1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6h1zM14.794 3.794L13 2h-3L8.206 3.794A.963.963 0 0 1 8 2.5l.703-1.055A1 1 0 0 1 9.535 1h3.93a1 1 0 0 1 .832.445L15 2.5a.965.965 0 0 1-.206 1.294zM14.197 4H8.803h5.394z\"/>
        <path d=\"M0 3h23v1H0zM8 10h1v6H8v-6zm3 0h1v6h-1v-6zm3 0h1v6h-1v-6z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-draw-free\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" d=\"M2.5 20.929C2.594 10.976 4.323 6 7.686 6c5.872 0 2.524 19 7.697 19s1.89-14.929 6.414-14.929 1.357 10.858 5.13 10.858c1.802 0 2.657-2.262 2.566-6.786\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-draw-line\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" d=\"M2 15.5h28\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-draw\" viewBox=\"0 0 24 24\">
    <g fill=\"none\">
        <path stroke=\"#555555\" d=\"M2.5 21.5H5c.245 0 .48-.058.691-.168l.124-.065.14.01c.429.028.85-.127 1.16-.437L22.55 5.405a.5.5 0 0 0 0-.707l-3.246-3.245a.5.5 0 0 0-.707 0L3.162 16.888a1.495 1.495 0 0 0-.437 1.155l.01.14-.065.123c-.111.212-.17.448-.17.694v2.5z\"/>
        <path fill=\"#555555\" d=\"M16.414 3.707l3.89 3.89-.708.706-3.889-3.889z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-filter\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\"/>
        <path fill=\"#555555\" d=\"M12 7v1H2V7h10zm6 0h4v1h-4V7zM12 16v1h10v-1H12zm-6 0H2v1h4v-1z\"/>
        <path fill=\"#555555\" d=\"M8.5 20a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7zm0-1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM15.5 11a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7zm0-1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-flip-reset\" viewBox=\"0 0 31 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M31 0H0v32h31z\"/>
        <path fill=\"#555555\" d=\"M28 16a8 8 0 0 1-8 8H3v-1h1v-7H3a8 8 0 0 1 8-8h17v1h-1v7h1zM11 9a7 7 0 0 0-7 7v7h16a7 7 0 0 0 7-7V9H11z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M24 5l3.5 3.5L24 12M7 20l-3.5 3.5L7 27\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-flip-x\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M32 32H0V0h32z\"/>
        <path fill=\"#555555\" d=\"M17 32h-1V0h1zM27.167 11l.5 3h-1.03l-.546-3h1.076zm-.5-3h-1.122L25 5h-5V4h5.153a1 1 0 0 1 .986.836L26.667 8zm1.5 9l.5 3h-.94l-.545-3h.985zm1 6l.639 3.836A1 1 0 0 1 28.819 28H26v-1h3l-.726-4h.894zM23 28h-3v-1h3v1zM13 4v1H7L3 27h10v1H3.18a1 1 0 0 1-.986-1.164l3.666-22A1 1 0 0 1 6.847 4H13z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-flip-y\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0v32h32V0z\"/>
        <path fill=\"#555555\" d=\"M0 16v1h32v-1zM11 27.167l3 .5v-1.03l-3-.546v1.076zm-3-.5v-1.122L5 25v-5H4v5.153a1 1 0 0 0 .836.986L8 26.667zm9 1.5l3 .5v-.94l-3-.545v.985zm6 1l3.836.639A1 1 0 0 0 28 28.82V26h-1v3l-4-.727v.894zM28 23v-3h-1v3h1zM4 13h1V7l22-4v10h1V3.18a1 1 0 0 0-1.164-.986l-22 3.667A1 1 0 0 0 4 6.847V13z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-flip\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\"/>
        <path fill=\"#555555\" d=\"M11 0h1v24h-1zM19 21v-1h2v-2h1v2a1 1 0 0 1-1 1h-2zm-2 0h-3v-1h3v1zm5-5h-1v-3h1v3zm0-5h-1V8h1v3zm0-5h-1V4h-2V3h2a1 1 0 0 1 1 1v2zm-5-3v1h-3V3h3zM9 3v1H2v16h7v1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-arrow-2\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21.793 18.5H2.5v-5h18.935l-7.6-8h5.872l10.5 10.5-10.5 10.5h-5.914l8-8z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-arrow-3\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M25.288 16.42L14.208 27.5H6.792l11.291-11.291L6.826 4.5h7.381l11.661 11.661-.58.258z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-arrow\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" d=\"M2.5 11.5v9h18v5.293L30.293 16 20.5 6.207V11.5h-18z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-bubble\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M22.207 24.5L16.5 30.207V24.5H8A6.5 6.5 0 0 1 1.5 18V9A6.5 6.5 0 0 1 8 2.5h16A6.5 6.5 0 0 1 30.5 9v9a6.5 6.5 0 0 1-6.5 6.5h-1.793z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-heart\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path fill-rule=\"nonzero\" stroke=\"#555555\" d=\"M15.996 30.675l1.981-1.79c7.898-7.177 10.365-9.718 12.135-13.012.922-1.716 1.377-3.37 1.377-5.076 0-4.65-3.647-8.297-8.297-8.297-2.33 0-4.86 1.527-6.817 3.824l-.38.447-.381-.447C13.658 4.027 11.126 2.5 8.797 2.5 4.147 2.5.5 6.147.5 10.797c0 1.714.46 3.375 1.389 5.098 1.775 3.288 4.26 5.843 12.123 12.974l1.984 1.806z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-load\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.314 18.867l1.951-2.53 4 5.184h-17l6.5-8.84 4.549 6.186z\"/>
        <path fill=\"#555555\" d=\"M18.01 4a11.798 11.798 0 0 0 0 1H3v24h24V14.986a8.738 8.738 0 0 0 1 0V29a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h15.01z\"/>
        <path fill=\"#555555\" d=\"M25 3h1v9h-1z\"/>
        <path stroke=\"#555555\" d=\"M22 6l3.5-3.5L29 6\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-location\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <g stroke=\"#555555\">
            <path d=\"M16 31.28C23.675 23.302 27.5 17.181 27.5 13c0-6.351-5.149-11.5-11.5-11.5S4.5 6.649 4.5 13c0 4.181 3.825 10.302 11.5 18.28z\"/>
            <circle cx=\"16\" cy=\"13\" r=\"4.5\"/>
        </g>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-polygon\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" d=\"M.576 16L8.29 29.5h15.42L31.424 16 23.71 2.5H8.29L.576 16z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-star-2\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" d=\"M19.446 31.592l2.265-3.272 3.946.25.636-3.94 3.665-1.505-1.12-3.832 2.655-2.962-2.656-2.962 1.12-3.832-3.664-1.505-.636-3.941-3.946.25-2.265-3.271L16 3.024 12.554 1.07 10.289 4.34l-3.946-.25-.636 3.941-3.665 1.505 1.12 3.832L.508 16.33l2.656 2.962-1.12 3.832 3.664 1.504.636 3.942 3.946-.25 2.265 3.27L16 29.638l3.446 1.955z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon-star\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" d=\"M25.292 29.878l-1.775-10.346 7.517-7.327-10.388-1.51L16 1.282l-4.646 9.413-10.388 1.51 7.517 7.327-1.775 10.346L16 24.993l9.292 4.885z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-icon\" viewBox=\"0 0 24 24\">
    <g fill=\"none\">
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11.923 19.136L5.424 22l.715-7.065-4.731-5.296 6.94-1.503L11.923 2l3.574 6.136 6.94 1.503-4.731 5.296L18.42 22z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-mask-load\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M18.01 4a11.798 11.798 0 0 0 0 1H3v24h24V14.986a8.738 8.738 0 0 0 1 0V29a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h15.01zM15 23a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-1a5 5 0 1 0 0-10 5 5 0 0 0 0 10z\"/>
        <path fill=\"#555555\" d=\"M25 3h1v9h-1z\"/>
        <path stroke=\"#555555\" d=\"M22 6l3.5-3.5L29 6\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-mask\" viewBox=\"0 0 24 24\">
    <g fill=\"none\">
        <circle cx=\"12\" cy=\"12\" r=\"4.5\" stroke=\"#555555\"/>
        <path fill=\"#555555\" d=\"M2 1h20a1 1 0 0 1 1 1v20a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 1v20h20V2H2z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-redo\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\" opacity=\".5\"/>
        <path fill=\"#555555\" d=\"M21 6H9a6 6 0 1 0 0 12h12v1H9A7 7 0 0 1 9 5h12v1z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M19 3l2.5 2.5L19 8\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-reset\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\" opacity=\".5\"/>
        <path fill=\"#555555\" d=\"M2 13v-1a7 7 0 0 1 7-7h13v1h-1v5h1v1a7 7 0 0 1-7 7H2v-1h1v-5H2zm7-7a6 6 0 0 0-6 6v6h12a6 6 0 0 0 6-6V6H9z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M19 3l2.5 2.5L19 8M5 16l-2.5 2.5L5 21\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-rotate-clockwise\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path fill=\"#555555\" d=\"M29 17h-.924c0 6.627-5.373 12-12 12-6.628 0-12-5.373-12-12C4.076 10.398 9.407 5.041 16 5V4C8.82 4 3 9.82 3 17s5.82 13 13 13 13-5.82 13-13z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M16 1.5l4 3-4 3\"/>
        <path fill=\"#555555\" fill-rule=\"nonzero\" d=\"M16 4h4v1h-4z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-rotate-counterclockwise\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path fill=\"#555555\" d=\"M3 17h.924c0 6.627 5.373 12 12 12 6.628 0 12-5.373 12-12 0-6.602-5.331-11.96-11.924-12V4c7.18 0 13 5.82 13 13s-5.82 13-13 13S3 24.18 3 17z\"/>
        <path fill=\"#555555\" fill-rule=\"nonzero\" d=\"M12 4h4v1h-4z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M16 1.5l-4 3 4 3\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-rotate\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h24v24H0z\"/>
        <path fill=\"#555555\" d=\"M8.349 22.254a10.002 10.002 0 0 1-2.778-1.719l.65-.76a9.002 9.002 0 0 0 2.495 1.548l-.367.931zm2.873.704l.078-.997a9 9 0 1 0-.557-17.852l-.14-.99A10.076 10.076 0 0 1 12.145 3c5.523 0 10 4.477 10 10s-4.477 10-10 10c-.312 0-.62-.014-.924-.042zm-7.556-4.655a9.942 9.942 0 0 1-1.253-2.996l.973-.234a8.948 8.948 0 0 0 1.124 2.693l-.844.537zm-1.502-5.91A9.949 9.949 0 0 1 2.88 9.23l.925.382a8.954 8.954 0 0 0-.644 2.844l-.998-.062zm2.21-5.686c.687-.848 1.51-1.58 2.436-2.166l.523.852a9.048 9.048 0 0 0-2.188 1.95l-.771-.636z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M13 1l-2.5 2.5L13 6\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-shape-circle\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <circle cx=\"16\" cy=\"16\" r=\"14.5\" stroke=\"#555555\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-shape-rectangle\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <rect width=\"27\" height=\"27\" x=\"2.5\" y=\"2.5\" stroke=\"#555555\" rx=\"1\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-shape-triangle\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16 2.5l15.5 27H.5z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-shape\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path fill=\"#555555\" d=\"M14.706 8H21a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-4h1v4h12V9h-5.706l-.588-1z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.5 1.5l7.5 13H1z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text-align-center\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M2 5h28v1H2zM8 12h16v1H8zM2 19h28v1H2zM8 26h16v1H8z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text-align-left\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M2 5h28v1H2zM2 12h16v1H2zM2 19h28v1H2zM2 26h16v1H2z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text-align-right\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M2 5h28v1H2zM14 12h16v1H14zM2 19h28v1H2zM14 26h16v1H14z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text-bold\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M7 2h2v2H7zM7 28h2v2H7z\"/>
        <path stroke=\"#555555\" stroke-width=\"2\" d=\"M9 3v12h9a6 6 0 1 0 0-12H9zM9 15v14h10a7 7 0 0 0 0-14H9z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text-italic\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M15 2h5v1h-5zM11 29h5v1h-5zM17 3h1l-4 26h-1z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text-underline\" viewBox=\"0 0 32 32\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M0 0h32v32H0z\"/>
        <path fill=\"#555555\" d=\"M8 2v14a8 8 0 1 0 16 0V2h1v14a9 9 0 0 1-18 0V2h1zM3 29h26v1H3z\"/>
        <path fill=\"#555555\" d=\"M5 2h5v1H5zM22 2h5v1h-5z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-text\" viewBox=\"0 0 24 24\">
    <g fill=\"#555555\" fill-rule=\"evenodd\">
        <path d=\"M4 3h15a1 1 0 0 1 1 1H3a1 1 0 0 1 1-1zM3 4h1v1H3zM19 4h1v1h-1z\"/>
        <path d=\"M11 3h1v18h-1z\"/>
        <path d=\"M10 20h3v1h-3z\"/>
    </g>
</symbol><symbol id=\"icon-b-ic-undo\" viewBox=\"0 0 24 24\">
    <g fill=\"none\" fill-rule=\"evenodd\">
        <path d=\"M24 0H0v24h24z\" opacity=\".5\"/>
        <path fill=\"#555555\" d=\"M3 6h12a6 6 0 1 1 0 12H3v1h12a7 7 0 0 0 0-14H3v1z\"/>
        <path stroke=\"#555555\" stroke-linecap=\"square\" d=\"M5 3L2.5 5.5 5 8\"/>
    </g>
</symbol><symbol id=\"icon-b-img-bi\" viewBox=\"0 0 257 26\">
    <g fill=\"#FDBA3B\">
        <path d=\"M26 5a8.001 8.001 0 0 0 0 16 8.001 8.001 0 0 0 0-16M51.893 19.812L43.676 5.396A.78.78 0 0 0 43 5a.78.78 0 0 0-.677.396l-8.218 14.418a.787.787 0 0 0 0 .792c.14.244.396.394.676.394h16.436c.28 0 .539-.15.678-.396a.796.796 0 0 0-.002-.792M15.767 5.231A.79.79 0 0 0 15.21 5H.791A.791.791 0 0 0 0 5.79v6.42a.793.793 0 0 0 .791.79h3.21v7.21c.001.21.082.408.234.56.147.148.347.23.558.23h6.416a.788.788 0 0 0 .792-.79V13h3.006c.413 0 .611-.082.762-.232.15-.149.23-.35.231-.559V5.791a.787.787 0 0 0-.233-.56M85.767 5.231A.79.79 0 0 0 85.21 5H70.791a.791.791 0 0 0-.791.79v6.42a.793.793 0 0 0 .791.79h3.21v7.21c.001.21.082.408.234.56.147.148.347.23.558.23h6.416a.788.788 0 0 0 .792-.79V13h3.006c.413 0 .611-.082.762-.232.15-.149.23-.35.231-.559V5.791a.787.787 0 0 0-.233-.56M65.942 9.948l2.17-3.76a.78.78 0 0 0 0-.792.791.791 0 0 0-.684-.396h-8.54A5.889 5.889 0 0 0 53 10.86a5.887 5.887 0 0 0 3.07 5.17l-2.184 3.782A.792.792 0 0 0 54.571 21h8.54a5.89 5.89 0 0 0 2.831-11.052M105.7 21h2.3V5h-2.3zM91 5h2.4v10.286c0 1.893 1.612 3.429 3.6 3.429s3.6-1.536 3.6-3.429V5h2.4v10.286c0 3.156-2.686 5.714-6 5.714-3.313 0-6-2.558-6-5.714V5zM252.148 21.128h-2.377V9.659h2.27v1.64c.69-1.299 1.792-1.938 3.304-1.938.497 0 .95.065 1.382.192l-.215 2.277a3.734 3.734 0 0 0-1.275-.213c-1.814 0-3.089 1.234-3.089 3.638v5.873zm-7.095-5.744a3.734 3.734 0 0 0-1.101-2.703c-.714-.766-1.6-1.149-2.658-1.149-1.058 0-1.944.383-2.679 1.149a3.803 3.803 0 0 0-1.08 2.703c0 1.063.368 1.978 1.08 2.722.735.746 1.62 1.128 2.68 1.128 1.058 0 1.943-.382 2.657-1.128.734-.744 1.101-1.659 1.101-2.722zm-9.916 0c0-1.682.583-3.086 1.729-4.256 1.166-1.17 2.635-1.767 4.428-1.767 1.793 0 3.262.597 4.407 1.767 1.167 1.17 1.75 2.574 1.75 4.256 0 1.7-.583 3.127-1.75 4.297-1.145 1.17-2.614 1.745-4.407 1.745-1.793 0-3.262-.575-4.428-1.745-1.146-1.17-1.729-2.596-1.729-4.297zm-1.5 3.233l.821 1.83c-.864.638-1.944.958-3.22.958-2.526 0-3.822-1.554-3.822-4.383V11.66h-2.01v-2h2.031V5.595h2.355v4.063h4.018v2h-4.018v5.405c0 1.469.605 2.191 1.793 2.191.626 0 1.318-.212 2.052-.638zm-12.43 2.51h2.375V9.66h-2.376v11.469zm1.23-12.977c-.929 0-1.642-.682-1.642-1.596 0-.873.713-1.554 1.643-1.554.885 0 1.576.681 1.576 1.554 0 .914-.69 1.596-1.576 1.596zm-6.49 7.234c0-1.086-.346-1.98-1.037-2.724-.692-.745-1.599-1.128-2.7-1.128-1.102 0-2.01.383-2.7 1.128-.692.744-1.037 1.638-1.037 2.724 0 1.084.345 2.02 1.036 2.766.691.744 1.6 1.105 2.7 1.105 1.102 0 2.01-.361 2.7-1.105.692-.746 1.038-1.682 1.038-2.766zm-.173-4.129V5h2.397v16.128h-2.354v-1.596c-1.015 1.255-2.333 1.873-3.91 1.873-1.663 0-3.068-.575-4.169-1.724-1.102-1.17-1.663-2.596-1.663-4.297 0-1.682.561-3.107 1.663-4.256 1.101-1.17 2.485-1.745 4.148-1.745 1.534 0 2.83.617 3.888 1.872zm-11.48 9.873h-10.218V5.405h10.195v2.318h-7.711V12h7.15v2.32h-7.15v4.489h7.733v2.319zm-23.891-9.724c-1.793 0-3.132 1.192-3.478 2.979h6.783c-.194-1.808-1.555-2.979-3.305-2.979zm5.703 3.766c0 .32-.021.703-.086 1.128h-9.095c.346 1.787 1.62 3 3.867 3 1.318 0 2.916-.49 3.953-1.234l.994 1.724c-1.189.872-3.067 1.595-5.033 1.595-4.364 0-6.243-3-6.243-6.021 0-1.724.54-3.15 1.642-4.277 1.101-1.127 2.548-1.702 4.298-1.702 1.664 0 3.046.511 4.105 1.553 1.058 1.043 1.598 2.447 1.598 4.234zm-19.949 3.894c1.08 0 1.966-.362 2.68-1.085.712-.724 1.058-1.617 1.058-2.703 0-1.084-.346-2-1.059-2.701-.713-.702-1.599-1.064-2.679-1.064-1.058 0-1.944.362-2.656 1.085-.714.702-1.059 1.596-1.059 2.68 0 1.086.345 2 1.059 2.724.712.702 1.598 1.064 2.656 1.064zm3.673-7.936V9.66h2.29v10.299c0 1.85-.584 3.32-1.728 4.404-1.146 1.085-2.68 1.638-4.58 1.638-1.945 0-3.672-.553-5.206-1.638l1.037-1.808c1.296.915 2.679 1.36 4.126 1.36 2.484 0 3.996-1.51 3.996-3.637v-.83c-1.015 1.127-2.311 1.702-3.91 1.702-1.684 0-3.089-.554-4.19-1.68-1.102-1.128-1.642-2.532-1.642-4.214 0-1.68.561-3.085 1.706-4.191 1.145-1.128 2.571-1.681 4.234-1.681 1.534 0 2.83.575 3.867 1.745zm-18.07 8.127c1.102 0 1.988-.382 2.7-1.128.714-.744 1.06-1.659 1.06-2.743 0-1.065-.346-1.98-1.06-2.724-.712-.745-1.598-1.128-2.7-1.128-1.101 0-2.008.383-2.7 1.128-.691.744-1.036 1.66-1.036 2.745 0 1.084.345 2 1.037 2.745.691.744 1.598 1.105 2.7 1.105zm3.652-8V9.66h2.29v11.469h-2.29v-1.575c-1.059 1.234-2.399 1.852-3.976 1.852-1.663 0-3.067-.575-4.168-1.745-1.102-1.17-1.642-2.617-1.642-4.34 0-1.724.54-3.128 1.642-4.256 1.1-1.128 2.505-1.681 4.168-1.681 1.577 0 2.917.617 3.976 1.872zM138.79 9.34c1.404 0 2.527.448 3.37 1.34.863.873 1.295 2.086 1.295 3.596v6.852h-2.376V14.66c0-2.021-1.036-3.128-2.657-3.128-1.727 0-2.915 1.255-2.915 3.192v6.404h-2.377v-6.426c0-1.978-1.037-3.17-2.679-3.17-1.728 0-2.937 1.277-2.937 3.234v6.362h-2.377V9.659h2.333v1.66c.692-1.212 1.988-1.979 3.522-1.979 1.533.021 2.958.767 3.586 2.107.798-1.277 2.419-2.107 4.212-2.107zm-19.517 11.788h2.484V5.405h-2.484v15.723z\"/>
    </g>
</symbol></svg>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/tui-icon-b.svg";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/tui-icon-b.svg", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/img/tui-icon-b.svg");
    }
}
