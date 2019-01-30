<?php
namespace PoP\Engine;

abstract class QueryHandlerBase {

    function __construct() {
    
		$queryhandler_manager = QueryHandler_Manager_Factory::get_instance();
		$queryhandler_manager->add($this->get_name(), $this);
	}

    abstract function get_name();

	function prepare_query_args(&$query_args) {
	}

	function get_query_state($data_properties, $dataaccess_checkpoint_validation, $actionexecution_checkpoint_validation, $executed, $dbobjectids) {

		return array();
	}
	function get_query_params($data_properties, $dataaccess_checkpoint_validation, $actionexecution_checkpoint_validation, $executed, $dbobjectids) {

		return array();
	}
	function get_query_result($data_properties, $dataaccess_checkpoint_validation, $actionexecution_checkpoint_validation, $executed, $dbobjectids) {

		return array();
	}
}
