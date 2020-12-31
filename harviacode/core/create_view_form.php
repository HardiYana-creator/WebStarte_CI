<?php

$string = "<!-- Main content -->
    <div class='row'>
            <div class='col-12 col-lg-9 mx-auto'>
              <div class='card radius-15'>
                <div class='card-body'>
                  <h3 class='box-title'>".  strtoupper($table_name)."</h3>
                      <div class='box box-primary'>";
$string .= "
        <form action=\"<?php echo \$action; ?>\" method=\"post\">";
$string .="<table class='table'>";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text') {
        $string .= "\n\t    <tr><td>". label($row["column_name"]) . " <?php echo form_error('" . $row["column_name"] . "') ?></td>
            <td><textarea class=\"form-control\" rows=\"3\" name=\"" . $row["column_name"] . "\" id=\"" . $row["column_name"] . "\" placeholder=\"" . label($row["column_name"]) . "\"><?php echo $" . $row["column_name"] . "; ?></textarea>
        </td></tr>";
    } else {
        $string .= "\n\t    <tr><td>". label($row["column_name"]) . " <?php echo form_error('" . $row["column_name"] . "') ?></td>
            <td><input type=\"text\" class=\"form-control\" name=\"" . $row["column_name"] . "\" id=\"" . $row["column_name"] . "\" placeholder=\"" . label($row["column_name"]) . "\" value=\"<?php echo $" . $row["column_name"] . "; ?>\" />
        </td>";
    }
}
$string .= "\n\t    <input type=\"hidden\" name=\"" . $pk . "\" value=\"<?php echo $" . $pk . "; ?>\" /> ";
$string .= "\n\t    <tr><td colspan='2'><button type=\"submit\" class=\"btn btn-success\"><?php echo \$button ?></button> ";
$string .= "\n\t    <a href=\"<?php echo site_url('" . $c_url . "') ?>\" class=\"btn btn-primary\">Cancel</a></td></tr>";
$string .= "\n\t
    </table></form>
    </div>
                </div>
              </div>
            </div>
          </div>";

$hasil_view_form = createFile($string, $target . "views/" . $v_form_file);
?>