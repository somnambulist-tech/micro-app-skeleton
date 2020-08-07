<?php declare(strict_types=1);

namespace App\Tests\Support\Behaviours;

use Symfony\Component\BrowserKit\AbstractBrowser;

/**
 * Trait BootTestClient
 *
 * @package App\Tests\Support\Behaviours
 * @subpackage App\Tests\Support\Behaviours\BootTestClient
 *
 * @method void setKernelClass()
 * @method void setUpTests()
 */
trait BootTestClient
{

    /**
     * @var AbstractBrowser
     */
    protected $__kernelBrowserClient;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void
    {
        if (method_exists($this, 'setKernelClass')) {
            self::setKernelClass();
        }

        $this->__kernelBrowserClient = self::createClient();

        if (method_exists($this, 'setUpTests')) {
            $this->setUpTests();
        }
    }
}
