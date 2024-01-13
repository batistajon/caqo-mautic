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

/* @bundles/MarketplaceBundle/Collection/VersionCollection.php */
class __TwigTemplate_69d12abe7b85ab24906aecc894012eebe5c847003c693065ac6faf1fc0700f85 extends Template
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

declare(strict_types=1);

namespace Mautic\\MarketplaceBundle\\Collection;

use Mautic\\MarketplaceBundle\\DTO\\Version;
use Mautic\\MarketplaceBundle\\Exception\\RecordNotFoundException;

class VersionCollection implements \\Iterator, \\Countable, \\ArrayAccess
{
    /**
     * @var Version[]
     */
    private array \$records;

    private int \$position = 0;

    /**
     * @param Version[] \$records
     */
    public function __construct(array \$records = [])
    {
        \$this->records = array_values(\$records);
    }

    public static function fromArray(array \$array): VersionCollection
    {
        return new self(
            array_map(
                fn (array \$record) => Version::fromArray(\$record),
                \$array
            )
        );
    }

    public function map(callable \$callback): VersionCollection
    {
        return new self(array_map(\$callback, \$this->records));
    }

    public function sortByLatest(): VersionCollection
    {
        \$records = \$this->records;

        usort(
            \$records,
            fn (Version \$versionA, Version \$versionB) => \$versionB->time->getTimestamp() - \$versionA->time->getTimestamp()
        );

        return new self(\$records);
    }

    public function filter(callable \$callback): VersionCollection
    {
        return new self(array_values(array_filter(\$this->records, \$callback)));
    }

    /**
     * Finds the latest stable version. If no stable version is found, returns the version with latest timestamp.
     */
    public function findLatestStableVersionPackage(): ?Version
    {
        return \$this->sortByLatest()->filter(fn (Version \$version) => \$version->isStable())->first();
    }

    /**
     * Finds the latest stable version. If no stable version is found, returns the version with latest timestamp.
     */
    public function findLatestVersionPackage(): ?Version
    {
        return \$this->sortByLatest()->first();
    }

    public function current(): Version
    {
        return \$this->records[\$this->position];
    }

    public function first(): ?Version
    {
        return \$this->records[0] ?? null;
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function key()
    {
        return \$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->records[\$this->position]);
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function count(): int
    {
        return count(\$this->records);
    }

    public function offsetSet(\$offset, \$value): void
    {
        if (is_null(\$offset)) {
            \$this->records[] = \$value;
        } else {
            \$this->records[\$offset] = \$value;
        }
    }

    public function offsetExists(\$offset): bool
    {
        return isset(\$this->records[\$offset]);
    }

    public function offsetUnset(\$offset): void
    {
        unset(\$this->records[\$offset]);
    }

    public function offsetGet(\$offset): Version
    {
        if (isset(\$this->records[\$offset])) {
            return \$this->records[\$offset];
        }

        throw new RecordNotFoundException(\"Version on offset {\$offset} was not found\");
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Collection/VersionCollection.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Collection/VersionCollection.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Collection/VersionCollection.php");
    }
}
