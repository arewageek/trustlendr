<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/jquery.js"></script>

        {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.2/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}

        <script src="{{ assets('js/eth.js') }}"></script>

        <!-- Styles -->
        @livewireStyles

        <script>
            const copy = text => {
                const copied = window.navigator.clipboard.writeText(text)
                if(copied) alert("Copied to clipboard")
            }

            const confirmLoanRequest = id => {
                try{
                    
                    // const agreed = true
                    const agreed = confirm("Are you sure you want to confirm this request?")
    
                    if(agreed){
                        $.ajax({
                            url: `/api/applications/update`,
                            type: 'get',
                            data: { id },
                            success: res => {
                                console.log(res)
                                if(res.status === 200){
                                    alert(res.message)
                                    window.location.reload()
                                }
                                else{
                                    res
                                }
                            }
                        })
                    }

                }

                catch(e){
                    console.log(e)
                }
            }

            const deleteLoanRequest = id => {
                const agreed = confirm("Are you sure you want to delete this request?")

                if(agreed){
                    $.ajax({
                        url: `/api/applications/reject`,
                        type: 'get',
                        data: { id },
                        success: res => {
                            console.log(res)
                            if(res.status === 200){
                                alert("Successfully rejected the loan application")
                                window.location.reload()
                            }
                            else{
                                alert("Could not reject the laon application")
                            }
                        }
                    })
                }
            }
        
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            // const Web3 = require('web3')

            // const web3 = new Web3(new Web3.providers.httpProvider())
        </script>
        
    </head>
    <body class="font-sans antialiased text-gray-800">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="w-full flex flex-col md:flex-row space-y-5 md:space-y-0 p-5">
                {{-- sidenav --}}
                <div class="w-full md:w-[200pt] relative">
                    
                    <div class="rounded-xl shadow-lg w-full py-5 px-5 bg-gray-50 sticky">

                        <div class="w-full py-1 mb-4 flex justify-end md:hidden">
                            <div class="w-[20pt] h-[20pt] p-1 rounded-lg bg-gray-500 flex justify-center items-center text-xs text-gray-50 hover:bg-gray-900 cursor-pointer transition">
                                x
                            </div>
                        </div>

                        <div class="flex w-full justify-between p-3 items-center">
                            <div class="font-bold text-sm">
                                {{ env('APP_NAME') }}
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                                </svg>
                            </div>
                        </div>

                        {{-- nav items --}}
                        <div class="my-7 flex flex-col space-y-4 text-gray-700 font-semibold">
                            
                            <a href="/admin" class="flex w-full p-3 items-center space-x-4 text-sm rounded-xl shadow-inner hover:bg-gray-100">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                        <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                                    </svg>
                                </div>
                                <div class="">
                                    Dashboard
                                </div>
                            </a>

                            <a href="/admin/users" class="flex w-full p-3 items-center space-x-4 text-sm rounded-xl shadow-inner hover:bg-gray-100">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </div>
                                <div class="w-full">
                                    Users
                                </div>
                                <div class="w-full">
                                    <div class="bg-gray-500 hover:bg-gray-900 transition h-[17pt] w-[17pt] text-xs rounded-md flex items-center justify-center text-gray-50">
                                        10
                                    </div>
                                </div>
                            </a>

                            <a href="/admin/applications" class="flex w-full p-3 items-center space-x-4 text-sm  rounded-xl shadow-inner hover:bg-gray-100">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks" viewBox="0 0 16 16">
                                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </div>
                                <div class=" w-full flex justify-end items-center space-x-3">
                                    <div class="w-full">
                                        Applications
                                    </div>
                                    <div class="w-full">
                                        <div class="bg-gray-500 hover:bg-gray-900 transition h-[17pt] w-[17pt] text-xs rounded-md flex items-center justify-center text-gray-50">
                                            3
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                
                {{-- main page --}}
                <div class="w-full md:p-5">
                    {{ $slot }}
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
