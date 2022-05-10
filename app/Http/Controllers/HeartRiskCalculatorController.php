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

                if( $age =="<=44"){

                    if( $bloodpressure == "<120" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 1 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 1 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                    }

                    if( $bloodpressure == "120-139" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                    }

                    if( $bloodpressure == "140-159" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                    }

                    if( $bloodpressure == "160-179" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 5 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 7 ; 
                        }
                    }

                    if( $bloodpressure == ">179" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 5 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 7 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 8 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 10 ; 
                        }
                    }

                }


                if( $age =="45-49"){

                    if( $bloodpressure == "<120" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                    }

                    if( $bloodpressure == "120-139" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                    }

                    if( $bloodpressure == "140-159" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 5 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                    }

                    if( $bloodpressure == "160-179" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 5 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 7 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 8 ; 
                        }
                    }

                   

                    if( $bloodpressure == ">179" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 7 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 8 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 9 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 10 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 12 ; 
                        }
                    }

                }




                if( $age =="45-49"){

                    if( $bloodpressure == "<120" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 2 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                    }

                    if( $bloodpressure == "120-139" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                    }

                    if( $bloodpressure == "140-159" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 3 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 4 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 5 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                    }

                    if( $bloodpressure == "160-179" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 5 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 6 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 7 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 8 ; 
                        }
                    }

                   

                    if( $bloodpressure == ">179" ){
                        if( $bmi == "<20" ){
                            $percentRiskOfHeartDisease = 7 ; 
                        }
                        if( $bmi == "20-24.99" ){
                            $percentRiskOfHeartDisease = 8 ; 
                        }
                        if( $bmi == "25-29.99" ){
                            $percentRiskOfHeartDisease = 9 ; 
                        }
                        if( $bmi == "30-34.99" ){
                            $percentRiskOfHeartDisease = 10 ; 
                        }
                        if( $bmi == ">35" ){
                            $percentRiskOfHeartDisease = 12 ; 
                        }
                    }

                }



            }
        }

    }

    protected function bmicalculate($weight, $height){
        return $weight/($height*$height); 
    }
    

    

}
