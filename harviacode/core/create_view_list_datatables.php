<?php 
$string = "";
$string .= "
        <!-- Main content -->
        <div class='card'>
            <div class='card-body'>
                  <h3 class='box-title'>".  strtoupper($table_name)." LIST <br>
                  <?php echo anchor('".$c_url."/create/','ADD ".  strtoupper($table_name)."',array('class'=>'btn btn-danger btn-sm'));?>";
// Generate excel
$string .= "</h3>
        <div class='table-responsive'>
        <table class=\"table table-bordered table-striped\" id=\"example\"style=\"width:100%\">
            <thead>
                <tr>
                    <th width=\"80px\">No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t    <th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t    <th>Action</th>
                </tr>
            </thead>";
$string .= "\n\t    <tbody>
            <?php
            \$start = 0;
            foreach ($" . $c_url . "_data as \$$c_url)
            {
                ?>
                <tr>";

$string .= "\n\t\t    <td><?php echo ++\$start ?></td>";

foreach ($non_pk as $row) {
    $string .= "\n\t\t    <td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}

$string .= "\n\t\t    <td style=\"text-align:center\" width=\"140px\">"
        . "\n\t\t\t<?php "
        . "\n\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<i class=\"fadeIn animated bx bx-show-alt\"></i>',array('title'=>'detail','class'=>'btn btn-success radius-30 btn-sm')); "
        . "\n\t\t\techo '  '; "
        . "\n\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<i class=\"bx bx-edit\"></i>',array('title'=>'edit','class'=>'btn btn-warning radius-30 btn-sm')); "
        . "\n\t\t\techo '  '; "
        . "\n\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<i class=\"bx bx-trash\"></i>','title=\"delete\" class=\"btn btn-danger radius-30 btn-sm\" onclick=\"javasciprt: return confirm(\\'Are You Sure ?\\')\"'); "
        . "\n\t\t\t?>"
        . "\n\t\t    </td>";

$string .=  "\n\t        </tr>
                <?php
            }
            ?>
           </tbody>
          </table>
       </div>
       </div>
";


$hasil_view_list = createFile($string, $target."views/" . $v_list_file);

?>