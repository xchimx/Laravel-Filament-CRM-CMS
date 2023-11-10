<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;

class UserOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalUser = User::all()->count();
        return [
            Stat::make('Total User', $totalUser)
        ];
    }
}
