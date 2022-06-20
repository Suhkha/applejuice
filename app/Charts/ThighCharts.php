<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class ThighCharts extends BaseChart
{
    public ?string $name = 'thigh_chart_progress';
    public ?string $routeName = 'chart_route_thigh';
    public ?string $prefix = '';
    public ?array $middlewares = ['auth'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $thigh = Anthropometric::where('user_id', $request->id)
                    ->select('thigh')
                    ->pluck('thigh')
                    ->toArray();

        $datesPatient = Anthropometric::where('user_id', $request->id)
                        ->select('appointment')
                        ->pluck('appointment')
                        ->toArray();

        $dates = [];
        foreach( $datesPatient as $value){
            array_push($dates, Carbon::parse($value)->isoFormat('DD-MMMM-Y'));
        }

        return Chartisan::build()
            ->labels($dates)
            ->dataset('Muslo cm', $thigh);
    }
}