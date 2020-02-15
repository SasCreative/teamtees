<?php
// Template Name: Product Page


get_header();
?>
<div class="page_titel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>teamtees.co.nz <?php wp_title(); ?></span>
            </div>
        </div>
    </div>
</div>
<section id="product_top">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img class="img-fluid mx-auto d-block"
                    src="<?php echo get_template_directory_uri(); ?>/img/TT images-01.png" alt="">
            </div>
            <div class="col-md-5">
                <h1>
                    introduction - tshirt
                </h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                </p>
                <ul>
                    <li>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old.
                    </li>
                    <li>
                        Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                        Extremes
                        of Good and Evil) by Cicero
                    </li>
                    <li>
                        very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit
                        amet..",
                        comes from a line in section 1.10.32.
                    </li>
                    <li>
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    </li>
                </ul>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting indust but also the leap into
                    electronic typesetting, remaining essentially unchanged.
                </p>
            </div>
        </div>
    </div>
</section>
<div class="product-nav_menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Our T-shirt design</h2>
                <p>lorem ipsum is simply dummy text of the printing and typesetting indust but also the leap into
                    electronic typesetting, remaining essentially unchanged.</p>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Screen Print</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">heat transfer</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <section id="product_tab" class="product_tab_b">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade"
                                data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 1.png"
                                            class="d-block w-100" alt="...">
                                        black
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 2.png"
                                            class="d-block w-100" alt="...">
                                        Grey Marle
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 3.png"
                                            class="d-block w-100" alt="...">
                                        Navy
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 1.png"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 2.png"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 3.png"
                                            class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product_card">
                                <h2>$ 39.95 <small>incl gst(for adults)</small></h2>
                                <hr>
                                <h3>$37.95 incl gst (for Kids)</h3>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> tt hoodie - 260gsm</li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> fabric content - cvc
                                        fleece brushed
                                        60% cottons | 40% polyester</li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> ap dimensions 25cm x 10em
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> one colour thread &
                                        sublimation print
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> sizes - xs - 5xl & kids
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> nicknames (vinly print)
                                        5$ per each
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> minimum order quatity -
                                        20 hoodies
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <section id="product_tab" class="product_tab_p">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade"
                                data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 1.png"
                                            class="d-block w-100" alt="...">
                                        black
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 2.png"
                                            class="d-block w-100" alt="...">
                                        Grey Marle
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 3.png"
                                            class="d-block w-100" alt="...">
                                        Navy
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 1.png"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 2.png"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/TT - Tee 3.png"
                                            class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product_card">
                                <h2>$ 39.95 <small>incl gst(for adults)</small></h2>
                                <hr>
                                <h3>$37.95 incl gst (for Kids)</h3>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> tt hoodie - 260gsm</li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> fabric content - cvc
                                        fleece brushed
                                        60% cottons | 40% polyester</li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> ap dimensions 25cm x 10em
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> one colour thread &
                                        sublimation print
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> sizes - xs - 5xl & kids
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> nicknames (vinly print)
                                        5$ per each
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-bolt"></i></span> minimum order quatity -
                                        20 hoodies
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>

<section id="product_page_call">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Get in touch <a href="">+94 11 254 254 5</a></p>
            </div>
        </div>
    </div>
</section>

<section id="size_table">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/TT images-01 (1).png" alt="">
            </div>
            <div class="col-md-5">
                <h2>tee sizing</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left" scope="col">adults</th>
                                <th class="table-light" scope="col">s</th>
                                <th scope="col">m</th>
                                <th class="table-light" scope="col">l</th>
                                <th scope="col">xl</th>
                                <th class="table-light" scope="col">2xl</th>
                                <th scope="col">3xl</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">hap to bottom</th>
                                <td class="table-light">71</td>
                                <td>75</td>
                                <td class="table-light">78.5</td>
                                <td>82</td>
                                <td class="table-light">83.5</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">chest 2" below</th>
                                <td class="table-light">47</td>
                                <td>52</td>
                                <td class="table-light">56.5</td>
                                <td>61</td>
                                <td class="table-light">64</td>
                                <td>68</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="table-responsive mt-4">
                    <table class="table">

                        <thead>
                            <tr>
                                <th class="text-left" scope="col">kids</th>
                                <th scope="col">8</th>
                                <th scope="col">10</th>
                                <th scope="col">12</th>
                                <th scope="col">14</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">hap to bottom</th>
                                <td>54</td>
                                <td>58</td>
                                <td>62</td>
                                <td>66</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">chest 2" below</th>
                                <td>40</td>
                                <td>42</td>
                                <td>44</td>
                                <td>46</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</section>




<?php get_footer();