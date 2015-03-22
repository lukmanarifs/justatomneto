
<div class="banner" style="margin-top: 0px;">
  <div class="fixed-image" style="background-image:url('<?php echo atom_get_post_meta_key('page-header-bg-image')?>');"></div>
</div>

<section class="main-container" style="margin-top: 0px;">
<div class="container">
<div class="row">

          <?php if (have_posts() ) {
              // Start the Loop.
              while ( have_posts() ) { the_post();?>

                <div class="main col-md-12">

                  <!-- page-title start -->
                  <!-- ================ -->
                  <h1 class="page-title margin-top-clear"><?php the_title();?></h1>
                  <!-- page-title end -->
                  <div class="row">
                    <div class="col-md-6">
                      <h3><?php the_subtitle();?></h3>
                      <div class="separator-2"></div>
                      <?php the_content();?>

                      <?php
                      echo "sdfasfas";
                      ?>
                    </div>
                    <div class="col-md-6">
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
                              ?>
                                  <?php
                                  foreach($img_list as $item_id){
                                    $attachment_image = wp_get_attachment_image_src($item_id, "post-thumbnail");
                                    $full_image = wp_get_attachment_image_src($item_id, 'full');
                                        ?>
                                        <div class="overlay-container">
                                          <img src="<?php echo esc_url($attachment_image[0]); ?>" alt="">
                                          <a href="<?php echo esc_url($full_image[0]); ?>" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <?php }?>

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
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-3 col-xs-6">
                      <h3>Project Info</h3>
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

                    <div class="col-md-3 col-xs-6">
                        <h3>Share This</h3>
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

                    <div class="col-md-6 col-xs-12">
                      <h3>More info</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                      <form role="form">
                        <div class="form-group has-feedback">
                          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                          <i class="fa fa-envelope-o form-control-feedback"></i>
                        </div>
                        <a href="#" class="btn btn-white margin-top-clear">Subscribe</a>
                      </form>
                    </div>
                  </div>
                </div>


          <!-- main start -->
          <!-- ================ -->


          <?php }} ?>

  </div></div>
  </section>
  <!-- section start -->
  <!-- ================ -->

  <style type="text/css">
    .parallax-bg-3 {
      background: url('<?php echo atom_get_post_meta_key('callout-bg-image') ?>') 50% 0px no-repeat;
  }
  </style>



    <div class="section dark-translucent-bg parallax-bg-3 parallax">
      <div class="container">
        <div class="call-to-action">
          <div class="row">
            <div class="col-md-8">
              <h1 class="title text-center"><?php atom_get_post_meta_key('callout-subtitle'); ?></h1>
              <p>  <?php atom_get_post_meta_key('callout-desc'); ?> </p>
            </div>
            <div class="col-md-4">
              <div class="text-center">
                <a href="#" class="btn btn-default btn-lg">Purchase</a>
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
                    echo  $attachment_image = wp_get_attachment_image_src($carousel_id, "post-thumbnail");
                      $full_image = wp_get_attachment_image_src($carousel_id, 'full');
                          ?>
                          <div class="image-box object-non-visible" data-animation-effect="fadeInLeft" data-effect-delay="300">
                            <div class="overlay-container">
                              <img src="<?php echo $carousel_gallery[$j]['carousel-image']; ?>" alt="">
                              <a href="portfolio-item.html" class="overlay small">
                                <i class="fa fa-link"></i>
                                <span>Web Design</span>
                              </a>
                            </div>
                            <a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
                          </div>

                          <?php $j+=1; } ?>
                <?php } ?>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- section end -->
