<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class BoneMassCharts extends BaseChart
{
    public ?string $name = 'bone_mass_chart_progress';
    public ?string $routeName = 'chart_route_bone_mass';
    public ?string $prefix = '';
    public ?array $middlewares = ['auth'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $boneMass = Anthropometric::where('user_id', $request->id)
                    ->select('bone_mass')
                    ->pluck('bone_mass')
                    ->toArray();

        $datesPatient = Anthropometric::where('user_id', $request->id)
                        ->select('created_at')
                        ->pluck('created_at')
                        ->toArray();

        $dates = [];
        foreach( $datesPatient as $value){
            array_push($dates, Carbon::parse($value)->isoFormat('DD-MMMM-Y'));
        }

        return Chartisan::build()
            ->labels($dates)
            ->dataset('Masa ósea kg', $boneMass);
    }
}