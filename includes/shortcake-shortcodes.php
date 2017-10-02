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
       $content1 = preg_replace( '/<br class="nc".\/>/', '', $col1 );
       $content2 = preg_replace( '/<br class="nc".\/>/', '', $col2 );
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
       $result .= $content1; //urldecode($col1);
       $result .= '</div><div class="' . $col2class .'">';
       $result .= $content2; //urldecode($col2);
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
       $content1 = preg_replace( '/<br class="nc".\/>/', '', $col1 );
       $content2 = preg_replace( '/<br class="nc".\/>/', '', $col2 );
       $content3 = preg_replace( '/<br class="nc".\/>/', '', $col3 );
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
       $result .= $content1;
       $result .= '</div><div class="' . $col2class .'">';
       $result .= $content2;
       $result .= '</div><div class="' . $col3class .'">';
       $result .= $content3;
       $result .= '</div></div>';

       return $result;
}