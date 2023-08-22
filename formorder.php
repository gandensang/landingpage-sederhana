<div class="order-form  row h-100 align-items-center justify-content-center" id="orderform">
                <!-- Login form -->
                <div class="col-sm-10 col-md-8 col-lg-5">
                    <div class="login-content">
                        <div class="other-sign-up-area text-center">
                            <!-- <p>Sesuaikan Dengan Kebutuhan Anda</span> -->
                            <h3>Tanyakan tentang mesin pompa air kami atau <span style="color: #218838;"><u>minta info diskon</u></span> khusus dengan mengisi form di bawah.</h3>
                        </div>
                        <form class="form-order-wa" action="order-progress.php" method="post">
                            <div class="form__box mb-20">
                                <label class="form__label">Masukan Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama Anda" required>
                            </div>
                            <div class="form__box mb-20">
                                <label class="form__label">Nomer Whatsapp</label>
                                <input name="whatsapp" type="number" class="form-control" placeholder="cth: 085123456789" pattern="[0-9]+" title="Hanya masukkan angka" required>
                            </div>

                            <div class="form__box mb-20">
                                <label class="form__label">Jenis Pompa</label>
                                <!-- buatkan menu dropdown menggunakan style bootstrap-->
                                <select name="jenis_pompa" class="form-control" required>
                                    <option value="jet175" selected>Jet 175 (Rp 495.000)</option>
                                    <option value="jet250">Jet 250 (Rp 550.000)</option>
                                    <option value="jet300">Jet 300 (Rp 600.000)</option>
                                    <option value="jet500">Jet 500 (Rp 950.000)</option>
                                    <option value="jet700">Jet 700 (Rp 1.500.000)</option>
                                    <option value="jet900">Jet 900 (Rp 1.700.000)</option>
                                </select>
                            </div>

                            <div class="form__box mb-20">
                                <input type="hidden" name="utm_source" value="<?php echo $utm_source?>">
                            </div>

                            <div class="form__box mb-20">
                                <input type="hidden" name="utm_medium" value="<?php echo $utm_medium?>">
                            </div>

                            <div class="form__box mb-20">
                                <input type="hidden" name="utm_content" value="<?php echo $utm_content?>">
                            </div>

                            <div class="form__box mb-20">
                                <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign?>">
                            </div>

                            <div class="form__box mb-20">
                                <input type="hidden" name="utm_gclid" value="<?php echo $utm_gclid?>">
                            </div>
                            <div class="form__box mb-20">
                                <input type="hidden" name="utm_term" value="<?php echo $utm_term?>">
                            </div>
                            <div class="button-area text-center mt-30 mb-3">
                                <!-- Button -->
                                <button type="submit" class="wa-contact-button"><span class="whatsapp-icon"></span> Hubungi Sekarang</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>