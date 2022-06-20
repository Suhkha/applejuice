<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use Carbon\Carbon; 

class TopFat extends BaseChart
{
    public ?string $name = 'top_fat_chart';
    public ?string $routeName = 'chart_route_top_fat';
    public ?string $prefix = '';
    public ?array $middlewares = ['auth'];


    public function handler(Request $request): Chartisan
    {
        $fat = Anthropometric::select('user_id', 'average_fat', 'appointment')
                    ->whereMonth('appointment', date('m'))
                    ->whereYear('appointment', date('Y'))
                    ->groupBy('user_id')
                    ->orderBy('average_fat', 'ASC')
                    ->pluck('average_fat')
                    ->take(5)
                    ->toArray();

        $dataPatient = Anthropometric::select('user_id', 'average_fat', 'appointment')
                    ->whereMonth('appointment', date('m'))
                    ->whereYear('appointment', date('Y'))
                    ->groupBy('user_id')
                    ->orderBy('average_fat', 'ASC')
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
            ->dataset('Grasa %', $fat);
    }
}