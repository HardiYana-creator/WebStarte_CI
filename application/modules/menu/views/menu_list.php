
       <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
       <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h4 class="mb-0">List Menu</h4>
              </div>
              <a href="<?=base_url()?>Menu/create"><button class="btn btn-primary radius-30 btn-sm">Add Menu2</button></a>
              <hr/>
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
             <thead>
                <tr class="info">
                   <th>No</th>
                   <th>Nama Menu</th>
                   <th>Link</th>
                   <th>Icon</th>
                   <th>Active</th>
                   <th>Parent</th>
                   <th>Action</th>
                </tr>
             </thead>
             <tbody>

                         <?php
                                $start = 0;
                                foreach ($menu_data as $menu)
                                {
                                    $active = $menu->is_active==1?'AKTIF':'TIDAK AKTIF';
                                    $parent = $menu->is_parent>1?'MAINMENU':'SUBMENU';
                                    ?>
                            <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php cetak($menu->name) ?></td>
                                <td><?php cetak($menu->link) ?></td>
                                <td><?php cetak($menu->icon) ?></td>
                                <td><?php cetak($active) ?></td>
                                <td><?php cetak($parent) ?></td>
                                <td class="datatable-ct">
                                    <?php 
                                        echo anchor(site_url('menu/update/'.$menu->id),'<span class="adminpro-icon adminpro-warning-danger"></span> Edit',array('title'=>'Edit','class'=>'btn btn-warning radius-30 btn-sm'));

                                        echo "&nbsp;&nbsp;&nbsp;"; 

                                        echo anchor(site_url('menu/delete/'.$menu->id),'<span class="adminpro-icon adminpro-danger-error"></span> Hapus',array('title =Delete" class="btn btn-danger radius-30 btn-sm" onclick="javasciprt: return confirm(\'Are You Sure delete this data?\')"'));
                                        ?>
                                </td>
                            </tr>
                        <?php } ?>
             </tbody>
          </table>
       </div>
   