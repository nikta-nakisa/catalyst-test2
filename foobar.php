<?php
$output = [];
for ($number =1; $number  <= 100; $number++) {

    if ($number % 15 == 0) {
        $output[] = 'foobar';
    } else if ($number % 5 == 0) {
        $output[] = 'bar';
    } else if ($number % 3 ==0) {
        $output[] = 'foo';
    } else {
        $output[] = $number;
    }
}
echo(implode(',', $output));
?>




