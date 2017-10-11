<?php 

add_shortcode( 'sc_two_col', 'two_col_shortcode' );

function two_col_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'col1' => '',
                       'col2' => '',
                       'ratio' => '',
                       'class' => ''
               ),
               $atts
       ));
       $content1 = urldecode($col1);
       $content2 = urldecode($col2);
       $content1 = preg_replace( '/<br class="nc".\/>/', '', $content1 );
       $content2 = preg_replace( '/<br class="nc".\/>/', '', $content2 );
       if ($ratio == '6_6') {
       		$col1class = 'col-md-6';
       		$col2class = 'col-md-6';
       } elseif ($ratio == '4_8') {
       		$col1class = 'col-md-4';
       		$col2class = 'col-md-8';
       } elseif ($ratio == '3_9') {
       		$col1class = 'col-md-3';
       		$col2class = 'col-md-9';
       } elseif ($ratio == '8_4') {
       		$col1class = 'col-md-8';
       		$col2class = 'col-md-4';
       } elseif ($ratio == '9_3') {
       		$col1class = 'col-md-9';
       		$col2class = 'col-md-3';
       } 
       
       $result = '<div class="row '. $class .'">';
       $result .= '<div class="' . $col1class .'">';
       $result .= do_shortcode( $content1 );
       $result .= '</div><div class="' . $col2class .'">';
       $result .= do_shortcode( $content2 );
       $result .= '</div></div>';

       return $result;
}

add_shortcode( 'sc_three_col', 'three_col_shortcode' );

function three_col_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'col1' => '',
                       'col2' => '',
                       'col3' => '',
                       'ratio' => '',
                       'class' => ''
               ),
               $atts
       ));
       $content1 = urldecode($col1);
       $content2 = urldecode($col2);
       $content3 = urldecode($col3);
       $content1 = preg_replace( '/<br class="nc".\/>/', '', $content1 );
       $content2 = preg_replace( '/<br class="nc".\/>/', '', $content2 );
       $content3 = preg_replace( '/<br class="nc".\/>/', '', $content3 );
       if ($ratio == '4_4_4') {
       		$col1class = 'col-md-4';
       		$col2class = 'col-md-4';
       		$col3class = 'col-md-4';
       } elseif ($ratio == '3_3_6') {
       		$col1class = 'col-md-3';
       		$col2class = 'col-md-3';
       		$col3class = 'col-md-6';
       } elseif ($ratio == '3_6_3') {
       		$col1class = 'col-md-3';
       		$col2class = 'col-md-6';
       		$col3class = 'col-md-3';
       } elseif ($ratio == '6_3_3') {
       		$col1class = 'col-md-6';
       		$col2class = 'col-md-3';
       		$col3class = 'col-md-3';
       }
       
       $result = '<div class="row '. $class .'">';
       $result .= '<div class="' . $col1class .'">';
       $result .= do_shortcode( $content1 );
       $result .= '</div><div class="' . $col2class .'">';
       $result .= do_shortcode( $content2 );
       $result .= '</div><div class="' . $col3class .'">';
       $result .= do_shortcode( $content3 );
       $result .= '</div></div>';

       return $result;
}

add_shortcode( 'icon_box', 'icon_box_shortcode' );

function icon_box_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'view' => 'default',
                       'background' => 'none',
                       'icon' => '',
                       'title' => '',
                       'link' => '',
                       'description' => '',
                       'class' => ''
               ),
               $atts
       ));
       $content = preg_replace( '/<br class="nc".\/>/', '', $description );
       
       $result = '<div class="icon-box-wrapper '. $view .' '. $background .' '. $class .'">';
       $result .= '<div class="icon-box-icon">';
       $result .= '<a href="'. $link .'"><span class="'. $icon .'" aria-hidden="true"></span></a>';
       $result .= '</div><div class="icon-box-content">';
       $result .= '<a href="'. $link .'" class="icon-box-tile-link"><h3 class="icon-box-title">' . $title . '</h3></a>';
       $result .= '<p class="icon-box-description">' . $content .'</p>';
       $result .= '</div></div>';

       return $result;
}

add_shortcode( 'text_box', 'text_box_shortcode' );

function text_box_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'background' => 'none',
                       'attachment' => '',
                       'color'		=> 'dark',
                       'title' => '',
                       'text' => '',
                       'class' => ''
               ),
               $atts
       ));
       $content = preg_replace( '/<br class="nc".\/>/', '', $text );
       
       $result = '<div class="text-box-wrapper '. $background .' '. $color .' '. $class .'" '. (($background === "image") && ($attachment) ? 'style="background-image:url('. wp_kses_post( wp_get_attachment_image_url($attachment, 'Full') ) .');"' : '' ) .'>';
       $result .= '<h2 class="text-box-title">' . $title . '</h3>';
       $result .= '<div class="text-box-content">' . $content .'</div>';
       $result .= '</div>';

       return $result;
}

add_shortcode( 'boot_button', 'boot_button_shortcode' );

function boot_button_shortcode( $atts ) {
	extract( shortcode_atts(
               array(
                       'text' 		=> '',
                       'title'	 	=> '',
                       'url' 		=> '',
                       'type' 		=> '',
                       'size' 		=> '',                      
                       'class' 		=> ''
               ),
               $atts
       ));

        $classes = array('btn');

        if (empty($title)){
        	if(isset($text)){
            	$title = $text;
        	}
        }

        if(empty($text)){
            $text =  'No text in this button';
        }

        if (isset($type)){     
        	array_push($classes, $type);
        }

        if (empty($url)){
            $url = '#';
        }

        if (isset($size)){
            array_push($classes, $size);
        }

        if (isset($class)){
            array_push($classes, $class);
        }

        $class_string = implode($classes, ' ');

        $result = sprintf('<a href="%s" title="%s"><button type="button" class="%s">%s</button></a>', $url, $title, $class_string, $text);

       return $result;
}