<?php
$title = 'Portofolio | Husein Putra Widya Pratama';
$active = 'portofolio';
echo include('view/component/header.php');
?>
<style>
    .f-website img{
        border-radius : 10px;
    }
    .f-website .centrize{
        border-radius: 10px;
    }
</style>
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Started -->
            <div class="section started">
                <div class="centrize full-width">
                    <div class="vertical-center">
                        <div class="started-content">
                            <div class="h-title glitch-effect" data-text="Portfolio">
                                Portfolio
                            </div>
                            <div class="h-subtitle typing-bread">
                                <p>
                                    <a href="/">Home</a> /
                                    <a href="portfolio.php">Portfolio</a>
                                </p>
                            </div>
                            <span class="typed-bread"></span>
                        </div>
                    </div>
                </div>
                <a href="#" class="mouse_btn"><span class="ion ion-mouse"></span></a>
            </div>

            <!-- Works -->
            <div class="section works">
                <div class="content">
                    <div class="filter-menu">
                        <div class="filters">
                            <div class="btn-group">
                                <label data-text="All" class="glitch-effect">
                                    <input type="radio" name="fl_radio" value=".box-item" />All
                                </label>
                            </div>
                            <!-- <div class="btn-group">
                                <label data-text="Apps">
                                    <input type="radio" name="fl_radio" value=".f-apps" />Apps
                                </label>
                            </div>
                            <div class="btn-group">
                                <label data-text="Website">
                                    <input type="radio" name="fl_radio" value=".f-website" />Website
                                </label>
                            </div>
                            <div class="btn-group">
                                <label data-text="UI/UX">
                                    <input type="radio" name="fl_radio" value=".f-uiux" />UI/UX
                                </label>
                            </div> -->
                        </div>
                    </div>
                    <?php 
                        $data = [
                            [ 
                                'name' => 'KKTPTI',
                                'image' => 'img/portfolio/ktpi-mobile.png',
                                'link' => 'http://kktpti.org/',
                            ],
                            [ 
                                'name' => 'HPPI',
                                'image' => 'img/portfolio/hppi-pow.png',
                                'link' => 'https://www.hondapowerproducts.co.id/',
                            ],
                            [ 
                                'name' => 'Langit Seduh',
                                'image' => 'img/portfolio/langitseduhh.png',
                                'link' => 'https://www.langitseduh.com/',
                            ],
                            [ 
                                'name' => 'Emina Cosmetics Official Store',
                                'image' => 'img/portfolio/eminacosmect.png',
                                'link' => 'https://www.eminacosmetics.com/',
                            ],
                            [ 
                                'name' => 'INFINA.ID',
                                'image' => 'img/portfolio/infina.png',
                                'link' => 'https://Infina.id/',
                            ],
                            [ 
                                'name' => 'Mobile Doctor',
                                'image' => 'img/portfolio/mobiledoctor.png',
                                'link' => 'https://mobiledoctor.id/',
                            ],
                            [ 
                                'name' => 'E-Lapor Kompolnas',
                                'image' => 'img/portfolio/kompolnas.png',
                                'link' => 'https://play.google.com/store/apps/details?id=com.kompolnas.apps.kompolnas',
                            ],
                            [ 
                                'name' => 'Mobile Approval',
                                'image' => 'img/portfolio/mobile-approval.png',
                                'link' => 'javascript::void(0)',
                                'internal' => 'APLIKASI INTERNAL'
                            ],
                            [ 
                                'name' => 'Medira Medical Berawa',
                                'image' => 'img/portfolio/mdirabali.png',
                                'link' => 'https://www.medirabali.id/',
                            ],
                            [ 
                                'name' => 'RS Accounting Services Indonesia',
                                'image' => 'img/portfolio/rsaccountindonesia.png',
                                'link' => 'https://rsaccountingservices.id/',
                            ],
                            [ 
                                'name' => 'Surveyor Indonesia',
                                'image' => 'img/portfolio/surveyindonesia.png',
                                'link' => 'https://www.ptsi.co.id/',
                            ],
                            [ 
                                'name' => 'PPID Surveyor Indonesia',
                                'image' => 'img/portfolio/eppidsurveyIndonesia.png',
                                'link' => 'https://eppid.ptsi.co.id/',
                            ],
                            [ 
                                'name' => 'Sarana Multi Infrastruktur',
                                'image' => 'img/portfolio/ptsmiindonesia.png',
                                'link' => 'https://ptsmi.co.id/',
                            ],
                            [ 
                                'name' => 'PFI Blog Proteksi, Finansial, Investasi',
                                'image' => 'img/portfolio/literasi-keuangan-pfiblog.png',
                                'link' => 'https://pfimegalife.co.id/literasi-keuangan',
                            ],
                            [ 
                                'name' => 'PENJAMINAN INFRASTRUKTUR INDONESIA',
                                'image' => 'img/portfolio/penjaminfraindonesia.png',
                                'link' => 'https://ptpii.co.id/',
                            ],
                            [ 
                                'name' => 'Samboja Lodge',
                                'image' => 'img/portfolio/samboj.png',
                                'link' => 'https://sambojalodge.com/',
                            ],
                            [ 
                                'name' => 'Asean Rok',
                                'image' => 'img/portfolio/aseanroks.png',
                                'link' => 'https://akstcc.org/',
                            ],
                            [ 
                                'name' => 'Eca Registration',
                                'image' => 'img/portfolio/eca-ais-registr.png',
                                'link' => 'https://eca.ais-indonesia.com/',
                            ],
                            [ 
                                'name' => 'Arkora Hydro',
                                'image' => 'img/portfolio/arkorahydr.png',
                                'link' => 'https://www.arkora-hydro.com/',
                            ],
                            [ 
                                'name' => 'Masuya',
                                'image' => 'img/portfolio/masuya.png',
                                'link' => 'https://www.masuya.co.id/"',
                            ],
                            [ 
                                'name' => 'Pertamina International Shipping',
                                'image' => 'img/portfolio/pertaminapis.png',
                                'link' => 'https://pertamina-pis.com/',
                            ],
                            [ 
                                'name' => 'Marubeni Indonesia',
                                'image' => 'img/portfolio/maruindo.png',
                                'link' => 'https://marubeni.id/',
                            ],
                            [ 
                                'name' => 'Secana Beachtown',
                                'image' => 'img/portfolio/secabeach.png',
                                'link' => 'https://secanabeachtown.com/',
                            ],
                            [ 
                                'name' => 'BBN Airlines Indonesia',
                                'image' => 'img/portfolio/bbn.png',
                                'link' => 'https://bbnairlines.id/',
                            ],
                            [ 
                                'name' => 'Orang Utan',
                                'image' => 'img/portfolio/orangutan.png',
                                'link' => 'https://www.orangutan.or.id/',
                            ],
                            [ 
                                'name' => 'Australian Independent School',
                                'image' => 'img/portfolio/ais.png',
                                'link' => 'https://www.ais-indonesia.com/',
                            ],
                            [ 
                                'name' => 'AICA Indonesia',
                                'image' => 'img/portfolio/aica.png',
                                'link' => 'https://www.aica.co.id/',
                            ],
                            [ 
                                'name' => 'Ateja',
                                'image' => 'img/portfolio/ateja.png',
                                'link' => 'https://ateja.co.id/',
                            ],
                            [ 
                                'name' => 'BNI finance',
                                'image' => 'img/portfolio/bni-finance.png',
                                'link' => 'https://www.bnifinance.co.id/',
                            ],
                            [ 
                                'name' => 'Japfa Comfeed Indonesia',
                                'image' =>  'img/portfolio/japfa.png',
                                'link' => 'https://www.japfacomfeed.co.id/',
                            ],
                            [ 
                                'name' => 'JNE Express',
                                'image' => 'img/portfolio/jne.png',
                                'link' => 'https://www.jne.co.id/',
                            ],
                            [ 
                                'name' => 'MahaDasha',
                                'image' => 'img/portfolio/mahadasha.png',
                                'link' => 'https://www.mahadasha.co.id/',
                            ],
                            
                            [ 
                                'name' => 'Mitra Integrasi Informatika',
                                'image' => 'img/portfolio/mii.png',
                                'link' => 'https://www.mii.co.id/',
                            ],
                            
                            [ 
                                'name' => 'Suri Nusantara Yaya',
                                'image' => 'img/portfolio/snj.png',
                                'link' => 'https://surinusantarajaya.com/id',
                            ],
                             
                        ];

                        usort($data, function ($a, $b) {
                            return strcmp($a['name'], $b['name']);
                        });
                    ?>
                    <div class="box-items portfolio-items">
                        <?php foreach($data as $v) { ?>
                        <div class="box-item f-apps f-website">
                            <a  href="<?= (!isset($v['internal'])) ? 'https://www.lolinez.com/?'.$v['link']   : $v['link'] ?>" <?= (!isset($v['internal'])) ? 'target="_blank nofollow"' : '' ?>>
                                <div class="image">
                                    <img src="<?= $v['image']?>" alt="portfolio - Husein Putra Widya Pratama" />
                                    <span class="info">
                                        <span class="centrize full-width">
                                            <span class="vertical-center">
                                            <?php if(isset($v['internal'])) {?>
                                                <span class="ion"> <?= $v['internal'] ?></span>

                                                <?php }else{?>
                                                    <span class="ion ion-link">   </span>
                                                    
                                                <?php } ?> 
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="desc">
                                    <h6 class="name has-popup-gallery"><?= $v['name']?></h6>
                                </div>
                            </a>
                        </div>
                        <?php }?>
 
 
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>

<?= include('view/component/footer.php'); ?>
      