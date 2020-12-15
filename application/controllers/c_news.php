<?php
class c_news extends CI_Controller {
	function index() {
		$this->lister_news();
	}
	function accueil() {
		$data=$this->m_news->get_info();
		$this->load->view('v_news',$data);
	}
	function test_ajout() {
		$this->m_news->ajouter("Gaston Lagaff", "Un premier modèle", "r"); 
	}
	function test_modifier() {
		$this->m_news->modifier("Gaston Lagaff", "Un premier modèle"); 
	}
	function test_supprimer() {
		$this->m_news->supprimer(1);
	}
	function test_count() {
		$this->m_news->count("contenu"); 
	}
	function lister_news() {
		$data['liste']=$this->m_news->lister(); 
		$this->load->view('v_lister',$data);
	}
}