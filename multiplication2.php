<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Das kleine 1 mal 1</title>
  <style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
    }
    tr:nth-child(even){
        background-color:grey;
    }
    th{
        background-color:yellow;
        width:20px;
        height:20px;
    }
    td{
        width:20px;
        height:20px;
    }
    
    </style>
</head>
<body>
<h1>1 mal 1</h1>
<table cellpadding="10">    
         <tr>
              <th></th>
              <?php
for ($a=1; $a<=11; $a++)
{
        echo "<th>".$a."</th>";
}
?>
        </tr>      
      <tbody>
<?php

for ($a = 1; $a<=11;$a++)
{
echo "<tr>\n\t\t"; // \n represents the newline (linefeed) and \t represents the tab//
echo "<th>".$a."</th>\n";
for ($b=1; $b<=11; $b++)
{
   echo "<td>";
        $erg=$a*$b;
    echo "$erg ";
    echo "</td>\n";
}
    echo "</tr>\n\t\t";
}
?>
      </tbody>
</table>

</body>
</html>

