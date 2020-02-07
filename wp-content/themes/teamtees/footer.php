<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package teamtees
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<footer id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teamtees-weblogo.png" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text</p>
                <p>ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
                <a href="">about Us</a>
            </div>
            <div class="col-lg-2">
                <h2>Our link</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#">terms & conditions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">f & q </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">quick oder</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">15 woking days</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h2>Our product</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#">tt-shirt</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">hoodies </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">caps</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-4">
                <h2>Contact Us</h2>
                <ul class="nav flex-column">
                    <li class="nav-item_r nav-item_a">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <address>no 1 ronwood avenue,manukau,
                                <br>new zealand. 2104</address>
                            <a href="">Go Location</a>
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
                    <li class="nav-item">
                        <ul class="nav footer_social">
                            <li class="nav-item">
                                <a href="#"><i class="fab fa-facebook-square "></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>