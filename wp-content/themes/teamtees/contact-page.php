<?php
// Template Name: Contact us page
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <h2>SEND US A MESSAGE</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamß</p>
           <?php echo do_shortcode( '[contact-form-7 id="43" title="Contact page"]' )?>
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="get_in_thought">
                <h2>Get In Thought</h2>
				<p>Lorem ipsum dolor sit amet, consetetur</p>

                <ul class="nav flex-column">
                    <li class="nav-item_r">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <address>1 Ronwood Ave, Manukau, 
                               new zealand, 09 2676063</address>
                        </div>
					</li>
					<li class="nav-item_r">
                        <div class="table-responsive">
                            <table class="table ">
                                <tr>
									<td >Monday - Friday: </td>
									<td>8.30AM - 5.00pm</td>
                                </tr>
                                <tr>
									<td>Saturday: </td>
									<td>9.00Am - 2.00am</td>
                                </tr>
                                <tr>
									<td>Sunday: </td>
									<td>Closed</td>
                                </tr>

                            </table>
                        </div>
                    </li>
                    <li class="nav-item_r">
                        <div>
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <a href="">+94 217 5841 5284 </a>
                        </div>

                    </li>
                    <li class="nav-item_r">
                        <div>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <a href="">sales@teamtees.co.nz</a>
                        </div>
					</li>
                </ul>

            </div>

        </div>
	</div>
</div>
<div class="map_location">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d887.5766401192752!2d174.87907005251452!3d-36.98940897826079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4dbf2c09ad27%3A0x2c1be2c0c31d7b0b!2s1%20Ronwood%20Avenue%2C%20Manukau%2C%20Auckland%202104%2C%20New%20Zealand!5e0!3m2!1sen!2slk!4v1581316409696!5m2!1sen!2slk" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	
	</div>

<?php get_footer();