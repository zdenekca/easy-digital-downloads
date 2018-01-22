<?php

/**
 * API Request Logs Table: EDD_DB_Table_API_Request_Logs class
 *
 * @package Plugins/EDD/Database/Object
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( class_exists( 'EDD_DB_Table' ) ) :
	/**
	 * Setup the global "edd_api_request_logs" database table
	 *
	 * @since 3.0.0
	 */
	final class EDD_DB_Table_API_Request_Logs extends EDD_DB_Table {

		/**
		 * Table name
		 *
		 * @access protected
		 * @since 3.0.0
		 * @var string
		 */
		protected $name = 'edd_api_request_logs';

		/**
		 * Database version
		 *
		 * @access protected
		 * @since 3.0.0
		 * @var int
		 */
		protected $version = 201801170001;

		/**
		 * Setup the database schema
		 *
		 * @access protected
		 * @since 3.0.0
		 * @return void
		 */
		protected function set_schema() {
			$this->schema = "id bigint(20) UNSIGNED NOT NULL auto_increment,
			user_id bigint(20) unsigned NOT NULL default '0',
			api_key varchar(32) NOT NULL default 'public',
			token varchar(32) NOT NULL default 'public',
			version varchar(30) NOT NULL default 'public',
			request longtext DEFAULT NULL,
			error longtext DEFAULT NULL,
			ip varchar(60) DEFAULT NULL,
			time varchar(60) DEFAULT NULL,
			date_created datetime NOT NULL default '0000-00-00 00:00:00',
			PRIMARY KEY (id),
			KEY user_id (user_id)";
		}

		/**
		 * Handle schema changes
		 *
		 * @access protected
		 * @since 3.0.0
		 * @return void
		 */
		protected function upgrade() {

		}
	}
endif;
