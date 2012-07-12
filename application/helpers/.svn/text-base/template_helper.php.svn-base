<?php


function module($module_name, $controller, $method='')
{
	if($method=='')
	{
		echo Modules::run($module_name.'/'.$controller.'/index');
	}
	else
	{
		echo Modules::run($module_name.'/'.$controller.'/'.$method);
	}
	
}