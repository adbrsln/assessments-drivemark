<?php

namespace App\Http\Livewire\Loan;

use App\Models\Application;
use Livewire\Component;

class Listing extends Component
{
    protected $listeners = [
        'applicationDelete' => 'delete',
    ];
    public function render()
    {
        $collections = Application::userApplications()->paginate();
        return view('livewire.loan.listing', compact('collections'));
    }

    public function delete($id)
    {
        $application = Application::where('id', $id)->firstOrFail();
        $application->delete();
        session()->flash('message', 'Application successfully deleted.');

        return redirect()->route('application.list');
    }
}
