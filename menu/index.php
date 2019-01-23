<?php
/**
 * Created by PhpStorm.
 * User: kaur.kaelep
 * Date: 23.01.2019
 * Time: 14:22
 */

$praed = array(
    array(
        'nimetus' => 'Sealihapada ploomide ja aprikoosiga',
        'kirjeldus' => 'sealihapada, lisand, salat, leib',
        'hind' => 2.50
    ),
    array(
        'nimetus' => 'Praetud kanakints',
        'kirjeldus' => 'praetud kana, lisand, salat, leib',
        'hind' => 2.50
    ),
    array(
        'nimetus' => 'Hakklihakaste',
        'kirjeldus' => 'hakklihakaste, lisand, salat, leib',
        'hind' => 2.45
    ),
    array(
        'nimetus' => 'Kartul',
        'kirjeldus' => 'Kartul, lisand, salat, leib',
        'hind' => 1.30
    ),
    array(
        'nimetus' => 'Hakklihakaste 1/2',
        'kirjeldus' => 'hakklihakaste, lisand, salat, leib',
        'hind' => 1.30
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Koolimenyy</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fluid-print">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card">
                    <h5 class="card-header">PRAED<i class="fas fa-utensils" style="padding-left: 15px;"></i></h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                foreach ($praed as $praad => $info) {
                                    echo '<h5 class="card-title"><span>' . $info['nimetus'] . '</span></h5>';
                                    echo '<p class="card-text"><span>' . $info['kirjeldus'] . '</span></p>';
                                    echo '</div>';
                                    echo '<div class="col-md-6 d-flex flex-row">';
                                    echo '<div class="p-2"><a href="#" class="btn btn-primary"><span>' . $info['hind'] . '</span></a></div>';
                                }
                                ?>
                                <div class="p-2"><a href="#" class="btn btn-success"><span>0.00€</span></a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title"><span>Šnitsel</span></h5>
                <p class="card-text"><span>sealihašnitsel, lisand, salat, leib, kaste</span></p>
            </div>
            <div class="col-md-6 d-flex flex-row">
                <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                <div class="p-2"><a href="#" class="btn btn-success"><span>0.00€</span></a></div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title"><span>Šnitsel</span></h5>
                <p class="card-text"><span>sealihašnitsel, lisand, salat, leib, kaste</span></p>
            </div>
            <div class="col-md-6 d-flex flex-row">
                <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                <div class="p-2"><a href="#" class="btn btn-success"><span>0.00€</span></a></div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="card">
        <h5 class="card-header">SUPID<i class="fas fa-utensil-spoon"
                                        style="padding-left: 15px;"></i></i>
        </h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                    <p class="card-text"><span>sealihašnitsel, lisand, salat, leib, kaste</span></p>
                </div>
                <div class="col-md-6 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                    <div class="p-2"><a href="#" class="btn btn-success"><span>0.00€</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">MAGUSTOIDUD<i class="fas fa-cookie-bite"
                                              style="padding-left: 15px;"></i>
        </h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                    <p class="card-text"><span>sealihašnitsel, lisand, salat, leib, kaste</span></p>
                </div>
                <div class="col-md-6 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                    <div class="p-2"><a href="#" class="btn btn-success"><span>0.00€</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">JOOGID<i class="fas fa-glass-whiskey" style="padding-left: 15px;"></i>
        </h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                </div>
                <div class="col-md-3 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                </div>
                <div class="col-md-3">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                </div>
                <div class="col-md-3 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                </div>
                <div class="col-md-3 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                </div>
                <div class="col-md-3">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                </div>
                <div class="col-md-3 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title"><span>Šnitsel</span></h5>
                </div>
                <div class="col-md-3 d-flex flex-row">
                    <div class="p-2"><a href="#" class="btn btn-primary"><span>0.00€</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>
