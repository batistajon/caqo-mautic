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

/* @bundles/ApiBundle/EventListener/OAuthEventListener.php */
class __TwigTemplate_aea82712823ef92c18edb808d55af1cf1ce030d7e6ff4297be76989334670402 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use FOS\\OAuthServerBundle\\Event\\OAuthEvent;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Translation\\TranslatorInterface;

class OAuthEventListener
{
    /**
     * @var \\Doctrine\\ORM\\EntityManager
     */
    private \$em;

    /**
     * @var \\Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions
     */
    private \$mauticSecurity;

    /**
     * @var \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator
     */
    private \$translator;

    /**
     * OAuthEventListener constructor.
     */
    public function __construct(EntityManager \$entityManager, CorePermissions \$corePermissions, TranslatorInterface \$translator)
    {
        \$this->em             = \$entityManager;
        \$this->mauticSecurity = \$corePermissions;
        \$this->translator     = \$translator;
    }

    /**
     * @throws AccessDeniedException
     */
    public function onPreAuthorizationProcess(OAuthEvent \$event)
    {
        if (\$user = \$this->getUser(\$event)) {
            //check to see if user has api access
            if (!\$this->mauticSecurity->isGranted('api:access:full')) {
                throw new AccessDeniedException(\$this->translator->trans('mautic.core.error.accessdenied', [], 'flashes'));
            }
            \$client = \$event->getClient();
            \$event->setAuthorizedClient(
                \$client->isAuthorizedClient(\$user, \$this->em)
            );
        }
    }

    public function onPostAuthorizationProcess(OAuthEvent \$event)
    {
        if (\$event->isAuthorizedClient()) {
            if (null !== \$client = \$event->getClient()) {
                \$user = \$this->getUser(\$event);
                \$client->addUser(\$user);
                \$this->em->persist(\$client);
                \$this->em->flush();
            }
        }
    }

    /**
     * @return mixed
     */
    protected function getUser(OAuthEvent \$event)
    {
        return \$this->em->getRepository('MauticUserBundle:User')->findOneByUsername(\$event->getUser()->getUsername());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/EventListener/OAuthEventListener.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/OAuthEventListener.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/EventListener/OAuthEventListener.php");
    }
}
