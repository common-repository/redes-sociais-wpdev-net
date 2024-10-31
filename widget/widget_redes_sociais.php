<?php 

class widget_redes_sociais extends WP_Widget{
	public function __construct(){

		parent::WP_Widget(false,$name= "Redes Sociais");
	}

	public function widget($args, $instance){
		//saida de conteudo do widget
		extract($args);
		$title = apply_filters( 'widget_title', $instance['title'] );
		$url_facebook  = $instance['url_facebook'];
		$url_twitter   = $instance['url_twitter'];
		$url_instagram = $instance['url_instagram'];
		$url_youtube   = $instance['url_youtube'];

		echo $before_widget;

		if ($title) {
			echo $before_widget.$title.$after_widget;

			echo '<a href="'.$url_facebook.'" target="_blank">

				<img src="'.plugin_dir_url(__FILE__).'images/facebook.png" width="50">

				</a>';

			echo '<a href="'.$url_twitter.'" target="_blank">

				<img src="'.plugin_dir_url(__FILE__).'images/twitter.png" width="50">

				</a>';

			echo '<a href="'.$url_instagram.'" target="_blank">

				<img src="'.plugin_dir_url(__FILE__).'images/instagram.png" width="50">

				</a>';

			echo '<a href="'.$url_youtube.'" target="_blank">

				<img src="'.plugin_dir_url(__FILE__).'images/youtube.png" width="50">

				</a>';
		}

		echo $after_widget;

	}

	public function update($new_instance, $old_instance){
		$instance = $old_instance;

		$instance['title'] = wp_strip_all_tags( $new_instance['title']);

		$instance['url_facebook'] = wp_strip_all_tags( $new_instance['url_facebook']);

		$instance['url_twitter'] = wp_strip_all_tags($new_instance['url_twitter']);

		$instance['url_instagram'] = wp_strip_all_tags($new_instance['url_instagram']);

		$instance['url_youtube'] = wp_strip_all_tags( $new_instance['url_youtube']);

		return $instance;
	}

	public function form($instance){
		//esc_attr = escapa html.
		$title         = esc_attr( $instance['title'] );
		$url_facebook  = esc_attr( $instance['url_facebook'] );
		$url_instagram = esc_attr( $instance['url_instagram'] );
		$url_twitter   = esc_attr( $instance['url_twitter'] );
		$url_youtube   = esc_attr( $instance['url_youtube'] );
	?>


<p>
<label for="<?=$this->get_field_id('title'); ?>"> 
	<?=_e('Título'); ?>
</label>

<input class="widefat" type="text" id="<?=$this->get_field_id('title'); ?>" name="<?=$this->get_field_name('title'); ?>" value="<?=$title ?>" />
</p>

<p>
<label for="<?=$this->get_field_id('url_facebook'); ?>"> <?=_e('Facebook'); ?></label>
<input class="widefat" type="text" id="<?=$this->get_field_id('url_facebook'); ?>" name="<?=$this->get_field_name('url_facebook'); ?>" value="<?=$url_facebook ?>" />
</p>

<p>
<label for="<?=$this->get_field_id('url_twitter'); ?>"> <?=_e('Twitter'); ?></label>
<input class="widefat" type="text" id="<?=$this->get_field_id('url_twitter'); ?>" name="<?=$this->get_field_name('url_twitter'); ?>" value="<?=$url_twitter ?>" />
</p>

<p>
<label for="<?=$this->get_field_id('url_instagram'); ?>"> <?=_e('Instagram'); ?></label>
<input class="widefat" type="text" id="<?=$this->get_field_id('url_instagram'); ?>" name="<?=$this->get_field_name('url_instagram'); ?>" value="<?=$url_instagram ?>" />
</p>

<p>
<label for="<?=$this->get_field_id('url_youtube'); ?>"> <?=_e('Youtube'); ?></label>
<input class="widefat" type="text" id="<?=$this->get_field_id('url_youtube'); ?>" name="<?=$this->get_field_name('url_youtube'); ?>" value="<?=$url_youtube ?>" />
</p>

<?php

}

}//Fim classe principal