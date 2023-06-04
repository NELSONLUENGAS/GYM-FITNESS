<footer class="footer flex justify-center pt-8">
    <div class="container">
        <hr>
        <div class="flex flex-col md:flex-row md:justify-between py-6">
            <?php echo do_shortcode('[menu_principal]') ?>
            <p class="all-right">
                Todos los derechos reservados. <?php echo get_bloginfo('name') . "  " . date('Y') ?>
            </p>
        </div>
    </div>

</footer>
<?php wp_footer() ?>
</body>

</html>