<?php get_header(); ?>
    
<!--banner--------------------------------------------------->
<?php if ( have_rows( 'banner' ) ) : ?>
	<?php while ( have_rows( 'banner' ) ) : the_row(); ?>
      <section class="banner">
          <!--small device-->
          <?php if ( have_rows( 'small' ) ) : ?>
			      <?php while ( have_rows( 'small' ) ) : the_row(); ?>
              <div class="small">
                <?php if ( have_rows( 'i' ) ) : ?>
                  <?php while ( have_rows( 'i' ) ) : the_row(); ?>
                    <div class="i">
                      <?php if ( get_sub_field( 'img') ) { ?>
                        <img src="<?php the_sub_field( 'img' ); ?>" class="img-fluid" alt="">
                      <?php } ?>

                        <div class="overlay"></div>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; ?>

                  <?php if ( have_rows( 'banner-inner' ) ) : ?>
			              <?php while ( have_rows( 'banner-inner' ) ) : the_row(); ?>
                      <div class="banner-inner">
                          <h1><?php the_sub_field( 'h_1' ); ?></h1>
                          <?php if ( have_rows( 'btngrpp' ) ) : ?>
			                      <?php while ( have_rows( 'btngrpp' ) ) : the_row(); ?>
                              <div class="btn-group btn-group-sm buttons">
                              <?php if ( have_rows( 'btnn1' ) ) : ?>
			                          <?php while ( have_rows( 'btnn1' ) ) : the_row(); ?>
                                  <button type="button" class="btn one">
                                  <?php the_sub_field( 'btnn1-text' ); ?>
                                  <?php if ( get_sub_field( 'btnn1_img') ) { ?>
                                    <img src="<?php the_sub_field( 'btnn1_img' ); ?>" class="img-fluid" alt="">
                                  <?php } ?>
                                  </button>
                                <?php endwhile; ?>
                              <?php endif; ?>

                                  <button type="button" class="btn two"><?php the_sub_field( 'butn-n' ); ?></button>
                              </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                      </div>
                      <?php endwhile; ?>
                  <?php endif; ?> 
              </div>
              <?php endwhile; ?>
          <?php endif; ?>
          <!--end small device-->
        
        <?php if ( have_rows( 'large' ) ) : ?>
          <?php while ( have_rows( 'large' ) ) : the_row(); ?>
          <!--large device-->
            <div class="large">
                <div class="row">
                  <?php if ( have_rows( 'heading' ) ) : ?>
			              <?php while ( have_rows( 'heading' ) ) : the_row(); ?>
                    <div class="col-md-5 heading">
                      <h1><?php the_sub_field( 'hh1' ); ?></h1>

                      <?php if ( have_rows( 'bttns' ) ) : ?>
		                  	<?php while ( have_rows( 'bttns' ) ) : the_row(); ?>
                          <div class="btn-group btn-group-lg buttons">

                            <?php if ( have_rows( 'butn' ) ) : ?>
		                        	<?php while ( have_rows( 'butn' ) ) : the_row(); ?>
                                <button type="button" class="btn one">
                                  <?php the_sub_field( 'butn-text' ); ?>
                                  <?php if ( get_sub_field( 'butn-img') ) { ?>
                                    <img src="<?php the_sub_field( 'butn-img' ); ?>" class="img-fluid" alt="">
                                  <?php } ?>  
                                </button>
                              <?php endwhile; ?>
                            <?php endif; ?> 

                                <button type="button" class="btn two">
                                  <?php the_sub_field( 'butn2' ); ?>
                                </button>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?> 
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                    
                <?php if ( have_rows( 'images' ) ) : ?>
			            <?php while ( have_rows( 'images' ) ) : the_row(); ?>
                    <div class="col-md-7 images">
                      <?php if ( get_sub_field( 'imgg') ) { ?>
                        <img src="<?php the_sub_field( 'imgg' ); ?>" class="img-fluid" alt="">
                      <?php } ?>
                       
                      <?php if ( have_rows( 'float' ) ) : ?>
			                  <?php while ( have_rows( 'float' ) ) : the_row(); ?>
                          <div class="float-div">
                            <h3><?php the_sub_field( 'h3' ); ?></h3>

                            <?php if ( have_rows( 'p' ) ) : ?>
			                        <?php while ( have_rows( 'p' ) ) : the_row(); ?>
                                <p><?php the_sub_field( 'p1' ); ?>
                                  <a href="#"><?php $a = get_sub_field( 'a' ); ?>
                                          <?php if ( $a ) { ?>
                                            <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                                          <?php } ?>
                                            </a>
                                  <?php the_sub_field( 'p2' ); ?></p>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>

                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

                </div>
            </div>
          <!--end large device-->
          <?php endwhile; ?>
        <?php endif; ?>

      </section>
  <?php endwhile; ?>
<?php endif; ?>
<!--end banner----------------------------->

<!--about section----------------------------------------------------------------->
<?php if ( have_rows( 'about' ) ) : ?>
	<?php while ( have_rows( 'about' ) ) : the_row(); ?>
    <section class="about">
        <h2><?php the_sub_field( 'h2' ); ?></h2>

        <!--cards-->
        <div class="container">

        <?php if ( have_rows( 'row' ) ) : ?>
			    <?php while ( have_rows( 'row' ) ) : the_row(); ?>
            <div class="row">

                <div class="col-md-6">

                <?php if ( have_rows( 'one' ) ) : ?>
			            <?php while ( have_rows( 'one' ) ) : the_row(); ?>
                    <div class="card one" style="width: 18rem;border-radius: 10px;">
                      <?php if ( get_sub_field( 'imgg') ) { ?>
                        <img class="card-img-top" src="<?php the_sub_field( 'imgg' ); ?>" class="img-fluid" alt="">
                      <?php } ?>
                        
                      <?php if ( have_rows( 'body' ) ) : ?>
			                  <?php while ( have_rows( 'body' ) ) : the_row(); ?>
                          <div class="card-body">
                          <h5 class="card-title"><?php the_sub_field( 'h5' ); ?></h5>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>  

                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>  

                </div>

                <div class="col-md-6">

                <?php if ( have_rows( 'two' ) ) : ?>
			            <?php while ( have_rows( 'two' ) ) : the_row(); ?>
                    <div class="card two" style="width: 18rem;border-radius: 10px;">
                      <?php if ( get_sub_field( 'imgg2') ) { ?>
                        <img class="card-img-top" src="<?php the_sub_field( 'imgg2' ); ?>" class="img-fluid" alt="">
                      <?php } ?>
                        
                      <?php if ( have_rows( 'body2' ) ) : ?>
			                  <?php while ( have_rows( 'body2' ) ) : the_row(); ?>
                          <div class="card-body">
                          <h5 class="card-title"><?php the_sub_field( 'hh5' ); ?></h5>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>  

                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>  
                    
                </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        </div>
        <!--end cards-->
    </section>
  <?php endwhile; ?>
<?php endif; ?>
<!--end about------------------------------->

<!--founders section------------------------------------------------------>
<?php if ( have_rows( 'founders' ) ) : ?>
	<?php while ( have_rows( 'founders' ) ) : the_row(); ?>
    <section class="founders">
        <!--first div-->
        <?php if ( have_rows( 'show' ) ) : ?>
			    <?php while ( have_rows( 'show' ) ) : the_row(); ?>
            <div class="show">
                <h2><?php the_sub_field( 'h2' ); ?></h2>

                <?php if ( have_rows( 'carousel' ) ) : ?>
			            <?php while ( have_rows( 'carousel' ) ) : the_row(); ?>
                    <div class="show-carousel">

                    <?php if ( have_rows( 'slide' ) ) : ?>
			                <?php while ( have_rows( 'slide' ) ) : the_row(); ?>
                        <div class="show-slide">
                        <?php if ( get_sub_field( 'img-') ) { ?>
                          <img src="<?php the_sub_field( 'img-' ); ?>" class="img-fluid" id="i" alt="">
                        <?php } ?>

                        <?php if ( have_rows( 'butnn' ) ) : ?>
			                    <?php while ( have_rows( 'butnn' ) ) : the_row(); ?>
                            <button role ="button">
                              <?php the_sub_field( 'butn-text' ); ?>
                              <?php if ( get_sub_field( 'butn-img') ) { ?>
                                <img src="<?php the_sub_field( 'butn-img' ); ?>" class="img-fluid" alt="">
                              <?php } ?>
                            </button>
                          <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if ( have_rows( 'p-' ) ) : ?>
			                    <?php while ( have_rows( 'p-' ) ) : the_row(); ?>
                            <p><?php the_sub_field( 'pp1' ); ?>
                              <a href="#"><?php $aa = get_sub_field( 'aa' ); ?>
                                          <?php if ( $aa ) { ?>
                                            <a href="<?php echo $aa['url']; ?>" target="<?php echo $aa['target']; ?>"><?php echo $aa['title']; ?></a>
                                          <?php } ?></a>
                                          <?php the_sub_field( 'pp2' ); ?></p>
                          <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                      <?php endwhile; ?>
		                <?php endif; ?>

                    </div>
                  <?php endwhile; ?>
		            <?php endif; ?>
            </div>
          <?php endwhile; ?>
		    <?php endif; ?>
        <!--end first div-->

        <!--second div-->
        <?php if ( have_rows( 'join' ) ) : ?>
			    <?php while ( have_rows( 'join' ) ) : the_row(); ?>
            <div class="join">

            <?php if ( have_rows( 'row' ) ) : ?>
			        <?php while ( have_rows( 'row' ) ) : the_row(); ?>
                <div class="row">

                <?php if ( have_rows( 'iimg' ) ) : ?>
			            <?php while ( have_rows( 'iimg' ) ) : the_row(); ?>
                    <div class="col-md-6 img">
                    <?php if ( get_sub_field( 'i-g') ) { ?>
                      <img src="<?php the_sub_field( 'i-g' ); ?>" class="pix img-fluid" alt="">
                    <?php } ?>
                    </div>
                  <?php endwhile; ?>
		            <?php endif; ?>

                <?php if ( have_rows( 'connect' ) ) : ?>
                  <?php while ( have_rows( 'connect' ) ) : the_row(); ?>
                    <div class="col-md-6 connect-field">
                        <h3><?php the_sub_field( 'hh3' ); ?></h3>
                        <p><?php the_sub_field( '-p' ); ?></p>
                        <?php if ( have_rows( 'bn' ) ) : ?>
			                    <?php while ( have_rows( 'bn' ) ) : the_row(); ?>
                            <button type="button" class="button">
                            <?php the_sub_field( 'bn-text' ); ?>
                            <?php if ( get_sub_field( 'bn-img') ) { ?>
                              <img src="<?php the_sub_field( 'bn-img' ); ?>" class="img-fluid" alt="">
                            <?php } ?>
                            </button>
                          <?php endwhile; ?>
		                    <?php endif; ?> 
                    </div>
                  <?php endwhile; ?>
		            <?php endif; ?>  
                </div>
              <?php endwhile; ?>
            <?php endif; ?> 
            </div>
          <?php endwhile; ?>
        <?php endif; ?> 
        <!--end second div-->
    </section>
  <?php endwhile; ?>
<?php endif; ?>
<!--end founders section-------------------------------->

<!--investors section-------------------------------------------------->
<?php if ( have_rows( 'investors' ) ) : ?>
	<?php while ( have_rows( 'investors' ) ) : the_row(); ?>
    <section class="investors">

    <?php if ( have_rows( 'row' ) ) : ?>
			<?php while ( have_rows( 'row' ) ) : the_row(); ?>
        <div class="row">

        <?php if ( have_rows( 'one' ) ) : ?>
			    <?php while ( have_rows( 'one' ) ) : the_row(); ?>
            <div class="col-md-6 one ">
                <h3><?php the_sub_field( 'hh-3' ); ?></h3>
                <p><?php the_sub_field( 'p--' ); ?></p>

                <?php if ( have_rows( 'btnn' ) ) : ?>
			            <?php while ( have_rows( 'btnn' ) ) : the_row(); ?>
                    <button type="button" class="button">
                    <?php the_sub_field( 'btnn-text' ); ?>
                    <?php if ( get_sub_field( 'btnn-img') ) { ?>
                      <img src="<?php the_sub_field( 'btnn-img' ); ?>" class="img-fluid" alt="">
                    <?php } ?> 
                    </button>
                  <?php endwhile; ?>
		            <?php endif; ?>

            </div>
          <?php endwhile; ?>
		    <?php endif; ?>

        <?php if ( have_rows( 'two' ) ) : ?>
			    <?php while ( have_rows( 'two' ) ) : the_row(); ?>
            <div class="col-md-6 two">
            <?php if ( get_sub_field( 'img') ) { ?>
              <img src="<?php the_sub_field( 'img' ); ?>" class="img-fluid" alt="">
            <?php } ?> 
            </div>
          <?php endwhile; ?>
		    <?php endif; ?>

        </div>
      <?php endwhile; ?>
		<?php endif; ?>


    </section>
  <?php endwhile; ?>
<?php endif; ?>
<!--end investors section----------------------------->

<!--questions asked section--------------------------------------------------->
<?php if ( have_rows( 'frequently_asked_questions' ) ) : ?>
	<?php while ( have_rows( 'frequently_asked_questions' ) ) : the_row(); ?>
    <section class="FAQ">
        <h3><?php the_sub_field( 'h3' ); ?></h3>

      <div class="container">
        <?php if ( have_rows( 'row' ) ) : ?>
			  <?php while ( have_rows( 'row' ) ) : the_row(); ?>
          <div class="row">
                <div class="col-md-6">
                  <?php if ( have_rows( 'acc' ) ) : ?>
                    <?php while ( have_rows( 'acc' ) ) : the_row(); ?>
                      <div class="accordion" id="accordionExample">
                        <?php if ( have_rows( 'acc-item' ) ) : ?>
                            <?php while ( have_rows( 'acc-item' ) ) : the_row(); ?>
                              <div class="accordion-item">
                              <?php if ( have_rows( 'header' ) ) : ?>
                                <?php while ( have_rows( 'header' ) ) : the_row(); ?>
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <?php the_sub_field( 'button' ); ?>
                                  </button>
                                </h2>
                                <?php endwhile; ?>
                              <?php endif; ?>

                              <?php if ( have_rows( 'collapse' ) ) : ?>
                                <?php while ( have_rows( 'collapse' ) ) : the_row(); ?>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <p><?php the_sub_field( 'c-body' ); ?></p>
                                  </div>
                                </div>
                                <?php endwhile; ?>
                              <?php endif; ?>
                              </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 

                        <?php if ( have_rows( 'acc-item_2' ) ) : ?>
                          <?php while ( have_rows( 'acc-item_2' ) ) : the_row(); ?>
                          <div class="accordion-item">
                          <?php if ( have_rows( 'header-' ) ) : ?>
                            <?php while ( have_rows( 'header-' ) ) : the_row(); ?>
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <?php the_sub_field( 'button-' ); ?>
                                </button>
                              </h2>
                            <?php endwhile; ?>
                          <?php endif; ?>

                          <?php if ( have_rows( 'collapse-' ) ) : ?>
                            <?php while ( have_rows( 'collapse-' ) ) : the_row(); ?>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p><?php the_sub_field( 'c-body-' ); ?></p>  
                                </div>
                              </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          </div>
                          <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if ( have_rows( 'acc-item_3' ) ) : ?>
                          <?php while ( have_rows( 'acc-item_3' ) ) : the_row(); ?>
                              <div class="accordion-item">
                              <?php if ( have_rows( 'header3' ) ) : ?>
                                <?php while ( have_rows( 'header3' ) ) : the_row(); ?>
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <?php the_sub_field( 'button3' ); ?>
                                  </button>
                                </h2>
                                <?php endwhile; ?>
                              <?php endif; ?>
                              <?php if ( have_rows( 'collapse3' ) ) : ?>
                                <?php while ( have_rows( 'collapse3' ) ) : the_row(); ?>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php the_sub_field( 'c-body3' ); ?></p>  
                                    </div>
                                  </div>
                                <?php endwhile; ?>
                              <?php endif; ?>
                              </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if ( have_rows( 'acc-item_4' ) ) : ?>
                          <?php while ( have_rows( 'acc-item_4' ) ) : the_row(); ?>
                            <div class="accordion-item">
                            <?php if ( have_rows( 'header4' ) ) : ?>
                              <?php while ( have_rows( 'header4' ) ) : the_row(); ?>
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  <?php the_sub_field( 'button4' ); ?>
                                  </button>
                                </h2>
                                <?php endwhile; ?>
                              <?php endif; ?>
                              <?php if ( have_rows( 'collapse4' ) ) : ?>
                                <?php while ( have_rows( 'collapse4' ) ) : the_row(); ?>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>		<?php the_sub_field( 'c-body4' ); ?></p>  
                                  </div>
                                </div>
                                <?php endwhile; ?>
                              <?php endif; ?> 
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if ( have_rows( 'acc-item_5' ) ) : ?>
                          <?php while ( have_rows( 'acc-item_5' ) ) : the_row(); ?>
                            <div class="accordion-item">
                            <?php if ( have_rows( 'header5' ) ) : ?>
                              <?php while ( have_rows( 'header5' ) ) : the_row(); ?>
                              <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <?php the_sub_field( 'button5' ); ?>
                                </button>
                              </h2>
                              <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if ( have_rows( 'collapse5' ) ) : ?>
                              <?php while ( have_rows( 'collapse5' ) ) : the_row(); ?>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p><?php the_sub_field( 'c-body5' ); ?></p>  
                                  </div>
                                </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>  
                </div>
        
                <div class="col-md-6" id="two">
                  <?php if ( have_rows( 'acc_2' ) ) : ?>
                    <?php while ( have_rows( 'acc_2' ) ) : the_row(); ?>
                      <div class="accordion" id="accordionExample">

                      <?php if ( have_rows( 'acc-item6' ) ) : ?>
                        <?php while ( have_rows( 'acc-item6' ) ) : the_row(); ?>
                          <div class="accordion-item">
                          <?php if ( have_rows( 'header6' ) ) : ?>
                          <?php while ( have_rows( 'header6' ) ) : the_row(); ?>
                            <h2 class="accordion-header" id="headingSix">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                              <?php the_sub_field( 'button6' ); ?>
                              </button>
                            </h2>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if ( have_rows( 'collapse6' ) ) : ?>
                            <?php while ( have_rows( 'collapse6' ) ) : the_row(); ?>
                            <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <p><?php the_sub_field( 'c-body6' ); ?></p>  
                              </div>
                            </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>

                      <?php if ( have_rows( 'acc-item_7' ) ) : ?>
                        <?php while ( have_rows( 'acc-item_7' ) ) : the_row(); ?>
                          <div class="accordion-item">
                          <?php if ( have_rows( 'header-7' ) ) : ?>
                            <?php while ( have_rows( 'header-7' ) ) : the_row(); ?>
                            <h2 class="accordion-header" id="headingSeven">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <?php the_sub_field( 'button-7' ); ?>
                              </button>
                            </h2>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if ( have_rows( 'collapse-7' ) ) : ?>
                          <?php while ( have_rows( 'collapse-7' ) ) : the_row(); ?>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <p><?php the_sub_field( 'c-body-7' ); ?></p>  
                              </div>
                            </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          </div>
                          <?php endwhile; ?>
                      <?php endif; ?>

                      <?php if ( have_rows( 'acc-item_8' ) ) : ?>
                        <?php while ( have_rows( 'acc-item_8' ) ) : the_row(); ?>     
                          <div class="accordion-item">
                          <?php if ( have_rows( 'header8' ) ) : ?>
                            <?php while ( have_rows( 'header8' ) ) : the_row(); ?>
                            <h2 class="accordion-header" id="headingEight">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <?php the_sub_field( 'button8' ); ?>
                              </button>
                            </h2>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if ( have_rows( 'collapse8' ) ) : ?>
                            <?php while ( have_rows( 'collapse8' ) ) : the_row(); ?>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <p><?php the_sub_field( 'c-body8' ); ?></p>  
                              </div>
                            </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          </div>
                          <?php endwhile; ?>
                      <?php endif; ?>

                      <?php if ( have_rows( 'acc-item_9' ) ) : ?>
                        <?php while ( have_rows( 'acc-item_9' ) ) : the_row(); ?>
                          <div class="accordion-item">
                          <?php if ( have_rows( 'header9' ) ) : ?>
                            <?php while ( have_rows( 'header9' ) ) : the_row(); ?>
                              <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <?php the_sub_field( 'button9' ); ?>
                                </button>
                              </h2>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if ( have_rows( 'collapse9' ) ) : ?>
                              <?php while ( have_rows( 'collapse9' ) ) : the_row(); ?>
                              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <p><?php the_sub_field( 'c-body9' ); ?></p>  
                                </div>
                              </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>

                      <?php if ( have_rows( 'acc-item_10' ) ) : ?>
                          <?php while ( have_rows( 'acc-item_10' ) ) : the_row(); ?>
                            <div class="accordion-item">
                            <?php if ( have_rows( 'header10' ) ) : ?>
                              <?php while ( have_rows( 'header10' ) ) : the_row(); ?>
                              <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <?php the_sub_field( 'button10' ); ?>
                                </button>
                              </h2>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if ( have_rows( 'collapse10' ) ) : ?>
                              <?php while ( have_rows( 'collapse10' ) ) : the_row(); ?>
                              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <p>	<?php the_sub_field( 'c-body10' ); ?></p>  
                                </div>
                              </div>
                              <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                          <?php endwhile; ?>
                      <?php endif; ?>
                      

                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?> 
                </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </section>
  <?php endwhile; ?>
<?php endif; ?>
<!--end questions asked section----------------------->

<!--startups------------------------------------------------------------------->
<?php if ( have_rows( 'startups' ) ) : ?>
	<?php while ( have_rows( 'startups' ) ) : the_row(); ?>
    <section class="startups">
        <div class="container">
          <?php if ( get_sub_field( 'image') ) { ?>
            <img src="<?php the_sub_field( 'image' ); ?>" class="img-fluid" id="rect" alt="">
          <?php } ?>
            
          <?php if ( have_rows( 'floatt' ) ) : ?>
			      <?php while ( have_rows( 'floatt' ) ) : the_row(); ?>
            <div class="float">
                <h2><?php the_sub_field( 'h2' ); ?></h2>
                <hr>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>


            <!--slider-->
            <?php if ( have_rows( 'fundees' ) ) : ?>
		        	<?php while ( have_rows( 'fundees' ) ) : the_row(); ?>
                <div class="fundees">
                <?php if ( have_rows( 's' ) ) : ?>
		        	    <?php while ( have_rows( 's' ) ) : the_row(); ?>
                    <div class="s">
                      <?php if ( get_sub_field( 'images') ) { ?>
                        <img src="<?php the_sub_field( 'images' ); ?>" class="img-fluid" alt="">
                      <?php } ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

                </div>
              <?php endwhile; ?>
            <?php endif; ?>

              <?php if ( get_sub_field( 'imgone') ) { ?>
                <img src="<?php the_sub_field( 'imgone' ); ?>" class="img-fluid" id="next" alt="">
              <?php } ?>
              <?php if ( get_sub_field( 'imgtwo') ) { ?>
                <img src="<?php the_sub_field( 'imgtwo' ); ?>" class="img-fluid" id="prev" alt="">
              <?php } ?>
            <!--end slider-->
            <?php if ( get_sub_field( 'imgthree') ) { ?>
              <img src="<?php the_sub_field( 'imgthree' ); ?>" class="img-fluid" id="img" alt="">
            <?php } ?>
            
        </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
<!--end startups------------------------------------->


<?php get_footer(); ?>