<div class="col-12 col-lg-12">
        <div class="card radius-15 border-lg-top-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class='bx bxs-list mr-1 font-24 text-primary'></i>
                    </div>
                    <h4 class="mb-0 text-primary">Update Menu</h4>
                </div>
                <hr/>
                <form action="<?= base_url()?>Menu/update_action" method="post">
                <div class="form-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control radius-30" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Link</label>
                            <input type="text" class="form-control radius-30" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Icon</label>
                            <input type="text" class="form-control radius-30" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Is Active</label>
                            <?php echo form_dropdown('is_active',array('1'=>'AKTIF','0'=>'TIDAK AKTIF'),$is_active,"class='form-control radius-30'");?>
                        </div>

                        <div class="form-group col-md-3">
                            <label>Is Parent</label>                  
                           <select name="is_parent" class="form-control radius-30">
                                <option value="0">YA</option>
                                <?php
                                $menu = $this->db->get('menu');
                                foreach ($menu->result() as $m){
                                    echo "<option value='$m->id' ";
                                    echo $m->id==$is_parent?'selected':'';
                                    echo">".  strtoupper($m->name)."</option>";
                                }
                                ?>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                         <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                        </div>
                    </div>
                    <a href="<?php echo site_url('menu') ?>" class="btn btn-secondary px-5 radius-30">Cancel</a>
                    <button type="submit" class="btn btn-primary px-5 radius-30">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>





<!-- <div class="col-sm-12">
 <div class="panel panel-bd lobidrag">
    <div class="panel-heading">
       <div class="btn-group" id="buttonexport">
          <a href="<?= base_url()?>menu/create/">
             <h4>Update Menu</h4>
          </a>
       </div>
    </div>
    <div class="panel-body">
    <div class="col-lg-12">
    <div class="all-form-element-inner">
        <form action="<?= base_url()?>menu/update_action" method="post">
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">Name</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">Link</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>"/>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">Icon</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" />
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">Is Active</label>
                    </div>
                    <div class="col-lg-9">
                        <?php echo form_dropdown('is_active',array('1'=>'AKTIF','0'=>'TIDAK AKTIF'),$is_active,"class='form-control'");?>
                    </div>
                </div>
            </div>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="login2 pull-right pull-right-pro">Is Parent</label>
                    </div>
                    <div class="col-lg-9">
                        <select name="is_parent" class="form-control">
                            <option value="0">YA</option>
                            <?php
                            $menu = $this->db->get('menu');
                            foreach ($menu->result() as $m){
                                echo "<option value='$m->id' ";
                                echo $m->id==$is_parent?'selected':'';
                                echo">".  strtoupper($m->name)."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group-inner">
                <div class="login-btn-inner">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                            <div class="login-horizental cancel-wp pull-left">
                                <a href="<?php echo site_url('menu') ?>" class="btn btn-default">Cancel</a></td></tr>
                                
                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save</button>
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
</div> -->