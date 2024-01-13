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

/* @bundles/ConfigBundle/Event/ConfigEvent.php */
class __TwigTemplate_7b1f4a454c2dc43a914cde23f16601d40f19071e3f3d738fabe1abe7f31460b6 extends Template
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
        echo "<?php

namespace Mautic\\ConfigBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ConfigEvent extends CommonEvent
{
    /**
     * @var array
     */
    private \$preserve = [];

    /**
     * @param array
     */
    private \$config;

    /**
     * @param ParameterBag
     */
    private \$post;

    /**
     * @var array
     */
    private \$errors = [];

    /**
     * @var array
     */
    private \$fieldErrors = [];

    /**
     * Data got from build form before update.
     *
     * @var array
     */
    private \$originalNormData;

    /**
     * Data got from build form after update.
     *
     * @var array
     */
    private \$normData;

    public function __construct(array \$config, ParameterBag \$post)
    {
        \$this->config = \$config;
        \$this->post   = \$post;
    }

    /**
     * Returns the config array.
     *
     * @param string \$key
     *
     * @return array
     */
    public function getConfig(\$key = null)
    {
        if (\$key) {
            return (isset(\$this->config[\$key])) ? \$this->config[\$key] : [];
        }

        return \$this->config;
    }

    /**
     * Sets the config array.
     *
     * @param null \$key
     */
    public function setConfig(array \$config, \$key = null)
    {
        if (\$key) {
            \$this->config[\$key] = \$config;
        } else {
            \$this->config = \$config;
        }
    }

    public function getPost(): ParameterBag
    {
        return \$this->post;
    }

    /**
     * Set fields such as passwords that will not overwrite existing values
     * if the current is empty.
     *
     * @param array|string \$fields
     */
    public function unsetIfEmpty(\$fields)
    {
        if (!is_array(\$fields)) {
            \$fields = [\$fields];
        }

        \$this->preserve = array_merge(\$this->preserve, \$fields);
    }

    /**
     * Return array of fields to unset if empty so that existing values are not
     * overwritten if empty.
     *
     * @return array
     */
    public function getPreservedFields()
    {
        return \$this->preserve;
    }

    /**
     * Set error message.
     *
     * @param string      \$message     (untranslated)
     * @param array       \$messageVars for translation
     * @param string|null \$key
     * @param string|null \$field
     *
     * @return ConfigEvent
     */
    public function setError(\$message, \$messageVars = [], \$key = null, \$field = null)
    {
        if (!empty(\$key) && !empty(\$field)) {
            if (!isset(\$this->errors[\$key])) {
                \$this->fieldErrors[\$key] = [];
            }

            \$this->fieldErrors[\$key][\$field] = [
                \$message,
                \$messageVars,
            ];

            return \$this;
        }

        \$this->errors[\$message] = \$messageVars;

        return \$this;
    }

    /**
     * Get error messages.
     *
     * @return array
     */
    public function getErrors()
    {
        return \$this->errors;
    }

    /**
     * @return array
     */
    public function getFieldErrors()
    {
        return \$this->fieldErrors;
    }

    /**
     * @return string
     */
    public function getFileContent(UploadedFile \$file)
    {
        \$tmpFile = \$file->getRealPath();
        \$content = trim(file_get_contents(\$tmpFile));
        @unlink(\$tmpFile);

        return \$content;
    }

    /**
     * @param \$content
     *
     * @return string
     */
    public function encodeFileContents(\$content)
    {
        return base64_encode(\$content);
    }

    /**
     * @return array
     */
    public function getOriginalNormData()
    {
        return \$this->originalNormData;
    }

    /**
     * @return ConfigEvent
     */
    public function setOriginalNormData(array \$normData)
    {
        \$this->originalNormData = \$normData;

        return \$this;
    }

    /**
     * @return array
     */
    public function getNormData()
    {
        return \$this->normData;
    }

    /**
     * @param array \$normData
     */
    public function setNormData(\$normData)
    {
        \$this->normData = \$normData;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Event/ConfigEvent.php";
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
        return new Source("", "@bundles/ConfigBundle/Event/ConfigEvent.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Event/ConfigEvent.php");
    }
}
