@section('header')
<h1 class="font-semibold text-xl text-gray-100 leading-tight">
    {{ __('New Loan Application') }}
</h1>
@endsection
<div>
<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Loan Application Details</h3>
        <p class="mt-1 text-sm leading-5 text-gray-600">
        This information will be displayed publicly so be careful what you share.
        </p>
    </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
    <form wire:submit.prevent="save">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white sm:p-6">

            <div class=" mt-3 grid grid-cols-1 gap-6">
                <div class="col-span-3 sm:col-span-2">
                    <label for="term" class="block text-sm font-medium leading-5 text-gray-700">
                    Loan Currency Type
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select wire:model="currency" required class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 mb-3 pt-2 " >
                            <option value selected disabled>Please Select Currency</option>
                            @foreach($this->listOfOptions as $option)
                            <option value="{{ $option->sISOCode }}">{{ $option->sISOCode  }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="mt-3 grid grid-cols-1 gap-6">
            <div class="col-span-3 sm:col-span-2">
                <label for="loanAmount" class="block text-sm font-medium leading-5 text-gray-700">
                Loan Amount
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    {{ $currency }}
                </span>
                <input id="loanAmount" required wire:model.defer="amount" type="number" step="0.01" class="form-input flex-1 block w-full rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5" >
                </div>
            </div>
            </div>

            <div class=" mt-3 grid grid-cols-1 gap-6">
            <div class="col-span-3 sm:col-span-2">
                <label for="term" class="block text-sm font-medium leading-5 text-gray-700">
                Loan Term (Month)
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                <select wire:model.defer="term" required class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 mb-3 pt-2 " >
                <option value selected disabled>Please Select Loan Term</option>
                    @foreach($this->listOfTerms as $data)
                        <option value="{{ $data }}">{{ $data }} Months </option>
                    @endforeach
                </select>
                </div>
            </div>
            </div>

        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <span class="inline-flex rounded-md shadow-sm">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Submit
            </button>
            </span>
        </div>
        </div>
    </form>
    </div>
</div>
</div>
