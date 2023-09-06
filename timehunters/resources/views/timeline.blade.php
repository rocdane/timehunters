@extends('template')

@section('content')
    <x-branding.header />

    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Timeline</h2>
          <p class="mt-2 text-lg leading-8 text-gray-600">Visualize your timeline</p>
        </div>
        <div class="container mx-auto mt-5">
            <!--Tabs navigation-->
            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
                role="tablist"
                data-te-nav-ref>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a
                        href="#tabs-todo"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-todo"
                        data-te-nav-active
                        role="tab"
                        aria-controls="tabs-todo"
                        aria-selected="true"
                        >To Do</a
                    >
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a
                        href="#tabs-toassign"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-toassign"
                        role="tab"
                        aria-controls="tabs-toassign"
                        aria-selected="false"
                        >To Assign</a
                    >
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a
                        href="#tabs-toschedule"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-toschedule"
                        role="tab"
                        aria-controls="tabs-toschedule"
                        aria-selected="false"
                        >To Schedule</a
                    >
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a
                        href="#tabs-todrop"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-todrop"
                        role="tab"
                        aria-controls="tabs-todrop"
                        aria-selected="false"
                        >To Drop</a
                    >
                </li>
            </ul>
            <!--Tabs content-->
            <div class="mb-6">
                <div
                    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-todo"
                    role="tabpanel"
                    aria-labelledby="tabs-home-tab02"
                    data-te-tab-active>
                    <x-timeline.todo />
                </div>
                <div
                    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-toassign"
                    role="tabpanel"
                    aria-labelledby="tabs-profile-tab02">
                    <x-timeline.assign />
                </div>
                <div
                    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-toschedule"
                    role="tabpanel"
                    aria-labelledby="tabs-profile-tab02">
                    <x-timeline.schedule />
                </div>
                <div
                    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-todrop"
                    role="tabpanel"
                    aria-labelledby="tabs-contact-tab02">
                    <x-timeline.drop />
                </div>
            </div>
        </div>
    </div>
@endsection