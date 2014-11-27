<?php
App::uses('AppController', 'Controller');
/**
 * STUDENTs Controller
 *
 * @property STUDENT $STUDENT
 */
class STUDENTsController extends AppController {

public $components = array('RequestHandler');
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->STUDENT->recursive = 0;
		$this->set('sTUDENTs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->STUDENT->exists($id)) {
			throw new NotFoundException(__('Invalid'));
		}
		$options = array('conditions' => array('STUDENT.' . $this->STUDENT->primaryKey => $id));
		$this->set('sTUDENT', $this->STUDENT->find('first', $options));
		$this->set('_serialize', array('sTUDENT'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->STUDENT->create();
			if ($this->STUDENT->save($this->request->data)) {
				$this->Session->setFlash(__('The s t u d e n t has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The s t u d e n t could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->STUDENT->exists($id)) {
			throw new NotFoundException(__('Invalid s t u d e n t'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->STUDENT->save($this->request->data)) {
				$this->Session->setFlash(__('The s t u d e n t has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The s t u d e n t could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('STUDENT.' . $this->STUDENT->primaryKey => $id));
			$this->request->data = $this->STUDENT->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->STUDENT->id = $id;
		if (!$this->STUDENT->exists()) {
			throw new NotFoundException(__('Invalid s t u d e n t'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->STUDENT->delete()) {
			$this->Session->setFlash(__('S t u d e n t deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('S t u d e n t was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
