<?php

if (!function_exists('multiselect2name')) {
    function multiselect2name(string $values): string
    {
        $selectedValues = json_decode($values);
        $values = array_map('intval', $selectedValues);


        // Define your mappings here
        $mappings = [
            '1' => 'Północ',
            '2' => 'Południe',
            '3' => 'Wschód',
            '4' => 'Zachód',
            '5' => 'Północny wschód',
            '6' => 'Północny zachód',
            '7' => 'Południowy wschód',
            '8' => 'Południowy zachód'
        ];

        $names = [];

        // Loop through the values and map them to names
        foreach ($values as $value) {
            if (isset($mappings[$value])) {
                $names[] = $mappings[$value];
            }
        }

        // Return the names as a comma-separated string
        return implode(', ', $names);
    }
}