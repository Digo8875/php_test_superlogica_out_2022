<?php

namespace App\Http\Controllers;


class DataProcessingController extends Controller
{
    /**
    * Process data for exercise 2
    */
    public function dataProcessing()
    {
        $responseData = [];

        #1 - Create an array
        $myArray = [];
        $responseData['myArray'] = $myArray;

        #2 - Fill the array with 7 numbers
        $this->fillArrayWithNumbers($myArray, 7);
        $responseData['filledArray'] = $myArray;

        #3 - Print the number of position 3 of the array
        $responseData['arrayPosition3'] = $myArray[2];

        #4 - Create a variable with all array positions in string format separated by comma
        $myString = $this->arrayToUniqueString($myArray, ',');
        $responseData['string'] = $myString;

        #5 - Create a new array from the variable in string format that was created and destroy the previous array
        $myNewArray = $this->stringToIntegerArray($myString, ',');
        unset($myArray);
        $responseData['newArrayByString'] = $myNewArray;

        #6 - Create a condition to check if the value 14 exists in the array
        $responseData['hasValue14InArray'] = in_array(14, $myNewArray);

        #7 - Search each position. If the current position number is less than the from the previous position (previous value that has not been deleted from the array yet), delete this position
        $this->removeNumberLessThanPreviousInArray($myNewArray);
        $responseData['arraySearchPositions'] = $myNewArray;

        #8 - Remove the last position of this array
        array_pop($myNewArray);
        $responseData['arrayPop'] = $myNewArray;

        #9 - Count how many elements are in this array
        $responseData['arrayCount'] = count($myNewArray);

        #10 - Invert the positions of this array
        $myNewArray = array_reverse($myNewArray, true);
        $responseData['arrayReverse'] = $myNewArray;

        return view('exercise_2.index', ['responseData' => $responseData]);
    }

    /**
    * Fill a given array by his pointer and a quantity of numbers to be generated
    * @param array &$myArray | Array pointer to be filled
    * @param integer $quantity | Quantity of number to be generated
    */
    private function fillArrayWithNumbers(&$myArray, $quantity): void
    {
        for ($i=0 ; $i<$quantity ; $i++) {
            array_push($myArray, rand(1, 20));
        }
    }

    /**
    * Concatenates the array values into a string by a given separator
    * @param array $myArray | Array that provides the values
    * @param string $separator | Separator used in the string concatenation
    */
    private function arrayToUniqueString($myArray, $separator): string
    {
        $string = '';

        for ($i=0 ; $i<count($myArray) ; $i++) {
            $string .= strval($myArray[$i]);
            if ($i < count($myArray) - 1)
                $string .= $separator;
        }

        return $string;
    }

    /**
    * Generates an array by a given string and separator
    * @param string $string | String that will become an array
    * @param string $separator | Separator used in the string explode
    */
    private function stringToIntegerArray($string, $separator): array
    {
        return array_map('intval', explode($separator, $string ));
    }

    /**
    * Checks a given array and removes values that be less than previous
    * @param array &$myNewArray | Array pointer to be checked
    */
    private function removeNumberLessThanPreviousInArray(&$myNewArray): void
    {
        for ($i=0 ; $i<count($myNewArray) ; $i++) {
            if ($i == 0)
                continue;

            if ($myNewArray[$i] < $myNewArray[$i-1]) {
                unset($myNewArray[$i]);
                $i++;
            }
        }
    }
}
