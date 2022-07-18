
                    <?php if (get_row_layout()=='gov-table'): $table_head = get_sub_field('gov-thead');{?>
                    

                    <div class="card">
                    <div class="card-header bg-primary text-center py-1"><h5><?php the_sub_field('gov-table-name'); ?></h5></div>
                          <div class="table-responsive">
                    <table class="table table-sm card-body table-hover text-center">
                          <thead>
                            <tr>
                   <?php 
                   foreach($table_head as $thead=>$head_val){ if($head_val);?>
                   
                    <th scope="col" class="text-center"><?php echo ($head_val); ?></th> 
                   <?php } ?>
                   </tr>
                   </thead>
                   <?php if(get_sub_field('gov-tbody')): $tdata= get_sub_field('gov-tbody');?>
                   <tbody>
                       <tr>
                           <?php foreach($tdata as $dataval){ foreach($dataval as $data){  ?>

                           <td><?php echo $data; ?></td> <?php } ?> </tr>
                           <?php } ?>
                   </tbody>
                   <?php endif; ?>
                   </table> </div> </div> 
                    <?php }endif; ?> 