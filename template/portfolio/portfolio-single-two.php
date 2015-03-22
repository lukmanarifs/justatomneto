<?php if (atom_get_post_meta_key('layout-type')=='' ){ ?>
<div class="banner" style="margin-top: 0px;">
  <div class="fixed-image" style="background-image:url('<?php echo atom_get_post_meta_key('page-header-bg-image')?>');"></div>
</div>
<?php } ?>
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

  <div class="container">
    <div class="row">
    <?php if (have_posts() ) {
        // Start the Loop.
      while ( have_posts() ) { the_post();?>
      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title margin-top-clear">Portfolio Item</h1>
        <!-- page-title end -->

        <!-- Nav tabs -->
        <ul class="nav nav-pills white space-top" role="tablist">
          <li class="active"><a href="#portfolio-images" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
          <li><a href="#portfolio-video" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content clear-style">
          <div class="tab-pane active" id="portfolio-images">
            <div class="owl-carousel content-slider-with-controls">

              <?php
                $gallery_images = atom_get_post_meta_key('gallery-images');
                $img_list = atom_get_post_gallery_ids($gallery_images);
                if(count($img_list) > 0){
                  $i=0;
                ?>
                    <?php
                    foreach($img_list as $item_id){
                      $attachment_image = wp_get_attachment_image_src($item_id, "post-thumbnail");
                      $full_image = wp_get_attachment_image_src($item_id, 'full');
                          ?>
                          <div class="overlay-container">
                            <img src="<?php echo esc_url($full_image[0]); ?>" alt="">
                            <div class="caption">
                              <h3 class="title"><?php echo $gallery_images[$i]['content-sliders-title']; ?></h3>
                              <?php echo $gallery_images[$i]['content-sliders-desc']; ?>
                            </div>
                            <a href="<?php echo esc_url($full_image[0]); ?>" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <?php $i+=1; }?>

                <?php } ?>

            </div>
          </div>
          <div class="tab-pane" id="portfolio-video">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
              <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com/">Vimeo</a>.</p>
            </div>
          </div>
        </div>

      </div>
      <!-- main end -->

      <div class="col-md-12">
        <div class="row space">
          <div class="col-lg-10 col-md-9">
            <div class="portfolio-item vertical-divider-right">
              <h2 class="title"><?php the_title();?></h2>
              <div class="separator-2"></div>
              <p><?php the_content();?></p>
              <div class="owl-carousel content-slider well">

                <?php
                  $testimonial_list = atom_get_post_meta_key('testimonial-list');
                  $img_list2 = atom_get_post_gallery_ids($testimonial_list);
                  if(count($img_list2) > 0){
                    $j=0; ?>
                      <?php
                      foreach($img_list2 as $item_id2){
                        $attachment_image2 = wp_get_attachment_image_src($item_id2, "post-thumbnail");
                        $full_image2 = wp_get_attachment_image_src($item_id2, 'full');
                            ?>
                            <div class="testimonial">
                              <div class="testimonial-image">
                                <img src="<?php echo esc_url($full_image2[0]); ?>" alt="<?php echo $testimonial_list[$j]['person']; ?>" title="<?php echo $testimonial_list[$j]['person']; ?>" class="img-circle">
                              </div>
                              <div class="testimonial-body">
                                <p><?php echo $testimonial_list[$j]['testimonial-desc']; ?></p>
                                <div class="testimonial-info-1">- <?php echo $testimonial_list[$j]['person']; ?></div>
                                <div class="testimonial-info-2"><?php echo $testimonial_list[$j]['company']; ?></div>
                              </div>
                            </div>
                            <?php $j+=1; }?>

                  <?php } ?>



              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
            <div class="portfolio-item side margin-top-clear">
              <div class="row">
                <div class="col-md-12 col-sm-4 col-xs-6">
                  <div class="block clearfix">
                    <h3 class="title margin-top-clear">Project Info</h3>
                    <ul class="list">
                      <?php $project_info = atom_get_post_meta_key('project-info');


                      $project_list = atom_get_post_gallery_ids($project_info);
                      $i = 0;
                      if(count($project_list) > 0){  ?>
                          <?php
                          foreach($img_list as $item_id){
                                ?>
                                <li><strong class="vertical-divider"><?php echo $project_info[$i]['subtitle-project-info'];?> </strong> <?php if($project_info[$i]['project-info-checkbox'][0]=='yes'){ ?> <a href= <?php echo $project_info[$i]['desc-project-info'];?> > <?php echo $project_info[$i]['desc-project-info'];?>
                                </a> <?php } ?> <?php echo $project_info[$i]['desc-project-info'];?></li>
                                <?php $i+=1; }?>
                      <?php } ?>

                    </ul>
                  </div>
                </div>
                <div class="col-md-12 col-sm-4 col-xs-6">
                  <div class="block clearfix">
                    <h3 class="title margin-top-clear">Share This</h3>
                    <div class="social-links">
                      <?php
                      $social = atom_get_post_meta_key('social-checkbox');
                      //print_r($social);

                      if (count($social)>0){
                        for ($j=0;$j<count($social);$j++){ ?>

                          <li class="<?php echo $social[$j];?>"><a href="#"><i class="fa fa-<?php echo $social[$j];?>"></i></a></li>

                        <?php } }?>



                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- main-container end -->

<?php if(atom_get_post_meta_key('callout-bg-image')<>""){?>

  <style type="text/css">
    .parallax-bg-3 {
      background: url('<?php echo atom_get_post_meta_key('callout-bg-image') ?>') 50% 0px no-repeat;
  }
  </style>

<?php } ?>
<!-- section start -->
<!-- ================ -->
<div class="section gray-bg">
  <div class="container">
    <div class="call-to-action">
      <div class="row">
        <div class="col-md-8">
          <h1 class="title text-center"><?php echo atom_get_post_meta_key('callout-subtitle'); ?></h1>
          <p class="text-center"><?php echo atom_get_post_meta_key('callout-desc'); ?></p>
        </div>
        <div class="col-md-4">
          <div class="text-center">
            <a href="<?php echo atom_get_post_meta_key('callout-target-link'); ?>" class="btn btn-default btn-lg"><?php echo atom_get_post_meta_key('callout-button'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php echo atom_get_post_meta_key('carousel-title'); ?></h2>
        <div class="separator-2"></div>
        <p><?php echo atom_get_post_meta_key('carousel-desc'); ?></p>
        <div class="owl-carousel carousel">

          <?php
            $carousel_gallery = atom_get_post_meta_key('carousel-gallery');
            $carousel_list = atom_get_post_gallery_ids($carousel_gallery);

            $j=0;
              if(count($img_list) > 0){
              ?>
                  <?php
                  foreach($carousel_list as $carousel_id){
                    //print_r($carousel_gallery);
                   $attachment_image = wp_get_attachment_image_src($carousel_id, "post-thumbnail");
                    $full_image = wp_get_attachment_image_src($carousel_id, 'full');
                        ?>
                        <div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
                          <div class="overlay-container">
                            <img src="<?php echo $carousel_gallery[$j]['carousel-image']; ?>" alt="">
                            <a href="<?php echo $carousel_gallery[$j]['target-link']; ?>" class="overlay small">
                              <i class="fa fa-link"></i>
                              <span>Web Design</span>
                            </a>
                          </div>
                          <a href="<?php echo $carousel_gallery[$j]['target-link']; ?>" class="btn btn-light-gray btn-lg btn-block"><?php echo $carousel_gallery[$j]['title']; ?></a>
                        </div>

                        <?php $j+=1; } ?>
              <?php } ?>
          </div>

        </div>

      </div>
    </div>
  </div>

</div>
<!-- section end -->


<?php }} ?>
