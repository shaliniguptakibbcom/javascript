<?php

function camelCase($input, $delimiter) {
    // Split the input string by the specified delimiter
    $words = explode($delimiter, $input);
    $camelstring = '';

    // Iterate through each word in the array
    foreach ($words as $index => $word) {
        if ($index == 0) {
            // For the first word, keep the original capitalization
            $camelstring .= $word;
        } else {
            // For subsequent words, capitalize the first letter and lower case the rest
            $firstcharacter = $word[0];
            $rest = substr($word, 1);

            // Convert the first character to uppercase if it's a lowercase letter
            if ($firstcharacter >= 'a' && $firstcharacter <= 'z') {
                $firstcharacter = chr(ord($firstcharacter) - 32);
            }

            // Convert the rest of the string to lowercase
            $lowerrest = '';
            for ($i = 0; $i < strlen($rest); $i++) {
                $char = $rest[$i];
                if ($char >= 'A' && $char <= 'Z') {
                    $char = chr(ord($char) + 32);
                }
                $lowerrest .= $char;
            }

            // Concatenate the modified word to the camel case string
            $camelstring .= $firstcharacter . $lowerrest;
        }
    }

    return $camelstring;
}

// Example usage:
echo camelCase('hello_world_example', '_');
echo camelCase('  Hello_World_Example', '_'); 
?>
