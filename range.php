<?php

function countextra($input) {
    $extracount = 0;

    // Iterate through each character in the input string
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if (!inrange($char)) {
            // If the character is not within the legal range, count it as extra
            $extracount++;
        }
    }

    return $extracount;
}

// function to check if a character is in legal range
function inrange($char) {
    // Check if the character is within lowercase legal range ('a' to 'n')
    if (($char >= 'a' && $char <= 'n') || ($char >= 'A' && $char <= 'N')) {
        return true;
    }
    return false;
}

// Example
echo countextra('abaxbdbbyyhwawiwjjjwem') 
?>
