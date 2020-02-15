<div class="product-nav_menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Our T-shirt design</h2>
                <p>lorem ipsum is simply dummy text of the printing and typesetting indust but also the leap into
                    electronic typesetting, remaining essentially unchanged.</p>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active" id="hoodies_1-teb" data-toggle="tab" href="#hoodies_1"
                            role="tab" aria-controls="heattransfer" aria-selected="true">heattransfer</a>

                        <a class="nav-item nav-link " id="hoodies_2-tab" data-toggle="tab" href="#hoodies_2" role="tab"
                            aria-controls="Screen Print" aria-selected="false">Screen Print</a>

                        <a class="nav-item nav-link" id="hoodies_3-tab" data-toggle="tab" href="#hoodies_3" role="tab"
                            aria-controls="embroidery" aria-selected="false">emboridery</a>

                        <a class="nav-item nav-link" id="hoodies_4-tab" data-toggle="tab" href="#hoodies_4" role="tab"
                            aria-controls="applique" aria-selected="false">applique</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade show active" id="hoodies_1" role="tabpanel" aria-labelledby="hoodies_1-tab">
            <?php get_template_part('page-templates/product/hoodies/product', 'heat_hoodie'); ?>
        </div>

        <div class="tab-pane fade" id="hoodies_2" role="tabpanel" aria-labelledby="hoodies_2-tab">
            <?php get_template_part('page-templates/product/hoodies/product', 'screen_hoodie'); ?>
        </div>

        <div class="tab-pane fade" id="hoodies_3" role="tabpanel" aria-labelledby="hoodies_3-tab">
            <?php get_template_part('page-templates/product/hoodies/product', 'embroidery_hoodie'); ?>
        </div>

        <div class="tab-pane fade" id="hoodies_4" role="tabpanel" aria-labelledby="hoodies_4-tab">
            <?php get_template_part('page-templates/product/hoodies/product', 'applique_hoodie'); ?>
        </div>

    </div>
</div>