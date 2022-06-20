<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class BodyMeasurements extends BaseChart
{
    public ?string $name = 'body_measurments_chart_progress';
    public ?string $routeName = 'chart_route_body_measurments';
    public ?string $prefix = '';
    public ?array $middlewares = ['auth'];


    public function handler(Request $request): Chartisan
    {
        $waist = Anthropometric::where('user_id', $request->id)
                    ->select('waist')
                    ->pluck('waist')
                    ->toArray();
        $thigh = Anthropometric::where('user_id', $request->id)
                    ->select('thigh')
                    ->pluck('thigh')
                    ->toArray();

        $hips = Anthropometric::where('user_id', $request->id)
                    ->select('hips')
                    ->pluck('hips')
                    ->toArray();

        $biceps = Anthropometric::where('user_id', $request->id)
                    ->select('biceps')
                    ->pluck('biceps')
                    ->toArray();

        $datesPatient = Anthropometric::where('user_id', $request->id)
                        ->select('appointment')
                        ->orderBy('appointment', 'ASC')
                        ->pluck('appointment')
                        ->toArray();

        $dates = [];
        foreach( $datesPatient as $value){
            array_push($dates, Carbon::parse($value)->isoFormat('DD-MMMM-Y'));
        }
        
        return Chartisan::build()
            ->labels($dates)
            ->dataset('Cintura cm', $waist)
            ->dataset('Muslo cm', $thigh)
            ->dataset('Cadera cm', $hips)
            ->dataset('Biceps cm', $biceps);
    }
}