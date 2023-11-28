<x-app-layout>
    <div class="py-4">
        <div class="w-full md:w-full p-4">
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
    
                <div class="w-full py-3">
                    <div class="py-3 rounded-lg flex w-full md:w-1/3">
                        <input type="text" class="p-3 rounded-l-lg shadow-lg border-gray-300 bg-white text-sm text-gray-800 w-full" placeholder="Search with Blockchain ID or email" />
                        <button type="submit" class="bg-gray-900 shadow-lg rounded-r-lg p-3 px-5 text-sm text-gray-300 hover:text-white cursor-pointer font-bold hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
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

                        <tbody>

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
                                        <button class="bg-gray-900 rounded-lg p-2 text-xs text-gray-300 hover:text-white hover:bg-gray-700 transition">
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
</x-app-layout>