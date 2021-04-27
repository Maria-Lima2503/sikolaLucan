<?php

namespace App\Http\Livewire\Academico\AnoLectivo;

use Livewire\Component;

class AdicionarListar extends Component
{
    public $listar = true;
    public $section;
    public $sectionTitle = 'Listagem';
    protected $sectionListar = 'section section-data-tables';
    protected $sectionAdicionar = 'section';

    public function mount()
    {
        $this->section = $this->sectionListar;
    }

    public function adicionarListar()
    {
        if ($this->listar == true) {
            $this->sectionTitle = 'Adicionar';
            $this->listar = false;
            $this->section = $this->sectionAdicionar;
        } else {
            $this->sectionTitle = 'Listagem';
            $this->listar = true;
            $this->section = $this->sectionListar;
        }
    }

    public function render()
    {
        return view('livewire.academico.ano-lectivo.adicionar-listar');
    }
}
