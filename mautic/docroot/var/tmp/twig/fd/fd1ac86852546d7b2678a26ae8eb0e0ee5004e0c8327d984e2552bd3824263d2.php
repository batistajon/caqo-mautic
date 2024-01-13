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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/az.js */
class __TwigTemplate_06f4fbe3bec79c13f54b895d7cc5bda9f487fb4b11b799067aa96c6c146b9ac5 extends Template
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
        echo "﻿/*
 Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.plugins.setLang(\"a11yhelp\",\"az\",{title:\"Əlillərə dəstək üzrə təlimat\",contents:\"Kömək. Pəncərəni bağlamaq üçün ESC basın.\",legend:[{name:\"Əsas\",items:[{name:\"Düzəliş edənin alətlər çubuğu\",legend:\"Panelə keçmək üçün \${toolbarFocus} basın. Növbəti panelə TAB, əvvəlki panelə isə SHIFT+TAB düyməsi vasitəsi ilə keçə bilərsiz. Paneldəki düymələr arasında sol və sağ ox düyməsi ilə keçid edə bilərsiz. Seçilmiş düyməsi SPACE və ya ENTER ilə işlədə bilərsiniz.\"},{name:\"Redaktorun pəncərəsi\",legend:\"Pəncərə içində növbəti element seçmək üçün TAB düyməni basın, əvvəlki isə - SHIFT+TAB. Təsdiq edilməsi üçün ENTER, imtina edilməsi isə ESC diymələri istifadə edin. Pəncərədə bir neçə vərəq olanda olnarın siyahı ALT+F10 ilə aça bilərsiz. Vərəqlərin siyahı fokus altında olanda ox düymələr vasitəsi ilə onların arasında keçid edə bilərsiz.\"},
{name:\"Redaktorun seçimlərin menyusu\",legend:\"Seçimləri redaktə etmək üçün \${contextMenu} ya da APPLICATION KEY basın. Növbəti seçimə keçmək üçün TAB ya AŞAĞI OX düyməsini basın, əvvəlki isə - SHIFT+TAB ya YUXARI OX. Seçimi arımaq SPACE ya ENTER düymələri istifadə edin. Alt menyunu açmaq üçün SPACE, ENTER ya SAĞA OX basın. ESC ya SOLA OX ilə geriyə qayıda bilərsiz. Bütün menyunu ESC ilə bağlıyın.\"},{name:\"Düzəliş edənin siyahı qutusu\",legend:\"Siyahı qutusu içində növbəti bənd seçmək üçün TAB ya AŞAĞI OX, əvvəlki isə SHIFT+TAB ya YUXARI OX basın. Seçimi arımaq SPACE ya ENTER düymələri istifadə edin. Siyahı qutusu ESC ilə bağlıyın.\"},
{name:\"Redaktor elementin cığır paneli\",legend:\"Elementin cığır paneli seçmək üçün \${elementsPathFocus} basın. Növbəti element seçmək üçün TAB ya SAĞA OX, əvvəlki isə SHIFT+TAB ya SOLA OX istifadə edin. Elementi arımaq SPACE ya ENTER düymələri mövcuddur.\"}]},{name:\"Əmrlər\",items:[{name:\"Əmri geri qaytar\",legend:\"\${undo} basın\"},{name:\"Geri əmri\",legend:\"\${redo} basın\"},{name:\"Qalın əmri\",legend:\"\${bold}  basın\"},{name:\"Kursiv əmri\",legend:\"\${italic} basın\"},{name:\"Altdan xətt əmri\",legend:\"\${underline} basın\"},
{name:\"Link əmri\",legend:\"\${link} basın\"},{name:\"Paneli gizlət əmri\",legend:\"\${toolbarCollapse} basın\"},{name:\"Əvvəlki fokus sahəsi seç əmrı\",legend:\"Kursordan əvvəl ən yaxın əlçatmaz yerə dəymək üçün \${accessPreviousSpace} basın, misal üçün: iki dal-badal HR teg. Uzaq yerlərə dəymək üçün bir neçə dəfə basın.\"},{name:\"Növbəti fokus sahəsi seç əmrı\",legend:\"Kursordan sonra ən yaxın əlçatmaz yerə dəymək üçün \${accessNextSpace} basın, misal üçün: iki dal-badal HR teg. Uzaq yerlərə dəymək üçün bir neçə dəfə basın.\"},
{name:\"Hərtərəfli Kömək\",legend:\"\${a11yHelp} basın\"},{name:\"Yalnız mətni əlavə et\",legend:\"\${pastetext} basın\",legendEdge:\"Öncə \${pastetext}, sonra \${paste} basın\"}]}],tab:\"Tab\",pause:\"Pause\",capslock:\"Caps Lock\",escape:\"Escape\",pageUp:\"Page Up\",pageDown:\"Page Down\",leftArrow:\"Sola ox işarəsi\",upArrow:\"Yuxarı ox işarəsi\",rightArrow:\"Sağa ox işarəsi\",downArrow:\"Aşağı ox işarəsi\",insert:\"Insert\",leftWindowKey:\"Soldaki Windows düyməsi\",rightWindowKey:\"Sağdaki Windows düyməsi\",selectKey:\"Düyməni seçin\",
numpad0:\"Numpad 0\",numpad1:\"Numpad 1\",numpad2:\"Numpad 2\",numpad3:\"Numpad 3\",numpad4:\"Numpad 4\",numpad5:\"Numpad 5\",numpad6:\"Numpad 6\",numpad7:\"Numpad 7\",numpad8:\"Numpad 8\",numpad9:\"Numpad 9\",multiply:\"Vurma\",add:\"Əlavə et\",subtract:\"Çıxma\",decimalPoint:\"Onluq kəsri tam ədəddən ayıran nöqtə\",divide:\"Bölüşdürmə\",f1:\"F1\",f2:\"F2\",f3:\"F3\",f4:\"F4\",f5:\"F5\",f6:\"F6\",f7:\"F7\",f8:\"F8\",f9:\"F9\",f10:\"F10\",f11:\"F11\",f12:\"F12\",numLock:\"Num Lock\",scrollLock:\"Scroll Lock\",semiColon:\"Nöqtəli verqül\",equalSign:\"Barəbərlik işarəsi\",
comma:\"Vergül\",dash:\"Defis\",period:\"Nöqtə\",forwardSlash:\"Çəp xətt\",graveAccent:\"Vurğu işarəsi\",openBracket:\"Açılan mötərizə\",backSlash:\"Tərs çəpəki xətt\",closeBracket:\"Bağlanan mötərizə\",singleQuote:\"Tək dırnaq\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/az.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/az.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/az.js");
    }
}
