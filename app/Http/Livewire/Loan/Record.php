<?php

namespace App\Http\Livewire\Loan;

use Livewire\Component;
use App\Models\Application;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;

class Record extends Component
{

    public $application;

    public function mount(Application $application)
    {
        $money = new Money($this->application->amount, new Currency($this->application->currency));
        $currencies = new ISOCurrencies();

        $numberFormatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
        $moneyFormatter = new IntlMoneyFormatter($numberFormatter, $currencies);

        $this->application->amount =  $moneyFormatter->format($money);

        $this->application = $application;
    }

    public function render()
    {
        return view('livewire.loan.record');
    }

    public function deleteRecord()
    {
        $this->emitUp('applicationDelete', $this->application->id);
    }
}
