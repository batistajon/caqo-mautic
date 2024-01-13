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

/* @bundles/UserBundle/Controller/PublicController.php */
class __TwigTemplate_abb8004fd9a71d5a7b1f6d436207e286f74291099d45325ffd0cbc19b9651d74 extends Template
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

namespace Mautic\\UserBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController;
use Mautic\\UserBundle\\Form\\Type\\PasswordResetConfirmType;
use Mautic\\UserBundle\\Form\\Type\\PasswordResetType;
use Symfony\\Component\\Form\\FormError;

class PublicController extends FormController
{
    /**
     * Generates a new password for the user and emails it to them.
     */
    public function passwordResetAction()
    {
        /** @var \\Mautic\\UserBundle\\Model\\UserModel \$model */
        \$model = \$this->getModel('user');

        \$data   = ['identifier' => ''];
        \$action = \$this->generateUrl('mautic_user_passwordreset');
        \$form   = \$this->get('form.factory')->create(PasswordResetType::class, \$data, ['action' => \$action]);

        ///Check for a submitted form and process it
        if ('POST' == \$this->request->getMethod()) {
            if (\$isValid = \$this->isFormValid(\$form)) {
                //find the user
                \$data = \$form->getData();
                \$user = \$model->getRepository()->findByIdentifier(\$data['identifier']);

                if (null == \$user) {
                    \$form['identifier']->addError(new FormError(\$this->translator->trans('mautic.user.user.passwordreset.nouserfound', [], 'validators')));
                } else {
                    try {
                        \$model->sendResetEmail(\$user);
                        \$this->addFlash('mautic.user.user.notice.passwordreset');
                    } catch (\\Exception \$exception) {
                        \$this->addFlash('mautic.user.user.notice.passwordreset.error', [], 'error');
                    }

                    return \$this->redirect(\$this->generateUrl('login'));
                }
            }
        }

        return \$this->delegateView([
            'viewParameters' => [
                'form' => \$form->createView(),
            ],
            'contentTemplate' => 'MauticUserBundle:Security:reset.html.php',
            'passthroughVars' => [
                'route' => \$action,
            ],
        ]);
    }

    public function passwordResetConfirmAction()
    {
        /** @var \\Mautic\\UserBundle\\Model\\UserModel \$model */
        \$model = \$this->getModel('user');

        \$data   = ['identifier' => '', 'password' => '', 'password_confirm' => ''];
        \$action = \$this->generateUrl('mautic_user_passwordresetconfirm');
        \$form   = \$this->get('form.factory')->create(PasswordResetConfirmType::class, [], ['action' => \$action]);
        \$token  = \$this->request->query->get('token');

        if (\$token) {
            \$this->request->getSession()->set('resetToken', \$token);
        }

        ///Check for a submitted form and process it
        if ('POST' == \$this->request->getMethod()) {
            if (\$isValid = \$this->isFormValid(\$form)) {
                //find the user
                \$data = \$form->getData();
                /** @var \\Mautic\\UserBundle\\Entity\\User \$user */
                \$user = \$model->getRepository()->findByIdentifier(\$data['identifier']);

                if (null == \$user) {
                    \$form['identifier']->addError(new FormError(\$this->translator->trans('mautic.user.user.passwordreset.nouserfound', [], 'validators')));
                } else {
                    if (\$this->request->getSession()->has('resetToken')) {
                        \$resetToken = \$this->request->getSession()->get('resetToken');
                        \$encoder    = \$this->get('security.password_encoder');

                        if (\$model->confirmResetToken(\$user, \$resetToken)) {
                            \$encodedPassword = \$model->checkNewPassword(\$user, \$encoder, \$data['plainPassword']);
                            \$user->setPassword(\$encodedPassword);
                            \$model->saveEntity(\$user);

                            \$this->addFlash('mautic.user.user.notice.passwordreset.success');

                            \$this->request->getSession()->remove('resetToken');

                            return \$this->redirect(\$this->generateUrl('login'));
                        }

                        return \$this->delegateView([
                            'viewParameters' => [
                                'form' => \$form->createView(),
                            ],
                            'contentTemplate' => 'MauticUserBundle:Security:resetconfirm.html.php',
                            'passthroughVars' => [
                                'route' => \$action,
                            ],
                        ]);
                    } else {
                        \$this->addFlash('mautic.user.user.notice.passwordreset.missingtoken');

                        return \$this->redirect(\$this->generateUrl('mautic_user_passwordresetconfirm'));
                    }
                }
            }
        }

        return \$this->delegateView([
            'viewParameters' => [
                'form' => \$form->createView(),
            ],
            'contentTemplate' => 'MauticUserBundle:Security:resetconfirm.html.php',
            'passthroughVars' => [
                'route' => \$action,
            ],
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Controller/PublicController.php";
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
        return new Source("", "@bundles/UserBundle/Controller/PublicController.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Controller/PublicController.php");
    }
}
