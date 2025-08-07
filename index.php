<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <div class="globlaContainer container-fluid vh-100 d-flex flex-column m-0 p-0 secondaryBgColor">
        <?php require_once "html/header.html"; ?>

        <main class="mainContainer d-flex col container-fluid align-items-center justify-content-center">
            <article class="presentation row align-items-center justify-content-center mainBgColor">
                <div class="presTitle row">
                    <img class="logoMini" src="assets/images/logo_ecoride_mini.jpg" alt="Logo de la société EcoRide(">
                </div>
                <div class="row padding-10 align-items-center justify-content-center">
                    <div class="col-md-auto padding-5">
                        <div class="stackParent position-relative round-10 overflow-hidden">
                            <img class="imgAccueil img-fluid" src="assets/images/AdobeStock_696167858.jpg" alt="">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="imgTxtAccueil text-white">ECOLOGIQUE</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto padding-5">
                        <div class="stackParent position-relative round-10 overflow-hidden">
                            <img class="imgAccueil img-fluid" src="assets/images/AdobeStock_292730611.jpg" alt="">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="imgTxtAccueil text-white">CONVIVIAL</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto padding-5">
                        <div class="stackParent position-relative round-10 overflow-hidden">
                            <img class="imgAccueil img-fluid" src="assets/images/AdobeStock_233664001.jpg" alt="">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="imgTxtAccueil text-white">ECONOMIQUE</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row padding-10">
                    <p class="description m-0 p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel nisl quis neque mollis egestas ut ac metus. Fusce et semper arcu. Donec bibendum imperdiet massa, vel faucibus nisi iaculis nec. Donec nec suscipit magna, vel mollis nibh. Suspendisse pulvinar, tortor nec dapibus fringilla, est lorem condimentum urna, vel mattis dui nunc molestie enim. Duis euismod condimentum enim, at fermentum libero posuere accumsan. Integer iaculis fringilla imperdiet. Aliquam erat volutpat. Integer quis vehicula eros. Sed tincidunt consequat eros, vitae malesuada augue congue at.</p>
                </div>
            </article>
        </main>

        <?php require_once "html/footer.html"; ?>
    </div>

</body>
</html>