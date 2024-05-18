<?php

function parse($input) {
    $value = 0; // Initial value
    $output = array(); // Array to store outputs

    // Iterate through each character in the input string
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        // Process the character based on its value
        switch ($char) {
            case 'p':
                $value += 1;
                break;
            case 'm':
                $value -= 1;
                break;
            case 's':
                $value *= $value;
                break;
            case 'o':
                $output[] = $value;
                break;
            // Invalid characters are skipped 
        }
    }

    return $output;
}

// Example
echo json_encode(parse('ppppsmoso')); 
?>
