<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller_Template {

	public $template = 'global/basic';

	public function action_institutions()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Общяя информация','Устав','Диклорации','Цели и задачи','Структура учреждения','Нормативные документы');
		$this->template->title = 'Учреждения';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_population()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Запись на прием к врачу','Последняя информация');
		$this->template->title = 'Населению';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_specialists()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Вакансии','Полезная информация');
		$this->template->title = 'Специалистам';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_nocorruption()
	{
		$content = View::factory('menu/nocorruption');
		$this->template->styles = array('style');
		$this->template->title = 'Нет коррупции';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_news()
	{
		$content = 'Новости';
		$this->template->styles = array('style');
		$this->template->title = 'Новости';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_quality()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Анкета','Вопрос ответ (форум)');
		$this->template->title = 'Качество работы';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_contacts()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Контактная информация','Специалисты');
		$this->template->title = 'Контакты';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}
} // End