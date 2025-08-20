<?php
$i = 1;

while ( $i < 6 ) {
    echo $i;
    $i++;
}

echo "<br>";

$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}

echo "<br>";

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

echo "<br>";

$i = 1;
while ($i < 6):
    echo $i;
  $i++;
endwhile;

echo "<br>";

$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i; "<br>";
}

?>
