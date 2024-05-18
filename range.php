<?php

function countextra($input) {
    $extraCount = 0;

    // Iterate through each character in the input string
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if (!inLegalRange($char)) {
            // If the character is not within the legal range, count it as extra
            $extraCount++;
        }
    }

    return $extraCount;
}

// function to check if a character is in legal range
function inLegalRange($char) {
    // Check if the character is within lowercase legal range ('a' to 'n')
    if (($char >= 'a' && $char <= 'n') || ($char >= 'A' && $char <= 'N')) {
        return true;
    }
    return false;
}

// Example
echo countextra('abaxbdbbyyhwawiwjjjwem') 
?>
