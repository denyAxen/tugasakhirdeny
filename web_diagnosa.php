<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Diagnosa</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/jquery.jscrollpane.css">
        <!--slider-->

        <link rel="stylesheet" type="text/css" href="css/jquery-ui-slider-pips.css">
        <!-- <script src="js/jquery-ui-slider-pips.js"></script> -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <?php
        include "include/js.php"
        ?>

    </head>
    <body  class="">
        <!--==============================header=================================-->
        <header class="oth_pages"> 
            <div class="container_12">


                <div><h1><a href="index.php"><img src="images/logo.png" alt="Brand Identity"></a></h1></div>

                <div class="clear">

                </div>
            </div>
        </header>


        <!--==============================Content=================================-->
        <div class="content">
            <div class="container_12">
                <div class="grid_12">
                    <div class="grid_10 prefix_1 alpha omega">
                        <div class="center">
                            <h3>Sistem Pendukung Keputusan Penentuan Resiko Penyakit Ginjal </h3>

                        </div>
                    </div><br><br>



                    <div class="grid_10 prefix_1 alpha"><br>
                        <h4 class="grid_7 alpha">Isi data di bawah ini dengan lengkap  :</h4>
                    </div>
                    <div class="grid_5 prefix_1 alpha">
                        <ul class="list">
                            <li>
                                <label>
                                    <strong>Nama Lengkap : ((deny lesmana))</strong>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <strong>Email : ((email@domain.com))</strong>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <strong>Alamat : ((alamat))</strong>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <strong>Umur :</strong>
                                    <p style="font-style:italic" >Silahkan masukan umur anda</p>
                                    <input name="nama" type="text"  placeholder="17" />
                                </label>
                            </li>
                            <li>
                                <label>
                                    <strong>Jenis Kelamin :</strong>
                                    <p style="font-style:italic" >Silahkan pilih jenis kelamin anda</p>
                                    <form action="">    
                                        <input type="radio" name="jenis_kelamin" value="PRIA">Pria<br>
                                        <input type="radio" name="jenis_kelamin" value="WANITA">Wanita<br>
                                    </form>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="grid_5">
                        <ul class="list">
                            <li>

                                <label>
                                    <strong>Berat Badan :</strong>
                                    <p style="font-style:italic" >Silahkan masukan berat badan anda</p>
                                    <input name="nama" type="text"  placeholder="17" />
                                </label>

                            </li>
                            <li>

                                <label>
                                    <strong>Tinggi Badan :</strong>
                                    <p style="font-style:italic" >Silahkan masukan tinggi badan anda</p>
                                    <input name="nama" type="text"  placeholder="170" />
                                </label>

                            </li>
                            <li>
                                <label>
                                    <strong>Riwayat Diabetes Melitus :</strong>
                                    <p style="font-style:italic" >Silahkan pilih jenis kelamin anda</p>
                                    <form action="">    
                                        <input type="radio" name="ada_riwayat" value="ADA">Ada<br>
                                        <input type="radio" name="tidak_riwayat" value="TIDAK">Tidak<br>
                                    </form>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <strong>Riwayat Hipertensi :</strong>
                                    <p style="font-style:italic" >Silahkan pilih jenis kelamin anda</p>
                                    <form action="">    
                                        <input type="radio" name="ada_hipertensi" value="ADA">Ada<br>
                                        <input type="radio" name="tidak_hipertensi" value="TIDAK">Tidak<br>
                                    </form>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="clear"></div>
                    <br><br>

                    <div class="grid_10 prefix_1 alpha">
                        <h4 class="col1">Diagnosa gejala yang dirasakan :</h4>
                    </div>

                    <div class="grid_5 prefix_1 alpha">

                        <div class="denislider"></div>

                    </div>

                    <div class="grid_5">
                        Gambar keteranga fuzzy logic
                    </div>

                    <div class="clear"></div>
                    <br><br>

                    <div class="grid_10 prefix_1 alpha">
                        <h4 class="col1">Diagnosa Laboratorium :</h4>
                    </div>

                    <div class="grid_5 prefix_1 alpha">



                        <label>
                            <strong>Serum Kreatinin (SCr) :</strong>
                            <p style="font-style:italic" >Silahkan masukan Serum Kreatinin hasil test laboratorium anda</p>
                            <input name="nama" type="text"  placeholder="5" />
                        </label>

                        <label align="center" id="loader">
                            <input name="save_lab" type="submit" value="HASIL" />
                        </label>
                        <br/><br/>


                        <div class="clear"></div>
                        <br><br>

                        <div class="grid_10 prefix_1 alpha">
                            <h4 class="col1">Hasil Diagnosa :</h4>
                        </div>

                        <div class="grid_5 prefix_1 alpha">

                            diagnosa
                        </div>

                        <div class="grid_5">
                            keterangan
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================footer=================================-->

        <?php
        include "include/footer.php"
        ?>

        <script src="js/jquery-ui-slider-pips.min.js"></script>
        <script>
            $(document).ready(function(e) {
                $.extend($.ui.slider.prototype.options, {animate: true});
                $('.denislider').slider().slider('pips').slider('float').slider({max: 10, min: 0});
            });
        </script>

    </body>
</html>