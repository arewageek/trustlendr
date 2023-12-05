<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="py-4">
        <div class="w-full md:w-full md:p-4">
            <div class="bg-gray-50 shadow-lg p-5 rounded-2xl">

                <div class="w-full h-full rounded-xl flex space-x-4 items-center justify-between">
                    <div class="p-3 font-bold">
                        All Users <span class="text-xs">(20 most recent)</span>
                    </div>
                    
                    <div class="p-3">
                        <div class="rounded-lg p-2 text-gray-900 hover:bg-gray-900 hover:text-gray-50 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <script>
                    async function searchUser () {
                        const user = await fetch(`/api/user/${$('.user-input').val()}`)

                        const res = await user.json()

                        console.log(res)

                        res.message.map((user, id) => {
                            document.getElementById('userstable').innerHTML=`
                                <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-xs">
                                    <td class="p-2">${++ id}</td>
                                    <td class="p-2">${user.name}</td>
                                    <td class="p-2">${ user.userame }</td>
                                    <td class="p-2">${ user.email }</td>
                                    <td class="p-2">
                                        <div class="flex items-center py-2 space-x-4 w-auto">
                                            <div>
                                                ${ user.blockchainID.substr(0,5) }...${ user.blockchainID.substr(-5) }
                                            </div>
                                            <div>
                                                <button onclick="copy('${ user.blockchainID }')" class="rounded-md bg-gray-900 p-2 text-gray-200 hover:text-white hover:bg-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">${ user.score }</td>
                                    <td class="p-2">${ user.created_at }</td>
                                    <td class="p-2 font-bold">
                                        <button onclick="showUser('${user.email}')" class="bg-gray-900 rounded-lg p-2 text-xs text-gray-300 hover:text-white hover:bg-gray-700 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            `
                        })
                    }
                    
                    $('.search-user').click( async () => {
                        searchUser()
                    })
                </script>
                
                <div class="w-full py-3">
                    <div class="py-3 rounded-lg flex w-full md:w-1/3">
                        <input type="text" class="user-input p-3 rounded-l-lg shadow-lg border-gray-300 bg-white text-sm text-gray-800 w-full" placeholder="Search with Blockchain ID or email" />
                        <button onclick="searchUser()" type="button" class="search-user bg-gray-900 shadow-lg rounded-r-lg p-3 px-5 text-sm text-gray-300 hover:text-white cursor-pointer font-bold hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- <div class="modal-users w-screen h-screen overflow-y-auto py-5 my-5 backdrop-blur-sm flex justify-center items-center top-0 left-0 p-5 pr-5 bg-[#0002]"> --}}
                    <div class="bg-gray-50 text-gray-700 rounded-lg shadow-lg p-5 w-full md:w-3/4 mb-7">
                        <div class="text-sm font-bold italic flex justify-between items-center py-5 mt-5">
                            <div>
                                User Credentials
                            </div>
            
                            <div>
                                <div class="text-red-500 cursor-pointer" onclick="javascript: $('.modal-users').fadeOut(500)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                        <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full flex justify-between items-center flex-wrap">
                            <div class="chart w-[200pt] h-[200pt] md:w-[400pt] md:h-[300pt] overflow-hidden shadow-lg mx-auto rounded-lg">
                                {{-- <div id='chartarea'><a class="zc-ref" href="https://www.zingchart.com/">Charts by ZingChart</a></div> --}}
                                {{-- <svg class="hidden md:block" version="1.1" style="font-family: Roboto; font-size: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 650 400" aria-hidden="false" aria-label="Interactive chart"><defs aria-hidden="true"><clipPath ><rect x="0" y="0" width="630" height="302" fill="none"></rect></clipPath><clipPath ><rect x="0" y="0" width="630" height="806.4468341764998" fill="none"></rect></clipPath></defs><rect fill="#ffffff" x="0" y="0" width="650" height="400" rx="0" ry="0" aria-hidden="true"></rect><rect fill="none" x="10" y="45" width="630" height="302" aria-hidden="true"></rect><g data-z-index="0" aria-hidden="true"><path fill="rgb(237, 238, 240)" d="M 325 52.24800000000002 A 143.75199999999998 143.75199999999998 0 1 1 324.8562480239586 52.248071875994015 M 324.8870520188246 83.0520564739953 A 112.948 112.948 0 1 0 325 83.052" ></path></g><rect fill="none" data-z-index="1" x="10" y="45" width="630" height="302" aria-hidden="true"></rect><g data-z-index="1" aria-hidden="true"></g><g data-z-index="2" aria-hidden="true"><path fill="none" data-z-index="7" d="M 325 67.65 A 128.35 128.35 0 1 1 324.8716500213916 67.65006417499467 M 325 196 A 0 0 0 1 0 325 196"></path></g><g data-z-index="3" aria-hidden="false"><g data-z-index="0.1" opacity="1" transform="translate(10,45) scale(1 1)" clip-path="url(#highcharts-xpptzjv-6-)" style="cursor: pointer;" aria-hidden="false"><path fill="#94d13d" d="M 315 7.248000000000019 A 143.75199999999998 143.75199999999998 0 1 1 178.23937022409982 106.71492748906061 A 15.401999999999994 15.401999999999994 0 1 1 207.54521946179273 116.20458588426192 A 112.948 112.948 0 1 0 315 38.05200000000001 A 15.401999999999994 15.401999999999994 0 1 1 315 7.248000000000019" sweep-flag="0" stroke-linecap="round" stroke-linejoin="round" tabindex="-1" role="img" aria-label="0.8." style="outline: none;"></path><path fill="#6f58e9" d="M 315 7.248000000000019 A 143.75199999999998 143.75199999999998 0 1 1 230.6210344516941 267.38224811799176 A 15.401999999999994 15.401999999999994 0 1 1 248.7022413549025 242.4431949498507 A 112.948 112.948 0 1 0 315 38.05200000000001 A 15.401999999999994 15.401999999999994 0 1 1 315 7.248000000000019" sweep-flag="0" stroke-linecap="round" stroke-linejoin="round" tabindex="-1" role="img" aria-label="0.6." style="outline: none;"></path><path fill="#2d99fe" d="M 315 7.248000000000019 A 143.75199999999998 143.75199999999998 0 0 1 451.76062977590016 195.2850725109394 A 15.401999999999994 15.401999999999994 0 1 1 422.4547805382073 185.79541411573808 A 112.948 112.948 0 0 0 315 38.05200000000001 A 15.401999999999994 15.401999999999994 0 1 1 315 7.248000000000019" sweep-flag="0" stroke-linecap="round" stroke-linejoin="round" tabindex="-1" role="img" aria-label="0.3." style="outline: none;"></path><path fill="#2ddac1" d="M 315 7.248000000000019 A 143.75199999999998 143.75199999999998 0 0 1 451.6717861687567 106.44149498197179 A 15.401999999999994 15.401999999999994 0 1 1 422.38497484688025 115.98974605726355 A 112.948 112.948 0 0 0 315 38.05200000000001 A 15.401999999999994 15.401999999999994 0 1 1 315 7.248000000000019" sweep-flag="0" stroke-linecap="round" stroke-linejoin="round" tabindex="-1" role="img" aria-label="0.2." style="outline: none;"></path></g><g data-z-index="0.1" opacity="1" transform="translate(10,45) scale(1 1)" clip-path="none" aria-hidden="true"></g></g><g data-z-index="3" aria-hidden="true"><g stroke-linecap="round" style="cursor: pointer;" transform="translate(616,10)"><title>Chart context menu</title><rect fill="#ffffff" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect><path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" data-z-index="1" stroke="#666666" stroke-width="3"></path><text font-family='Roboto-Regular,Roboto' x="0" data-z-index="1" y="15.5" style="color: rgb(51, 51, 51); font-weight: normal; fill: rgb(51, 51, 51);"></text></g></g><text font-family='Roboto-Regular,Roboto' x="325" text-anchor="middle" data-z-index="4" style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);" y="24" aria-hidden="true">Chart title</text><text font-family='Roboto-Regular,Roboto' x="325" text-anchor="middle" data-z-index="4" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="44" aria-hidden="true"></text><text font-family='Roboto-Regular,Roboto' x="10" text-anchor="start" data-z-index="4" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="397" aria-hidden="true"></text><g data-z-index="7" aria-hidden="true" transform="translate(287,359)"><rect fill="none" rx="0" ry="0" x="0" y="0" width="76" height="26"></rect><g data-z-index="1"><g><g data-z-index="1" transform="translate(8,3)"><text font-family='Roboto-Regular,Roboto' x="21" text-anchor="start" data-z-index="2" y="15" style="color: rgb(51, 51, 51); cursor: pointer; font-size: 12px; font-weight: bold; fill: rgb(51, 51, 51);">Series 1</text><rect x="2" y="4" width="12" height="12" fill="#cccccc" rx="6" ry="6" data-z-index="3"></rect></g></g></g></g><g data-z-index="7" aria-hidden="true"></g></svg> --}}
                                <div id="myChart" class="chart--container">
                                    <a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a>
                                </div>
                            </div>
            
                            <div class="w-full my-5 md:w-1/2">
                                <h3 class="text-xl text-purple-700 font-bold px-7">Credit Factors</h3>
                                <div class="w-full flex justify-between px-2 flex-wrap">
                                    <div class="w-full md:w-1/2 p-5">
                                        <div class="w-full p-5 rounded-lg shadow-lg flex flex-col space-y-3">
                                            <div class="font-black text-purple-700 text-xl">24%</div>
                                            <div class="text-xs font-bold">
                                                Payment History
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 p-5">
                                        <div class="w-full p-5 rounded-lg shadow-lg flex flex-col space-y-3">
                                            <div class="font-black text-purple-700 text-xl">24%</div>
                                            <div class="text-xs font-bold">
                                                Amount Owed
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 p-5">
                                        <div class="w-full p-5 rounded-lg shadow-lg flex flex-col space-y-3">
                                            <div class="font-black text-purple-700 text-xl">24%</div>
                                            <div class="text-xs font-bold">
                                                Credit History
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 p-5">
                                        <div class="w-full p-5 rounded-lg shadow-lg flex flex-col space-y-3">
                                            <div class="font-black text-purple-700 text-xl">24%</div>
                                            <div class="text-xs font-bold">
                                                New Credit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="my-5 md:p-5 w-full">
                                <div class="shadow-xl w-full md:w-1/2 px-3 py-5">
                                    <h3 class="font-bold text-2xl p-5 text-purple-700">
                                        User Credentials
                                    </h3>
                
                                    <div class="font-bold text-sm overflow-x-auto">
                                        <table class="text-left text-sm">
                                            <tr>
                                                <th class="px-4 py-2">Name</th>
                                                <td class="px-4 py-2">{{ Auth() -> user() -> name}}</td>
                                            </tr>
                
                                            <tr>
                                                <th class="px-4 py-2">Username</th>
                                                <td class="px-4 py-2">{{ Auth() -> user() -> username }}</td>
                                            </tr>
                
                                            <tr>
                                                <th class="px-4 py-2">Email Address</th>
                                                <td class="px-4 py-2">{{ Auth() -> user() -> email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
                
                <div class="w-full p-4 shadow rounded-xl overflow-x-auto ">
                    <table class="table table-auto text-sm w-full text-left">
                        <thead>
                            <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-gray-900">
                                <th class="p-2">S/N</th>
                                <th class="p-2">Name</th>
                                <th class="p-2">Username</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Blockchain ID</th>
                                <th class="p-2">Score</th>
                                <th class="p-2">Signup Date</th>
                                <th class="p-2">Action</th>
                            </tr>
                        </thead>

                        <tbody class="users-table" id="userstable">

                            <?php
                                $allUsersID = 0;
                            ?>
                            
                            @foreach ($allUsers as $user)
                            
                                <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-xs">
                                    <td class="p-2">{{ ++ $allUsersID }}</td>
                                    <td class="p-2">{{ $user['name'] }}</td>
                                    <td class="p-2">{{ $user['username'] }}</td>
                                    <td class="p-2">{{ $user['email'] }}</td>
                                    <td class="p-2">
                                        <div class="flex items-center py-2 space-x-4 w-auto">
                                            <div>
                                                {{ $user['blockchainID'] }}
                                            </div>
                                            <div>
                                                <button onclick="copy('{{ $user['blockchainID'] }}')" class="rounded-md bg-gray-900 p-2 text-gray-200 hover:text-white hover:bg-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">{{ $user['score'] }}%</td>
                                    <td class="p-2">{{ $user['created_at'] }}</td>
                                    <td class="p-2 font-bold">
                                        <button onclick="showUser('{{ $user['email'] }}')" class="bg-gray-900 rounded-lg p-2 text-xs text-gray-300 hover:text-white hover:bg-gray-700 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>

    <script>
        // function showUser(email){
        //     $('.modal-user').fadeIn(500)
        // }
    </script>
</x-app-layout>