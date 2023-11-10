<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Customer;

class CustomerOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCustomers = Customer::all()->count();
        return [
            Stat::make('Total Customers', $totalCustomers)
        ];
    }
}
