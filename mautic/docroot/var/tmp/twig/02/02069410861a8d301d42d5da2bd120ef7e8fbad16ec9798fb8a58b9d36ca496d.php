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

/* @bundles/ApiBundle/Model/ClientModel.php */
class __TwigTemplate_71e6498f12b4a3ef360a63844c73ab93dbcec9f1a893a987bc2cdbf4ee8379f2 extends Template
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

namespace Mautic\\ApiBundle\\Model;

use Mautic\\ApiBundle\\ApiEvents;
use Mautic\\ApiBundle\\Entity\\oAuth2\\Client;
use Mautic\\ApiBundle\\Event\\ClientEvent;
use Mautic\\ApiBundle\\Form\\Type\\ClientType;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;

class ClientModel extends FormModel
{
    /**
     * @var string
     */
    const API_MODE_OAUTH2 = 'oauth2';

    /**
     * @var string
     */
    private \$apiMode = 'oauth2';

    /**
     * @var Session
     */
    protected \$session;

    public function __construct(RequestStack \$requestStack)
    {
        \$request = \$requestStack->getCurrentRequest();

        if (\$request) {
            \$this->apiMode = \$request->get('api_mode', \$request->getSession()->get('mautic.client.filter.api_mode', 'oauth2'));
        }
    }

    /**
     * @param \$apiMode
     */
    public function setApiMode(\$apiMode)
    {
        \$this->apiMode = \$apiMode;
    }

    public function setSession(Session \$session)
    {
        \$this->session = \$session;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository(): \\Mautic\\ApiBundle\\Entity\\oAuth2\\ClientRepository
    {
        return \$this->em->getRepository(Client::class);
    }

    /**
     * {@inheritdoc}
     */
    public function getPermissionBase()
    {
        return 'api:clients';
    }

    /**
     * {@inheritdoc}
     *
     * @throws MethodNotAllowedHttpException
     */
    public function createForm(\$entity, \$formFactory, \$action = null, \$options = [])
    {
        if (!\$entity instanceof Client) {
            throw new MethodNotAllowedHttpException(['Client']);
        }

        \$params = (!empty(\$action)) ? ['action' => \$action] : [];

        return \$formFactory->create(ClientType::class, \$entity, \$params);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity(\$id = null): ?Client
    {
        if (null === \$id) {
            return 'oauth2' == \$this->apiMode ? new Client() : null;
        }

        return parent::getEntity(\$id);
    }

    /**
     * {@inheritdoc}
     *
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null)
    {
        if (!\$entity instanceof Client) {
            throw new MethodNotAllowedHttpException(['Client']);
        }

        switch (\$action) {
            case 'post_save':
                \$name = ApiEvents::CLIENT_POST_SAVE;
                break;
            case 'post_delete':
                \$name = ApiEvents::CLIENT_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new ClientEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
            }
            \$this->dispatcher->dispatch(\$name, \$event);

            return \$event;
        }

        return null;
    }

    /**
     * @return array
     */
    public function getUserClients(User \$user)
    {
        return \$this->getRepository()->getUserClients(\$user);
    }

    /**
     * @param \$entity
     *
     * @throws MethodNotAllowedHttpException
     */
    public function revokeAccess(\$entity)
    {
        if (!\$entity instanceof Client) {
            throw new MethodNotAllowedHttpException(['Client']);
        }

        //remove the user from the client
        if ('oauth2' == \$this->apiMode) {
            \$entity->removeUser(\$this->userHelper->getUser());
            \$this->saveEntity(\$entity);
        } else {
            \$this->getRepository()->deleteAccessTokens(\$entity, \$this->userHelper->getUser());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Model/ClientModel.php";
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
        return new Source("", "@bundles/ApiBundle/Model/ClientModel.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Model/ClientModel.php");
    }
}
