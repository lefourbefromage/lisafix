<?php
/*
Template Name: Contact
*/
?>


<?php get_header();?>

<div class="main__content">
    <section class="section section--contact">
        <div class="section__content contact">
            <h1 class="contact__title">Contact & Devis</h1>
            <p class="contact__subtitle">N'hésitez pas à me contacter et je vous répondrai dès que possible !</p>

            <div class="contact__form">
                <?php gravity_form(1, false, null, false, [], true,100,true);?>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>
