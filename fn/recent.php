<table class="table table-bordered">
  <tbody>
    <tr>
      <?php
$file = file_get_contents("randed.json");
$randed = json_decode($file,TRUE);
// array_reverse($randed);

$cnt = count($randed);
for($i=0;$i<$cnt;$i++){
    if(!($i%5)){
        echo '</tr><tr>';
    }
    echo '<td align="center" style="width:20%" >'.array_pop($randed).'</td>';

    if($i==$cnt-1 && $cnt%5){
        for($j=0;$j<5-($cnt%5);$j++){
            echo '<td align="center" style="width:20%" ></td>';
            
        }
    }
}
?>
    </tr>
  </tbody>
</table>