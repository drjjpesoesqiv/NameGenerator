<?php

/*
php tools/parse_name_data.php "./data/last_raw.txt"         ./data/last.txt
php tools/parse_name_data.php "./data/first_male_raw.txt"   ./data/first_male.txt
php tools/parse_name_data.php "./data/first_female_raw.txt" ./data/first_female.txt
*/

$file_in  = $argv[1];
$file_out = $argv[2];

$file = fopen($file_in, 'r');

$output = '';

while ($line = fgets($file))
{
  if ( ! $line)
    continue;
  
  preg_match('([^\s]+)', $line, $matches);
  
  if ( ! count($matches))
    continue;
  
  $output .= "{$matches[0]}\n";
}

if ( ! empty($output))
  file_put_contents($argv[2], $output);
