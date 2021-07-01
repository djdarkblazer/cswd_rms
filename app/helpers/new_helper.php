<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

function generate_pdf($name)
{
	$ci =& lava_instance();

	$html = $ci->output->get_output();
	$html .= '<link href="'.site_url().'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">';

	$ci->call->library('pdf');
	$ci->dompdf->set_option('isRemoteEnabled', TRUE);
	$ci->dompdf->set_option('isJavascriptEnabled', TRUE);
	$ci->dompdf->loadHtml($html);

	$ci->dompdf->setPaper('Letter', 'portrait');

	$ci->dompdf->render();

	$ci->dompdf->stream($name, array("Attachment" => 0));
}

?>