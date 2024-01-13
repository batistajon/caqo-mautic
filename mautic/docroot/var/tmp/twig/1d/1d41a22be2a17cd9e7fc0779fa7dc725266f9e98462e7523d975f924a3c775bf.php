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

/* @bundles/CoreBundle/Assets/js/libraries/froala/languages/en_ca.js */
class __TwigTemplate_e630450395989177d7114507346d5e1a9083ef3f43da9e707cec4b0a15d589d2 extends Template
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
        echo "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

/**
 * English spoken in Canada
 */

\$.FE.LANGUAGE['en_ca'] = {
  translation: {
    // Place holder
    \"Type something\": \"Type something\",

    // Basic formatting
    \"Bold\": \"Bold\",
    \"Italic\": \"Italic\",
    \"Underline\": \"Underline\",
    \"Strikethrough\": \"Strikethrough\",

    // Main buttons
    \"Insert\": \"Insert\",
    \"Delete\": \"Delete\",
    \"Cancel\": \"Cancel\",
    \"OK\": \"OK\",
    \"Back\": \"Back\",
    \"Remove\": \"Remove\",
    \"More\": \"More\",
    \"Update\": \"Update\",
    \"Style\": \"Style\",

    // Font
    \"Font Family\": \"Font Family\",
    \"Font Size\": \"Font Size\",

    // Colors
    \"Colors\": \"Colours\",
    \"Background\": \"Background\",
    \"Text\": \"Text\",

    // Paragraphs
    \"Paragraph Format\": \"Paragraph Format\",
    \"Normal\": \"Normal\",
    \"Code\": \"Code\",
    \"Heading 1\": \"Heading 1\",
    \"Heading 2\": \"Heading 2\",
    \"Heading 3\": \"Heading 3\",
    \"Heading 4\": \"Heading 4\",

    // Style
    \"Paragraph Style\": \"Paragraph Style\",
    \"Inline Style\": \"Inline Style\",

    // Alignment
    \"Align\": \"Align\",
    \"Align Left\": \"Align Left\",
    \"Align Center\": \"Align Centre\",
    \"Align Right\": \"Alight Right\",
    \"Align Justify\": \"Align Justify\",
    \"None\": \"None\",

    // Lists
    \"Ordered List\": \"Ordered List\",
    \"Unordered List\": \"Unordered List\",

    // Indent
    \"Decrease Indent\": \"Decrease Indent\",
    \"Increase Indent\": \"Increase Indent\",

    // Links
    \"Insert Link\": \"Insert Link\",
    \"Open in new tab\": \"Open in new tab\",
    \"Open Link\": \"Open Link\",
    \"Edit Link\": \"Edit Link\",
    \"Unlink\": \"Unlink\",
    \"Choose Link\": \"Choose Link\",

    // Images
    \"Insert Image\": \"Insert Image\",
    \"Upload Image\": \"Upload Image\",
    \"By URL\": \"By URL\",
    \"Browse\": \"Browse\",
    \"Drop image\": \"Drop image\",
    \"or click\": \"or click\",
    \"Manage Images\": \"Manage Images\",
    \"Loading\": \"Loading\",
    \"Deleting\": \"Deleting\",
    \"Tags\": \"Tags\",
    \"Are you sure? Image will be deleted.\": \"Are you sure? Image will be deleted.\",
    \"Replace\": \"Replace\",
    \"Uploading\": \"Uploading\",
    \"Loading image\": \"Loading image\",
    \"Display\": \"Display\",
    \"Inline\": \"Inline\",
    \"Break Text\": \"Break Text\",
    \"Alternate Text\": \"Alternate Text\",
    \"Change Size\": \"Change Size\",
    \"Width\": \"Width\",
    \"Height\": \"Height\",
    \"Something went wrong. Please try again.\": \"Something went wrong. Please try again.\",

    // Video
    \"Insert Video\": \"Insert Video\",
    \"Embedded Code\": \"Embedded Code\",

    // Tables
    \"Insert Table\": \"Insert Table\",
    \"Table Header\": \"Table Header\",
    \"Remove Table\": \"Remove Table\",
    \"Table Style\": \"Table Style\",
    \"Horizontal Align\": \"Horizontal Align\",
    \"Row\": \"Row\",
    \"Insert row above\": \"Insert row above\",
    \"Insert row below\": \"Insert row below\",
    \"Delete row\": \"Delete row\",
    \"Column\": \"Column\",
    \"Insert column before\": \"Insert column before\",
    \"Insert column after\": \"Insert column after\",
    \"Delete column\": \"Delete column\",
    \"Cell\": \"Cell\",
    \"Merge cells\": \"Merge cells\",
    \"Horizontal split\": \"Horizontal split\",
    \"Vertical split\": \"Vertical split\",
    \"Cell Background\": \"Cell Background\",
    \"Vertical Align\": \"Vertical Align\",
    \"Top\": \"Top\",
    \"Middle\": \"Middle\",
    \"Bottom\": \"Bottom\",
    \"Align Top\": \"Align Top\",
    \"Align Middle\": \"Align Middle\",
    \"Align Bottom\": \"Align Bottom\",
    \"Cell Style\": \"Cell Style\",

    // Files
    \"Upload File\": \"Upload File\",
    \"Drop file\": \"Drop file\",

    // Emoticons
    \"Emoticons\": \"Emoticons\",

    // Line breaker
    \"Break\": \"Break\",

    // Math
    \"Subscript\": \"Subscript\",
    \"Superscript\": \"Superscript\",

    // Full screen
    \"Fullscreen\": \"Fullscreen\",

    // Horizontal line
    \"Insert Horizontal Line\": \"Insert Horizontal Line\",

    // Clear formatting
    \"Clear Formatting\": \"Cell Formatting\",

    // Undo, redo
    \"Undo\": \"Undo\",
    \"Redo\": \"Redo\",

    // Select all
    \"Select All\": \"Select All\",

    // Code view
    \"Code View\": \"Code View\",

    // Quote
    \"Quote\": \"Quote\",
    \"Increase\": \"Increase\",
    \"Decrease\": \"Decrease\",

    // Quick Insert
    \"Quick Insert\": \"Quick Insert\"
  },
  direction: \"ltr\"
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/languages/en_ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/languages/en_ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/languages/en_ca.js");
    }
}
