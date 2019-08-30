<?php 

// Lets write the Design Settings Variable which we will be supporting
// wff_author_text_size
// wff_author_text_color
// wff_img_border
// Build the general settings array 





if($_POST)
	 {
	     // Using isset to prevent undefined index error
	     
	     if(isset($_POST['wff_general_settings_fb_feed_field'])) {
			$nonce = wp_verify_nonce($_POST['wff_general_settings_fb_feed_field'], 'wff_general_settings_fb_feed_action');
	     }
		
		if(isset($_POST['wff_design_settings_fb_feed_field'])) {
			$nonce = wp_verify_nonce($_POST['wff_design_settings_fb_feed_field'], 'wff_design_settings_fb_feed_action');
		}
		
		if(isset($_POST['wff_text_customization_fb_feed_field'])) {
			$nonce  = wp_verify_nonce($_POST['wff_text_customization_fb_feed_field'], 'wff_text_customization_fb_feed_action');
		}
		
		if(isset($_POST['wff_custom_css_js_fb_feed_field'])) {
		
			$nonce  = wp_verify_nonce($_POST['wff_custom_css_js_fb_feed_field'], 'wff_custom_css_js_fb_feed_action');
		}
			
	// nonce can have the value 1 or 2 depending on the age. So we proceed forward if nonce is 1 or 2
			
			switch ($nonce)
			{
			    
			    case 1:
                break;
                
                case 2:
                break;
                
                default:
                exit( 'Nonce is invalid' );
                
			    
			    
			}
			
		
	 }




$default_design_data = array (
    
    'wff_author_text_size' => 'inherit',
    'wff_author_text_color' => '',
	'wff_line_height' => 'inherit',
    'wff_img_border' => 'none',
	'wff_feed_seprator' => 'none', 
	'wff_char_limit' => '',
	'wff_text_color' => '',
	'wff_post_back_color' => '',
	'wff_text_size' => 'inherit',
	'wff_text_weight' => 'inherit',
	'wff_text_align' => 'inherit',
	
	'wff_custom_css_data' => '',
	'wff_custom_js_data' => '',
	
	
	'wff_page_link_text' => __('View on Facebook','facebook-feed'), 
	'wff_read_more_text' => __('Read More','facebook-feed'),
	'wff_read_less_text' => __('Read Less','facebook-feed'),
	); 
        
        // If there is no design option setting in DB then assign default data to design option array..
        $design_options_array = wp_parse_args(get_option('wff_design_settings'), $default_design_data);
        
   
   $default_general_data = array (
    
    'wff_num_posts' => '',
	'wff_link_target' => 1,
	'wff_cache_time' => ''
        ); 
   $general_options_array = wp_parse_args(get_option('wff_general_settings'), $default_general_data);
   
if(isset($_POST['submit_general_settings_tab'])){
	delete_transient('fb_feed_query');
	update_option('wff_page_id',esc_attr($_POST['wff_page_id']));
	update_option('wff_author_date',esc_attr($_POST['wff_author_date']));    
	
	$general_options_array['wff_num_posts'] = esc_attr($_POST['wff_num_posts']);
	$general_options_array['wff_link_target'] = isset($_POST['wff_link_target']);
	$general_options_array['wff_cache_time'] = $_POST['wff_cache_time'];
	
	update_option ('wff_general_settings', $general_options_array );
	
}
if(isset($_POST['submit_design_tab'])){

	$design_options_array['wff_author_text_size'] = esc_attr($_POST['wff_author_text_size']);
	$design_options_array['wff_author_text_color'] = esc_attr($_POST['wff_author_text_color']);
	$design_options_array['wff_line_height'] = esc_attr($_POST['wff_line_height']);
	$design_options_array['wff_img_border'] = esc_attr($_POST['wff_img_border']);
	$design_options_array['wff_feed_seprator'] = esc_attr($_POST['wff_feed_seprator']);
	
	$design_options_array['wff_char_limit'] = esc_attr($_POST['wff_char_limit']);
	$design_options_array['wff_post_back_color'] = esc_attr($_POST['wff_post_back_color']);
	$design_options_array['wff_text_color'] = esc_attr($_POST['wff_text_color']);
	$design_options_array['wff_text_size'] = esc_attr($_POST['wff_text_size']);
	$design_options_array['wff_text_weight'] = esc_attr($_POST['wff_text_weight']);
	$design_options_array['wff_text_align'] = esc_attr($_POST['wff_text_align']);
	
	update_option('wff_design_settings', $design_options_array);
}
	
	if(isset($_POST['submit_custom_text_tab'])){

	$design_options_array['wff_page_link_text'] = esc_attr($_POST['wff_page_link_text']);
	$design_options_array['wff_read_more_text'] = esc_attr($_POST['wff_read_more_text']);
	$design_options_array['wff_read_less_text'] = esc_attr($_POST['wff_read_less_text']);
	
	update_option('wff_design_settings', $design_options_array);
}
	if(isset($_POST['submit_custom_tab'])){
	
	$design_options_array['wff_custom_css_data'] = esc_attr($_POST['wff_custom_css_data']);
	$design_options_array['wff_custom_js_data'] = stripslashes($_POST['wff_custom_js_data']);
	
	update_option('wff_design_settings', $design_options_array);
	
}
?>

<div class="wrap settings-wrap" id="page-settings">
    <h2><?php _e('Settings','facebook-feed') ?></h2>
    <div id="option-tree-header-wrap">
        <ul id="option-tree-header">
            <li id=""><a href="" target="_blank"></a>
            </li>
            <li id="option-tree-version"><span><?php _e('FaceBook Feed Plugin','facebook-feed') ?> </span>
            </li>
        </ul>
    </div>
    <div id="option-tree-settings-api">
    <div id="option-tree-sub-header"></div>
        <div class = "ui-tabs ui-widget ui-widget-content ui-corner-all">
           
          <!-- Tabs Begin-->
            <ul >
                <li id="tab_create_setting"><a href="#section_general"><?php _e('General Settings','facebook-feed') ?></a>
                </li>
                <li id="tab_import"><a href="#section_design" ><?php _e('Design Customization','facebook-feed') ?></a>
                </li>
				 <li id="tab_export"><a href="#section_custom"><?php _e('Text Customization','facebook-feed') ?></a>
                </li>
				<li id="tab_export"><a href="#section_custom_css"><?php _e('Custom Script','facebook-feed') ?></a>
                </li>
                <li id="tab_shortcode_atts" ><a href="#shortcode_atts"><?php _e('Shortcode Attributes','facebook-feed') ?></a>
                </li>
              <!--  <li id="tab_layouts" ><a href="#section_roadmap">RoadMap</a>
                </li> -->
                
                <li id="tab_faq" ><a href="#section_faq"><?php _e('FAQ','facebook-feed') ?></a>
                </li>
                <li id="tab_support" ><a href="#section_support"><?php _e('Support','facebook-feed') ?></a>
                </li>
                <li id="tab_support" ><a href="#get_beta_version"><?php _e('Get the Premium Version','facebook-feed') ?></a>
                </li>
            </ul>
            <!-- Tabs End-->
            
            
    <div id="poststuff" class="metabox-holder">
        <div id="post-body">
			<div id="post-body-content">
                <div id="section_general" class = "postbox">
                    <div class="inside">
                        <div id="setting_theme_options_ui_text" class="format-settings">
                            <div class="format-setting-wrap">
                    
    <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">            
    <form method="post" action="#section_general">
	<div class="format-setting-label">
		<h3 class="label"><?php _e('General Settings','facebook-feed') ?></h3>
	</div>
					
    <table class="form-table table_custom">
        <tr valign="top">
        <th scope="row"><?php _e('Your Facebook Page ID','facebook-feed');?></th>
        <td><input type="text" name="wff_page_id" value="<?php echo esc_attr( get_option('wff_page_id') ); ?>" />
        <p class=""><?php _e('This is the ID of your Facebook page. Example Webriti, Adidas etc.', 'facebook-feed') ?></p>
        
        </td>
        </tr> 
		
		<tr valign="top">
        <th scope="row"><?php _e('Date format','facebook-feed');?></th>
        <td><select id="wff_author_date" name="wff_author_date">
		<?php $date_format = array(
		'default'=>'day/time ago',
		'F j, Y'=>'January 1, 2015',
		'd-m,Y'=>'01-01,2015',
		'j/M/Y'=>'1/Jan/2015',
		'M d,Y'=>'Jan 01,2015'); ?>
		<?php foreach($date_format as $key => $value) { ?>
		<option value="<?php echo $key; ?>" <?php if (get_option('wff_author_date')==$key) { echo 'selected="selected"'; } ?>  >
		<?php _e($value,'facebook-feed') ?> </option>
		<?php } ?>
		</select>
		<p class=""><?php _e('Select date format. For eg January 1, 2015','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Number of posts to display','facebook-feed');?></th>
        <td><input type = "text" id="wff_num_posts" name="wff_num_posts" value = "<?php echo $general_options_array['wff_num_posts'];?>">
		
		<p class=""><?php _e('Enter the number of posts to fetch and display in your feed. eg : 10','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Cache duration','facebook-feed') ?></th>
        <td>
        <select name="wff_cache_time">
        <option value="none" <?php if($general_options_array['wff_cache_time'] == "none") echo 'selected="selected"' ?> ><?php echo 'none'; ?></option>
        <option value="1" <?php if($general_options_array['wff_cache_time'] == "1") echo 'selected="selected"' ?> ><?php echo '1 min'; ?></option>
        <option value="5" <?php if($general_options_array['wff_cache_time'] == "5") echo 'selected="selected"' ?> ><?php echo '5 min'; ?></option>
		<option value="10" <?php if($general_options_array['wff_cache_time'] == "10") echo 'selected="selected"' ?> ><?php echo '10 min';?> </option>
		<option value="20" <?php if($general_options_array['wff_cache_time'] == "20") echo 'selected="selected"' ?> ><?php echo '20 min';?></option>
        <option value="30" <?php if($general_options_array['wff_cache_time'] == "30") echo 'selected="selected"' ?> ><?php echo '30 min';?></option>
        <option value="45" <?php if($general_options_array['wff_cache_time'] == "45") echo 'selected="selected"' ?> ><?php echo '45 min';?></option>
        <option value="60" <?php if($general_options_array['wff_cache_time'] == "60") echo 'selected="selected"' ?> ><?php echo '1 Hrs.'; ?></option>
        <option value="120" <?php if($general_options_array['wff_cache_time'] == "120") echo 'selected="selected"' ?> ><?php echo '2 Hrs.'; ?></option>
        <option value="180" <?php if($general_options_array['wff_cache_time'] == "180") echo 'selected="selected"' ?> ><?php echo '3 Hrs.'; ?></option>
        <option value="240" <?php if($general_options_array['wff_cache_time'] == "240") echo 'selected="selected"' ?> ><?php echo '4 Hrs.'; ?></option>
        <option value="300" <?php if($general_options_array['wff_cache_time'] == "300") echo 'selected="selected"' ?> ><?php echo '5 Hrs.'; ?></option>
        <option value="360" <?php if($general_options_array['wff_cache_time'] == "360") echo 'selected="selected"' ?> ><?php echo '6 Hrs.'; ?></option>
        <option value="420" <?php if($general_options_array['wff_cache_time'] == "420") echo 'selected="selected"' ?> ><?php echo '7 Hrs.'; ?></option>
        <option value="480" <?php if($general_options_array['wff_cache_time'] == "480") echo 'selected="selected"' ?> ><?php echo '8 Hrs.'; ?></option>
        <option value="540" <?php if($general_options_array['wff_cache_time'] == "540") echo 'selected="selected"' ?> ><?php echo '9 Hrs.'; ?></option>
        <option value="600" <?php if($general_options_array['wff_cache_time'] == "600") echo 'selected="selected"' ?> ><?php echo '10 Hrs.'; ?></option>
        <option value="660" <?php if($general_options_array['wff_cache_time'] == "660") echo 'selected="selected"' ?> ><?php echo '11 Hrs.'; ?></option>
        <option value="720" <?php if($general_options_array['wff_cache_time'] == "720") echo 'selected="selected"' ?> ><?php echo '12 Hrs.'; ?></option>
        </select>
        <p class=""><?php _e('The system will store the results in cache for the specified duration. This will speed up the page load. Select none to disable cache.','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Open link in new tab','facebook-feed');?></th>
        <td>
        <input type="checkbox" name="wff_link_target" value=1 <?php if($general_options_array['wff_link_target']==1) echo 'checked="checked" '; ?> ><p><?php _e('Checked it to open any link in new tab','facebook-feed') ?></p>
		
		</td>
        </tr>
		
		</table>
		
		<table class="form-table ">  
		<tr valign="top">
        <td><input type="submit" name="submit_general_settings_tab" value="<?php _e('Save Changes','facebook-feed'); ?>" class="button button-primary"></td>
        </tr>
		</table>
		<?php wp_nonce_field('wff_general_settings_fb_feed_action','wff_general_settings_fb_feed_field'); ?>
			
			</form>
                                        
					</div>
				</div>
			</div>
         </div>
        </div>
    </div>
    
	<div id="section_design" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
                    
    <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
		<form method = "post" action="#section_design">
		<div class="format-setting-label">
            <h3 class="label"><?php _e('Author Text Customization','facebook-feed') ?></h3>
		</div>	
		
        <table class="form-table table_custom">
        <tbody>
            
        <tr valign="top">
        <th scope="row"><?php _e('Text color','facebook-feed') ?></th>
        <td><input type="text" name="wff_author_text_color" value="<?php echo $design_options_array['wff_author_text_color'] ; ?>" class = "wff-color-picker-panel">
        <p class=""><?php _e('Choose color of author name','facebook-feed') ?></p>
        </td>
        </tr> 
        
        <tr valign="top">
        <th scope="row"><?php _e('Author text size','facebook-feed') ?></th>
        <td>
        <select name="wff_author_text_size">
        <option value="inherit" <?php if($design_options_array['wff_author_text_size'] == "inherit") echo 'selected="selected"' ?> ><?php echo 'Inherit'; ?></option>
        <option value="10" <?php if($design_options_array['wff_author_text_size'] == "10") echo 'selected="selected"' ?> ><?php echo '10px'; ?></option>
        <option value="11" <?php if($design_options_array['wff_author_text_size'] == "11") echo 'selected="selected"' ?> ><?php echo '11px'; ?></option>
		<option value="12" <?php if($design_options_array['wff_author_text_size'] == "12") echo 'selected="selected"' ?> ><?php echo '12px'; ?></option>
		<option value="13" <?php if($design_options_array['wff_author_text_size'] == "13") echo 'selected="selected"' ?> ><?php echo '13px'; ?></option>
        <option value="14" <?php if($design_options_array['wff_author_text_size'] == "14") echo 'selected="selected"' ?> ><?php echo '14px'; ?></option>
        <option value="16" <?php if($design_options_array['wff_author_text_size'] == "16") echo 'selected="selected"' ?> ><?php echo '16px'; ?></option>
        <option value="18" <?php if($design_options_array['wff_author_text_size'] == "18") echo 'selected="selected"' ?> ><?php echo '18px'; ?></option>
        <option value="20" <?php if($design_options_array['wff_author_text_size'] == "20") echo 'selected="selected"' ?> ><?php echo '20px'; ?></option>
        <option value="24" <?php if($design_options_array['wff_author_text_size'] == "24") echo 'selected="selected"' ?> ><?php echo '24px'; ?></option>
        <option value="28" <?php if($design_options_array['wff_author_text_size'] == "28") echo 'selected="selected"' ?> ><?php echo '28px'; ?></option>
        <option value="32" <?php if($design_options_array['wff_author_text_size'] == "32") echo 'selected="selected"' ?> ><?php echo '32px'; ?></option>
        <option value="36" <?php if($design_options_array['wff_author_text_size'] == "36") echo 'selected="selected"' ?> ><?php echo '36px'; ?></option>
        <option value="42" <?php if($design_options_array['wff_author_text_size'] == "42") echo 'selected="selected"' ?> ><?php echo '42px'; ?></option>
        <option value="48" <?php if($design_options_array['wff_author_text_size'] == "48") echo 'selected="selected"' ?> ><?php echo '48px'; ?></option>
        <option value="54" <?php if($design_options_array['wff_author_text_size'] == "54") echo 'selected="selected"' ?> ><?php echo '54px'; ?></option>
        <option value="60" <?php if($design_options_array['wff_author_text_size'] == "60") echo 'selected="selected"' ?> ><?php echo '60px'; ?></option>
        <option value="64" <?php if($design_options_array['wff_author_text_size'] == "64") echo 'selected="selected"' ?> ><?php echo '64px'; ?></option>
        <option value="66" <?php if($design_options_array['wff_author_text_size'] == "66") echo 'selected="selected"' ?> ><?php echo '66px'; ?></option>
        <option value="68" <?php if($design_options_array['wff_author_text_size'] == "68") echo 'selected="selected"' ?> ><?php echo '68px'; ?></option>
        </select>
		
		
        <p class=""><?php _e('Select author text size','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Feed line height','facebook-feed') ?></th>
        <td>
        <select name="wff_line_height">
        <option value="inherit" <?php if($design_options_array['wff_line_height'] == "inherit") echo 'selected="selected"' ?> ><?php echo 'Inherit'; ?></option>
		<option value="13" <?php if($design_options_array['wff_line_height'] == "13") echo 'selected="selected"' ?> ><?php echo '13px'; ?></option>
        <option value="14" <?php if($design_options_array['wff_line_height'] == "14") echo 'selected="selected"' ?> ><?php echo '14px'; ?></option>
        <option value="16" <?php if($design_options_array['wff_line_height'] == "16") echo 'selected="selected"' ?> ><?php echo '16px'; ?></option>
        <option value="18" <?php if($design_options_array['wff_line_height'] == "18") echo 'selected="selected"' ?> ><?php echo '18px'; ?></option>
        <option value="20" <?php if($design_options_array['wff_line_height'] == "20") echo 'selected="selected"' ?> ><?php echo '20px'; ?></option>
        <option value="24" <?php if($design_options_array['wff_line_height'] == "24") echo 'selected="selected"' ?> ><?php echo '24px'; ?></option>
        <option value="28" <?php if($design_options_array['wff_line_height'] == "28") echo 'selected="selected"' ?> ><?php echo '28px'; ?></option>
        <option value="32" <?php if($design_options_array['wff_line_height'] == "32") echo 'selected="selected"' ?> ><?php echo '32px'; ?></option>
        <option value="36" <?php if($design_options_array['wff_line_height'] == "36") echo 'selected="selected"' ?> ><?php echo '36px'; ?></option>
        <option value="42" <?php if($design_options_array['wff_line_height'] == "42") echo 'selected="selected"' ?> ><?php echo '42px'; ?></option>
        <option value="48" <?php if($design_options_array['wff_line_height'] == "48") echo 'selected="selected"' ?> ><?php echo '48px'; ?></option>
        <option value="54" <?php if($design_options_array['wff_line_height'] == "54") echo 'selected="selected"' ?> ><?php echo '54px'; ?></option>
        <option value="60" <?php if($design_options_array['wff_line_height'] == "60") echo 'selected="selected"' ?> ><?php echo '60px'; ?></option>
        <option value="64" <?php if($design_options_array['wff_line_height'] == "64") echo 'selected="selected"' ?> ><?php echo '64px'; ?></option>
        <option value="66" <?php if($design_options_array['wff_line_height'] == "66") echo 'selected="selected"' ?> ><?php echo '66px'; ?></option>
        <option value="68" <?php if($design_options_array['wff_line_height'] == "68") echo 'selected="selected"' ?> ><?php echo '68px'; ?></option>
		
		
		
        </select>
        <p class=""><?php _e('Select line height','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Image border','facebook-feed') ?></th>
        <td>
        <select name="wff_img_border">
        <option value="none" <?php if($design_options_array['wff_img_border'] == "none") echo 'selected="selected"' ?> >none</option>
        <?php for($w=1;$w<7;$w++) { ?>
		<option value="<?php echo $w; ?>" <?php if($design_options_array['wff_img_border'] == $w) echo 'selected="selected"' ?> ><?php _e($w.'px','facebook-feed');?></option>
        <?php } ?>
		</select>
        <p class=""><?php _e('Select image border width and image border color will be same as the text color','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Feed seprator','facebook-feed') ?></th>
        <td>
        <select name="wff_feed_seprator">
        <option value="none" <?php if($design_options_array['wff_feed_seprator'] == "none") echo 'selected="selected"' ?> >none</option>
        <?php for($w=1;$w<7;$w++) { ?>
		<option value="<?php echo $w; ?>" <?php if($design_options_array['wff_feed_seprator'] == $w) echo 'selected="selected"' ?> ><?php _e($w.'px','facebook-feed');?></option>
        <?php } ?>
		</select>
        <p class=""><?php echo sprintf(__('Select feed seprator width. Select none to hide the separator. <br>The color will be same as img border','facebook-feed')); ?></p>
        </td>
        </tr>
		
		</table>
		
		<div class="format-setting-label">
            <h3 class="label"><?php _e('Post Customization','facebook-feed') ?></h3>
        </div>
	
		<table class="form-table table_custom">
        <tbody>
            
        <tr valign="top">
        <th scope="row"><?php _e('Character limit','facebook-feed') ?></th>
        <td><input type="text" name="wff_char_limit" value="<?php echo $design_options_array['wff_char_limit']; ?>" >
        <p class=""><?php _e('Choose post character limit. for eg. 20, 30 etc.  A read more link will be added if posts have more characters. Leave blank to disable post character limiting','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Text color','facebook-feed') ?></th>
        <td><input type="text" name="wff_text_color" value="<?php echo $design_options_array['wff_text_color'] ; ?>" class = "wff-color-picker-panel">
        <p class=""><?php _e('Choose your post text color','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Background color','facebook-feed') ?></th>
        <td><input type="text" name="wff_post_back_color" value="<?php echo $design_options_array['wff_post_back_color'] ; ?>" class = "wff-color-picker-panel">
        <p class=""><?php _e('Choose your post background color','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Text size','facebook-feed') ?></th>
        <td>
        <select name="wff_text_size">
        <option value="inherit" <?php if($design_options_array['wff_text_size'] == "inherit") echo 'selected="selected"' ?> ><?php echo 'Inherit'; ?></option>
        <option value="10" <?php if($design_options_array['wff_text_size'] == "10") echo 'selected="selected"' ?> ><?php echo '10px'; ?></option>
        <option value="11" <?php if($design_options_array['wff_text_size'] == "11") echo 'selected="selected"' ?> ><?php echo '11px'; ?></option>
		<option value="12" <?php if($design_options_array['wff_text_size'] == "12") echo 'selected="selected"' ?> ><?php echo '12px'; ?></option>
		<option value="13" <?php if($design_options_array['wff_text_size'] == "13") echo 'selected="selected"' ?> ><?php echo '13px'; ?></option>
        <option value="14" <?php if($design_options_array['wff_text_size'] == "14") echo 'selected="selected"' ?> ><?php echo '14px'; ?></option>
        <option value="16" <?php if($design_options_array['wff_text_size'] == "16") echo 'selected="selected"' ?> ><?php echo '16px'; ?></option>
        <option value="18" <?php if($design_options_array['wff_text_size'] == "18") echo 'selected="selected"' ?> ><?php echo '18px'; ?></option>
        <option value="20" <?php if($design_options_array['wff_text_size'] == "20") echo 'selected="selected"' ?> ><?php echo '20px'; ?></option>
        <option value="24" <?php if($design_options_array['wff_text_size'] == "24") echo 'selected="selected"' ?> ><?php echo '24px'; ?></option>
        <option value="28" <?php if($design_options_array['wff_text_size'] == "28") echo 'selected="selected"' ?> ><?php echo '28px'; ?></option>
        <option value="32" <?php if($design_options_array['wff_text_size'] == "32") echo 'selected="selected"' ?> ><?php echo '32px'; ?></option>
        <option value="36" <?php if($design_options_array['wff_text_size'] == "36") echo 'selected="selected"' ?> ><?php echo '36px'; ?></option>
        <option value="42" <?php if($design_options_array['wff_text_size'] == "42") echo 'selected="selected"' ?> ><?php echo '42px'; ?></option>
        <option value="48" <?php if($design_options_array['wff_text_size'] == "48") echo 'selected="selected"' ?> ><?php echo '48px'; ?></option>
        <option value="54" <?php if($design_options_array['wff_text_size'] == "54") echo 'selected="selected"' ?> ><?php echo '54px'; ?></option>
        <option value="60" <?php if($design_options_array['wff_text_size'] == "60") echo 'selected="selected"' ?> ><?php echo '60px'; ?></option>
        <option value="64" <?php if($design_options_array['wff_text_size'] == "64") echo 'selected="selected"' ?> ><?php echo '64px'; ?></option>
        <option value="66" <?php if($design_options_array['wff_text_size'] == "66") echo 'selected="selected"' ?> ><?php echo '66px'; ?></option>
        <option value="68" <?php if($design_options_array['wff_text_size'] == "68") echo 'selected="selected"' ?> ><?php echo '68px'; ?></option>
        </select>
        <p class=""><?php _e('Select post text size. for eg. 14px','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Font weight','facebook-feed') ?></th>
        <td>
        <select name="wff_text_weight">
        <option value="inherit" <?php if($design_options_array['wff_text_weight'] == "inherit") echo 'selected="selected"' ?> ><?php _e('Inherit','facebook-feed'); ?></option>
		<option value="normal" <?php if($design_options_array['wff_text_weight'] == "normal") echo 'selected="selected"' ?> ><?php _e('Normal','facebook-feed'); ?></option>
		<option value="bold" <?php if($design_options_array['wff_text_weight'] == "bold") echo 'selected="selected"' ?> ><?php _e('Bold','facebook-feed'); ?></option>
		</select>
         <p class=""><?php _e('Select post text weight. for eg. "bold"','facebook-feed') ?></p>
        </td>
        </tr>
		
		<tr valign="top">
        <th scope="row"><?php _e('Text alignment','facebook-feed') ?></th>
        <td>
        <select name="wff_text_align">
        <option value="inherit" <?php if($design_options_array['wff_text_align'] == "inherit") echo 'selected="selected"' ?> ><?php _e('Inherit','facebook-feed'); ?></option>
		<option value="left" <?php if($design_options_array['wff_text_align'] == "left") echo 'selected="selected"' ?> ><?php _e('Left','facebook-feed'); ?></option>
		<option value="center" <?php if($design_options_array['wff_text_align'] == "center") echo 'selected="selected"' ?> ><?php _e('Center','facebook-feed'); ?></option>
		<option value="right" <?php if($design_options_array['wff_text_align'] == "right") echo 'selected="selected"' ?> ><?php _e('Right','facebook-feed'); ?></option>
		<option value="justify" <?php if($design_options_array['wff_text_align'] == "justify") echo 'selected="selected"' ?> ><?php _e('Justify','facebook-feed'); ?></option>
		</select>
        <p class=""><?php _e("Select post text alignment. for eg. 'left'","facebook-feed") ?></p>
        </td>
        </tr>
				
		</table>
	
		<table class="form-table ">  
		<tr valign="top">
        <td><input type="submit" name="submit_design_tab" value="<?php _e('Save Changes','facebook-feed'); ?>" class="button button-primary"></td>
        </tr>
		</table> 
			<?php wp_nonce_field('wff_design_settings_fb_feed_action','wff_design_settings_fb_feed_field'); ?>
		</form>
                                              
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
	<div id="section_custom" class = "postbox" >
        <div class="inside">
            <div id="setting_export_settings_file_text" class="format-settings">
                <div class="format-setting-wrap">
        <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
		<form method = "post" action="#section_custom">
        <div class="format-setting-label">
            <h3 class="label"><?php _e('Feed Text Customization','facebook-feed') ?></h3>
		</div>                                    
        <table id="menu-locations-table" class="widefat fixed">
		<thead>
		<tr>
		<th class="manage-column column-locations" scope="col"><strong><?php _e('Default text','facebook-feed') ?></strong></th>
		<th class="manage-column column-menus" scope="col"><strong><?php _e('Custom text','facebook-feed') ?></strong></th>
		</tr>
		</thead>
		<tbody class="menu-locations">
		<tr id="menu-locations-row">
		<td class="menu-location-title">
		<strong><?php _e('View on Facebook','facebook-feed') ?></strong>
		</td>
		<td class="menu-location-menus">
		<input type="text" name="wff_page_link_text" value="<?php echo esc_attr($design_options_array['wff_page_link_text']); ?>" />
		<span class="locations-add-menu-link"><a><?php _e('This text is displayed after every post.','facebook-feed') ?></a></span>
		</td>
		</tr>
		
		<tr id="menu-locations-row">
		<td class="menu-location-title">
		<strong><?php _e('Read more text','facebook-feed') ?></strong>
		</td>
		<td class="menu-location-menus">
		<input type="text" name="wff_read_more_text" value="<?php echo esc_attr($design_options_array['wff_read_more_text']); ?>" />
		<span class="locations-add-menu-link"><a><?php _e('This text is used to display the complete post.','facebook-feed') ?></a></span>
		</td>
		</tr>
		
		<tr id="menu-locations-row">
		<td class="menu-location-title">
		<strong><?php _e('Read less text','facebook-feed') ?></strong>
		</td>
		<td class="menu-location-menus">
		<input type="text" name="wff_read_less_text" value="<?php echo esc_attr($design_options_array['wff_read_less_text']); ?>" />
		<span class="locations-add-menu-link"><a><?php _e('This text is used to limit the post text.','facebook-feed') ?></a></span>
		</td>
		</tr>
		
		
		</tbody>
        </table> 
		
    <table class="form-table ">  
		<tr valign="top">
        <td><input type="submit" name="submit_custom_text_tab" value="<?php _e('Save Changes','facebook-feed'); ?>" class="button button-primary"></td>
        </tr>
    </table>    
		  <?php wp_nonce_field('wff_text_customization_fb_feed_action','wff_text_customization_fb_feed_field'); ?>
   </form>
                                              
						</div>
					</div>			
					
				</div>
            </div>
        </div>
    </div>
	
	<div id="section_custom_css" class = "postbox" >
        <div class="inside">
            <div id="setting_export_settings_file_text" class="format-settings">
                <div class="format-setting-wrap">
					<div class = "format-setting type-textarea has-desc">
						<div class = "format-setting-inner">
		
	<form method = "post" action="#section_custom_css">
	<div class="format-setting-label">
		<h3 class="label"><?php _e('Custom CSS','facebook-feed') ?></h3>
	</div>
	<table class="form-table table_custom" >
    <tbody>
		<tr valign="top">
        <td>
        <textarea name="wff_custom_css_data" id="wff_custom_css_data" style="width: 70%;" rows="7"><?php echo esc_attr($design_options_array['wff_custom_css_data']); ?></textarea>
        <p class=""><?php echo sprintf(__("<strong>Note:</strong> Only enter CSS without style tag.","facebook-feed")); ?></p>
		</td>
		</tr>
	</tbody></table> 
	
	<div class="format-setting-label">
			<h3 class="label"><?php _e('Custom JS','facebook-feed') ?></h3>
	</div>
	<table class="form-table table_custom" >
    <tbody>
		<tr valign="top">
        <td>
        <textarea name="wff_custom_js_data" id="wff_custom_js_data" style="width: 70%;" rows="7"><?php echo stripslashes($design_options_array['wff_custom_js_data']); ?></textarea>
        <p class=""><?php echo sprintf(__("<strong>Note:</strong> Enter JS without script tag.","facebook-feed")); ?></p>
		</td>
		</tr>
	</tbody></table> 
	
	<table class="form-table" >
	<tbody>
		<tr valign="top">
		<td><input type="submit" name="submit_custom_tab" value="<?php _e('Save Changes','facebook-feed'); ?>" class="button button-primary"></td>
		</tr>
	</tbody></table>  
	<?php wp_nonce_field('wff_custom_css_js_fb_feed_action','wff_custom_css_js_fb_feed_field'); ?>
    </form>		
				  </div>
               </div>
		    </div>
          </div>
	   </div>
	</div>
	
	<div id="shortcode_atts" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
    <form method = "post" action="#shortcode_atts">
		<div class="format-setting-label">
			<h3 class="label"><?php _e('Shortcode Attributes','facebook-feed') ?></h3>
		</div>
    </form>
	<p><strong><?php _e('How to use:','facebook-feed') ?></strong> [facebook-feed page_id='testing917' post_limit='8']</p>
	<p class="description"><?php echo sprintf(__('<strong>Note:</strong> All the shortcode attributes that are used for size having the unit in a pixel.','facebook-feed')); ?></p>
	<table id="menu-locations-table" class="widefat fixed">
		<thead>
		<tr>
		<th class="wff-att-name" scope="col"><?php _e('Shortcode Attribute','facebook-feed') ?></th>
		<th class="wff-att-name" scope="col"><?php _e('Value (for Eg)','facebook-feed') ?></th>
		<th class="wff-att-uses" scope="col"><?php _e('Uses','facebook-feed') ?></th>
		</tr>
		</thead>
		<tbody>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'page_id'; ?></td>
			<td class="wff-att-name"><?php echo 'testing917'; ?></td>
			<td class="wff-att-uses"><?php _e('This is Facebook page id that you want to display on page/posts.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'post_limit'; ?></td>
			<td class="wff-att-name"><?php echo '12'; ?></td>
			<td class="wff-att-uses"><?php _e('No. of feed that you want to display for Facebook page.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'link_target'; ?></td>
			<td class="wff-att-name"><?php echo '1 or 0'; ?></td>
			<td class="wff-att-uses"><?php _e('This is use for browsing the URL either in the same tab or new tab. Use 1 for new tab otherwise 0.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'author_date_format'; ?></td>
			<td class="wff-att-name"><?php echo 'F j, Y'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__("Format of date that you want to display on Facebook page feed. In this case date will look <strong>January 1, 2015</strong>.<a href='http://php.net/manual/en/datetime.formats.date.php' target='_blank'><strong> link</strong></a> to get different format of date.","facebook-feed")); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'author_text_size'; ?></td>
			<td class="wff-att-name"><?php echo '12'; ?></td>
			<td class="wff-att-uses"><?php _e('Use for set Facebook page title size.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'author_text_color'; ?></td>
			<td class="wff-att-name"><?php echo '#ff0000 or Red'; ?></td>
			<td class="wff-att-uses"><?php _e('Use for display Facebook page title color.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'author_img_border'; ?></td>
			<td class="wff-att-name"><?php echo '1'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('To display border for Facebook page image otherwise use <strong>none</strong>.','facebook-feed')); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'feed_seprator'; ?></td>
			<td class="wff-att-name"><?php echo '2'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('Line to differentiate among feeds. Use <strong>none</strong> to hide the border.','facebook-feed')); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'media_border'; ?></td>
			<td class="wff-att-name"><?php echo '1'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('Border display for media (photo). Use <strong>none</strong> to hide the border.','facebook-feed')); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'char_limit'; ?></td>
			<td class="wff-att-name"><?php echo '22'; ?></td>
			<td class="wff-att-uses"><?php _e('Set the limit of feed`s message/story text. If left blank then show full text otherwise show text according to given limit.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'post_text_color'; ?></td>
			<td class="wff-att-name"><?php echo '#ff0000 or Red'; ?></td>
			<td class="wff-att-uses"><?php _e('Set the color of feed`s message/story text. If left blank then default color of theme will be display.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'post_background'; ?></td>
			<td class="wff-att-name"></td>
			<td class="wff-att-uses"><?php _e('Set the background color of feed`s message/story text. If left blank then no background will be display.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'post_text_weight' ; ?></td>
			<td class="wff-att-name"><?php echo 'Bold/Normal'; ?></td>
			<td class="wff-att-uses"><?php _e('Set the text weight of feed`s message/story text. If left blank then weight inherited from used theme.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'post_text_size'; ?></td>
			<td class="wff-att-name"><?php echo '11'; ?></td>
			<td class="wff-att-uses"><?php _e('Set the text size of feed`s message/story text. If left blank then size inherited from used theme.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'post_text_align'; ?></td>
			<td class="wff-att-name"><?php echo 'left'; ?></td>
			<td class="wff-att-uses"><?php _e('Set the text align of feed`s message/story text. Other align are left/right/center/justice. If left blank then left(default) will apply.','facebook-feed') ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'page_link_text'; ?></td>
			<td class="wff-att-name"><?php echo 'View on Facebook'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('This is custom label for Facebook page feed link. You can use own label like <strong>move to Facebook feed.</strong>','facebook-feed')); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'read_more'; ?></td>
			<td class="wff-att-name"><?php echo 'Read More'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('This is custom label that act as controller of limited display text. You can use own label like <strong>more text.</strong>','facebook-feed')); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'read_less'; ?></td>
			<td class="wff-att-name"><?php echo 'Read Less'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('This is custom label that act as controller of full display text. You can use own label like <strong>less text.</strong>','facebook-feed')); ?></td>
		</tr>
		<tr id="menu-locations-row">
			<td class="wff-att-name"><?php echo 'share_text'; ?></td>
			<td class="wff-att-name"><?php echo 'Share'; ?></td>
			<td class="wff-att-uses"><?php echo sprintf(__('This is custom label that toggle a box containning social media icon. You can use own label like <strong>social media link.</strong> ','facebook-feed')); ?></td>
		</tr>
		
		</tbody>
	</table>	
			   </div>
            </div>
        </div>
	</div>
    <!--
	<div id="section_roadmap" class = "postbox">
		<div class="inside">
            <div id="setting_modify_layouts_text" class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label">Future RoadMap </h3>
                    </div>
                </div>
            </div>
                                
        <p>We have big plans for the FaceBook Feed plugin. Here is a tentative RoadMap  </p>
        <p><span class="description"></span> In future versions we will provide support for: </span></p>
        <p><span class="description">1. Design Customizations.</span></p>
        <p><span class="description">2. Text / Font Size customization using Admin Panel</span></p>
        <p><span class="description">3. Support for Custom CSS</span></p>
        <p><span class="description">4. Support for Date Format Customization</span></p>
        <p><span class="description">5. Multiple COlor Schemes.</span></p>
        <p><span class="description">6. HasTag Linking.</span></p>
        <p><span class="description">7. Support for Multiple Facebook Feeds.. And Lots More</span></p>
                        
        </div>
    </div>
    -->
                        
    <div id="section_faq" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label"><?php _e('FAQ','facebook-feed') ?> </h3>
                    </div>
                </div>
            </div>
                                
        <p><span class="description"><?php _e('1. Enter your Facebook Page ID in the Box Above.','facebook-feed') ?></span></p>
        <p><span class="description"><?php _e('2. Use the shortcode [facebook-feed] to display the feed on any Page / Post','facebook-feed') ?></span></p>
                      
				</div>
	</div>
	
	
	  <div id="section_support" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label"><?php _e('Support','facebook-feed') ?> </h3>
                    </div>
                </div>
            </div>
                                
       <p><span class="description"><?php echo sprintf(__("1. For any queries contact us via the <a href='http://webriti.com/support/categories/facebook-feed-pro' target='_blank'>support forums.</a>","facebook-feed")); ?></span></p>
        
                      
				</div>
	</div>
	
	
	<div id="get_beta_version" class = "postbox">
        <div class="inside">
            <div class="format-settings">
                <div class="format-setting-wrap">
                    <div class="format-setting-label">
                    <h3 class="label"><?php _e('Get the Premium Version','facebook-feed') ?>  </h3>
                    </div>
                </div>
            </div>
                                
        <p><h2><?php _e('Upgrade to the premium version and get the follwing additional features.','facebook-feed') ?></h2></p>
        
                     
                   <p><?php _e('1. Image and Video Support','facebook-feed') ?></p>
                     <p><?php _e('2. Light Box Support','facebook-feed') ?></p>
                     <p><?php _e('3. Feed Filtering. You can filter the feed by post type. Eg: Only show Photos, Or Hide Events etc','facebook-feed') ?></p>
                   <p><?php _e('4. Three type of layout is supported by this plugin, i.e thumbnail, halfwidth, fullwidth. Use any as your need.','facebook-feed') ?></p>
				</div>
				
				<h2><?php echo sprintf(__("Check out the premium version <a href = 'http://webriti.com/facebook-feed/' target = '_blank'> here","facebook-feed")); ?></a></h2>
				
	</div>
	
	
	
	
        </div>
    </div>
    </div>
        <div class="clear"></div>
        </div>
    </div>
</div>