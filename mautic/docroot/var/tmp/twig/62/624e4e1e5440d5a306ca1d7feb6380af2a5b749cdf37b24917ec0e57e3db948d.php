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

/* @bundles/CoreBundle/Configurator/Configurator.php */
class __TwigTemplate_9487e2ae2f244432fe35bf5ca6f45bdfdf6033d1529bc8e51e611ed657cee9d1 extends Template
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

namespace Mautic\\CoreBundle\\Configurator;

use Mautic\\CoreBundle\\Configurator\\Step\\StepInterface;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Process\\Exception\\RuntimeException;

/**
 * @note   This class is based on Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator
 */
class Configurator
{
    /**
     * Configuration filename.
     *
     * @var string
     */
    protected \$filename;

    /**
     * Array containing the steps.
     *
     * @var StepInterface[]
     */
    protected \$steps = [];

    /**
     * Array containing the sorted steps.
     *
     * @var StepInterface[]
     */
    protected \$sortedSteps = [];

    /**
     * Configuration parameters.
     *
     * @var array
     */
    protected \$parameters;

    public function __construct(PathsHelper \$pathsHelper)
    {
        \$this->filename   = \$pathsHelper->getSystemPath('local_config');
        \$this->parameters = \$this->read();
    }

    /**
     * Check if the configuration path is writable.
     *
     * @return bool
     */
    public function isFileWritable()
    {
        // If there's already a file, check it
        if (file_exists(\$this->filename)) {
            return is_writable(\$this->filename);
        }

        // If there isn't already, we check the parent folder
        return is_writable(dirname(\$this->filename));
    }

    /**
     * Add a step to the configurator.
     *
     * @param int \$priority
     */
    public function addStep(StepInterface \$step, \$priority = 0)
    {
        if (!isset(\$this->steps[\$priority])) {
            \$this->steps[\$priority] = [];
        }

        \$this->steps[\$priority][] = \$step;
        \$this->sortedSteps        = [];
    }

    /**
     * Retrieves the specified step.
     *
     * @param int \$index
     *
     * @return StepInterface
     *
     * @throws \\InvalidArgumentException
     */
    public function getStep(\$index)
    {
        if (isset(\$this->steps[\$index])) {
            return \$this->steps[\$index];
        }

        throw new \\InvalidArgumentException(sprintf('There is not a step %s', \$index));
    }

    /**
     * Retrieves the loaded steps in sorted order.
     *
     * @return array
     */
    public function getSteps()
    {
        if ([] === \$this->sortedSteps) {
            \$this->sortedSteps = \$this->getSortedSteps();
        }

        return \$this->sortedSteps;
    }

    /**
     * Sort routers by priority.
     * The highest priority number is the highest priority (reverse sorting).
     *
     * @return StepInterface[]
     */
    private function getSortedSteps()
    {
        \$sortedSteps = [];
        krsort(\$this->steps);

        foreach (\$this->steps as \$steps) {
            \$sortedSteps = array_merge(\$sortedSteps, \$steps);
        }

        return \$sortedSteps;
    }

    /**
     * Retrieves the configuration parameters.
     *
     * @return array
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    /**
     * Return the number of steps in the configurator.
     *
     * @return int
     */
    public function getStepCount()
    {
        return count(\$this->getSteps());
    }

    /**
     * Merges parameters to the main configuration.
     *
     * @param array \$parameters
     */
    public function mergeParameters(\$parameters)
    {
        \$this->parameters = array_merge(\$this->parameters, \$parameters);
    }

    /**
     * Fetches the requirements from the defined steps.
     *
     * @return array
     */
    public function getRequirements()
    {
        \$majors = [];

        foreach (\$this->getSteps() as \$step) {
            foreach (\$step->checkRequirements() as \$major) {
                \$majors[] = \$major;
            }
        }

        return \$majors;
    }

    /**
     * Fetches the optional settings from the defined steps.
     *
     * @return array
     */
    public function getOptionalSettings()
    {
        \$minors = [];

        foreach (\$this->getSteps() as \$step) {
            foreach (\$step->checkOptionalSettings() as \$minor) {
                \$minors[] = \$minor;
            }
        }

        return \$minors;
    }

    /**
     * Renders parameters as a string.
     *
     * @return string
     */
    public function render()
    {
        \$string = \"<?php\\n\";
        \$string .= \"\\\$parameters = array(\\n\";

        foreach (\$this->parameters as \$key => \$value) {
            if ('' !== \$value) {
                if (is_string(\$value)) {
                    \$value = \"'\".addcslashes(\$value, '\\\\\\'').\"'\";
                } elseif (is_bool(\$value)) {
                    \$value = (\$value) ? 'true' : 'false';
                } elseif (is_null(\$value)) {
                    \$value = 'null';
                } elseif (is_array(\$value)) {
                    \$value = \$this->renderArray(\$value);
                }

                \$string .= \"\\t'\$key' => \$value,\\n\";
            }
        }

        return \$string.\");\\n\";
    }

    /**
     * @param     \$array
     * @param int \$level
     *
     * @return string
     */
    protected function renderArray(\$array, \$level = 1)
    {
        \$string = \"array(\\n\";

        \$count = \$counter = count(\$array);
        foreach (\$array as \$key => \$value) {
            if (is_string(\$key) or is_numeric(\$key)) {
                if (\$counter === \$count) {
                    \$string .= str_repeat(\"\\t\", \$level + 1);
                }
                \$string .= '\\''.\$key.'\\' => ';
            }

            if (is_array(\$value)) {
                \$string .= \$this->renderArray(\$value, \$level + 1);
            } else {
                \$string .= '\\''.addcslashes(\$value, '\\\\\\'').'\\'';
            }

            --\$counter;
            if (\$counter > 0) {
                \$string .= \",\\n\".str_repeat(\"\\t\", \$level + 1);
            }
        }

        return \$string.(\"\\n\".str_repeat(\"\\t\", \$level).')');
    }

    /**
     * Writes parameters to file.
     *
     * @return int
     *
     * @throws \\Symfony\\Component\\Process\\Exception\\RuntimeException
     */
    public function write()
    {
        if (!\$this->isFileWritable()) {
            throw new RuntimeException('Cannot write the config file, the destination is unwritable.');
        }

        \$return = file_put_contents(\$this->filename, \$this->render());

        if (false === \$return) {
            throw new RuntimeException('An error occurred while attempting to write the config file to the filesystem.');
        }

        return \$return;
    }

    /**
     * Reads parameters from file.
     *
     * @return array
     */
    protected function read()
    {
        if (!file_exists(\$this->filename)) {
            return [];
        }

        include \$this->filename;

        // Return the \$parameters array defined in the file
        return isset(\$parameters) ? \$parameters : [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Configurator/Configurator.php";
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
        return new Source("", "@bundles/CoreBundle/Configurator/Configurator.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Configurator/Configurator.php");
    }
}
