<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OilChangeCheck extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'current_odometer',
        'previous_odometer',
        'previous_oil_change_date',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'current_odometer' => 'integer',
            'previous_odometer' => 'integer',
            'previous_oil_change_date' => 'date',
        ];
    }

    public function isDue(): bool
    {
        return $this->isDueByDistance() || $this->isDueByTime();
    }

    public function isDueByDistance(): bool
    {
        return ($this->current_odometer - $this->previous_odometer) > 5000;
    }

    public function isDueByTime(): bool
    {
        $previousDate = $this->previous_oil_change_date->copy()->startOfDay();
        $dueAfter = $previousDate->copy()->addMonths(6);
        $today = Carbon::today(config('app.timezone'));

        return $today->greaterThan($dueAfter);
    }
}
