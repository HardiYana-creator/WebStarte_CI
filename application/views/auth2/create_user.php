<style>
    .form-group-inner{
        margin-bottom : 10px;
    }
</style>


<div class="col-sm-12">
 <div class="panel panel-bd lobidrag">
    <div class="panel-heading">
       <div class="btn-group" id="buttonexport">
          <a href="<?= base_url()?>menu/create/">
             <h4>Add User</h4>
          </a>
       </div>
       <div id="infoMessage" style="margin-left: 20px;color:red;"><?php echo $message;?></div>
    </div>
    <div class="panel-body">
    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
    <div class="col-lg-12">
        <div class="all-form-element-inner">
            <form action="<?= base_url()?>Auth/create_user" method="post">
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">first_name</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name" value="" />
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">last_name</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last_name" value=""/>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">Username</label>
                    </div>
                    <div class="col-lg-9">
                        <?php
                        if($identity_column!=='email') {?>
                        <?= form_error('identity');?>
                        <input type="text" class="form-control" name="identity" id="identity" placeholder="Username" value="" />
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">company</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="company" id="company" placeholder="company" value=""/>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">email</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" value=""/>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">phone</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" value=""/>
                    </div>
                </div>
            </div>
                <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">password</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" value=""/>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">password_confirm</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="password_confirm" value=""/>
                    </div>
                </div>
            </div>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="form-group-inner">
                <div class="login-btn-inner">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9">
                            <div class="login-horizental cancel-wp pull-left">
                                <a href="<?php echo site_url('Auth') ?>" class="btn btn-default">Cancel</a></td></tr>
                                
                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Create User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
 </div>
</div>