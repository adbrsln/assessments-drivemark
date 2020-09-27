<?php

namespace App\Http\Livewire\Loan;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;


class Create extends Component
{

    public $currency = 'MYR';
    public $amount;
    public $term;

    public function mount()
    {
        $this->fill([
            'amount' =>  0,
            'term' => ''
        ]);
    }

    public function save()
    {
        $this->validate([
            'currency' => ['required'],
            'amount' => ['required'],
            'term' => ['required'],
        ]);
        if (Str::contains($this->amount, '.')) {
            $this->amount = str_replace('.', '', $this->amount);
        } else {
            $this->amount = $this->amount . '00';
        }

        auth()->user()->applications()->create([
            'uuid' => Str::orderedUuid(),
            'currency' => $this->currency,
            'amount' => $this->amount,
            'period' => $this->term,
        ]);
        session()->flash('message', 'Application successfully submitted.');
        return redirect()->route('application.list');
    }

    public function render()
    {
        return view('livewire.loan.create');
    }

    public function getlistOfOptionsProperty(): array
    {
        return json_decode(Http::get("http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso//ListOfCurrenciesByCode/JSON/debug?"));
    }

    public function getlistOfTermsProperty(): array
    {
        return [12, 24, 36, 48, 72, 95];
    }
}
