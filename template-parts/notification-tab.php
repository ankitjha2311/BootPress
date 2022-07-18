
                        
                       
                       <?php while(have_rows('notice-flex')): the_row(); ?>
                      <?php if(get_row_layout() =='latest-notice'){ ?>
                          <div class="card-header text-center bg-info py-2 my-2">
                                <?php the_sub_field('latest-notice-title') ?>
                         </div>
                         <hr>
                      <?php }
                            if(get_row_layout() =='recent-news'): $recent_note = get_sub_field('recent-notices');{?>
                         <div class="card my-2">
                            <div class="card-header py-2 text-center bg-info">
                                Recent News
                            </div>
                            <div class="card-body">
                              <blockquote class="blockquote mb-0 pt-3 px-4">
                                     <?php foreach ($recent_note as $recent) { ?>
                                         <h5><a href=""><?php echo $recent['latest-notices-title'] ?> </a>
                                              <span class="badge badge-danger">New</span></h5><hr>
                                     <?php } ?> 
                              </blockquote>
                            </div>
                         </div>
                          <br>
                    <?php }endif; 
                     if(get_row_layout() =='button-links'): $btn_link = get_sub_field('related-links');{ ?> 
                        <div class="btn-group d-flex" role="group" aria-label="Basic example">
                             <?php foreach ($btn_link as $b_link) { ?>
                                 <a href="<?php echo $b_link['related-link-url'] ?>" type="button" class="btn btn-outline-<?php echo $b_link['releted-btn-color'] ?> btn-default w-50">
                                 <?php echo $b_link['related-link-title'] ?></a>
                             <?php } ?>
                       </div><br>
                       <?php }endif;
                        if(get_row_layout() =='important-dates'): $event_date = get_sub_field('events-schedule');{ ?>
                        <div class="row">
                            <div class="col-12 col-md-6">
                               <div class="card mb-2">
                                 <div class="card-header bg-primary py-1">
                                 <h5 class="text-center text-light">Important Dates</h5>
                                </div>
                                <div class="card-body p-4">
                                   <?php foreach($event_date as $evnt_dte){ ?>
                                      <h6> <?php echo $evnt_dte['event-name'].' : '; ?>
                                      <span class="float-right mr-5"><?php echo $evnt_dte['event-dates'] ?>
                                      </span></h6><hr>
                                  <?php } ?>
                               </div>
                              </div>
                         </div>
                    <?php }endif;
                     if(get_row_layout() =='imp-details'): $imp_dtls = get_sub_field('imp-detail-rep');{ ?>
                          <div class="col-12 col-md-6">
                             <div class="card">
                               <div class="card-header bg-primary py-1">
                                   <h5 class="text-center text-light">Important Details</h5>
                               </div>
                               <div class="card-body py-3">
                              <?php foreach($imp_dtls as $imp_dtl){ ?>
                                  <h5 class="px-5 py-2 my-0"><?php echo $imp_dtl['imp-detail-title']; ?><hr></h5>
                                   <h6 class="py-0 px-5 mt-0"><?php echo $imp_dtl['imp-detail-desc']; ?></h6>
                                 <?php } ?>
                              </div>
                            </div>
                         </div>
                  </div>
                     <?php }endif; ?>

                    <?php get_template_part( 'template-parts/table-tamplate'); ?>
                    
                    
                    
                    
                    
                    
                    
                    <?php endwhile; ?>

                     <!-- last two closing divs for pane -->
                  
                    
                              