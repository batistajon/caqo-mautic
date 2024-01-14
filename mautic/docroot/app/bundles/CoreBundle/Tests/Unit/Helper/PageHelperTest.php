<?php

declare(strict_types=1);

namespace Mautic\CoreBundle\Tests\Unit\Helper;

use Mautic\CoreBundle\Helper\CoreParametersHelper;
use Mautic\CoreBundle\Helper\PageHelper;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PageHelperTest extends \PHPUnit\Framework\TestCase
{
    private \PHPUnit\Framework\MockObject\MockObject $session;

    private \PHPUnit\Framework\MockObject\MockObject $coreParametersHelper;

    private \Mautic\CoreBundle\Helper\PageHelper $pageHelper;

    protected function setUp(): void
    {
        parent::setUp();
        $this->session              = $this->createMock(SessionInterface::class);
        $this->coreParametersHelper = $this->createMock(CoreParametersHelper::class);
        $this->pageHelper           = new PageHelper($this->session, $this->coreParametersHelper, 'mautic.test', 0);
    }

    /**
     * @dataProvider PageProvider
     */
    public function testCountPage(int $count, int $limit, int $page): void
    {
        $this->session->expects($this->once())
            ->method('get')
            ->with('mautic.test.limit')
            ->willReturn($limit);

        $this->assertSame($page, $this->pageHelper->countPage($count));
    }

    public static function pageProvider()
    {
        return [
            [0, 10, 1],
            [1, 10, 1],
            [5, 10, 1],
            [10, 10, 1],
            [11, 10, 2],
            [20, 10, 2],
            [21, 10, 3],
            [15, 15, 1],
            [16, 15, 2],
        ];
    }

    /**
     * @dataProvider startProvider
     */
    public function testCountStart(int $page, int $limit, int $start): void
    {
        $this->session->expects($this->once())
            ->method('get')
            ->with('mautic.test.limit')
            ->willReturn($limit);

        $this->assertSame($start, $this->pageHelper->countPage($page));
    }

    public static function startProvider()
    {
        return [
            [0, 10, 1],
            [1, 10, 1],
            [10, 10, 1],
            [11, 10, 2],
        ];
    }
}