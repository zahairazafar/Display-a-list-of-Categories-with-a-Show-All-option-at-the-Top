
<div class="display-cat">
    <div class="inner-container">
        <ul>
            <?php 
            // Display a list of categories with specific arguments
            wp_list_categories( array(
              // Order categories by their ID
                'orderby'            => 'id', 
              // Hide the post count next to each category
                'show_count'         => false, 
              // Include an option to show all categories
                'show_option_all'    => 'Show All', 
              // Remove the default list item title
                'title_li'           => false 
            ) ); 
            ?>
        </ul>
    </div>
</div>
