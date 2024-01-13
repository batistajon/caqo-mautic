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

/* @bundles/EmailBundle/Entity/CopyRepository.php */
class __TwigTemplate_9a09731902f7be2b0cd441a4c60b8a94562c33a1529c7e71bad7d727d2767b67 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\NoResultException;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Helper\\EmojiHelper;

/**
 * Class CopyRepository.
 */
class CopyRepository extends CommonRepository
{
    /**
     * @param \$hash
     * @param \$subject
     * @param \$body
     */
    public function saveCopy(\$hash, \$subject, \$body)
    {
        \$db = \$this->getEntityManager()->getConnection();

        try {
            \$body    = EmojiHelper::toShort(\$body);
            \$subject = EmojiHelper::toShort(\$subject);
            \$db->insert(
                MAUTIC_TABLE_PREFIX.'email_copies',
                [
                    'id'           => \$hash,
                    'body'         => \$body,
                    'subject'      => \$subject,
                    'date_created' => (new \\DateTime())->setTimezone(new \\DateTimeZone('UTC'))->format('Y-m-d H:i:s'),
                ]
            );

            return true;
        } catch (\\Exception \$e) {
            error_log(\$e);

            return false;
        }
    }

    /**
     * @param string \$string  md5 hash or content
     * @param null   \$subject If \$string is the content, pass the subject to include it in the hash
     *
     * @return array
     */
    public function findByHash(\$string, \$subject = null)
    {
        if (null !== \$subject) {
            // Combine subject with \$string and hash together
            \$string = \$subject.\$string;
        }

        // Assume that \$string is already a md5 hash if 32 characters
        \$hash = (32 !== strlen(\$string)) ? \$hash = md5(\$string) : \$string;

        \$q = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->where(
            \$q->expr()->eq(\$this->getTableAlias().'.id', ':id')
        )
            ->setParameter('id', \$hash);

        try {
            \$result = \$q->getQuery()->getSingleResult();
        } catch (NoResultException \$exception) {
            \$result = null;
        }

        return \$result;
    }

    /**
     * @return string
     */
    public function getTableAlias()
    {
        return 'ec';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Entity/CopyRepository.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/CopyRepository.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Entity/CopyRepository.php");
    }
}
