<style>
    .form-group-inner{
        margin-bottom:10px;
    }
</style>

<div class="col-sm-12">
 <div class="panel panel-bd lobidrag">
    <div class="panel-heading">
       <div class="btn-group" id="buttonexport">
             <h4>Edit User</h4>
       </div>
    </div>
    <div class="panel-body">
    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
    <div class="col-lg-12">
        <div class="all-form-element-inner">
        <?php echo form_open(uri_string());?>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    <label class="login2 pull-right pull-right-pro">first_name</label>
                </div>
                <div class="col-lg-9">
                    <?php echo form_input($first_name,'first_name',"class='form-control' ");?>
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    <label class="login2 pull-right pull-right-pro">last_name</label>
                </div>
                <div class="col-lg-9">
                    <?php echo form_input($last_name,'last_name',"class='form-control' ");?>
                </div>
            </div>
        </div>

        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    <label class="login2 pull-right pull-right-pro">company</label>
                </div>
                <div class="col-lg-9">
                    <?php echo form_input($company,'company',"class='form-control' ");?>
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    <label class="login2 pull-right pull-right-pro">phone</label>
                </div>
                <div class="col-lg-9">
                    <?php echo form_input($phone,'phone',"class='form-control' ");?>
                </div>
            </div>
        </div>

            <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    <label class="login2 pull-right pull-right-pro">password</label>
                </div>
                <div class="col-lg-9">
                    <?php echo form_input($password,'password',"class='form-control' ");?>
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    <label class="login2 pull-right pull-right-pro">password_confirm</label>
                </div>
                <div class="col-lg-9">
                    <?php echo form_input($password_confirm,'password',"class='form-control' ");?>
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-9">
                <?php if ($this->ion_auth->is_admin()): ?>
                <h3><?php echo lang('edit_user_groups_heading');?></h3>
                <?php foreach ($groups as $group):?>
                    <label class="icheckbox_square-green checked">
                    <?php
                        $gID=$group['id'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                    </label>
                <?php endforeach?>

                <?php endif ?>

                <?php echo form_hidden('id', $user->id);?>
                <?php echo form_hidden($csrf); ?>
                </div>
            </div>
        </div>
              
        <div class="form-group-inner">
            <div class="login-btn-inner">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <div class="login-horizental cancel-wp pull-left">
                            </td></tr>
                            
                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php echo form_close();?>
        </div>
    </div>
    </div>
 </div>
</div>