<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\NaiveBayes;

// nama | ipk | sks | status
// alvin | 3 | 100 | tidak lulus
// panji | 3.5 | 114 | lulus 

// [3,100],[3.5,114]
// ['tidak lulus',lulus]

$samples = [[3.5, 12], [2, 10], [3, 20]];
$labels = ['lulus', 'tidak lulus', 'lulus'];

$classifier = new NaiveBayes();
$classifier->train($samples, $labels);

// $classifier->predict([2.5, 9]);
// echo implode(" ",$labels);

$a = sprintf('%s',$classifier->predict([2.5,11]));
echo $a;
// return 'a'

// $classifier->predict([[3, 1, 1], [1, 4, 1]]);

// return ['a', 'b']

?>
