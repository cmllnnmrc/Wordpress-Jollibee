<?php get_header(); ?>

<section class="cta">
    <div class="container">
        <div class="cta__wrapper">
            <h3>Have a question?</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad cumque numquam ab, sit nobis optio recusandae tempora? Corrupti, fuga dolorum.</p>
            <button id="btnModal">Contact</button>
        </div>
    </div>
</section>

<div class="modal">
    <div class="backdrop"></div>
    <div class="modal__main">
        <div class="modal__header">
            <h2>Contact Us</h2>
            <button id="btnClose"><i class="fas fa fa-times"></i></button>
        </div>
        <div class="modal__body">
            <form action="">
                <?php echo do_shortcode('[contact-form-7 id="115" title="Contact form 1"]'); ?>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>