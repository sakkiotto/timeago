<?php

	/**
	 * TimeAgo - LANGUAGE FILE.
	 *
	 * This file contains the (Spanish) language definitions for
	 * the labels and explanations text used in the admin control panel
	 * TimeAgo Extension Settings module.
	 *
	 * PHP Version 5.4
	 *
	 * @category  PHP
	 *
	 * @author    MuhClaren
	 * @copyright 2015 (c) MOP
	 * @license   GNU General Public License v2
	 */

	/**
	 * DO NOT CHANGE.
	 */
	if (defined('IN_PHPBB') === false)
	{
		exit;
	}

	if (empty($lang) || is_array($lang) === false)
	{
		$lang = [];
	}

	$lang = array_merge(
		$lang,
		[
			// Set the plurals - <key> => 'plural string' where <key> is the unit count, such as number of days
			'TA_SECOND'                   => [0 => 'segundos', 1 => 'segundo', 2 => 'segundos', 3 => 'segundos', 4 => 'segundos'],
			'TA_MINUTE'                   => [0 => 'minutos', 1 => 'minuto', 2 => 'minutos', 3 => 'minutos', 4 => 'minutos'],
			'TA_HOUR'                     => [0 => 'horas', 1 => 'hora', 2 => 'horas', 3 => 'horas', 4 => 'horas'],
			'TA_DAY'                      => [0 => 'días', 1 => 'día', 2 => 'días', 3 => 'días', 4 => 'días'],
			'TA_WEEK'                     => [0 => 'semanas', 1 => 'semana', 2 => 'semanas', 3 => 'semanas', 4 => 'semanas'],
			'TA_MONTH'                    => [0 => 'meses', 1 => 'mes', 2 => 'meses', 3 => 'meses', 4 => 'meses'],
			'TA_YEAR'                     => [0 => 'años', 1 => 'año', 2 => 'años', 3 => 'años', 4 => 'años'],
			'TA_DECADE'                   => [0 => 'decadas', 1 => 'decada', 2 => 'decadas', 3 => 'decadas', 4 => 'decadas'],
			'TA_AGO'                      => 'Hace',
			'TA_OFF'                      => 'Apagado',
			'TA_SHORT'                    => 'Corto (hace 1 año)',
			'TA_MEDIUM'                   => 'Medio (hace 1 año y 2 meses)',
			'TA_FULL'                     => 'Completo (Hace 1 año 2 meses y 3 días)',
			// general settings
			'TA_GENERAL_SETTINGS'         => 'Ajustes generales',
			'TA_GENERAL_SETTINGS_EXPLAIN' => 'Configurar ajustes de TimeAgo',
			'TA_DISPLAY_SETTINGS'         => 'Opciones de formato de TimeAgo',
			'TA_CAT'                      => 'index.php',
			'TA_CAT_EXPLAIN'              => 'Aplicar TimeAgo en la lista de categorías de foros en “Último Mensaje”',
			'TA_VIEWFORUM'                => 'viewforum.php',
			'TA_VIEWFORUM_EXPLAIN'        => 'Aplicar TimeAgo en la lista de temas viendo un foro',
			'TA_VIEWTOPIC'                => 'viewtopic.php',
			'TA_VIEWTOPIC_EXPLAIN'        => 'Aplicar TimeAgoen cada mensaje',
			'TA_EXTENDED'                 => 'Extender',
			'TA_EXTENDED_EXPLAIN'         => 'Añadir la marca de tiempo nativa de phpBB al final de TimeAgo.',
			'TA_EXTENDED_EXAMPLE'         => '(Por ejemplo, hace 9 horas (Sab Ago 08, 2015 11:57 am))',
			'TA_DETAIL'                   => 'Nivel de Detalle',
			'TA_TIMER_SETTINGS'           => 'Ajustes de tiempo',
			'TA_TIMER'                    => 'Tiempo',
			'TA_TIMER_EXPLAIN'            => 'Duración de tiempo (días) desde que la fecha del mensaje que TimeAgo debe estar activo. Por ejemplo: ajustar esto a 2 causará que TimeAgo vuelva al formato de fecha y hora normal de phpBB después de 2 días. Si ningún valor se establece, TimeAgo nunca volverá. La entrada válida: 1 - 999, 0 o en blanco desactiva esta opción.',
			'TA_DAYS'                     => 'Días',
		]
	);
