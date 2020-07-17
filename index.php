<?php include ('./includes/menu.php')?>

<section class="py-3" id="about">
    <?php
    $sql = "select * from sobre";
    $query = mysqli_query($conn,$sql);
    while ($rs = mysqli_fetch_array($query)){
        $titulo = $rs['titulo'];
        $texto1 = nl2br($rs['texto1']);
        $img1 = $rs['img'];
        $img2 = $rs['img2'];
        $img3 = $rs['img3'];
    }
    ?>
    <div class="container-fluid my-5">
           
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 d-flex">
                <h3 class="text-left textAbout my-auto"><?php echo $texto1 ?></h3>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 d-flex">
                <img src="libraries/img/<?php echo $img1?>"
                     alt="escritorio" class=" w-100 my-auto img-thumbnail mx-auto">
            </div>
        </div>
       </div>
</section>

<section id="areas" class="mt-5">
    <div class="container-fluid">
        <div class="pt-4 text-center">
            <?php
            $sql = "select * from areas";
            $query = mysqli_query($conn,$sql);
            while ($rs = mysqli_fetch_array($query)){
                $titulo = $rs['titulo'];
                $txt = $rs['texto1'];
                $img1 = $rs['imagem1'];
                $img2 = $rs['imagem2'];
                $area_title = $rs['area_title'];
                $area_desc = $rs['area_desc'];
                $area_title2 = $rs['area_title2'];
                $area_desc2 = $rs['area_desc2'];
                $imagem_col = $rs['imagem_col'];

            }
            ?>
            <h2 class="text-uppercase font-weight-bold"><?php echo $titulo;?></h2>
            <hr style="width: 30%;">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 pb-5">
                <p class="font-normal py-5 p_areas text-center" style="line-height: 20px"><?php echo $txt;?></p>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="800">
                        <div class="card-img-top">
                            <img style="width: 60px;" src="./libraries/img/<?php echo $img1;?>"
                                title="reconhecimento" alt="pratice areas" class="img-fluid"/>
                            <p class="card-title text-uppercase titulo"><?php echo $area_title;?></p>
                        </div>
                        <div class="card-body">
                            <p class="text-left"><?php echo $area_desc;?></p>
                            <a href="services.php" class="float-right saiba_mais btn btn-md btn-grad float-left text-white" style="border: none;">saiba mais <i class=" mx-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card" data-aos="fade-right" data-aos-duration="1400">
                        <div class="card-img-top">
                            <img style="width: 60px;" src="./libraries/img/<?php echo $img2;?>"
                                title="areas" alt="pratice areas" class="img-fluid"/>
                            <p class="card-title text-uppercase titulo"><?php echo $area_title2;?></p>
                        </div>
                        <div class="card-body">
                            <p class="text-left"><?php echo $area_desc2;?></p>
                            <a href="services.php" class="float-right saiba_mais btn btn-grad float-left text-white" style="border: none;">saiba mais <i class=" mx-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-2" style="background-color: transparent" id="advogados_novo" >
    <div class="container-fluid">
        <div class="py-5 text-center">
            <h2 class="font-weight-bold text-uppercase">Advogados</h2>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1500" class="row text-center justify-content-center mb-4">
            <?php
                $sql = "SELECT * from advogados";
                $query = mysqli_query($conn, $sql);
                while ($rs = mysqli_fetch_array($query)){
//                     $id = $rs['id'];
                    $nomeSocia = $rs['nome'];
                    $cargo = $rs['cargo'];
                    $email = $rs['email'];
                    $area = $rs['areas'];
                    $url = $rs['url'];

                    echo "
                     <div class=\"card bg-light mx-2 mb-2\" style=\"width: 18rem\">
                    <img src=\"./libraries/img/socio_adv2.png\" alt=\"advogados\" class=\" mx-auto py-3\" style=\"width: 64px\">
                    <div class=\"card-heading d-flex\">
                        <h6 class=\"my-auto mx-auto font-weight-bold\">$nomeSocia</h6>
                    </div>
                    <div class=\"card-body\">
                        <p>$cargo</p>
                        <p class=\"text-capitalize font-weight-light pb-3\">$area</p>
                        <a style=\"color: #305f59;\" class=\"font-weight-light mx-auto btn btn-grad text-white\" href=\"./advogados/$url\"><i class=\"fa fa-plus mx-2\"></i>mais informações</a>
                    </div>
                </div>
                    ";
                }
                ?>
        </div>
    </div>
</section>

<div class="container py-3">
    <div class="py-5 text-center">
        <h3>Notícias Recentes</h3>
        <hr style="width: 20%;">
    </div>
    <div class="row">
        <div class="col-lg-6 text-left news">
            <?php
            $html ='';
            $url= 'http://www.tst.jus.br/web/guest/noticias/-/journal/rss/10157/57294?refererPlid=10730';
            $xml = simplexml_load_file($url);
            for ($i = 0; $i < 3; $i++){
                $title = $xml->channel->item[$i]->title;
                $description = $xml->channel->item[$i]->description;
                $pubDate = $xml->channel->item[$i]->pubDate;
                $dcdate = $xml->channel->item[$i]->dcdate;
                $link = $xml->channel->item[$i]->link;
                $data = new DateTime($pubDate);
                $nowDate = $data->format('d-m-Y H:i');
                $html .= " <p class='text-danger' style='font-weight: bold'>$nowDate</p>
                                    <p class='text-dark'>$title</p>
                                    <div class='' style='height: 100px; width: auto; line-height: 15px; overflow: auto; text-overflow: ellipsis;'> 
                                        <p>$description</p>
                                      </div>

                                 <div class='mt-4'>
                                 <a style='border: 2px solid #1b7943' href='$link' class='text-success p-1'> leia mais
                                  <i class='fa fa-plus mx-2'></i></a>
                                    </div>
                             <hr>
                   ";}
            echo $html;
            ?>
        </div>
        <div class="col-lg-6 col-md-12 text-left news">
            <?php
            $html ='';
            $url= 'http://www.tst.jus.br/web/guest/noticias/-/journal/rss/10157/57294?refererPlid=10730';
            $xml = simplexml_load_file($url);
            for ($i = 3; $i < 6; $i++){
                $title = $xml->channel->item[$i]->title;
                $description = $xml->channel->item[$i]->description;
                $pubDate = $xml->channel->item[$i]->pubDate;
                $dcdate = $xml->channel->item[$i]->dcdate;
                $data = new DateTime($pubDate);
                $nowDate = $data->format('d-m-Y H:i');
                $link = $xml->channel->item[$i]->link;
                $html .= " <p class='font-weight-bold text-danger'>$nowDate</p>
                                    <p class='text-dark'>$title</p>
                                 <div class='' style='height: 100px; width: auto; line-height: 15px; overflow: auto; text-overflow: ellipsis;'> 
                                        <p>$description</p>
                                      </div>
                                  <div class='mt-4'>
                                 <a  style='border: 2px solid #1b7943' href='$link'  class='text-success p-1'> leia mais  <i class='fa fa-plus mx-2'></i></a>
                                    </div>
                             <hr>
                   ";}
            echo $html;
            ?>
        </div>
    </div>
</div>

<?php include ('./includes/footer.php'); ?>
