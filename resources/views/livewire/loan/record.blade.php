<tr>
	<td class="px-6 py-4 whitespace-no-wrap text-xs leading-4 text-gray-900">
	    {{  $application->amount  }}
	</td>
	<td class="px-6 py-4 whitespace-no-wrap text-xs leading-4 text-gray-900">
	    {{ $application->currency  }}
	</td>
	<td class="px-6 py-4 whitespace-no-wrap text-xs leading-4 text-gray-900">
	    {{ $application->period }} Months
	</td>
	<td class="px-6 py-4 whitespace-no-wrap text-xs leading-4 text-gray-900">
	    {{ $application->status  }}
	</td>
	<td class="px-6 py-4 whitespace-no-wrap text-center text-sm leading-5 font-medium ">
        <span class="inline-flex rounded-md shadow-sm">
            <a href="#" class="inline-flex items-center px-2 py-1 border border-transparent text-sm leading-4 font-small rounded-md text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150" wire:click="deleteRecord"
            onclick="confirm('Are you sure want to delete this record?')||event.stopImmediatePropagation()">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
            </a>
          </span>
	</td>
</tr>

