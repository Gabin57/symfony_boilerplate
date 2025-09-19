<?php
namespace App\Enum;

enum OrderStatusEnum: string
{
    case Paid = 'paid';
    case Pending = 'pending';
    case Shipped = 'shipped';
}


