<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Mailer\Factory;

use Sylius\Component\Mailer\Model\Email;
use Sylius\Component\Mailer\Model\EmailInterface;

class EmailFactory implements EmailFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createNew(): EmailInterface
    {
        return new Email();
    }
}
