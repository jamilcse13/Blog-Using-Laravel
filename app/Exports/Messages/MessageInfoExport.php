<?php

namespace App\Exports\Messages;

use Maatwebsite\Excel\Concerns\Exportable;
use App\Exports\MessageExport;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns;

class MessageInfoExport implements FromCollection
{

	use Exportable;

    private $itemCollection = null;

    public function setCollection($itemCollection)
    {
        // dd($itemCollection);
        $this->itemCollection = $itemCollection; 

        return $this;
    }

    public function collection()
    {
        return $this->itemCollection;
    }

    public function map($item) : array
     {
         return [
            $item->name ?? '',
            $item->email ?? '',
            $item->subject ?? '',
            $item->message ?? '',
         ];
    }

    public function headings(): array
    {
        return  [
                'Name',
                'Email',
                'Subject',
                'Message',
        ];
    }

    public function getFileName(): string
    {
        return 'message_info.xls';
    }
}
