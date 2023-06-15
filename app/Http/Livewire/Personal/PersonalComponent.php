<?php

namespace App\Http\Livewire\Personal;

use App\Models\Personal;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Livewire\Component;
use Livewire\WithPagination;

class PersonalComponent extends Component
{
  use WithPagination;


  public $deletedPersonalId;
  public function deletePersonal($personal_id)
  {
    $personal = Personal::find($personal_id);
    $personal->delete();
    $this->deletedPersonalId = $personal_id;
   /* session()->flash('message', 'Registro eliminado exitosamente!');*/
  }
  public function pdf()
  {
    $personales = Personal::paginate(5);
    $pdf = FacadePdf::loadView('livewire.personal.personal-pdf', ['personales' => $personales]);
    return $pdf->stream();

    //return $pdf->download('invoice.pdf');
    //return view('livewire.personal.personal-pdf', ['personales' => $personales]);
  }

  public function render()
  {
    $personales = Personal::orderBy('nombre', 'ASC')->paginate(5);
    return view('livewire.personal.personal-component', ['personales' => $personales]);
  }
}
