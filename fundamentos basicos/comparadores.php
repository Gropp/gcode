<?php
$a = 10;
$b = 4;
$c = 30;
$d = 34;
$e = 10;
$f = 45;
$g = 39;
$h = "A";
$i = "a";
$j = "10";
$m = NULL;
$n = NULL;

echo "Maior: ".(($a > $b)?"SIM":"NAO")."<br/>";
echo "Menor: ".(($b < $c)?"SIM":"NAO")."<br/>";
echo "Maior igual: ".(($a >= $e)?"SIM":"NAO")."<br/>";
echo "Menor igual: ".(($g <= $d)?"SIM":"NAO")."<br/>";
echo "Igual: ".(($a == $j)?"SIM":"NAO")."<br/>";
echo "Identico: ".(($h === $i)?"SIM":"NAO")."<br/>";
echo "Diferente: ".(($a != $j)?"SIM":"NAO")."<br/>";
echo "Nao identico: ".(($a !== $j)?"SIM":"NAO")."<br/>";
echo "Diferente: ".(($h <> $i)?"SIM":"NAO")."<br/>";
echo "<=>?: ".($e <=> $g)."<br/>";
echo "<=>?: ".($f <=> $c)."<br/>";
echo "<=>?: ".($a <=> $e)."<br/>";
echo "Nao Nulo: ".($m ?? $n ?? $g)."<br/>";
echo "Nao Nulo: ".($n ?? $i ?? $j)."<br/>";
echo $a++."<br/>";
echo $a."<br/>";
echo ++$a."<br/>";
echo $a."<br/>";
echo $g--."<br/>";
echo $g."<br/>";
echo --$g."<br/>";
echo $g."<br/>";
echo $a + $b * $c / $e ** $b."<br/>";
echo ($a + $b) * ($c / $e) ** $b;