<div class="main-nav-wrap">
  <div class="mobile-overlay"></div>
<style type="text/css">
  @media only screen and (max-width: 767px) {
    .category.corner-triangle.top-left.pb-0.is-hidden{
      display: none !important;
    }
    .sub-category.is-hidden{
      display: none !important;
    }
  }
</style>

  <ul class="mobile-main-nav">
    <div class="mobile-menu-helper-top"></div>
    <?php if($course_accessibility): ?>
    <li class="has-children text-nowrap fw-bold">
      <a href="">
        <i class="fas fa-th d-inline text-20px"></i>
        <span class="fw-500"><?php echo site_phrase('categories'); ?></span>
        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
      </a>

      <ul class="category corner-triangle top-left is-hidden pb-0" >
        <li class="go-back"><a href=""><i class="fas fa-angle-left"></i><?php echo site_phrase('menu'); ?></a></li>
        <li class="all-category-devided m-0 p-0">
          <a href="<?php echo site_url('home/about_us'); ?>" class="py-3" >
            <span>Profil</span>
          </a>
          <a href="<?php echo site_url('home/privacy_policy'); ?>" class="py-3" >
            <span><?php echo site_phrase('privacy_policy'); ?></span>
          </a>
          <a href="<?php echo site_url('home/terms_and_condition'); ?>" class="py-3" >
            <span><?php echo site_phrase('terms_and_condition'); ?></span>
          </a>
          <a href="https://drive.google.com/drive/folders/1XugE0YftXPLp4am30AAlBOi34XYJEpRw" class="py-3" >
            <span>Modul Pelatihan</span>
          </a>
          <a href="https://forms.gle/9EZpQcdGFHZzyuAA6" class="py-3" >
            <span>Survey Kepekerjaan</span>
          </a>
      </li>
      
      <li class="all-category-devided mb-0 p-0">
        <a href="<?php echo site_url('home/courses'); ?>" class="py-3">
          <span class="icon"><i class="fa fa-align-justify"></i></span>
          <span><?php echo site_phrase('all_courses'); ?></span>
        </a>
      </li>

      <!--<?php if(addon_status('ebook')): ?>-->
      <!--  <li class="all-category-devided m-0 p-0">-->
      <!--    <a href="<?php echo site_url('ebook'); ?>" class="py-3" >-->
      <!--      <span class="icon"><i class="fas fa-book"></i></span>-->
      <!--      <span><?php echo site_phrase('ebooks'); ?></span>-->
      <!--    </a>-->
      <!--</li>-->
      <!--<?php endif; ?>-->
      

      <!--<?php if(addon_status('course_bundle')): ?>-->
      <!--  <li class="all-category-devided m-0 p-0">-->
      <!--    <a href="<?php echo site_url('course_bundles'); ?>" class="py-3" >-->
      <!--      <span class="icon"><i class="fas fa-cubes"></i></span>-->
      <!--      <span><?php echo site_phrase('course_bundles'); ?></span>-->
      <!--    </a>-->
      <!--</li>-->
      <!--<?php endif; ?>-->
      </ul>
    </li>
    <?php endif; ?>

    <div class="mobile-menu-helper-bottom"></div>
  </ul>
</div>
