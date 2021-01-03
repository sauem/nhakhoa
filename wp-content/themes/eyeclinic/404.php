<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <section class="error-area ptb-50">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="<?= ASSET?>img/404-error.png" alt="error">
                        <h3>Error 404 : page not found</h3>
                        <p>The page you are looking for might have been removed had its name changed or is temporarily
                            unavailable.</p>
                        <a href="index.html" class="default-btn">
                            Go to home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
