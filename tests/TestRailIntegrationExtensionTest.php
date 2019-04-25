<?php

namespace Codeception\TestRail\Tests;

use Codeception\Event\FailEvent;
use Codeception\Event\SuiteEvent;
use Codeception\Event\TestEvent;
use Codeception\Suite;
use Codeception\Test\Metadata;
use Codeception\Test\Unit;
use Codeception\TestCase\Test;
use Exception;
use PHPUnit\Framework\MockObject\MockObject;
use Codeception\TestRail\TestRailIntegrationExtension;
use Codeception\TestRail\Api;
use Codeception\TestRail\Entities\TestCase;

/**
 * Class TestRailIntegrationExtensionTest
 * @coversDefaultClass \Codeception\TestRail\TestRailIntegrationExtension
 * @covers \Codeception\TestRail\TestRailIntegrationExtension
 */
class TestRailIntegrationExtensionTest extends Unit
{
    private function createExtension(): TestRailIntegrationExtension
    {
        return new TestRailIntegrationExtension(
            [
                'version' => 'release/2.5',
                'url' => 'http://example.com',
                'username' => 'test',
                'password' => 'test',
                'projectId' => '1',
            ],
            []
        );
    }
    /**
     * @covers ::_initialize
     */
    public function testInitialize(): void
    {
        $extension = new TestRailIntegrationExtension([], []);
        $extension->_initialize();
    }

    /**
     * @covers ::beforeSuite
     * @throws \ReflectionException
     */
    public function testBeforeSuite(): void
    {
        $extension = $this->createExtension();
        $extension->_initialize();
        /** @var Api|MockObject $apiMock */
        $apiMock = $this
            ->getMockBuilder(Api::class)
            ->disableOriginalConstructor()
            ->getMock();

        $apiMock
            ->expects($this->once())
            ->method('addMilestone')
            ->with('[Auto] release/2.5', 'Created automatically by extension');

        $apiMock
            ->expects($this->once())
            ->method('addPlan')
            ->with(
                '[Auto] Regression Plan [api] release/2.5, run #1',
                'Automatically created ' . date('Y-m-d H:i:s')
            );

        $apiMock
            ->expects($this->once())
            ->method('addSuite')
            ->with('Api', 'Api')
            ->willReturn(new \Codeception\TestRail\Entities\Suite(1, 'Api', '', 0, 0, 0, 0, 0, ''));

        $apiMock
            ->expects($this->once())
            ->method('addPlanEntry')
            ->with('Run suite Api', '');

        $extension->setApi($apiMock);

        $suite = new Suite();
        $suite->setBaseName('api');
        $suite->setName('testName');

        $extension->beforeSuite(new SuiteEvent($suite));
    }

    /**
     * @covers ::beforeTest
     * @throws \ReflectionException
     */
    public function testBeforeTest(): void
    {
        $extension = $this->createExtension();
        $extension->_initialize();
        /** @var Api|MockObject $apiMock */
        $apiMock = $this
            ->getMockBuilder(Api::class)
            ->disableOriginalConstructor()
            ->getMock();

        $apiMock
            ->expects($this->once())
            ->method('addSuite')
            ->with('Api', 'Api')
            ->willReturn(new \Codeception\TestRail\Entities\Suite(100500, 'Api', '', 0, 0, 0, 0, 0, ''));

        $apiMock
            ->expects($this->once())
            ->method('getCases')
            ->with(100500)
            ->willReturn([new TestCase(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13)]);

        $extension->setApi($apiMock);

        $suite = new Suite();
        $suite->setBaseName('api');
        $suite->setName('testName');
        $extension->beforeSuite(new SuiteEvent($suite));

        $extension->beforeTest(new TestEvent(new Test()));
    }

    /**
     * @covers ::testFailed
     * @throws \ReflectionException
     */
    public function testTestFailed(): void
    {
        $extension = $this->createExtension();
        $extension->_initialize();
        /** @var Api|MockObject $apiMock */
        $apiMock = $this
            ->getMockBuilder(Api::class)
            ->disableOriginalConstructor()
            ->getMock();

        $apiMock
            ->expects($this->once())
            ->method('addSuite')
            ->with('Api', 'Api')
            ->willReturn(new \Codeception\TestRail\Entities\Suite(100500, 'Api', '', 0, 0, 0, 0, 0, ''));

        $apiMock
            ->expects($this->once())
            ->method('getCases')
            ->with(100500)
            ->willReturn([new TestCase(696969, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13)]);

        $extension->setApi($apiMock);

        $suite = new Suite();
        $suite->setBaseName('api');
        $suite->setName('testName');
        $extension->beforeSuite(new SuiteEvent($suite));

        $extension->beforeTest(new TestEvent(new Test()));

        /** @var Test|MockObject $test */
        $test = $this
            ->getMockBuilder(Test::class)
            ->getMock();

        $test
            ->method('getName')
            ->willReturn('some');

        $metaData = new Metadata();
        $metaData->setFilename('/path/to/file');

        $test
            ->method('getMetadata')
            ->willReturn($metaData);

        $exception = new Exception('WOW');
        $message = $exception->getMessage();
        $message .= "\n" . $exception->getFile() . ': ' . $exception->getLine();
        $message .= "\n" . substr($exception->getTraceAsString(), 0, 512);

        $apiMock
            ->expects($this->once())
            ->method('setTestResult')
            ->with(
                0,
                0,
                5, // failed
                $message,
                'release/2.5',
                '0h 0m 55s'
            );

        $extension->testFailed(new FailEvent($test, 55, $exception));
    }

    /**
     * @covers ::testPassed
     * @throws \ReflectionException
     */
    public function testTestPassed(): void
    {
        $extension = $this->createExtension();
        $extension->_initialize();
        /** @var Api|MockObject $apiMock */
        $apiMock = $this
            ->getMockBuilder(Api::class)
            ->disableOriginalConstructor()
            ->getMock();

        $apiMock
            ->expects($this->once())
            ->method('addSuite')
            ->with('Api', 'Api')
            ->willReturn(new \Codeception\TestRail\Entities\Suite(100500, 'Api', '', 0, 0, 0, 0, 0, ''));

        $apiMock
            ->expects($this->once())
            ->method('getCases')
            ->with(100500)
            ->willReturn([new TestCase(696969, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13)]);

        $extension->setApi($apiMock);

        $suite = new Suite();
        $suite->setBaseName('api');
        $suite->setName('testName');
        $extension->beforeSuite(new SuiteEvent($suite));

        $extension->beforeTest(new TestEvent(new Test()));

        /** @var Test|MockObject $test */
        $test = $this
            ->getMockBuilder(Test::class)
            ->getMock();

        $test
            ->method('getName')
            ->willReturn('some');

        $metaData = new Metadata();
        $metaData->setFilename('/path/to/file');

        $test
            ->method('getMetadata')
            ->willReturn($metaData);

        $apiMock
            ->expects($this->once())
            ->method('setTestResult')
            ->with(
                0,
                0,
                1,// passed
                '',
                'release/2.5',
                '0h 0m 1s'
            );

        $extension->testPassed(new TestEvent($test));
    }
}
