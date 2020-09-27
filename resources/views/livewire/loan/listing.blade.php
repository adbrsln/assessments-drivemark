<div>
    @section('header')
    <h1 class="font-semibold text-xl text-gray-100 leading-tight">
        {{ __('Loan Applications Listing') }}
    </h1>
    <div>
        <a href="{{ route('application.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-gray-900 bg-blue-300 hover:bg-blue-200 focus:outline-none focus:border-blue-700 focus:shadow-outline-yellow active:bg-blue-700 active:text-white transition ease-in-out duration-150">
            Create New
        </a>
    </div>
@endsection
    <div class="flex flex-col mt-5">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
                <div class="space-y-1">
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <table class="w-full mt-6 min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Amount') }}
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Currency') }}
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Period') }}
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Status') }}
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($collections as $item)
                            @livewire('loan.record', ['application' => $item], key($item->uuid))
                        @empty
                        <tr>
                        <td colspan="6">
                            <div class="text-sm py-10 text-center">
                            No records found
                            </div>
                        </td>
                        </tr>
                        @endforelse
                    </tbody>
                    </table>
                    <div class="py-5">
                        {{ $collections->links() }}
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
