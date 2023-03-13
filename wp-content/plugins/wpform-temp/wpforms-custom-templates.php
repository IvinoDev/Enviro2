<?php
/**
 * Plugin Name: WPForms Custom Templates
 * Description: This plugin loads custom form templates.
 * Version:     1.0.0
 */

/**
 * Load the templates.
 */
function wpf_load_custom_templates() {

	if ( class_exists( 'WPForms_Template', false ) ) :
		/**
		 * Form Enviro2
		 * Template for WPForms.
		 */
		class WPForms_Template_form_enviro2 extends WPForms_Template {
		
			/**
			 * Primary class constructor.
			 *
			 * @since 1.0.0
			 */
			public function init() {
		
				// Template name
				$this->name = 'Form Enviro2';
		
				// Template slug
				$this->slug = 'form_enviro2';
		
				// Template description
				$this->description = '';
		
				// Template field and settings
				$this->data = array (
			'fields' => array (
				1 => array (
					'id' => '1',
					'type' => 'name',
					'label' => 'Nom',
					'format' => 'simple',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array (
					'id' => '2',
					'type' => 'email',
					'label' => 'E-mail',
					'required' => '1',
					'size' => 'medium',
					'default_value' => false,
				),
				4 => array (
					'id' => '4',
					'type' => 'text',
					'label' => 'Objet',
					'size' => 'medium',
					'limit_count' => '1',
					'limit_mode' => 'characters',
				),
				3 => array (
					'id' => '3',
					'type' => 'textarea',
					'label' => 'Message',
					'required' => '1',
					'size' => 'medium',
					'limit_count' => '1',
					'limit_mode' => 'characters',
				),
			),
			'field_id' => 5,
			'settings' => array (
				'form_title' => 'Form Enviro2',
				'submit_text' => 'Envoyer',
				'submit_text_processing' => 'Envoi...',
				'ajax_submit' => '1',
				'notification_enable' => '1',
				'notifications' => array (
					1 => array (
						'email' => '{admin_email}',
						'subject' => 'Nouvelle entrée pour Formulaire vide',
						'sender_name' => 'Enviro2',
						'sender_address' => '{admin_email}',
						'replyto' => 'mariamkayantao@gmail.com',
						'message' => '{all_fields}',
					),
				),
				'confirmations' => array (
					1 => array (
						'type' => 'message',
						'message' => '<p>Message envoyé avec succès, merci de nous avoir contacté ! </p>',
						'message_scroll' => '1',
						'page' => '396',
					),
				),
				'antispam' => '1',
				'form_tags' => array (
				),
			),
			'meta' => array (
				'template' => 'form_enviro2',
			),
		);
			}
		}
		new WPForms_Template_form_enviro2();
		endif;

}
add_action( 'wpforms_loaded', 'wpf_load_custom_templates' );