
<div class="product-nav_menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Our T-shirt design</h2>
                <p>lorem ipsum is simply dummy text of the printing and typesetting indust but also the leap into
                    electronic typesetting, remaining essentially unchanged.</p>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="tee_1-teb" data-toggle="tab" href="#tee_1"
                            role="tab" aria-controls="heattransfer" aria-selected="true">screen print</a>

                        <a class="nav-item nav-link " id="tee_2-tab" data-toggle="tab" href="#tee_2" role="tab"
                            aria-controls="Screen Print" aria-selected="false">heat transfer</a>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active" id="tee_1" role="tabpanel" aria-labelledby="tee_1-tab">
        <?php get_template_part('page-templates/product/tshirt/product', 'screen_tee'); ?>
        </div>

        <div class="tab-pane fade" id="tee_2" role="tabpanel" aria-labelledby="tee_2-tab">
        <?php get_template_part('page-templates/product/tshirt/product', 'heat_tee'); ?>
        </div>

    </div>
</div>