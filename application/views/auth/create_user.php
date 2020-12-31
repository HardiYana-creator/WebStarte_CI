<!--end row-->
                    <div class="row">
                        <div class="col-12 col-lg-9 mx-auto">
                            <div class="card radius-15">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="mb-0">CREATE USER</h4>
                                    </div>
                                    <div id="infoMessage" style="margin-left: 20px;color:red;"><?php echo $message;?></div>
                                    <hr/>
                                    <form action="<?= base_url()?>Auth/create_user" method="post">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">First Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Name" value="" />
                                            </div>
                                            <label class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last_name" value=""/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Identity</label>
                                            <div class="col-sm-10">
                                                 <?php
                                                if($identity_column!=='email') {?>
                                                <?= form_error('identity');?>
                                                <input type="text" class="form-control" name="identity" id="identity" placeholder="Username" value="" />
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Company</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="company" id="company" placeholder="company" value=""/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="email" value=""/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" value=""/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="password" value=""/>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password_confirm</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="password_confirm" value=""/>
                                            </div>
                                        </div>
                                     
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <a href="<?php echo site_url('Auth') ?>" class="btn btn-success">Cancel</a>
                                                <button type="submit" class="btn btn-primary px-4">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->