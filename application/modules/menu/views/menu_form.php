<div class="col-12 col-lg-12">
        <div class="card radius-15 border-lg-top-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class='bx bxs-list mr-1 font-24 text-primary'></i>
                    </div>
                    <h4 class="mb-0 text-primary">Add Menu</h4>
                </div>
                <hr/>
                <form action="<?= base_url()?>menu/create_action" method="post">
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
                        </div>
                    </div>
                    <a href="<?php echo site_url('menu') ?>" class="btn btn-secondary px-5 radius-30">Cancel</a>
                    <button type="submit" class="btn btn-primary px-5 radius-30">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>

