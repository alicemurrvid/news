<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Layout
{
private $CI;
private $out= '';
/*
|==========================================================================
| Constructeur
|==========================================================================
*/
public function __construct()
{
$this->CI = &get_instance();
}
/*
|==========================================================================
| Méthodes pour charger les vues
| . view
| . views
|==========================================================================
*/
/**
 *	Affiche une vue dans le template defaut.php de themes
 *
 *	@param $name        Le nom de la vue (contenu variable à passer au template)
 *	@param $data	      Les données à transmettre à la vue $name
 */

public function view($name, $data = array())
{
	$this->out .= $this->CI->load->view($name, $data, true);
$data['output']=$this->out;
$this->CI->load->view('../themes/default', $data);

}
/**
 *	Cumule des vues à transmettre au template defaut.php de themes
 *
 *  @param $name   Le nom de la vue (partie à ajouter à $this->out)
 *  @param $data   Les données utiles à la vue $name
 */

public function views($name, $data = array())
{
	$this->out .= $this->CI->load->view($name, $data, true);  // .= représente la concatenation. $this->out est complété.
return $this;

}
}
/* End of file layout.php */
/* Location: ./application/libraries/layout.php */
