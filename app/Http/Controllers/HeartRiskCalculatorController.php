<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartRiskCalculatorController extends Controller
{

    public function index(){

    }
  
  public function calculate(Request $request){

        $bmi = $this->bmicalculate($request->weight, $request->height); 
        $gender = $request->type;
        $smoking = $request->smoking;
        $age = $request->agerange;
        $bloodpressure = $request->bloodpressure;

        $percentRiskOfHeartDisease  = 0 ; 

        if( $gender == 'L' ){
            if($smoking == 'N'){
                switch ($age) {
                    case '<=44':
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

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                            break;
                        }
                      break;

                    case '45-49':
                        switch($bloodpressure){

                            case '<120': 
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
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                            break;
                        }
                      break;


                    case '50-54':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                            break;
                        }
                      break;


                    case '55-59':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                            break;
                        }
                      break;

                    case '60-64':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                            break;
                        }
                      break;

                    case '65-69':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 22; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 20 ; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 22; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 24; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 26; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 28; 
                                }
                            break;
                        }
                      break;

                    case '>=70':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 25; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 26; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 28; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 26 ; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 28; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 30; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 32; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 34; 
                                }
                            break;
                        }
                      break;
                  }

            }


            if($smoking == 'Y'){
                switch ($age) {
                    case '<=44':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 2; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                            break;
                        }
                      break;

                    case '45-49':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 3; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                            break;
                        }
                      break;


                    case '50-54':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 4; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 5; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 27; 
                                }
                            break;
                        }
                      break;


                    case '55-59':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 6; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 7; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 24; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 27; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 30; 
                                }
                            break;
                        }
                      break;

                    case '60-64':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 8; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 9; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 10; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 22; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 24; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 27; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 25; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 28; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 31; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 34; 
                                }
                            break;
                        }
                      break;

                    case '65-69':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 11; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 12; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 13; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 14; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 19; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 25; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 22; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 24; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 26; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 29; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 31; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 28 ; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 30; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 33; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 36; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 39; 
                                }
                            break;
                        }
                      break;

                    case '>=70':
                        switch($bloodpressure){

                            case '<120': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 15; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 16; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 17; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                            break; 

                            case '120-139': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 18; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 20; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 21; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 24; 
                                }
                            break;

                            case '140-159': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 23; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 24; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 26; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 28; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 30; 
                                }
                            break;
                            
                            case '160-179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 28; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 30; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 32; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 34; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 36; 
                                }
                            break;
                            
                            case '>179': 
                                if(  $bmi < 20){
                                    $percentRiskOfHeartDisease  = 34 ; 
                                }
                                if( ($bmi >= 20) && ($bmi < 25)  ){
                                    $percentRiskOfHeartDisease  = 36; 
                                }
                                if( ($bmi >= 25) && ($bmi < 30)  ){
                                    $percentRiskOfHeartDisease  = 39; 
                                }
                                if( ($bmi >= 30) && ($bmi < 35)  ){
                                    $percentRiskOfHeartDisease  = 41; 
                                }
                                if( $bmi >= 35 ){
                                    $percentRiskOfHeartDisease  = 44; 
                                }
                            break;
                        }
                      break;
                  }

            }
        }

        if(($percentRiskOfHeartDisease >= 1) && ($percentRiskOfHeartDisease <= 4)){
            return redirect('/')->with('success', 'Selamat, saat ini Anda memiliki Risiko Rendah (Low Risk). Tetap jaga kebiasaan hidup sehat Anda ya. Selain berolahraga, mengatur pola makan, dan tidur teratur, ada baiknya Anda juga mengecek kesehatan jantung Anda secara rutin.');
        }
        

    }

    protected function bmicalculate($weight, $height){
        return $weight/($height*$height); 
    }
    

    

}
