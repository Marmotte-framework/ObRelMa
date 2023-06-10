<?php
/**
 * MIT License
 *
 * Copyright (c) 2023-Present Kevin Traini
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

declare(strict_types=1);

namespace Marmotte\ObRelMa\Entities;

use DateTimeImmutable;
use Marmotte\ObRelMa\ORM\Column;
use Marmotte\ObRelMa\ORM\Entity;
use Marmotte\ObRelMa\ORM\PrimaryKey;

/**
 * Represents a done migration
 */
#[Entity(table_name: 'obrelma_migrations')]
final class ObRelMaMigration
{
    #[Column(length: 255, updatable: false)]
    #[PrimaryKey]
    private readonly string $name;

    #[Column(updatable: false)]
    private readonly DateTimeImmutable $done_at;

    public function __construct(string $name, DateTimeImmutable $done_at)
    {
        $this->name    = $name;
        $this->done_at = $done_at;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDoneAt(): DateTimeImmutable
    {
        return $this->done_at;
    }
}