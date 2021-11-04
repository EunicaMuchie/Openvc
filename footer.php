<!--footer--------------------------------------------------------------->
<?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
        <footer>
            <!--links-->
            <?php if ( have_rows( 'cont' ) ) : ?>
                <?php while ( have_rows( 'cont' ) ) : the_row(); ?>
                <div class="row container">
                    <?php if ( have_rows( 'c1' ) ) : ?>
                        <?php while ( have_rows( 'c1' ) ) : the_row(); ?>
                        <div class="col-md-4 C">
                            <h5><?php the_sub_field( 'h5' ); ?></h5>

                            <?php if ( have_rows( 'link-items' ) ) : ?>
                                <?php while ( have_rows( 'link-items' ) ) : the_row(); ?>
                                    <div class="link-items">
                                        <a href="#"><?php $a = get_sub_field( 'a' ); ?>
                                            <?php if ( $a ) { ?>
                                                <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                                            <?php } ?></a>
                                        <a href="#"><?php $a2 = get_sub_field( 'a2' ); ?>
                                            <?php if ( $a2 ) { ?>
                                                <a href="<?php echo $a2['url']; ?>" target="<?php echo $a2['target']; ?>"><?php echo $a2['title']; ?></a>
                                            <?php } ?></a>
                                        <a href="#"><?php $a3 = get_sub_field( 'a3' ); ?>
                                            <?php if ( $a3 ) { ?>
                                                <a href="<?php echo $a3['url']; ?>" target="<?php echo $a3['target']; ?>"><?php echo $a3['title']; ?></a>
                                            <?php } ?></a>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!--end links-->

            <?php if ( have_rows( 'copyright' ) ) : ?>
			    <?php while ( have_rows( 'copyright' ) ) : the_row(); ?>
                <div class="copyright">
                <?php if ( get_sub_field( 'img') ) { ?>
                    <img src="<?php the_sub_field( 'img' ); ?>" class="img-fluid" alt="">
                <?php } ?>
                <?php if ( have_rows( 'p' ) ) : ?>
			        <?php while ( have_rows( 'p' ) ) : the_row(); ?>
                    <p><?php the_sub_field( 'p-1' ); ?> 
                        <a href="#" id="policy"><?php $p_a = get_sub_field( 'p_a' ); ?>
                            <?php if ( $p_a ) { ?>
                                <a href="<?php echo $p_a['url']; ?>" target="<?php echo $p_a['target']; ?>"><?php echo $p_a['title']; ?></a>
                            <?php } ?></a>
                    </p>
                    <?php endwhile; ?>
		        <?php endif; ?>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>


        </footer>
    <?php endwhile; ?>
<?php endif; ?>
<!-- end footer-------------------------------------->



<?php wp_footer(); ?>



<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/jQuery v2.2.0.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>