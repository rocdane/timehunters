<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Add Milestone</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Add milestone to existing project</p>
      @if ($errors->any())
        <div class="mb-4 rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if(session()->has('success'))
        <div class="mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700" role="alert">
          {{ session()->get('success') }}
        </div>
      @endif
  </div>
  <div class="container sm:container flex flex-row mt-5 sm:mt-5">
    <div class="basis-1/2">
      <form action="/milestones" method="POST" class="mx-auto max-w-xl">
        @csrf
        <div class="grid grid-cols-1 gap-x-8 gap-y-6">
          <div class="sm:col-span-2">
            <label for="project" class="block text-sm font-semibold leading-6 text-gray-900">Project</label>
            <div class="mt-2.5">
              <select id="project" name="project" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option>Select project</option>
                @foreach ($projects as $project)
                <option value={{$project->id}}>{{$project->title}}</option>
                @endforeach 
              </select>
            </div>
          </div>
          <fieldset class="set-area">
            <legend class="text-sm font-semibold leading-6 text-gray-900">Milestone information</legend>
            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-full">
                <label for="objective" class="block text-sm font-semibold leading-6 text-gray-900">Objective</label>
                <div class="mt-2.5">
                  <textarea name="objective" id="objective" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="open" class="block text-sm font-semibold leading-6 text-gray-900">Open at</label>
                <div class="mt-2.5 relative" id="datepicker-disable-past" data-te-datepicker-init data-te-inline="true" data-te-input-wrapper-init>
                  <input type="open" name="open" id="open" placeholder="14-01-20XX" autocomplete="open" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="close" class="block text-sm font-semibold leading-6 text-gray-900">Close at</label>
                <div class="mt-2.5 relative" id="datepicker-disable-past" data-te-datepicker-init data-te-inline="true" data-te-input-wrapper-init>
                  <input type="text" name="close" id="close" placeholder="31-12-20XX" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="mt-10">
          <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add milestone</button>
        </div>
      </form>
    </div>
    <div class="basis-1/2">
      <table class="table-auto w-full">
        <tbody>
          <td class="mt-2">
            <div class="container mx-auto px-2 py-2 flex flex-row rounded border border-2 border-lime-400 px-px py-py">
              <div class="basis-1/6 flex flex-col justify-between">
                <p class="text-xl rounded border border-2 border-solid border-red-400 text-center">status</p>
                <p class="text-sm">opened at</p>
                <p class="text-sm">closed at</p>
              </div>
              <div class="basis-2/3 flex flex-col justify-between px-2">
                <p class="text-xl">Objective description</p>
                <p class="text-base">Project title</p>
                <p class="text-sm">Project description</p>
              </div>
              <div class="basis-1/6 flex flex-col justify-between items-center">
                <button class="block rounded outline hover:outline-offset-2 outline-blue-500 text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </button>
                <button class="block rounded outline hover:outline-offset-2 outline-red-500 text-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                </button>
              </div>
            </div>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>