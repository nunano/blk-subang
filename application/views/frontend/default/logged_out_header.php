<section class="menu-area bg-white">
  <div class="container-xl">
    <nav class="navbar navbar-expand-lg bg-white">

      <ul class="mobile-header-buttons">
        <li><a class="mobile-nav-trigger" href="#mobile-primary-nav"><?php echo site_url('menu'); ?><span></span></a></li>
        <!--<li><a class="mobile-search-trigger" href="#mobile-search"><?php echo site_url('search'); ?><span></span></a></li>-->
      </ul>

      <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="" height="35"></a>

      


      <?php if ($this->session->userdata('admin_login')): ?>
        <div class="instructor-box menu-icon-box ms-auto">
          <div class="icon">
            <a href="<?php echo site_url('admin'); ?>" style="border: 1px solid transparent; margin: 0px; font-size: 14px; width: max-content; border-radius: 5px; max-height: 40px; line-height: 40px; padding: 0px 10px;"><?php echo site_phrase('administrator'); ?></a>
          </div>
        </div>
      <?php endif; ?>

      <div class="cart-box menu-icon-box" id = "cart_items">
        <!-- php include 'cart_items.php';  -->
      </div>


<div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="<?php echo site_url(''); ?>" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;">Beranda</a>
                </div>
            </div>
    <div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="<?php echo site_url('home/about_us'); ?>" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;">Profil</a>
                </div>
            </div>
            <div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="<?php echo site_url('home/privacy_policy'); ?>" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;"><?php echo site_phrase('privacy_policy'); ?></a>
                </div>
            </div>
            <div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="<?php echo site_url('home/terms_and_condition'); ?>" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;"><?php echo site_phrase('terms_and_condition'); ?></a>
                </div>
            </div>
            <div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="https://drive.google.com/drive/folders/1XugE0YftXPLp4am30AAlBOi34XYJEpRw" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;">Modul</a>
                </div>
            </div>
            <div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="https://forms.gle/9EZpQcdGFHZzyuAA6" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;">Survey</a>
                </div>
            </div>
            <div class="instructor-box menu-icon-box head-menu">
                <div class="icon">
                    <a href="<?php echo site_url('home/courses'); ?>" style="border: 1px solid transparent; margin: 0px;     padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;">Pelatihan</a>
                </div>
            </div>
            
      <span class="signin-box-move-desktop-helper"></span>
      <div class="sign-in-box btn-group">

        <a href="<?php echo site_url('home/login'); ?>" class="btn btn-sign-in"><?php echo site_phrase('log_in'); ?></a>

        <a href="<?php echo site_url('home/sign_up'); ?>" class="btn btn-sign-up"><?php echo site_phrase('sign_up'); ?></a>

      </div> <!--  sign-in-box end -->
      
      <?php include 'menu.php'; ?>
    </nav>
  </div>
</section>
