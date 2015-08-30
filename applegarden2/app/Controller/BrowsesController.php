<?php
App::uses('AppController', 'Controller');

class BrowsesController extends AppController
{
  public $uses = array('Applegarden');
  public $helpers = array('Form', 'Html');
  // public $layout = false;
  public $layout = ('default');
  public function beforeFilter()
  {
  }
  public function index()
  {
  }
  public function applegarden0827()
  {
    $this->Applegarden->setSource('goods');
    $this->set('data', $this->Applegarden->find('all'));
    $this->Applegarden->setSource('stores');
    $this->set('data2', $this->Applegarden->find('all',array('fields' => array('id','store'))));
  }

  public function applegarden0827_kasu()
  {
    $this->Applegarden->setSource('stores');
    $this->set('data',$this->Applegarden->find('all',array(
      'conditions' => array('id =' => $_GET['store']),
      'fields' => array('id','store')
    ))
  );
  $data = $this->Applegarden->find('all',array(
    'conditions' => array('id =' => $_GET['store']),
    'fields' => array('id','store')
  ));

  $this->Applegarden->setSource('goods');
  $this->set('data2',$this->Applegarden->find('all',array(
    'conditions' => array('store =' => $data[0]["Applegarden"]["store"]))));
  }

  public function applegarden0827_1()
  {
    $this->Applegarden->setSource('stores');
    $this->set('data',$this->Applegarden->find('all'));
  }

  public function applegarden_submit()
  {
    $this->Applegarden->setSource('goods');
    if (isset($this->request->data['submit_info'])){
      $today = date("Y-m-d");
      $this->Applegarden->set(array(
        'category' => $this->request->data['category'],
        'name' => $this->request->data['name'],
        'store' => $this->request->data['store'],
        'rate' => $this->request->data['rate'],
        'date' => $today,
        'user' => "ほげた　やすお"
      ));
      $this->Applegarden->save();
      ini_set( 'display_errors', 1 );
    }
  }
}
?>
