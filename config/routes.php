<?php
//Route examples
//SilkRoute::register_route("/:controller/:action/:id");
//SilkRoute::register_route("/:controller/:action", array("id" => ''));
//SilkRoute::register_route("/:controller", array("id" => '', 'action' => 'index'));

// Build default routes
SilkRoute::build_default_component_routes();
?>