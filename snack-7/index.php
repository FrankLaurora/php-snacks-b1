<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$students = [
    [
        "nome" => "Donald",
        "cognome" => "Duck",
        "marks" => [rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10)]
    ],
    [
        "nome" => "Mickey",
        "cognome" => "Mouse",
        "marks" => [rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10)]
    ],
    [
        "nome" => "Scrooge",
        "cognome" => "McDuck",
        "marks" => [rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10)]
    ],
    [
        "nome" => "Beagle",
        "cognome" => "Boys",
        "marks" => [rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10)]
    ]
];

function average($sum, $count) {
    return $sum / $count;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>snack 7</title>
    </head>
    <body>
        <?php foreach($students as $student) {?>
            <ul>
                <li>
                    <h2><?php echo "{$student['nome']} {$student['cognome']}"?></h2>
                    <h3>Media voti: 
                        <?php 
                            $sum = 0;
                            foreach($student["marks"] as $mark) {
                                $sum += $mark;
                            };
                        
                            echo average($sum, count($student['marks']));
                        ?>
                    </h3>
                </li>
            </ul>
        <?php }; ?>
    </body>
</html>