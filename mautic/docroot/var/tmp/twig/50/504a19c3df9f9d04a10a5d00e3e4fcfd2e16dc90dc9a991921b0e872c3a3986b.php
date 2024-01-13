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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/ro.js */
class __TwigTemplate_52295ed75f112304cac344eaea7ae952b00c297531bc9bd722095fbd32ecf053 extends Template
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
CKEDITOR.plugins.setLang(\"a11yhelp\",\"ro\",{title:\"Instrucțiuni Accesibilitate\",contents:\"Cuprins. Pentru a închide acest dialog, apăsați tasta ESC.\",legend:[{name:\"General\",items:[{name:\"Editor bară de instrumente.\",legend:\"Apasă \${toolbarFocus} pentru a naviga pe de instrumente. Pentru deplasarea la următorul sau anteriorul grup de instrumente se folosesc tastele TAB și SHIFT+TAB. Pentru deplasare pe urmatorul sau anteriorul instrument se folosesc tastele SĂGEATĂ DREAPTA sau SĂGEATĂ STÂNGA. Tasta SPAȚIU sau ENTER activează instrumentul.\"},
{name:\"Dialog editor\",legend:\"În interiorul unui dialog, se apasă TAB pentru navigarea la următorul element de dialog, SHIFT+TAB pentru deplasarea la anteriorul element de dialog, ENTER pentru validare dialog, ESC pentru anulare dialog. Când un dialog are secțiuni multiple, lista secțiunilor este accesibilă cu ALT+F10 sau cu TAB ca parte a ordonării secționării dialogului. Cu lista secțiunii activată, deplasarea înainte înapoi se face cu tastele SĂGEATĂ DREAPTA și respectiv STÂNGA.\"},{name:\"Editor meniu contextual\",
legend:\"Apasă \${contextMenu} sau TASTA MENIU pentru a deschide meniul contextual. Se trece la următoarea opțiune din meniu cu TAB sau SĂGEATĂ JOS. La opțiunea anterioară cu SHIFT+TAB sau SĂGEATĂ SUS. Se apasă SPAȚIU sau ENTER pentru a selecta opțiunea. Deschide sub-meniul opțiunii curente cu SPAȚIU sau ENTER sau SĂGEATĂ DREAPTA. Se revine la elementul din meniul părinte cu ESC sau SĂGEATĂ STÂNGA. Închide meniul de context cu ESC.\"},{name:\"Caseta listă a editorului\",legend:\"În interiorul unei liste, treci la următorull element cu TAB sau SĂGEATĂ JOS. Treci la elementul anterior din listă cu SHIFT+TAB sau SĂGEATĂ SUS. Apasă SPAȚIU sau ENTER pentru a selecta opțiunea din listă. Apasă ESC pentru a închide lista.\"},
{name:\"Bara căii editorului de elemente\",legend:\"Apasă \${elementsPathFocus} pentru navigare pe elementele barei. Mergi la următorul buton cu TAB sau SĂGEATĂ JOS. Treci la butonul anterior din listă cu SHIFT+TAB sau SĂGEATĂ SUS. Apasă SPAȚIU sau ENTER pentru a selecta butonul în editor.\"}]},{name:\"Comenzi\",items:[{name:\"Revino anterior (Undo)\",legend:\"Apasă \${undo}\"},{name:\"Comanda precedentă\",legend:\"Apasă \${redo}\"},{name:\"Îngroșat (Bold)\",legend:\"Apasă \${bold}\"},{name:\"Înclinat (Italic)\",legend:\"Apasă \${italic}\"},
{name:\"Subliniere (Underline)\",legend:\"Apasă \${underline}\"},{name:\"Legatură (Link)\",legend:\"Apasă \${link}\"},{name:\"Desfășurare Bară instrumente\",legend:\"Apasă \${toolbarCollapse}\"},{name:\"Accesare spațiu focus anterior\",legend:\"Apasă \${accessPreviousSpace} pentru a accesa cel mai apropiat spațiu focus indisponibil înaintea cursorului, de exemplu: 2 elemente adiacente HR. Repetă combinația de taste pentru a accesa spațiile îndepărtate de focus.\"},{name:\"Accesare spațiu focus următor\",legend:\"Apasă \${accessNextSpace} pentru a accesa cel mai apropiat spațiu focus indisponibil după cursor, de exemplu: 2 elemente adiacente HR. Repetă combinația de taste pentru a accesa spațiile îndepărtate de focus.\"},
{name:\"Ajutor Accesibilitate\",legend:\"Apasă \${a11yHelp}\"},{name:\"Adaugă ca Text simplu (Plain Text)\",legend:\"Apasă \${pastetext}\",legendEdge:\"Apasă \${pastetext}, urmat de \${paste}\"}]}],tab:\"TAB\",pause:\"Pauză\",capslock:\"Majuscule\",escape:\"Esc - renunță\",pageUp:\"Pagină sus\",pageDown:\"Săgeată jos\",leftArrow:\"Săgeată stânga\",upArrow:\"Săgeată sus\",rightArrow:\"Săgeată dreapta\",downArrow:\"Săgeată jos\",insert:\"Inserează\",leftWindowKey:\"Windows stânga\",rightWindowKey:\"Windows dreapta\",selectKey:\"Tasta Selecție\",
numpad0:\"0 Numeric\",numpad1:\"1 Numeric\",numpad2:\"2 Numeric\",numpad3:\"3 Numeric\",numpad4:\"4 Numeric\",numpad5:\"5 Numeric\",numpad6:\"6 Numeric\",numpad7:\"7 Numeric\",numpad8:\"8 Numeric\",numpad9:\"9 Numeric\",multiply:\"Înmulțire\",add:\"Adunare\",subtract:\"Scădere\",decimalPoint:\"Punct zecimal\",divide:\"Împărțire\",f1:\"F1\",f2:\"F2\",f3:\"F3\",f4:\"F4\",f5:\"F5\",f6:\"F6\",f7:\"F7\",f8:\"F8\",f9:\"F9\",f10:\"F10\",f11:\"F11\",f12:\"F12\",numLock:\"NumLock\",scrollLock:\"Scroll Lock\",semiColon:\"Punct și virgulă\",equalSign:\"Egal\",comma:\"Virgulă\",
dash:\"Linie\",period:\"Punct\",forwardSlash:\"Slash\",graveAccent:\"Accent grav\",openBracket:\"Paranteză dreaptă stânga\",backSlash:\"Backslash\",closeBracket:\"Paranteză dreaptă dreapta\",singleQuote:\"Ghilimea simplă\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/ro.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/ro.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/a11yhelp/dialogs/lang/ro.js");
    }
}
