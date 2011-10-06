<?php 

$themename = "Glider";
$shortname = "glider";
$default_colorscheme = "Default";

$epanelMainTabs = array('general','layout','ad','colorization','seo','integration','support');

$cats_array = get_categories('hide_empty=0');
$pages_array = get_pages('hide_empty=0');
$site_pages = array();
$site_cats = array();

foreach ($pages_array as $pagg) {
	$site_pages[$pagg->ID] = htmlspecialchars($pagg->post_title);
	$pages_ids[] = $pagg->ID;
}

foreach ($cats_array as $categs) {
	$site_cats[$categs->cat_ID] = $categs->cat_name;
	$cats_ids[] = $categs->cat_ID;
}

$options = array (

	array( "name" => "wrap-general",
		   "type" => "contenttab-wrapstart",),
	
		array( "type" => "subnavtab-start",),
		
			array( "name" => "general-1",
				   "type" => "subnav-tab",
				   "desc" => "General"),
					
			array( "name" => "general-2",
				   "type" => "subnav-tab",
				   "desc" => "Homepage"),
				   
		array( "type" => "subnavtab-end",),
		
		array( "name" => "general-1",
			   "type" => "subcontent-start",),
			   
			array( "name" => "Logo",
				   "id" => $shortname."_logo",
				   "type" => "upload",
				   "std" => "",
				   "desc" => "desc."
			),

			array( "name" => "Favicon",
				   "id" => $shortname."_favicon",
				   "type" => "upload",
				   "std" => "",
				   "desc" => "desc."
			),

			array( "name" => "Color Scheme",
				   "id" => $shortname."_color_scheme",
				   "type" => "select",
				   "std" => "Default",
				   "desc" => "This theme comes with multiple color schemes. You can switch between these color schemes at any time using this dropdown menu. Once you click save your theme will be updated with the new color scheme automatically.",
				   "options" => array("Default", "Black", "Blue", "Green", "Red")),
			
			array( "name" => "Blog Style post format",
                   "id" => $shortname."_blog_style",
                   "type" => "checkbox",
                   "std" => "false",
                   "desc" => "By default the theme truncates your posts on index/homepages automatically to create post previews. If you would rather show your posts in full on index pages like a traditional blog then you can activate this feature."),
				   
			array( "name" => "Grab the first post image",
				   "id" => $shortname."_grab_image",
				   "type" => "checkbox2",
				   "std" => "false",
				   "desc" => "By default thumbnail images are created using custom fields. However, if you would rather use the images that are already in your post for your thumbnail (and bypass using custom fields) you can activate this option. Once activcated thumbnail images will be generated automatically using the first image in your post. The image must be hosted on your own server."),
						
			array( "type" => "clearfix",),
			
			array( "name" => "Blog Category",
                   "id" => $shortname."_blog_cat",
                   "type" => "select",
			       "options" => $site_cats,
				   "desc" => "description"),

			array( "name" => "Number of Posts displayed on Category page",
                   "id" => $shortname."_catnum_posts",
                   "std" => "6",
                   "type" => "text",
				   "desc" => "Here you can designate how many recent articles are displayed on the Category page. This option works independently from the Settings > Reading options in wp-admin."),
				   
			array( "name" => "Number of Posts displayed on Archive pages",
                   "id" => $shortname."_archivenum_posts",
                   "std" => "5",
                   "type" => "text",
				   "desc" => "Here you can designate how many recent articles are displayed on the Archive pages. This option works independently from the Settings > Reading options in wp-admin."),	
		
			array( "name" => "Number of Posts displayed on Search pages",
                   "id" => $shortname."_searchnum_posts",
                   "std" => "5",
                   "type" => "text",
				   "desc" => "Here you can designate how many recent articles are displayed on the Search results pages. This option works independently from the Settings > Reading options in wp-admin."),	
		
			array( "name" => "Number of Posts displayed on Tag pages",
                   "id" => $shortname."_tagnum_posts",
                   "std" => "5",
                   "type" => "text",
				   "desc" => "Here you can designate how many recent articles are displayed on the Tag pages. This option works independently from the Settings > Reading options in wp-admin."),	   
						
			array( "name" => "Date format",
				   "id" => $shortname."_date_format",
				   "std" => "M j, Y",
                   "type" => "text",
				   "desc" => "This option allows you to change how your dates are displayed. For more information please refer to the WordPress codex here:<a href='http://codex.wordpress.org/Formatting_Date_and_Time' target='_blank'>Formatting Date and Time</a>"),
						
			array( "name" => "Use excerpts when defined",
				   "id" => $shortname."_use_excerpt",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "desc."),
				   
			array( "name" => "Cufon Font Replacement",
			   "id" => $shortname."_cufon",
			   "type" => "checkbox2",
			   "std" => "on",
			   "desc" => "desc."),
			
			array( "type" => "clearfix",),
							   
		array( "name" => "general-1",
			   "type" => "subcontent-end",),
			   
		array( "name" => "general-2",
			   "type" => "subcontent-start",),
			   
			array( "name" => "Display Homepage Quote",
                   "id" => $shortname."_quote",
                   "type" => "checkbox",
                   "std" => "on",
                   "desc" => "This controls the two-lined quote that appears on the homepage below the featured slider."),
			
			array( "type" => "clearfix",),
			
			array( "name" => "Quote Line 1",
                   "id" => $shortname."_quote_one",
                   "std" => "Where beauty <span>&amp;</span> functionality combine",
                   "type" => "text",
				   "desc" => "Here you can define the text that appears in the homepage quote."),
			
			array( "name" => "Quote Line 2",
                   "id" => $shortname."_quote_two",
                   "std" => "Web design is my passion, and I treat each new website like a piece of art",
                   "type" => "text",
				   "desc" => "Here you can define the text that appears in the homepage quote."),
			
			array( "name" => "Show these pages on Homepage",
				   "id" => $shortname."_home_pages",
				   "type" => "checkboxes",
				   "std" => '',
				   "desc" => "desc.",
				   "usefor" => "pages",
				   "excludeDefault" => "true",
				   "options" => $pages_ids),
				   
		array( "name" => "general-2",
			   "type" => "subcontent-end",),
		
				   
	array(  "name" => "wrap-general",
			"type" => "contenttab-wrapend",),


//-------------------------------------------------------------------------------------//

	array( "name" => "wrap-layout",
		   "type" => "contenttab-wrapstart",),
		   
		array( "type" => "subnavtab-start",),
		
			array( "name" => "layout-1",
				   "type" => "subnav-tab",
				   "desc" => "Single Post Layout"),
				 
			array( "name" => "layout-2",
				   "type" => "subnav-tab",
				   "desc" => "Single Page Layout"),
			
			array( "name" => "layout-3",
				   "type" => "subnav-tab",
				   "desc" => "General Settings"),
			
		array( "type" => "subnavtab-end",),
		
		array( "name" => "layout-1",
			   "type" => "subcontent-start",),
				
			array( "name" => "Choose which items to display in the postinfo section",
				   "id" => $shortname."_postinfo2",
				   "type" => "different_checkboxes",
				   "std" => array("author","date","categories","comments"),
				   "desc" => "Here you can choose which items appear in the postinfo section on single post pages. This is the area, usually below the post title, which displays basic information about your post. The highlighted itmes shown below will appear. ",
				   "options" => array("author","date","categories","comments")),

			array( "name" => "Place Thumbs on Single Blog Post",
                   "id" => $shortname."_blog_thumbnails",
                   "type" => "checkbox",
                   "std" => "on",
                   "desc" => "By default thumbnails are placed at the beginning of your post on single post pages. If you would like to remove this initial thumbnail image to avoid repetition simply disable this option. "),

			array( "name" => "Show comments on posts",
            "id" => $shortname."_show_postcomments",
            "type" => "checkbox2",
            "std" => "on",
			"desc" => "You can disable this option if you want to remove the comments and comment form from single post pages. "),
			
			array( "type" => "clearfix",),
			
		array( "name" => "layout-1",
			   "type" => "subcontent-end",),	

		array( "name" => "layout-2",
			   "type" => "subcontent-start",),
		
			array( "name" => "Place Thumbs on Pages",
                   "id" => $shortname."_page_thumbnails",
                   "type" => "checkbox",
                   "std" => "false",
                   "desc" => "By default thumbnails are not placed on pages (they are only used on posts). However, if you want to use thumbnails on posts you can! Just enable this option. "),

			array( "name" => "Show comments on pages",
            "id" => $shortname."_show_pagescomments",
            "type" => "checkbox2",
            "std" => "false",
			"desc" => "By default comments are not placed on pages, however, if you would like to allow people to comment on your pages simply enable this option. "),
			
			array( "type" => "clearfix",),

		array( "name" => "layout-2",
			   "type" => "subcontent-end",),	

		array( "name" => "layout-3",
			   "type" => "subcontent-start",),	
			
			array( "name" => "Choose which items to display in the postinfo section (in Blog style)",
				   "id" => $shortname."_postinfo1",
				   "type" => "different_checkboxes",
				   "std" => array("author","date","categories","comments"),
				   "desc" => "Here you can choose which items appear in the postinfo section on single post pages. This is the area, usually below the post title, which displays basic information about your post. The highlighted itmes shown below will appear. ",
				   "options" => array("author","date","categories","comments")),
			
			array( "name" => "Show Thumbs on Index pages",
                   "id" => $shortname."_thumbnails_index",
                   "type" => "checkbox",
                   "std" => "on",
                   "desc" => "desc. "),	   

			array( "type" => "clearfix",),

		
		array( "name" => "layout-3",
			   "type" => "subcontent-end",),	
		
	array( "name" => "wrap-layout",
		   "type" => "contenttab-wrapend",),
		   
//-------------------------------------------------------------------------------------//

	array( "name" => "wrap-colorization",
		   "type" => "contenttab-wrapstart",),
		   
		array( "type" => "subnavtab-start",),
		
			array( "name" => "colorization-1",
				   "type" => "subnav-tab",
				   "desc" => "Colorization"),
				   
		array( "type" => "subnavtab-end",),
		
		array( "name" => "colorization-1",
			   "type" => "subcontent-start",),
			   
			array( "name" => "Color visualizer (this is not setting, just a tool to find hexdecimal values)",
				   "type" => "colorpicker",
				   "desc" => "This is a tool that can be used to find hexdecimal color values. These values can be used to customize the colors of the various elements below. This color picker will also appear which you click in any of the fields below. ",),
				   
			array( "name" => "Enable custom colors",
                   "id" => $shortname."_custom_colors",
                   "type" => "checkbox",
                   "std" => "false",
                   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click in the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value."),
			
			array( "name" => "Enable child stylesheet",
                   "id" => $shortname."_child_css",
                   "type" => "checkbox2",
                   "std" => "false",
                   "desc" => "If you would like to add a second stylsheet to your blog enable this option and input the link to your stylesheet below."),
			
			array( "type" => "clearfix",),
			
			array( "name" => "Child stylesheet URL",
				   "id" => $shortname."_child_cssurl",
				   "type" => "text",
				   "std" => "",
				   "desc" => "Input the URL to your child stylsheet here.",),
			
			array( "name" => "Background color",
				   "id" => $shortname."_color_bgcolor",
				   "type" => "textcolorpopup",
				   "std" => "",
				   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click inside the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value.",),
			
			array( "name" => "Main font color",
				   "id" => $shortname."_color_mainfont",
				   "type" => "textcolorpopup",
				   "std" => "",
				   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click inside the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value",),

			array( "name" => "Main link color (in the post body)",
				   "id" => $shortname."_color_mainlink",
				   "type" => "textcolorpopup",
				   "std" => "",
				   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click inside the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value",),
				   
			array( "name" => "Main menu link color",
				   "id" => $shortname."_color_pagelink",
				   "type" => "textcolorpopup",
				   "std" => "",
				   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click inside the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value",),
				   
			array( "name" => "Main menu active link color",
				   "id" => $shortname."_color_activelink",
				   "type" => "textcolorpopup",
				   "std" => "",
				   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click inside the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value",),
				   				   
			array( "name" => "Content Area Heading color",
				   "id" => $shortname."_color_heading",
				   "type" => "textcolorpopup",
				   "std" => "",
				   "desc" => "This option allows you to customize the color of a certain element of the theme. When you click inside the field a color picker will appear. Scroll to find your desired color and then click the circular submit button on the lower right to accept the value",),
		
		array( "name" => "colorization-1",
			   "type" => "subcontent-end",),		
			   
	array( "name" => "wrap-colorization",
		   "type" => "contenttab-wrapend",),
		   
//-------------------------------------------------------------------------------------//
	array( "name" => "wrap-seo",
		   "type" => "contenttab-wrapstart",),
	
		array( "type" => "subnavtab-start",),
		
			array( "name" => "seo-1",
				   "type" => "subnav-tab",
				   "desc" => "Homepage SEO",),
					
			array( "name" => "seo-2",
				   "type" => "subnav-tab",
				   "desc" => "Single Post Page SEO",),
					
			array( "name" => "seo-3",
				   "type" => "subnav-tab",
				   "desc" => "Index Page SEO",),	
				   
		array( "type" => "subnavtab-end",),
		
		array( "name" => "seo-1",
			   "type" => "subcontent-start",),
			   
			array( "name" => " Enable custom title ",
				   "id" => $shortname."_seo_home_title",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "By default the theme uses a combination of your blog name and your blog description, as defined when you created your blog, to create your homepage titles. However if you want to create a custom title then simply enable this option and fill in the custom title field below. ",),  
			
			array( "name" => " Enable meta description",
				   "id" => $shortname."_seo_home_description",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "By default the theme uses your blog description, as defined when you created your blog, to fill in the meta description field. If you would like to use a different description then enable this option and fill in the custom description field below. ",),  
			
			array( "name" => " Enable meta keywords",
				   "id" => $shortname."_seo_home_keywords",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "By default the theme does not add keywords to your header. Most search engines don't use keywords to rank your site anymore, but some people define them anyway just in case. If you want to add meta keywords to your header then enable this option and fill in the custom keywords field below. ",),  
			
			array( "name" => " Enable canonical URL's",
				   "id" => $shortname."_seo_home_canonical",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "Canonicalization helps to prevent the indexing of duplicate content by search engines, and as a result, may help avoid duplicate content penalties and pagerank degradation. Some pages may have different URLs all leading to the same place. For example domain.com, domain.com/index.html, and www.domain.com are all different URLs leading to your homepage. From a search engine's perspective these duplicate URLs, which also occur often due to custom permalinks, may be treaded individually instead of as a single destination. Defining a canonical URL tells the search engine which URL you would like to use officially. The theme bases its canonical URLs off your permalinks and the domain name defined in the settings tab of wp-admin.",),  
			
			array( "type" => "clearfix",),
			
			array( "name" => "Homepage custom title (if enabled)",
				   "id" => $shortname."_seo_home_titletext",
				   "type" => "text",
				   "std" => "",
				   "desc" => "If you have enabled custom titles you can add your custom title here. Whatever you type here will be placed between the < title >< /title > tags in header.php",),

			array( "name" => "Homepage meta description (if enabled)",
				   "id" => $shortname."_seo_home_descriptiontext",
				   "type" => "textarea",
				   "std" => "",
				   "desc" => "If you have enabled meta descriptions you can add your custom description here.",),
			
			array( "name" => "Homepage meta keywords (if enabled)",
				   "id" => $shortname."_seo_home_keywordstext",
				   "type" => "text",
				   "std" => "",
				   "desc" => "If you have enabled meta keywords you can add your custom keywords here. Keywords should be separated by comas. For example: wordpress,themes,templates,elegant",),
				   
			array( "name" => "If custom titles are disabled, choose autogeneration method",
				   "id" => $shortname."_seo_home_type",
				   "type" => "select",
				   "std" => "BlogName | Blog description",
				   "options" => array("BlogName | Blog description", "Blog description | BlogName", "BlogName only"),
				   "desc" => "If you are not using cutsom post titles you can still have control over how your titles are generated. Here you can choose which order you would like your post title and blog name to be displayed, or you can remove the blog name from the title completely.",),
			
			array( "name" => "Define a character to separate BlogName and Post title",
				   "id" => $shortname."_seo_home_separate",
				   "type" => "text",
				   "std" => " | ",
				   "desc" => "Here you can change which character separates your blog title and post name when using autogenerated post titles. Common values are | or -",),
				   
		array( "name" => "seo-1",
			   "type" => "subcontent-end",),
			   
		array( "name" => "seo-2",
			   "type" => "subcontent-start",),
			   
			array( "name" => "Enable custom titles",
				   "id" => $shortname."_seo_single_title",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "By default the theme creates post titles based on the title of your post and your blog name. If you would like to make your meta title different than your actual post title you can define a custom title for each post using custom fields. This option must be enabled for custom titles to work, and you must choose a custom field name for your title below.",),  
			
			array( "name" => "Enable custom description",
				   "id" => $shortname."_seo_single_description",
				   "type" => "checkbox2",
				   "std" => "false",
				   "desc" => "If you would like to add a meta description to your post you can do so using custom fields. This option must be enabled for descriptions to be displayed on post pages. You can add your meta description using custom fields based off the custom field name you define below.",),  
			
			array( "type" => "clearfix",),
			
			array( "name" => "Enable custom keywords",
				   "id" => $shortname."_seo_single_keywords",
				   	"type" => "checkbox",
				   "std" => "false",
				   "desc" => "If you would like to add meta keywords to your post you can do so using custom fields. This option must be enabled for keywords to be displayed on post pages. You can add your meta keywords using custom fields based off the custom field name you define below.",),  
			
			array( "name" => "Enable canonical URL's",
				   "id" => $shortname."_seo_single_canonical",
				   "type" => "checkbox2",
				   "std" => "false",
				   "desc" => "Canonicalization helps to prevent the indexing of duplicate content by search engines, and as a result, may help avoid duplicate content penalties and pagerank degradation. Some pages may have different URL's all leading to the same place. For example domain.com, domain.com/index.html, and www.domain.com are all different URLs leading to your homepage. From a search engine's perspective these duplicate URLs, which also occur often due to custom permalinks, may be treaded individually instead of as a single destination. Defining a canonical URL tells the search engine which URL you would like to use officially. The theme bases its canonical URLs off your permalinks and the domain name defined in the settings tab of wp-admin.",), 
				   
			array( "type" => "clearfix",),	   
			
			array( "name" => "Custom field Name to be used for title",
				   "id" => $shortname."_seo_single_field_title",
				   "type" => "text",
				   "std" => "seo_title",
				   "desc" => "When you define your title using custom fields you should use this value for the custom field Name. The Value of your custom field should be the custom title you would like to use.",), 
			
			array( "name" => "Custom field Name to be used for description",
				   "id" => $shortname."_seo_single_field_description",
				   "type" => "text",
				   "std" => "seo_description",
				   "desc" => "When you define your meta description using custom fields you should use this value for the custom field Name. The Value of your custom field should be the custom description you would like to use.",), 
			
			array( "name" => "Custom field Name to be used for keywords",
				   "id" => $shortname."_seo_single_field_keywords",
				   "type" => "text",
				   "std" => "seo_keywords",
				   "desc" => "When you define your keywords using custom fields you should use this value for the custom field Name. The Value of your custom field should be the meta keywords you would like to use, separated by comas.",), 
			
			array( "name" => "If custom titles are disabled, choose autogeneration method",
				   "id" => $shortname."_seo_single_type",
				   "type" => "select",
				   "std" => "Post title | BlogName",
				   "options" => array("Post title | BlogName", "BlogName | Post title", "Post title only"),
				   "desc" => "If you are not using cutsom post titles you can still have control over hw your titles are generated. Here you can choose which order you would like your post title and blog name to be displayed, or you can remove the blog name from the title completely.",),
			
			array( "name" => "Define a character to separate BlogName and Post title",
				   "id" => $shortname."_seo_single_separate",
				   "type" => "text",
				   "std" => " | ",
				   "desc" => "Here you can change which character separates your blog title and post name when using autogenerated post titles. Common values are | or -",), 
				   
		array( "name" => "seo-2",
			   "type" => "subcontent-end",),
		
		array( "name" => "seo-3",
				   "type" => "subcontent-start",),
		
			array( "name" => " Enable canonical URL's",
				   "id" => $shortname."_seo_index_canonical",
				   "type" => "checkbox",
				   "std" => "false",
				   "desc" => "Canonicalization helps to prevent the indexing of duplicate content by search engines, and as a result, may help avoid duplicate content penalties and pagerank degradation. Some pages may have different URL's all leading to the same place. For example domain.com, domain.com/index.html, and www.domain.com are all different URLs leading to your homepage. From a search engine's perspective these duplicate URLs, which also occur often due to custom permalinks, may be treaded individually instead of as a single destination. Defining a canonical URL tells the search engine which URL you would like to use officially. The theme bases its canonical URLs off your permalinks and the domain name defined in the settings tab of wp-admin.",),  
			
			array( "name" => "Enable meta descriptions",
				   "id" => $shortname."_seo_index_description",
				   	"type" => "checkbox2",
				   "std" => "false",
				   "desc" => "Check this box if you want to display meta descriptions on category/archive pages. The description is based off the category description you choose when creating/edit your category in wp-admin.",),  
			
			array( "type" => "clearfix",),
				   
			array( "name" => "Choose title autogeneration method",
				   "id" => $shortname."_seo_index_type",
				   "type" => "select",
				   "std" => "Category name | BlogName",
				   "options" => array("Category name | BlogName", "BlogName | Category name", "Category name only"),
				   "desc" => "Here you can choose how your titles on index pages are generated. You can change which order your blog name and index title are displayed, or you can remove the blog name from the title completely.",),
			
			array( "name" => "Define a character to separate BlogName and Post title",
				   "id" => $shortname."_seo_index_separate",
				   "type" => "text",
				   "std" => " | ",
				   "desc" => "Here you can change which character separates your blog title and index page name when using autogenerated post titles. Common values are | or -",), 
			
			array( "type" => "clearfix",),
					   
		array( "name" => "seo-3",
				   "type" => "subcontent-end",),
				   
	array(  "name" => "wrap-seo",
			"type" => "contenttab-wrapend",),

//-------------------------------------------------------------------------------------//

	array( "name" => "wrap-integration",
		   "type" => "contenttab-wrapstart",),
		   
		array( "type" => "subnavtab-start",),
		
			array( "name" => "integration-1",
				   "type" => "subnav-tab",
				   "desc" => "Code Integration"),
				   
		array( "type" => "subnavtab-end",),
		
		array( "name" => "integration-1",
			   "type" => "subcontent-start",),

			array( "name" => "Disable header code",
                   "id" => $shortname."_integrate_header_enable",
                   "type" => "checkbox",
                   "std" => "on",
                   "desc" => "Disabling this option will remove the header code below from your blog. This allows you to remove the code while saving it for later use."),

			array( "name" => "Disable body code",
                   "id" => $shortname."_integrate_body_enable",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" => "Disabling this option will remove the body code below from your blog. This allows you to remove the code while saving it for later use."),
			
			array( "type" => "clearfix",),
			
			array( "name" => "Disable single top code",
                   "id" => $shortname."_integrate_singletop_enable",
                   "type" => "checkbox",
                   "std" => "on",
                   "desc" => "Disabling this option will remove the single top code below from your blog. This allows you to remove the code while saving it for later use."),
			
			array( "name" => "Disable single bottom code",
                   "id" => $shortname."_integrate_singlebottom_enable",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" => "Disabling this option will remove the single bottom code below from your blog. This allows you to remove the code while saving it for later use."),
				   
			array( "type" => "clearfix",),	   

			array( "name" => "Add code to the < head > of your blog",
				   "id" => $shortname."_integration_head",
				   "type" => "textarea",
				   "std" => "",
				   "desc" => "Any code you place here will appear in the head section of every page of your blog. This is useful when you need to add javascript or css to all pages.",),

			array( "name" => "Add code to the < body > (good for tracking codes such as google analytics)",
				   "id" => $shortname."_integration_body",
				   "type" => "textarea",
				   "std" => "",
				   "desc" => "Any code you place here will appear in body section of all pages of your blog. This is usefull if you need to input a tracking pixel for a state counter such as Google Analytics.",),

			array( "name" => "Add code to the top of your posts",
				   "id" => $shortname."_integration_single_top",
				   "type" => "textarea",
				   "std" => "",
				   "desc" => "Any code you place here will be placed at the top of all single posts. This is useful if you are looking to integrating things such as social bookmarking links.",),
			
			array( "name" => "Add code to the bottom of your posts, before the comments",
				   "id" => $shortname."_integration_single_bottom",
				   "type" => "textarea",
				   "std" => "",
				   "desc" => "Any code you place here will be placed at the top of all single posts. This is useful if you are looking to integrating things such as social bookmarking links.",),
		
		array( "name" => "integration-1",
			   "type" => "subcontent-end",),		
			   
	array( "name" => "wrap-integration",
		   "type" => "contenttab-wrapend",),
		   
//-------------------------------------------------------------------------------------//

	array( "name" => "wrap-support",
		   "type" => "contenttab-wrapstart",),
		   
		array( "type" => "subnavtab-start",),
		
			array( "name" => "support-1",
				   "type" => "subnav-tab",
				   "desc" => "Installation"),
			
			array( "name" => "support-2",
				   "type" => "subnav-tab",
				   "desc" => "Troubleshooting"),
			
			array( "name" => "support-3",
				   "type" => "subnav-tab",
				   "desc" => "Tutorials"),
				   
		array( "type" => "subnavtab-end",),
		
		array( "name" => "support-1",
			   "type" => "subcontent-start",),
		
			array( "name" => "installation",
				   "type" => "support",),		   
		
		array( "name" => "support-1",
			   "type" => "subcontent-end",),
		
		array( "name" => "support-2",
			   "type" => "subcontent-start",),
		
			array( "name" => "troubleshooting",
				   "type" => "support",),
		
		array( "name" => "support-2",
			   "type" => "subcontent-end",),		
		
		array( "name" => "support-3",
			   "type" => "subcontent-start",),
		
			array( "name" => "tutorials",
				   "type" => "support",),
		
		array( "name" => "support-3",
			   "type" => "subcontent-end",),		
			   
	array( "name" => "wrap-support",
		   "type" => "contenttab-wrapend",),
		   
//-------------------------------------------------------------------------------------//

	array( "name" => "wrap-advertisements",
		   "type" => "contenttab-wrapstart",),
		   
		array( "type" => "subnavtab-start",),
		
			array( "name" => "advertisements-1",
				   "type" => "subnav-tab",
				   "desc" => "Manage Un-widgetized Advertisements"),
			
		array( "type" => "subnavtab-end",),
		
		array( "name" => "advertisements-1",
			   "type" => "subcontent-start",),

			array( "name" => "Enable 468x60 banner",
				   "id" => $shortname."_468_enable",
				   	"type" => "checkbox",
				   "std" => "false",
				   "desc" => "Enabling this option will display a 468x60 banner ad on the bottom of your post pages below the single post content. If enabled you must fill in the banner image and destination url below.",),  
		
			array( "type" => "clearfix",),
						
			array( "name" => "Input 468x60 advertisement banner image",
				   "id" => $shortname."_468_image",
				   "type" => "textarea",
				   "std" => "",
				   "desc" => "Here you can change which character separates your blog title and index page name when using autogenerated post titles. Common values are | or -",), 

			array( "name" => "Input 468x60 advertisement destination url",
				   "id" => $shortname."_468_url",
				   "type" => "text",
				   "std" => "",
				   "desc" => "Here you can change which character separates your blog title and index page name when using autogenerated post titles. Common values are | or -",), 
			
		    array( "name" => "Input Adsense code",
				  "id" => $shortname."_468_adsense",
				  "type" => "textarea",
				  "std" => "",
				  "desc" => "desc.",), 

				   
		array( "name" => "advertisements-1",
			   "type" => "subcontent-end",),
					   
	array( "name" => "wrap-support",
		   "type" => "contenttab-wrapend",),
		   
//-------------------------------------------------------------------------------------//	
			
);


function custom_colors_css(){
	global $shortname; ?>
	
	<style type="text/css">
		body { color: #<?php echo(get_option($shortname.'_color_mainfont')); ?>; }
		#main-rightarea { background: #<?php echo(get_option($shortname.'_color_bgcolor')); ?>; }
		.post a:link, .post a:visited { color: #<?php echo(get_option($shortname.'_color_mainlink')); ?>; }
		#main-leftarea a { color: #<?php echo(get_option($shortname.'_color_pagelink')); ?>; }
		#main-leftarea a:hover, #main-leftarea a.active { color: #<?php echo(get_option($shortname.'_color_activelink')); ?>; }
		.content-area h2.title, .content-area h1.title, .content-area h2.title a { color:#<?php echo(get_option($shortname.'_color_heading')); ?>; }
	</style>

<?php };

?>