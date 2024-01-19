<?php 

/*
 * Template Name: How it works
 */
get_header(); ?>
<div class="containerr">

    <div class="hero-banner-section custom-section custom-margin-bottom">
    	<div class="container">
        <div class="text-holder mb-70">
            <h1 class="title-block"><?php echo get_field( "hiw_hero_section_title" ); ?></h1>
			<div class="text-block">
				<p><?php echo get_field( "hiw_hero_section_textblock" ); ?></p>
			</div>
			<a href="<?php echo get_field( "hiw_hero_section_button_link" ); ?>" class="btn"><?php echo get_field( "hiw_hero_section_button_text" ); ?></a>
		</div>
		<div class="image-holder">
			<picture>
				<source srcset="<?php echo get_field( "hiw_hero_section_image" ); ?>" media="(min-width: 768px)">
				<source srcset="<?php echo get_field( "hiw_hero_section_image_mobile" ); ?>">
				<img src="<?php echo get_field( "hiw_hero_section_image" ); ?>" alt="Web Development">
			</picture>
		</div>
	</div>
	<?php
      	 $home_page_id = FLOCKSY_HOME_PAGE_ID;
    ?>
    <div class="logo-banner-section custom-section">
    	<div class="container">
        <ul class="logo-list">
            <?php
                    $rows = get_field('logo_banner_images',$home_page_id);
                    $i=0;
                    if( $rows ) 
                    {
                        foreach( $rows as $row ) 
                        {
                            foreach( $row as $row1 ) {
                            
                            ?>
                            <li class="logo-item">
                            <img src="<?php echo $row1; ?>" alt="logo">
                                <!--<a href="<?php echo $row1; ?>" target="_blank"><img src="<?php echo $row1; ?>" alt="logo"></a>-->
                            </li>
                            <?php
                            }
                            $i++;
                        }
                    }
            ?>
            
            
        </ul>
    </div>
</div>
	<div class="banner-green-section">
		<div class="container">
        <h2 class="title-global-section text-center"><?php echo get_field( "hiw_banner_green_section_title" ); ?></h2>
        <div class="column-list">
        <?php
		$rows = get_field('hiw_banner_green_column_list');
      
        if( have_rows('hiw_banner_green_column_list') ):
        	while( have_rows('hiw_banner_green_column_list') ) : the_row();
            	$sub_value1 = get_sub_field('hgc_title');
                $sub_value2 = get_sub_field('hgc_image');
                $sub_value3 = get_sub_field('hgc_image_for_mobile');
		if( $rows ){
			//foreach( $rows as $row ) {
				?>
				<div class="column-item">
					<div class="image-block">
						<picture>
						<source srcset="<?php echo $sub_value2; ?>" media="(min-width: 768px)">
						<source srcset="<?php echo $sub_value3; ?>">
						<img src="<?php echo $sub_value2; ?>" alt="<?php echo $row['hgc_title']; ?>">
					</picture>
					</div>
					<h4 class="title-block"><?php echo $sub_value1; ?></h4>
				</div>
				<?php
			}
            endwhile;
            endif;
		//}
        ?>
		</div>
	</div>
    </div>

    <div class="slider-image-section custom-section">
    	<div class="container">
        <div class="slider-image js-slider">
			<?php
				$custom_terms=get_field("hiw_review_category");
				$args = array(  
					'post_type' => 'review',
					'post_status' => 'publish',
					'posts_per_page' => 3, 
					'orderby' => 'date',
					'order'   => 'ASC',
					'tax_query' => array(             
					 array(
						'taxonomy' => 'reviews_category',
						'field' => 'id',
						'terms' => $custom_terms, // or the category name e.g. Germany
					),
				 )
				);
				$loop = new WP_Query( $args ); 
				$i=1;
				while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
			<div class="slide">
				<div class="text-holder">
					<div class="slide-text-header">
						<h2 class="title-global-section">We make <br><span class="text-green">your life</span> easier</h2>
						<div class="title-small-text">What clients are saying:</div>
					</div>
					<div class="slide-text-body">
						<h3 class="subtitle-block">“<?php echo get_field("review_title"); ?>”</h3>
						<div class="text-block">
							<?php echo get_field("review_textblock"); ?>
						</div>
						<div class="name-block"><?php echo get_field("client_name"); ?></div>
						<div class="position-block"><?php echo get_field("client_position"); ?></div>
					</div>
				</div>
				<div class="image-holder">
					<ul class="image-list js-hover-image">
						<li class="image-item is-active">
							<picture>
								<source srcset="<?php echo get_field("client_image"); ?>" media="(min-width: 768px)">
								<source srcset="<?php echo get_field("client_image_mobile"); ?>">
								<img src="<?php echo get_field("client_image"); ?>"  width="460" height="610"  alt="See What Our Happy Clients Say">
							</picture>
						</li>
						<li class="image-item image-project">
							<picture>
								<source srcset="<?php echo get_field("product_image"); ?>" media="(min-width: 768px)">
								<source srcset="<?php echo get_field("product_image_mobile"); ?>">
								<img src="<?php echo get_field("product_image"); ?>"  width="460" height="610"  alt="See What Our Happy Clients Say">
							</picture>
						</li>
					</ul>
				</div>
			</div>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
		</div>
	</div>
	</div>

	<div class="text-accordion-section" id="brief">
		<div class="container">
		<h2 class="title-global-section"><?php echo get_field("hiw_brief_section_global_title"); ?></h2>
		<div class="text-accordion-holder">
			<div class="text-holder">
				<div class="image-block">
					<picture>
						<source srcset="<?php echo get_field("hiw_brief_section_image"); ?>" media="(min-width: 768px)">
						<source srcset="<?php echo get_field("hiw_brief_section_image_mobile"); ?>">
						<img src="<?php echo get_field("hiw_brief_section_image"); ?>" alt="brief">
					</picture>
				</div>
				<h3 class="title-block"><?php echo get_field("hiw_brief_section_title"); ?></h3>
				<div class="text-block">
					<?php echo get_field("hiw_brief_section_textblock"); ?>
				</div>
			</div>
			<div class="accordion-holder">
				<h3 class="title-block"><?php echo get_field("hiw_brief_section_accordion_global_title"); ?></h3>
				<div class="accordion-default accordion-default-white js-accordion-collapsible">
					<?php
					$rows = get_field('hiw_brief_section_accordion_items');
           if( have_rows('hiw_brief_section_accordion_items') ):
        	while( have_rows('hiw_brief_section_accordion_items') ) : the_row();
            	$sub_value1 = get_sub_field('bsai_title');
                $sub_value2 = get_sub_field('bsai_textblock');
                
					if( $rows ) 
						{
							//foreach( $rows as $row ) 
							//{
								?>
							   <div class="accordion-item">
									<a href="#" class="accordion-opener js-opener"><?php echo $sub_value1;?></a>
									<div class="accordion-holder js-slide">
										<div class="text-holder">
											<p><?php echo $sub_value2;?></p>
										</div>
									</div>
								</div>
								<?php
							}
                            endwhile;
                            endif;
						//}
				?>
				</div>
				<a href="<?php echo get_field("hiw_brief_section_button_link"); ?>" class="link dot-green"><?php echo get_field("hiw_brief_section_button_text"); ?></a>
			</div>
		</div>
	</div>
	</div>

	<div class="text-accordion-section" id="finalize">
		<div class="container">
		<h2 class="title-global-section"><?php echo get_field("hiw_finalize_section_global_title"); ?></h2>
		<div class="text-accordion-holder holder-right">
			<div class="text-holder">
				<div class="image-block">
					<picture>
						<source srcset="<?php echo get_field("hiw_finalize_section_image"); ?>" media="(min-width: 768px)">
						<source srcset="<?php echo get_field("hiw_finalize_section_image_mobile"); ?>">
						<img src="<?php echo get_field("hiw_finalize_section_image"); ?>" alt="finalize">
					</picture>
				</div>
				<h3 class="title-block"><?php echo get_field("hiw_finalize_section_title"); ?></h3>
				<div class="text-block">
					<?php echo get_field("hiw_finalize_section_textblock"); ?>
				</div>
			</div>
			<div class="accordion-holder">
				<h3 class="title-block"><?php echo get_field("hiw_finalize_section_accordion_global_title"); ?></h3>
				<div class="accordion-default accordion-default-white js-accordion-collapsible">
					
					<?php
                    
					$rows = get_field('hiw_finalize_section_accordion_items');
                     if( have_rows('hiw_finalize_section_accordion_items') ):
        	while( have_rows('hiw_finalize_section_accordion_items') ) : the_row();
            	$sub_value1 = get_sub_field('fsai_title');
                $sub_value2 = get_sub_field('fsai_textblock');
							if( $rows ) 
							{
								//foreach( $rows as $row ) {
									?>
									<div class="accordion-item">
										<a href="#" class="accordion-opener js-opener"><?php echo $sub_value1; ?></a>
										<div class="accordion-holder js-slide">
											<div class="text-holder">
												<p><?php echo $sub_value2; ?></p>
											</div>
										</div>
									</div>
									<?php
								}
                                endwhile;
                                endif;
							//}
					?>	
				</div>
				<a href="<?php echo get_field("hiw_finalize_section_button_link"); ?>" class="link"><?php echo get_field("hiw_finalize_section_button_text"); ?></a>
			</div>
		</div>
	</div>
	</div>

	<div class="text-accordion-section" id="next">
		<div class="container">
		<h2 class="title-global-section"><?php echo get_field("hiw_next_section_global_title"); ?></h2>
		<div class="text-accordion-holder">
			<div class="text-holder">
				<div class="image-block">
					<picture>
						<source srcset="<?php echo get_field("hiw_next_section_image"); ?>" media="(min-width: 768px)">
						<source srcset="<?php echo get_field("hiw_next_section_image_mobile"); ?>">
						<img src="<?php echo get_field("hiw_next_section_image"); ?>" alt="next">
					</picture>
				</div>
				<h3 class="title-block"><?php echo get_field("hiw_next_section_title"); ?></h3>
				<div class="text-block">
				   <?php echo get_field("hiw_next_section_textblock"); ?>
				</div>
			</div>
			<div class="accordion-holder">
				<h3 class="title-block"><?php echo get_field("hiw_next_section_accordion_global_title"); ?></h3>
				<div class="accordion-default accordion-default-white js-accordion-collapsible">
					<?php
					$rows = get_field('hiw_next_section_accordion_items');
              if( have_rows('hiw_finalize_section_accordion_items') ):
                 while( have_rows('hiw_next_section_accordion_items') ) : the_row();
            	 $sub_value1 = get_sub_field('nsai_title');
                 $sub_value2 = get_sub_field('nsai_textblock');
						if( $rows ) 
						{
							//foreach( $rows as $row ) {
								?>
								<div class="accordion-item">
								<a href="#" class="accordion-opener js-opener"><?php echo $sub_value1; ?></a>
								<div class="accordion-holder js-slide">
									<div class="text-holder">
										<p><?php echo $sub_value2; ?></p>
									</div>
								</div>
							</div>
								<?php
							}
                            endwhile;
                            endif;
						//}
				?>		
				</div>
				<a href="<?php echo get_field("hiw_next_section_button_link"); ?>" class="link"><?php echo get_field("hiw_next_section_button_text"); ?></a>
			</div>
		</div>
	</div>
	</div>



	<div class="personal-teams-section">
		<div class="container">
		<h2 class="title-global-section text-center"><?php echo get_field( "hiw_personal_team_global_title" ); ?></h2>

			<div class="personal-teams-accordion js-personal-teams-accordion">
				<?php
					$rows = get_field('hiw_personal_team_items');
               if( have_rows('hiw_personal_team_items') ):
                 while( have_rows('hiw_personal_team_items') ) : the_row();
                     $sub_value1 = get_sub_field('pti_item_image');
                     $sub_value2 = get_sub_field('pti_item_textblock');
                     $sub_value3 = get_sub_field('pti_item_list');
                     $sub_value4 = get_sub_field('pti_item_button_text');
                     $sub_value5 = get_sub_field('pti_item_button_link');
					if( $rows ) 
					{
						//foreach( $rows as $row ) {
							?>
							
							<div class="personal-teams-item">
								<a class="personal-teams-opener js-opener" href="#">
									<span class="image-block">
										<img src="<?php echo $sub_value1; ?>" alt="image">
									</span>
									<span class="text-block"><?php echo $sub_value2; ?></span>
								</a>
								<div class="personal-teams-slide js-slide">
									<div class="personal-teams-list">
										<?php
										
											$item_list = trim($sub_value3);
											$item_list = explode("\n", $item_list);
											$item_list = array_filter($item_list, 'trim');
											/*
											foreach ($item_list as $line) {
												echo "<li>".$line."</li>";
											} 
											*/
											$items=count($item_list);
											
											$l=ceil($items/4);
											

											$x=0;
											for($i=1;$i<=4;$i++)
											{
												$k=$l;
												echo "<ul>";
												for($j=1;$j<=$k;$j++)
												{
													if($x<$items)
													{
														echo "<li>".$item_list[$x]."<li>";
													$x++;    
													}
													
												}
											   echo "</ul>";
											   echo "\n";
											}
											/*
											if($n%4!=0)
											{   
												$c=$n%4;
												echo "<ul>";
												for($i=0;$i<=$c;$i++)
													{
														echo "<li>".$item_list[$x]."<li>";
														$x++;
													}    
													 echo "</ul>";
											   echo "\n";
											}
																												
										*/
										
										?>
									</div>
									<a href="<?php echo $sub_value5; ?>" class="btn no-animate"><?php echo $sub_value4; ?></a>
								</div>
							</div>

								<?php
						}
                        endwhile;
                        endif;
					//}
				?>
				

			<div class="personal-teams-footer text-center">
				<div class="text-block"><?php echo get_field( "hiw_personal_team_footer_text" ); ?></div>
				<a href="<?php echo get_field( "hiw_personal_team_footer_button_link" ); ?>" class="btn btn-green no-animate"><?php echo get_field( "hiw_personal_team_footer_button_text" ); ?></a>
			</div>
		</div>
	</div>
	</div>
	
                
	<div class="integrations-section slider-image-section slider-animate-image-section custom-section">
		<div class="container">
        <div class="slider-image js-slider">
            
            <?php 
            
            if( have_rows('hiw_integrations') ):
                 while( have_rows('hiw_integrations') ) : the_row();
                    $sub_value1 = get_sub_field('hiw_integration_banner_image');
                    
                ?>
               
        									
	       <div class="slide">
                <div class="text-holder">
                    <div class="slide-text-header">
                        <h2 class="title-global-section"><?php echo get_field("hiw_integrations_section_title");?></h2>
                    </div>
                    <div class="slide-text-body">
                        <div class="image-holder-inner zapier">
                            <picture>
                                <source srcset="<?php echo get_field("hiw_integration_zapier_logo");?>" media="(min-width: 768px)">
                                <source srcset="<?php echo get_field("hiw_integration_zapier_logo");?>">
                                <img src="<?php echo get_field("hiw_integration_zapier_logo");?>" alt="Zapier">
                            </picture>
                        </div>
                        <div class="text-block">
                            <p><?php echo get_field("hiw_integration_section_sub_title");?></p>
                        </div>
                        <ul class="list-block dots-green">
                            <li>
                                <h3 class=""><?php echo get_field("hiw_integrations_feature_1");?></h3>
                                <p><?php echo get_field("hiw_integrations_feature_description_1");?></p>
                            </li>
                            <li>
                                <h3 class=""><?php echo get_field("hiw_integrations_feature_2");?></h3>
                                <p><?php echo get_field("hiw_integrations_feature_description_2");?></p>
                            </li>
                            <li>
                                <h3 class=""><?php echo get_field("hiw_integrations_feature_3");?></h3>
                                <p><?php echo get_field("hiw_integrations_feature_description_3");?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="image-holder">
                    <ul class="image-list js-hover-image">
                        <li class="image-item is-active">
                        
                            <picture>
                               <source srcset="<?php echo $sub_value1; ?>" media="(min-width: 768px)">
                               <source srcset="<?php echo $sub_value1; ?>">
                                    <img src="<?php echo $sub_value1; ?>" alt="Integration">
                            </picture>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
             endwhile; 
        endif;
            ?>
        </div>
    </div>
    </div>
</div>
<?php get_footer(); ?>