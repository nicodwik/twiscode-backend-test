<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class CodingTestController extends Controller
{
    public function convert(Request $request)
    {
        if($request->has('bin')) {
            // 1. split bin to array
            // 2. reverse the array

            $result = 0;
            $reversed = array_reverse(str_split($request->bin));

            foreach ($reversed as $key => $value) {
                if($value == 1) {
                    $result += pow(2, $key);
                }
            }

            return response()->json([
                'result' => $result
            ]);
        }
    }

    public function palindromeChecker(Request $request)
    {
       if($request->has('sentence')) {
           $sentece = $request->sentence;
           $sentece = str_replace(' ', '', $sentece);
           $newSentence = '';

            for ($i=0; $i < strlen($sentece); $i++) { 
                # code...
            }
           return $sentece;
       }
    }

    public function query(Request $request)
    {
       $data= Transaction::with('transactionDetails')->get();
       return $data;
    }
}
