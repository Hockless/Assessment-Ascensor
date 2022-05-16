<?php
    get_header();
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="wp-block-cover" style="min-height:257px">
    <img width="2560" height="1707" class="wp-block-cover__image-background wp-image-125" alt
        src="http://ascensor-assessment.local/wp-content/uploads/2022/05/arnaud-mesureur-7EqQ1s3wIAI-unsplash-scaled.jpg"
        data-object-fit="cover"
        srcset="http://ascensor-assessment.local/wp-content/uploads/2022/05/jude-infantini-mI-QcAP95Ok-unsplash-scaled.jpg 2560w, http://ascensor-assessment.local/wp-content/uploads/2022/05/jude-infantini-mI-QcAP95Ok-unsplash-300x200.jpg 300w, http://ascensor-assessment.local/wp-content/uploads/2022/05/jude-infantini-mI-QcAP95Ok-unsplash-1024x683.jpg 1024w, http://ascensor-assessment.local/wp-content/uploads/2022/05/jude-infantini-mI-QcAP95Ok-unsplash-768x512.jpg 768w, http://ascensor-assessment.local/wp-content/uploads/2022/05/jude-infantini-mI-QcAP95Ok-unsplash-1536x1024.jpg 1536w, http://ascensor-assessment.local/wp-content/uploads/2022/05/jude-infantini-mI-QcAP95Ok-unsplash-2048x1365.jpg 2048w"
        sizes="(max-width: 2560px) 100vw, 2560px">
    <div class=" wp-block-cover__inner-container">
        <p class="has-text-align-center has-large-font-size">Blog</p>
    </div>
</div>


<article class="content px-3 py-5 p-md-5">

    <?php

        if( have_posts() ){

            while( have_posts() ){

                the_post();
                
                
                get_template_part( 'template-parts/content', 'archive' );
            }
        }

        ?>
    <?php 
            
        ?>
    <nav aria-label="...">
        <ul class="pagination">

            <li class="page-item"><a class="page-link" href="http://ascensor-assessment.local/blog/233-2/page/2/">1</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="http://ascensor-assessment.local/blog/233-2/page/2/">2 </a>
            </li>
            <li class="page-item"><a class="page-link" href="http://ascensor-assessment.local/blog/233-2/page/3/">3</a>
            </li>

        </ul>
    </nav>

</article>


<?php
   get_footer();
   ?>