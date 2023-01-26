<?php $social_links = json_decode($user_details['social_links'], true); ?>
<?php include "profile_menus.php"; ?>

<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="user-dashboard-sidebar">
                    <div class="user-box">
                        <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="" class="img-fluid">
                        <div class="name">
                            <div class="name"><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></div>
                        </div>
                    </div>
                    <div class="user-dashboard-menu">
                        <ul>
                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i class="fas fa-user-circle"></i> <?php echo site_phrase('profile'); ?></a></li>
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"> <i class="fas fa-lock"></i> <?php echo site_phrase('account'); ?></a></li>
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i class="fas fa-camera-retro"></i> <?php echo site_phrase('photo'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <form class="w-100 bg-white radius-10 p-4" action="<?php echo site_url('home/update_profile/update_basics'); ?>" method="post">
                    <div class="row">
                        <div class="col-12 border-bottom mb-3 pb-3">
                            <h4><?php echo site_phrase('edit_profile'); ?></h4>
                            <p><?php echo site_phrase('add_information_about_yourself_to_share_on_your_profile'); ?></p>
                        </div>

                        <div class="col-md-6">
                            <label class="text-dark fw-600" for="FristName"><?php echo site_phrase('first_name'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" name = "first_name" id="FristName" placeholder="<?php echo site_phrase('first_name'); ?>" value="<?php echo $user_details['first_name']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="text-dark fw-600" for="FristName"><?php echo site_phrase('last_name'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" name = "last_name" placeholder="<?php echo site_phrase('last_name'); ?>" value="<?php echo $user_details['last_name']; ?>">
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <?php if($user_details['is_instructor'] > 0): ?>
                                <div class="form-group mb-3">
                                    <label class="text-dark fw-600" for="Biography"><?php echo site_phrase('title'); ?></label>
                                    <textarea class="form-control" name = "title" placeholder="<?php echo site_phrase('short_title_about_yourself'); ?>"><?php echo $user_details['title']; ?></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="text-dark fw-600"  for="skills"><?php echo get_phrase('your_skills'); ?></label>
                                    <input type="text" class=" tagify" id = "skills" name="skills" data-role="tagsinput" style="width: 100%;" value="<?php echo $user_details['skills'];  ?>"/>
                                    <small class="text-muted"><?php echo get_phrase('write_your_skill_and_click_the_enter_button'); ?></small>
                                </div>
                                
                            <?php endif; ?>

                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="birthplace">Tempat Lahir</label>
                                <input type="text" class="form-control" name = "birthplace" id="birthplace" placeholder="kota lahir" value="<?php echo $user_details['birthplace']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="birth">Tanggal Lahir</label>
                                <input type="date" class="form-control" name = "birth" id="birth" placeholder="" value="<?php echo $user_details['birth']; ?>">
                            </div>
                             <div class="form-groupm mb-3">
                                <label class="text-dark fw-600" for="sex">Jenis Kelamin</label>
                                <!--<input type="text" class="form-control" name = "sex" id="sex" placeholder="" value="<?php echo $user_details['sex']; ?>">-->
                                <select class="form-control select2" data-toggle="select2" name="sex" id="sex" value="<?php echo $user_details['sex']; ?>">
        							<option value="">Pilih</option>
        							<option value="Laki-laki">Laki - Laki</option>
        							<option value="Perempuan">Perempuan</option>
						        </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="address">Alamat Lengkap</label>
                                <input type="text" class="form-control" name = "address" id="address" placeholder="" value="<?php echo $user_details['address']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="education">Pendidikan Terakhir</label>
                                <!--<input type="text" class="form-control" name = "education" id="education" placeholder="" value="<?php echo $user_details['education']; ?>">-->
                                <select class="form-control select2" data-toggle="select2" name="education" id="education" value="<?php echo $user_details['education']; ?>">
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
                                <input type="text" class="form-control" name = "contact" id="contact" placeholder="" value="<?php echo $user_details['contact']; ?>">
                            </div>
                             <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="parent">Nama Orang Tua/Wali</label>
                                <input type="text" class="form-control" name = "parent" id="parent" placeholder="" value="<?php echo $user_details['parent']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="designation">Status</label>
                                <select class="form-control select2" data-toggle="select2" name="designation" id="designation" value="<?php echo $user_details['designation']; ?>">
        							<option value="">Pilih</option>
        							<option value="Menikah">Menikah</option>
        							<option value="Belum Menikah">Belum Menikah</option>
						        </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="experience">Pengalaman Kerja</label>
                                <textarea type="text" class="form-control" name = "experience" id="experience" placeholder="" value="<?php echo $user_details['experience']; ?>"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-dark fw-600" for="information">Sumber Informasi</label>
                                <select class="form-control select2" data-toggle="select2" name="information" id="information" value="<?php echo $user_details['information']; ?>">
        							<option value="">Pilih</option>
        							<option value="Media Sosial">Media Sosial</option>
        							<option value="Website BLK">Website BLK</option>
        							<option value="Pamflet/brosur/spanduk">Pamflet/brosur/spanduk</option>
        							<option value="Sosialisasi dari UPTD BLK Subang">Sosialisasi dari UPTD BLK Subang</option>
        							<option value="Informasi dari (Kel/Kec/Disnaker/BLK Lain)">Informasi dari (Kel/Kec/Disnaker/BLK Lain)</option>
        							<option value="Lain-lain">Lain-lain</option>
						        </select>
                            </div>
                            
                            <div>
                                <label class="text-dark fw-600" for="">Informasi Tambahan</label>
                                <div class="description-title">Foto Copy Ijazah Terakhir 2 Lembar</div>
                                <div class="description-title">Foto Copy KTP/KK 2 Lembar</div>
                                <div class="description-title">Pas Foto Berwarna ukuran 3x4 3 Lembar</div>
                                <div class="description-title">Printout Pendaftaran Online 2 Lembar</div>
                            </div>
                            
                            <!--<hr class="my-5 bg-secondary">-->

    
                                <!--<input type="text" class="form-control" maxlength="60" name = "twitter_link" placeholder="<?php echo site_phrase('twitter_link'); ?>" value="<?php echo $social_links['twitter']; ?>">-->
                            </div>


                            <!--<label class="text-dark fw-600"><?php echo site_phrase('add_your_facebook_link'); ?></label>-->
                            <!--<div class="input-group mb-3">-->
                            <!--    <span class="input-group-text"><i class="fab fa-facebook"></i></span>-->
                            <!--    <input type="text" class="form-control" maxlength="60" name = "facebook_link" placeholder="<?php echo site_phrase('facebook_link'); ?>" value="<?php echo $social_links['facebook']; ?>">-->
                            <!--</div>-->


                            <!--<label class="text-dark fw-600"><?php echo site_phrase('add_your_linkedin_link'); ?></label>-->
                            <!--<div class="input-group mb-3">-->
                            <!--    <span class="input-group-text"><i class="fab fa-linkedin"></i></span>-->
                            <!--    <input type="text" class="form-control" maxlength="60" name = "linkedin_link" placeholder="<?php echo site_phrase('linkedin_link'); ?>" value="<?php echo $social_links['linkedin']; ?>">-->
                            <!--</div>-->
                        </div>

                        <div class="col-5 pt-4">
                            <button class="btn red px-5 py-2 radius-8"><?php echo site_phrase('save'); ?></button>
                            <button class="btn green px-5 py-2 radius-8">Cetak</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
    $(function(){
        $(".bootstrap-tag-input").tagsinput('items');
    });
</script>