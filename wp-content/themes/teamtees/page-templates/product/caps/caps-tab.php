<div class="product-nav_menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Our caps design</h2>
                <p>lorem ipsum is simply dummy text of the printing and typesetting indust but also the leap into
                    electronic typesetting, remaining essentially unchanged.</p>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="cap-item-1-tab" data-toggle="tab" href="#cap-item-1"
                            role="tab" aria-controls="cap-item-1" aria-selected="true">tintan cpas</a>
                        <a class="nav-item nav-link" id="cap-item-2-tab" data-toggle="tab" href="#cap-item-2"
                            role="tab" aria-controls="cap-item-2" aria-selected="false">fairway cap</a>
                            <a class="nav-item nav-link" id="cap-item-3-tab" data-toggle="tab" href="#cap-item-3"
                            role="tab" aria-controls="cap-item-3" aria-selected="false">beanie</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="cap-item-1" role="tabpanel" aria-labelledby="cap-item-1-tab">
        <?php get_template_part('page-templates/product/caps/product', 'tintan_cap'); ?>
        </div>
        <div class="tab-pane fade" id="cap-item-2" role="tabpanel" aria-labelledby="cap-item-2-tab">
           <?php get_template_part('page-templates/product/caps/product', 'fairway_cap'); ?>
        </div>
        <div class="tab-pane fade" id="cap-item-3" role="tabpanel" aria-labelledby="cap-item-3-tab">
        <?php get_template_part('page-templates/product/caps/product', 'beanie_cap'); ?> 
        </div>
    </div>
</div>