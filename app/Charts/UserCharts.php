<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class UserCharts extends BaseChart
{
    /**
     * Determines the chart name to be used on the
     * route. If null, the name will be a snake_case
     * version of the class name.
     */
    public ?string $name = 'user_chart_progress';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */
    public ?string $routeName = 'chart_route_user';

    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
    public ?string $prefix = '';

    /**
     * Determines the middlewares that will be applied
     * to the chart endpoint.
     */
    public ?array $middlewares = ['auth'];



    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        
        $userName = UserDetails::where('user_id', $request->id)->select('name')->pluck('name')->toArray();
        $weight = Anthropometric::where('user_id', $request->id)->select('weight')->pluck('weight')->toArray();
        $fat = Anthropometric::where('user_id', $request->id)->select('average_fat')->pluck('average_fat')->toArray();
        $muscle = Anthropometric::where('user_id', $request->id)->select('muscle_mass_kilo')->pluck('muscle_mass_kilo')->toArray();

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
            ->dataset('Peso kg', $weight)
            ->dataset('Grasa %', $fat)
            ->dataset('Músculo kg', $muscle);
    }
}