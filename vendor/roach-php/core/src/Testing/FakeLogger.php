<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021 Kai Sassnowski
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/roach-php/roach
 */

namespace RoachPHP\Testing;

use Psr\Log\LoggerInterface;

final class FakeLogger implements LoggerInterface
{
    /**
     * @var array<string, array<array{message: string|\Stringable, context: array}>>
     */
    private array $logs = [
        'emergency' => [],
        'alert' => [],
        'critical' => [],
        'error' => [],
        'warning' => [],
        'notice' => [],
        'info' => [],
        'debug' => [],
    ];

    public function emergency($message, array $context = []): void
    {
        $this->log('emergency', $message, $context);
    }

    public function alert($message, array $context = []): void
    {
        $this->log('alert', $message, $context);
    }

    public function critical($message, array $context = []): void
    {
        $this->log('critical', $message, $context);
    }

    public function error($message, array $context = []): void
    {
        $this->log('error', $message, $context);
    }

    public function warning($message, array $context = []): void
    {
        $this->log('warning', $message, $context);
    }

    public function notice($message, array $context = []): void
    {
        $this->log('notice', $message, $context);
    }

    public function info($message, array $context = []): void
    {
        $this->log('info', $message, $context);
    }

    public function debug($message, array $context = []): void
    {
        $this->log('debug', $message, $context);
    }

    public function log($level, $message, array $context = []): void
    {
        $level = (string) $level;

        $this->logs[$level][] = [
            'message' => $message,
            'context' => $context,
        ];
    }

    public function messageWasLogged(string $level, string $message, ?array $context = null): bool
    {
        if (empty($this->logs[$level])) {
            return false;
        }

        return !empty(\array_filter($this->logs[$level], static function (array $log) use ($message, $context) {
            return $log['message'] === $message
                && (null === $context || $log['context'] === $context);
        }));
    }
}
