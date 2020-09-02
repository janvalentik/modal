    public function handleAdd(): void
    {
        parent::handleModal('add');
    }

    public function handleEdit($id): void
    {
        $class = $this->classRepository->get($id);
        if (!$class) {
            $this->flashMessage('Záznam s id ' . $id . ' nebyl nalezen', 'danger');
            $this->redirect('Class:');
        } else {
            $this->id = $id;
            $this['classForm']->setDefaults($class);
            parent::handleModal('edit');
        }
    }
