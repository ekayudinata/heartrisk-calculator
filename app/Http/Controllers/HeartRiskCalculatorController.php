<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartRiskCalculatorController extends Controller
{

    public function index(){

    }
  
  public function calculate(Request $request){
        $bmi = $this->bmicalculate( $request->weight, $request->height); 
        $gender = $request->gender;
        $smoking = $request->smoking;
        $age = $request->age;
        $bloodpressure = $request->bloodpressure;

        $percentRiskOfHeartDisease  = 0 ; 

        if( $gender == 'L' ){
            if($smoking == false){
                switch ($age) {
                    case "<=44":
                        switch($bloodpressure){
                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 1; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 1; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                            break;
                        }
                      break;
                    case "45-49":
                        switch($bloodpressure){
                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 1; 
                                }
                            break; 
                        }
                      break;
                    
                  }

            }
        }


        

    }

    protected function bmicalculate($weight, $height){
        return $weight/($height*$height); 
    }
    

    

}
