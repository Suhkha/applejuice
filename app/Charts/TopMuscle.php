<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class TopMuscle extends BaseChart
{
    public ?string $name = 'top_muscle_chart';
    public ?string $routeName = 'chart_route_top_muscle';
    public ?string $prefix = '';
    public ?array $middlewares = ['auth'];


    public function handler(Request $request): Chartisan
    {
        $muscle = Anthropometric::select('user_id', 'muscle_mass_kilo', 'appointment')
                    ->whereMonth('appointment', date('m'))
                    ->whereYear('appointment', date('Y'))
                    ->groupBy('user_id')
                    ->orderBy('appointment', 'DESC')
                    ->pluck('muscle_mass_kilo')
                    ->take(5)
                    ->toArray();

        $dataPatient = Anthropometric::select('user_id', 'muscle_mass_kilo', 'appointment')
                    ->whereMonth('appointment', date('m'))
                    ->whereYear('appointment', date('Y'))
                    ->groupBy('user_id')
                    ->orderBy('appointment', 'DESC')
                    ->pluck('user_id')
                    ->take(5)
                    ->toArray();

        $data = [];
        foreach( $dataPatient as $value){
            $user = UserDetails::select('name', 'last_name', 'user_id')
                            ->where('user_id', $value)
                            ->get('name', 'last_name')
                            ->first();

            array_push($data, $user->name." ".$user->last_name);
        }
        
        return Chartisan::build()
            ->labels($data)
            ->dataset('Músculo kg', $muscle);
    }
}