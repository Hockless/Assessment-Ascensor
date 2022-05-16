<div class="container">

    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <?php
			the_title('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
		?>



        </div>
    </header>

    <?php
the_content();
?>

</div>