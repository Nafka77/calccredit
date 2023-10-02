<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;  
	private $result; 
	private $records; 

	
	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	

	public function getParams(){
		$this->form->amoun = getFromRequest('amoun');
		$this->form->years = getFromRequest('years');
		$this->form->interest_rate = getFromRequest('interest_rate');
	}
	

	public function validate() {

		if (! (isset ( $this->form->amoun ) && isset ( $this->form->years ) && isset ( $this->form->interest_rate ))) {
			
			return false;
		}
		

		if ($this->form->amoun == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->years == "") {
			getMessages()->addError('Nie podano liczby miesięcy');
		}
		if ($this->form->interest_rate == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		

		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->amoun )) {
				getMessages()->addError('Podaj kwotę w postaci liczby dodatniej');
			}
			
			if (! is_numeric ( $this->form->years )) {
				getMessages()->addError('Podaj liczbe miesięcy w postaci liczby dodatniej');
			}
			if (! is_numeric ( $this->form->interest_rate )) {
				getMessages()->addError('Podaj oprocentowanie w postaci liczby dodatniej');
			}
		}
		
		return ! getMessages()->isError();
	}
	

	public function action_calcCompute(){

		$this->getParams();
		$procent = 100;

		if ($this->validate()) {
				
			$this->form->amoun = intval($this->form->amoun);
			$this->form->years = intval($this->form->years);
			$this->form->interest_rate = intval($this->form->interest_rate);
			getMessages()->addInfo('Parametry poprawne.');
				
			
			$this->result->result = (($this->form->amoun /$this->form->years) + ($this->form->amoun*($this->form->interest_rate/$procent)));
			
			getMessages()->addInfo('Wykonano obliczenia.');
			$this->action_calcSave();
		}
		
		getMessages()->addError("Nie wykonano odliczeń");
		$this->action_calcShow();
	}

	public function action_calcSave() {
		getDB()->insert("dane", [
			"amoun" => $this->form->amoun,
			"years" => $this->form->years,
			"interest_rate" => $this->form->interest_rate,
			"result" => $this->result->result,
		]);
		getMessages()->addInfo("Dodano wyniki");
		$this->action_calcShow();
	}

	public function action_calcDelete() {
		$this->form->id = getFromRequest("id", true, 'Błąd aplikacji');
		if(!empty($this->form->id)) {
			getDB()->delete("dane", [
				"id" => $this->form->id
			]);
			getMessages()->addInfo("Usunięto wynik");
			getRouter()->forwardTo("calcShow");
		} else {
			getMessages()->addError("Nie udało się usunąć wyniku");
		}
		$this->action_calcShow();
	}

	public function action_calcResult() {
		$this->records = getDB()->select("dane", [
			"id",
			"amoun",
			"years",
			"interest_rate",
			"result",
		]);
	}

	public function action_calcShow(){
		$this->action_calcResult();
		getSmarty()->assign('user',unserialize($_SESSION['user']));
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		getSmarty()->assign('records',$this->records);
		
		getSmarty()->display('index.html'); 
	}
}
