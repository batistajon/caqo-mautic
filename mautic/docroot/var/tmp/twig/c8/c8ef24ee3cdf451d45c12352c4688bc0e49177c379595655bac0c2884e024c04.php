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

/* @bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php */
class __TwigTemplate_1f9aff2b76de618585fc8d411c0b6cf224a2fdc6906f3503b9ce07d8aa0c0a0f extends Template
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

namespace Mautic\\EmailBundle\\OptionsAccessor;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\UserBundle\\Entity\\User;

class EmailToUserAccessor
{
    /** @var array */
    private \$config;

    /**
     * @var ArrayStringTransformer
     */
    private \$transformer;

    public function __construct(array \$config)
    {
        \$this->config      = \$config;
        \$this->transformer = new ArrayStringTransformer();
    }

    /**
     * @return int
     */
    public function getEmailID()
    {
        return (int) \$this->config['useremail']['email'];
    }

    /**
     * @return bool
     */
    public function shouldSentToOwner()
    {
        return empty(\$this->config['to_owner']) ? false : \$this->config['to_owner'];
    }

    /**
     * Gets array of User ids formated for EmailModel.
     *
     * @param User|null \$owner If Owner is passed in and config is setted for it, adds owner to returned array
     *
     * @return array
     */
    public function getUserIdsToSend(User \$owner = null)
    {
        \$userIds = empty(\$this->config['user_id']) ? [] : \$this->config['user_id'];

        \$users = [];
        if (\$userIds) {
            foreach (\$userIds as \$userId) {
                \$users[] = ['id' => \$userId];
            }
        }

        if (\$this->shouldSentToOwner() && \$owner && !in_array(\$owner->getId(), \$userIds)) {
            \$users[] = ['id' => \$owner->getId()];
        }

        return \$users;
    }

    /**
     * @return array
     */
    public function getToFormatted()
    {
        \$property = 'to';

        return empty(\$this->config[\$property]) ? [] : \$this->transformer->reverseTransform(\$this->config[\$property]);
    }

    /**
     * @return array
     */
    public function getCcFormatted()
    {
        \$property = 'cc';

        return empty(\$this->config[\$property]) ? [] : \$this->transformer->reverseTransform(\$this->config[\$property]);
    }

    /**
     * @return array
     */
    public function getBccFormatted()
    {
        \$property = 'bcc';

        return empty(\$this->config[\$property]) ? [] : \$this->transformer->reverseTransform(\$this->config[\$property]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php";
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
        return new Source("", "@bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/OptionsAccessor/EmailToUserAccessor.php");
    }
}
