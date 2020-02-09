<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

interface MessageExport extends WithMapping, WithHeadings
{
    public function getFileName(): string;
}