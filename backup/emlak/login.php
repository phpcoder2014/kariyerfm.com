<?php include_once("includes/header.php"); ?>
            <!-- CONTENT -->
            <div id="content">
<div class="container">
    <div>
        <div id="main">
            <h1 class="page-header">Panel Girişi</h1>
            <div class="login-register">
<div class="row">
<div class="span4">
    <ul class="tabs nav nav-tabs">
        <li class="active"><a href="#login">Giriş</a></li>
        <li><a href="#register">EDITOR</a></li>
    </ul>
    <!-- /.nav -->

    <div class="tab-content">
        <div class="tab-pane active" id="register">
            <form method="post" action="kontrol.php">
                <div class="control-group">
                    <label class="control-label" for="inputRegisterFirstName">
                        Kullanıcı adı
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="text" name="kullanici_adi" id="inputRegisterFirstName">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="control-group">
                    <label class="control-label" for="inputRegisterSurname">
                        Parola
                        <span class="form-required" title="This field is required.">*</span>
                    </label>

                    <div class="controls">
                        <input type="password" name="parola" id="inputRegisterSurname">
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="form-actions">
                    <input type="submit" value="Güvenli giriş" class="btn btn-primary arrow-right">
                </div>
                <!-- /.form-actions -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
<!-- /.span4-->

<div class="span8">
    <h2 class="page-header">Why to work with us?</h2>

    <div class="images row">
        <div class="item span2">
            <img src="assets/img/icons/circle-dollar.png" alt="">

            <h3>Ücretsiz Yayın</h3>
        </div>
        <!-- /.item -->
        <div class="item span2">
            <img src="assets/img/icons/circle-search.png" alt="">

            <h3>Kolay ulaşım</h3>
        </div>
        <!-- /.item -->
        <div class="item span2">
            <img src="assets/img/icons/circle-global.png" alt="">

            <h3>Global yayın</h3>
        </div>
        <!-- /.item -->
        <div class="item span2">
            <img src="assets/img/icons/circle-package.png" alt="">

            <h3>Sınırsız içerik</h3>
        </div>
        <!-- /.item -->
    </div>
    <!-- /.row -->

    <hr class="dotted">

    <p>
        Emlak ve gayrimenkul internet yayını ücretsiz seri ve bir çok kullanıcıya ulaşılabilirlik yönünden sizlere hizmet vermekteyiz.
    </p>

    <ul class="unstyled dotted">
        <li>
                                        <span class="inner">
                                            <strong>Tantıverdi Emlak artık sanal ortamda</strong><br>

                                                Consectetur adipiscing elit. Proin aliquam lorem sed urna viverra
                                                accumsan. Aliquam sit amet dui et diam rutrum aliquet. Sed vulputate,
                                                arcu vitae aliquet facilisis, ligula sem posuere nisl, sit amet pretium
                                                ligula dolor

                                        </span>
        </li>

        <li>
                                        <span class="inner">
                                            <strong>Bize bir tık kadar yakınsınız.</strong><br>
                                                Consectetur adipiscing elit. Proin aliquam lorem sed urna viverra
                                                accumsan. Aliquam sit amet dui et diam rutrum aliquet. Sed vulputate,
                                                arcu vitae aliquet facilisis, ligula sem posuere nisl, sit amet pretium
                                                ligula dolor
                                        </span>
        </li>

        <li>
                                        <span class="inner">
                                            <strong>Siz yükleyin biz yayınlayalım.</strong><br>
                                                Consectetur adipiscing elit. Proin aliquam lorem sed urna viverra
                                                accumsan. Aliquam sit amet dui et diam rutrum aliquet. Sed vulputate,
                                                arcu vitae aliquet facilisis, ligula sem posuere nisl, sit amet pretium
                                                ligula dolor
                                        </span>
        </li>
    </ul>
</div>
</div>
<!-- /.row -->
</div><!-- /.login-register -->        </div>
    </div>
</div>

    </div><!-- /#content -->
</div><!-- /#wrapper-inner -->
<?php include_once("includes/footer.php"); ?>