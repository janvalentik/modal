	public function handleModal($modalId)
	{
		$this->template->modal = $modalId;
		if ($this->isAjax()) {
			$this->redrawControl('modal');
		}
	}
