<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    function decimalToBinary(int $decimal): string
    {
        // Handle the special case where the input is zero
        if ($decimal === 0) {
            return '0';
        }

        // Initialize an empty string to build the binary representation
        $binary = '';

        // Loop until the decimal number becomes zero
        while ($decimal > 0) {
            // Append the least significant bit to the binary string
            $binary = ($decimal & 1) . $binary;
            // Shift the decimal number one bit to the right
            $decimal = $decimal >> 1;
        }

        return $binary;
    }

    // Example usage with output
    try {
        // Define a list of test cases for demonstration
        $testCases = [0, 1, 2, 5, 10, 255, 1024, -1];

        foreach ($testCases as $decimalNumber) {
            if ($decimalNumber < 0) {
                throw new InvalidArgumentException('Input must be a non-negative integer');
            }

            $binaryRepresentation = decimalToBinary($decimalNumber);
            echo "Decimal: $decimalNumber => Binary: $binaryRepresentation\n";
        }
    } catch (InvalidArgumentException $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }

     ?>
  </body>
</html>
