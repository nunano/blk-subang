<?php if(get_frontend_settings('recaptcha_status')): ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>



<section class="category-course-list-area">
    <div class="container">
        <div class="row mb-5 mt-3">
          <div class="col-md-12 text-center">
            <h1 class="fw-700"><?php echo site_phrase('sign_up'); ?></h1>
            <p class="text-14px"><?php echo site_phrase('sign_up_and_start_learning'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block text-center">
            <img class="mt-5" width="80%" src="<?php echo base_url('uploads/system/sign_up.png'); ?>">
          </div>
          <div class="col-lg-6">
            <div class="sign-up-form">
              <?php if(get_settings('fb_social_login')) include "facebook_login.php"; ?>
              <form action="<?php echo site_url('login/register'); ?>" method="post" id="sign_up">
                <div class="form-group">
                  <label for="first_name"><?php echo site_phrase('first_name'); ?></label>
                  <div class="input-group">
                    <span class="input-group-text bg-white" for="first_name"><i class="fas fa-user"></i></span>
                    <input type="text" name="first_name" class="form-control" placeholder="<?php echo site_phrase('first_name'); ?>" aria-label="<?php echo site_phrase('first_name'); ?>" aria-describedby="<?php echo site_phrase('first_name'); ?>" id="first_name" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="last_name"><?php echo site_phrase('last_name'); ?></label>
                  <div class="input-group">
                    <span class="input-group-text bg-white" for="last_name"><i class="fas fa-user"></i></span>
                    <input type="text" name="last_name" class="form-control" placeholder="<?php echo site_phrase('last_name'); ?>" aria-label="<?php echo site_phrase('last_name'); ?>" aria-describedby="<?php echo site_phrase('last_name'); ?>" id="last_name" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="registration-email"><?php echo site_phrase('email'); ?></label>
                  <div class="input-group">
                    <span class="input-group-text bg-white" for="email"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="<?php echo site_phrase('email'); ?>" aria-label="<?php echo site_phrase('email'); ?>" aria-describedby="<?php echo site_phrase('email'); ?>" id="registration-email" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="registration-password"><?php echo site_phrase('password'); ?></label>
                  <div class="input-group">
                    <span class="input-group-text bg-white" for="password"><i class="fas fa-key"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="<?php echo site_phrase('password'); ?>" aria-label="<?php echo site_phrase('password'); ?>" aria-describedby="<?php echo site_phrase('password'); ?>" id="registration-password" required>
                  </div>
                </div>
                
               <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="birthplace">Tempat Lahir</label>
                                <input type="text" class="form-control" name = "birthplace" id="birthplace" placeholder="kota lahir" required>
                            </div>

                <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="birth">Tanggal Lahir</label>
                                <input type="date" class="form-control" name = "birth" id="birth" placeholder="" required>
                            </div>
                             <div class="form-groupm mb-3">
                                <label class="text-dark fw-600" for="sex">Jenis Kelamin</label>
                                <select class="form-control select2" data-toggle="select2" name="sex" id="sex" required>
        							<option value="">Pilih</option>
        							<option value="Laki-laki">Laki - Laki</option>
        							<option value="Perempuan">Perempuan</option>
						        </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="address">Alamat Lengkap</label>
                                <input type="text" class="form-control" name = "address" id="address" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="education">Pendidikan Terakhir</label>
                                <select class="form-control select2" data-toggle="select2" name="education" id="education" required>
        							<option value="">Pilih</option>
        							<option value="SD/MI">SD/MI</option>
        							<option value="SMP/MTs">SMP/MTs</option>
        							<option value="SMA/MA">SMA/MA</option>
        							<option value="D3">D3</option>
        							<option value="S1">S1</option>
						        </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="contact">Nomor Kontak</label>
                                <input type="text" class="form-control" name = "contact" id="contact" placeholder="" required>
                            </div>
                             <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="parent">Nama Orang Tua/Wali</label>
                                <input type="text" class="form-control" name = "parent" id="parent" placeholder="" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="designation">Status</label>
                                <select class="form-control select2" data-toggle="select2" name="designation" id="designation" required>
        							<option value="">Pilih</option>
        							<option value="Menikah">Menikah</option>
        							<option value="Belum Menikah">Belum Menikah</option>
						        </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="experience">Pengalaman Kerja</label>
                                <textarea type="text" class="form-control" name = "experience" id="experience" placeholder="" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="information">Sumber Informasi</label>
                                <select class="form-control select2" data-toggle="select2" name="information" id="information" required>
        							<option value="">Pilih</option>
        							<option value="Media Sosial">Media Sosial</option>
        							<option value="Website BLK">Website BLK</option>
        							<option value="Pamflet/brosur/spanduk">Pamflet/brosur/spanduk</option>
        							<option value="Sosialisasi dari UPTD BLK Subang">Sosialisasi dari UPTD BLK Subang</option>
        							<option value="Informasi dari (Kel/Kec/Disnaker/BLK Lain)">Informasi dari (Kel/Kec/Disnaker/BLK Lain)</option>
        							<option value="Lain-lain">Lain-lain</option>
						        </select>
                            </div>


                <?php if(get_frontend_settings('recaptcha_status')): ?>
                  <div class="form-group mt-4 mb-0">
                    <div class="g-recaptcha" data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>"></div>
                  </div>
                <?php endif; ?>

                <div class="form-group">
                  <button type="submit" class="btn red radius-10 mt-4 w-100"><?php echo site_phrase('sign_up'); ?></button>
                </div>

                <div class="form-group mt-4 mb-0 text-center">
                  <?php echo site_phrase('already_have_an_account'); ?>?
                  <a class="text-15px fw-700" href="<?php echo site_url('home/login') ?>"><?php echo site_phrase('login'); ?></a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</section>