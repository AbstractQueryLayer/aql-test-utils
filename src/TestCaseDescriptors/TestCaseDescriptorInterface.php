<?php

declare(strict_types=1);

namespace IfCastle\AQL\TestCases\TestCaseDescriptors;

interface TestCaseDescriptorInterface
{
    public function getTestCaseName(): string;
}
