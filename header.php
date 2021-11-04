<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <?php wp_head(); ?>
    <title>Open Vc</title>
    
</head> 

<body>

<!-- header --------------------------------------------------------------->
<?php if ( have_rows( 'header' ) ) : ?>
	<?php while ( have_rows( 'header' ) ) : the_row(); ?>
        <header>
            <!-- logo -->
            <?php if ( have_rows( 'a' ) ) : ?>
			    <?php while ( have_rows( 'a' ) ) : the_row(); ?>
                <a href="#" class="logo">
                <?php $a = get_sub_field( 'a' ); ?>
                    <?php if ( $a ) { ?>
                        <a href="<?php echo $a['url']; ?>" target="<?php echo $a['target']; ?>"><?php echo $a['title']; ?></a>
                    <?php } ?>
                    <?php if ( get_sub_field( 'a_img') ) { ?>
                        <img src="<?php the_sub_field( 'a_img' ); ?>" alt="" class="img-fluid">
                    <?php } ?>
                </a>
                <?php endwhile; ?>
		    <?php endif; ?>
            <!-- end logo -->

            
            <!-- Hamburger -->
            <div class="navbar">
                <div class="menu-btn">
                <?php if ( have_rows( 'hamburger' ) ) : ?>
			        <?php while ( have_rows( 'hamburger' ) ) : the_row(); ?>
                    <div class="hamburger">
                        <?php if ( have_rows( 'llinks' ) ) : ?>
			                <?php while ( have_rows( 'llinks' ) ) : the_row(); ?>
                                <div class="mylinks">
                                    <a id="anchor" href="#"><?php $a1 = get_sub_field( 'a1' ); ?>
                                        <?php if ( $a1 ) { ?>
                                            <a href="<?php echo $a1['url']; ?>" target="<?php echo $a1['target']; ?>"><?php echo $a1['title']; ?></a>
                                        <?php } ?></a>
                                    <a id="anchor" href="#"><?php $a2 = get_sub_field( 'a2' ); ?>
                                        <?php if ( $a2 ) { ?>
                                            <a href="<?php echo $a2['url']; ?>" target="<?php echo $a2['target']; ?>"><?php echo $a2['title']; ?></a>
                                        <?php } ?></a>
                                    <a id="anchor" href="#"><?php $a3 = get_sub_field( 'a3' ); ?>
                                        <?php if ( $a3 ) { ?>
                                            <a href="<?php echo $a3['url']; ?>" target="<?php echo $a3['target']; ?>"><?php echo $a3['title']; ?></a>
                                        <?php } ?></a>
                                    <button><?php the_sub_field( 'button' ); ?></button>
                                </div>
                            <?php endwhile; ?>
		                <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
		        <?php endif; ?>
                </div>
            </div>
            <!-- end Hamburger -->

            <!-- menu-->
            <?php if ( have_rows( 'menu' ) ) : ?>
			    <?php while ( have_rows( 'menu' ) ) : the_row(); ?>
                    <ul class="menu">
                        <a id="anchor" href="#"><?php $aa1 = get_sub_field( 'aa1' ); ?>
                            <?php if ( $aa1 ) { ?>
                                <a href="<?php echo $aa1['url']; ?>" target="<?php echo $aa1['target']; ?>"><?php echo $aa1['title']; ?></a>
                            <?php } ?></a>
                        <a id="anchor" href="#"><?php $aa2 = get_sub_field( 'aa2' ); ?>
                            <?php if ( $aa2 ) { ?>
                                <a href="<?php echo $aa2['url']; ?>" target="<?php echo $aa2['target']; ?>"><?php echo $aa2['title']; ?></a>
                            <?php } ?></a>
                        <a id="anchor" href="#"><?php $aa3 = get_sub_field( 'aa3' ); ?>
                            <?php if ( $aa3 ) { ?>
                                <a href="<?php echo $aa3['url']; ?>" target="<?php echo $aa3['target']; ?>"><?php echo $aa3['title']; ?></a>
                            <?php } ?></a>
                        <button><?php the_sub_field( 'btn' ); ?></button>
                    </ul>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- end menu-->
        </header> 
    <?php endwhile; ?>
<?php endif; ?>
<!-- end header ---------------------------> 