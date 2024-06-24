<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
//  int $decimal The decimal number to convert.
//return string The binary representation of the decimal number.
  <body>
    <?php 

function decimalToBinary(int $decimal): string {
    $binary = '';
    for ($i = 31; $i >= 0; $i--) {
        $mask = 1 << $i; // Create a mask for the ith bit
        if (($decimal & $mask)!== 0) {
            $binary.= '1';
        } else {
            $binary.= '0';
        }
    }
    return $binary;
}

// Example
$decimalNumber = 10;
$binaryRepresentation = decimalToBinary($decimalNumber);
echo "The binary representation of $decimalNumber is: $binaryRepresentation\n";


     ?>
  </body>
</html>
