<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class MuscleQualityCharts extends BaseChart
{
    public ?string $name = 'muscle_quality_chart_progress';
    public ?string $routeName = 'chart_route_muscle_quality';
    public ?string $prefix = '';
    public ?array $middlewares = ['auth'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $muscleQuality = Anthropometric::where('user_id', $request->id)
                    ->select('muscle_quality')
                    ->pluck('muscle_quality')
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
            ->dataset('Calidad muscular %', $muscleQuality);
    }
}