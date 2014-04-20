<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daftar Anggota</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
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
                    <div class="grid_4  prefix_1 omega">
                        <h3>Daftar Member Baru</h3>
                        <form id="form">
                            
                            <!-- 
                            <div class="success_wrapper">
                            <div class="success-message">Contact form submitted</div>
                            </div>
                            -->
                            
                            <label>
                                <strong>Nama Lengkap :</strong>
                                <p style="font-style:italic" >Silahkan masukan nama lengkap</p>
                                <input name="nama" type="text"  placeholder="Deny Lesmana" />
                            </label>
                            <label><br>
                                <strong>E-mail :</strong>
                                <p style="font-style:italic" >Silahkan masukan email anda</p>
                                <input name="email" type="text" placeholder="email@domain.com" />
                            </label>
                            <label><br>
                                <strong>Alamat :</strong>
                                <p style="font-style:italic" >Silahkan masukan alamat lengkap anda</p>
                                <textarea name="alamat" type="text" placeholder="Perum. Galuh Mas No.5"  /></textarea>
                            </label>

                            <label><br>
                                <strong>Username :</strong>
                                <p style="font-style:italic" >Silahkan masukan Username anda</p>
                                <input name="username" type="text" placeholder="denyaxen" />
                            </label>
                            <label ><br>
                                <strong>Password :</strong>
                                <p style="font-style:italic" >Silahkan masukan Password anda</p>
                                <input type="password" name="password" value="lesmana" />
                            </label>

                            <div>
                                <div class="clear"></div>
                                <div class="btns">
                                    <a href="index.php" data-type="submit" class="btn">Back to menu</a>
                                    <a href="#" data-type="reset" class="btn">Clear</a>
                                    <a href="welcome_daftar.php" data-type="submit" class="btn">Daftar</a></div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>

        <!--==============================footer=================================-->

        <?php
        include "include/footer.php"
        ?>

    </body>
</html>