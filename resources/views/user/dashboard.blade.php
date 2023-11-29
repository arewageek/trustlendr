<x-user-layout>

    <div class="font-bold p-4">
        Welcome back, {{ Auth() -> user() -> name }}
    </div>

    <div class="w-full flex justify-between flex-col md:flex-row space-y-4 md:space-y-0">
        
        <div class="w-full md:w-1/4 p-4">
            <div class="w-full h-full rounded-xl bg-gray-50 shadow-lg p-5 flex  space-x-4 items-center cursor-pointer">
                <div class="p-3">
                    <div class="bg-gray-900 shadow-md rounded-xl p-4 text-gray-50 hover:bg-gray-700 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16">
                            <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                            <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                    </div>
                </div>

                <div class="p-3 flex flex-col">
                    <div class="text-4xl md:text-5xl font-bold">
                        {{ $applicationsCount }}
                    </div>
                    
                    <div class="text-xs font-bold italic">
                        Applications
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/4 p-4">
            <div class="w-full h-full rounded-xl bg-gray-50 shadow-lg p-5 flex  space-x-4 items-center justify-between cursor-copy">
                <div class="p-3 flex flex-col">
                    <div class="text-xl md:text-3xl font-bold flex py-2">
                        Approved
                    </div>
                    
                    <div class="text-xs font-bold italic">
                        {{ $approvedApplications['count'] }}
                    </div>
                </div>

                <div class="p-3">
                    <div class="bg-gray-900 rounded-full shadow-md p-2 hover:bg-gray-700 transition">
                        <div class="radial-progress text-gray-50 h-[60pt] w-[60pt]" style="--value:{{ $approvedApplications['percentage'] }};" role="progressbar">
                            {{ round($approvedApplications['percentage'], 2) }}%
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="w-full md:w-1/4 p-4">
            <div class="w-full h-full rounded-xl bg-gray-50 shadow-lg p-5 flex  space-x-4 items-center justify-between cursor-wait">
                <div class="p-3 flex flex-col">
                    <div class="text-xl md:text-3xl font-bold flex py-2">
                        On-hold
                    </div>
                    
                    <div class="text-xs font-bold italic">
                        {{ $pendingApplications['count'] }}
                    </div>
                </div>

                <div class="p-3">
                    <div class="bg-gray-900 rounded-full shadow-md p-2 hover:bg-gray-700 transition">
                        <div class="radial-progress text-gray-50 h-[60pt] w-[60pt]" style="--value:{{ $pendingApplications['percentage'] }};" role="progressbar">
                            {{ round($pendingApplications['percentage'], 2) }}%
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full md:w-1/4 p-4">
            <div class="w-full h-full rounded-xl bg-gray-50 shadow-lg p-5 flex  space-x-4 items-center justify-between cursor-wait">
                <div class="p-3 flex flex-col">
                    <div class="text-xl md:text-3xl font-bold flex py-2">
                        Rejected
                    </div>
                    
                    <div class="text-xs font-bold italic">
                        {{ round($rejectedApplicationsCount, 2) }}
                    </div>
                </div>

                <div class="p-3">
                    <div class="bg-gray-900 rounded-full shadow-md p-2 hover:bg-gray-700 transition">
                        <div class="radial-progress text-gray-50 h-[60pt] w-[60pt]" style="--value:{{ $rejectedApplicationsPercent }};" role="progressbar">
                            {{ round($rejectedApplicationsPercent, 2) }}%
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="w-full flex justify-between flex-col md:flex-row space-y-4 md:space-y-0">
        <div class="w-full md:w-1/2 p-4 h-full">
            <div class="bg-gray-50 shadow-lg p-5 rounded-2xl h-full w-full">
                <div class="w-full h-full rounded-xl flex space-x-4 items-center justify-between">
                    <div class="p-3 font-bold">
                        Pending Applications
                    </div>
                    
                    <div class="p-3">
                        <div class="rounded-lg p-2 text-gray-900 hover:bg-gray-900 hover:text-gray-50 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ui-checks" viewBox="0 0 16 16">
                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <div class="w-full p-4 shadow rounded-xl overflow-x-auto ">
                    <table class="table table-auto text-sm w-full text-left">
                        <thead>
                            <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-gray-900">
                                <th class="p-2">S/N</th>
                                <th class="p-2">User</th>
                                <th class="p-2">Amount</th>
                                <th class="p-2">Interest</th>
                                <th class="p-2">Trx ID</th>
                                <th class="p-2">Due Date</th>
                                <th class="p-2">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $pendingAppID = 0; ?>
                            @foreach($pendingApplications['list'] as $apps)
                            
                                <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-xs">
                                    <td class="p-2">{{++ $pendingAppID}}</td>
                                    <td class="p-2">{{ $apps['applicant'] }}</td>
                                    <td class="p-2">&#8358;{{ number_format($apps['amount']) }}</td>
                                    <td class="p-2">&#8358;{{ number_format($apps['interest']) }}</td>
                                    <td class="p-2">
                                        <div class="flex items-center py-2 space-x-4 w-auto">
                                            <div>
                                                {{ Str::limit($apps['app_id'], 10) }}
                                            </div>
                                            <div>
                                                <button onclick="copy('{{ $apps['app_id'] }}')" class="rounded-md bg-gray-900 p-2 text-gray-200 hover:text-white hover:bg-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">{{ $apps['due_date'] }}</td>
                                    <td class="p-2 font-bold">
                                        <div class="flex justify-around items-center space-x-4">
    
                                            <button onclick="deleteLoanRequest('{{ $apps['app_id'] }}')" class="bg-red-600 rounded-lg p-2 text-xs text-gray-300 hover:text-white hover:bg-gray-700 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-4 h-full">
            <div class="bg-gray-50 shadow-lg p-5 rounded-2xl w-full h-full">
                <div class="w-full h-full rounded-xl flex space-x-4 items-center justify-between">
                    <div class="p-3 font-bold">
                        Apply for a loan
                    </div>
                    
                    <div class="p-3">
                        <div class="rounded-lg p-2 text-gray-900 hover:bg-gray-900 hover:text-gray-50 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <div class="w-full p-4 shadow rounded-xl overflow-x-auto ">
                    <form class="table table-auto text-sm w-full text-left" class="application_form">
                        <div class="w-full py-1 flex justify-between flex-wrap">
                            <div class="w-full py-2 md:w-1/2 px-2">
                                <div class="font-bold text-sm italic">
                                    Lender Information
                                </div>
                                <select type="number" name="interest" class="w-full px-3 py-2 text-sm border-0 shadow-lg  rounded-lg interest" required>
                                    <option>Choose Lender</option>
                                    <option value="20">Fairmoney (20% Interest, 350 Minimum Credit Score)</option>
                                    <option value="10">Monie Point (10% Interest, 100 Minimum Credit Score)</option>
                                    <option value="10">Carbon (10% Interest, 100 Minimum Credit Score)</option>
                                    <option value="10">Branch (10% Interest, 100 Minimum Credit Score)</option>
                                    <option value="10">Okash (10% Interest, 100 Minimum Credit Score)</option>
                                <select>
                            </div>
                            
                            <div class="w-full py-2 md:w-1/2 px-2">
                                <div class="font-bold text-sm italic">
                                    Loan Amount
                                </div>
                                <input type="number" name="amount" class="w-full px-3 py-2 text-sm border-0 shadow-lg  rounded-lg amount" placeholder="Enter the loan amount here" required autocomplete="" />
                            </div>
                        </div>

                        <div class="w-full py-1 flex justify-between flex-wrap">
                            <div class="w-full py-2 px-2">
                                <div class="font-bold text-sm italic">
                                    Loan Duration
                                </div>
                                {{-- <select type="number" name="duration" class="w-full px-3 py-2 text-sm border-0 shadow-lg  rounded-lg duration" required>
                                    <option>Choose Preferred Repayment Duration</option>
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Month</option>
                                    <option value="3">3 Month</option>
                                    <option value="4">4 Month</option>
                                    <option value="5">5 Month</option>
                                    <option value="6">6 Month</option>
                                    <option value="12">1 Year</option>
                                    <option value="24">2 Year</option>
                                    <option value="36">3 Year</option>
                                <select> --}}

                                <input type="date" name="duration" class="w-full px-3 py-2 text-sm border-0 shadow-lg  rounded-lg duration" required>
                            </div>
                        </div>

                        <div class="w-full">
                            <button type="button" onclick="processTrx()" class="loan-app-btn bg-slate-800 px-5 py-3 rounded-md text-slate-100 hover:text-slate-50 hover:bg-slate-700 flex items-center justify-center space-x-3">
                                <div class="apply-loan-btn">
                                    Connect Wallet
                                </div>
                                <div class="hidden application-loader">
                                    <div class="w-[15pt] h-[15pt] rounded-full border-2 border-gray-300 border-r-0 border-t-0 animate-spin">
                                        
                                    </div>
                                </div>
                            </button>
                        </div>

                        <script>

                            function toggleAppBtnClass (text, class1, class2) {
                                $('.apply-loan-btn').html(text)
                                $('.apply-loan-btn').hasClass(class1)
                                $('.apply-loan-btn').removeClass(class1)

                                $('.apply-loan-btn').hasClass(class2)
                            }
                            
                            $('document').ready(() => {
                                const account = localStorage.getItem('account')
                                if(account != undefined){
                                    console.log(account)
                                    toggleAppBtnClass('Apply', 'connect-wallet', 'strt-app')
                                    $('.interest').prop('disabled', false)
                                    $('.duration').prop('disabled', false)
                                    $('.amount').prop('disabled', false)
                                }
                                else{
                                    toggleAppBtnClass('Connect Wallet', 'strt-app', 'connect-wallet')
                                    $('.interest').prop('disabled', true)
                                    $('.duration').prop('disabled', true)
                                    $('.amount').prop('disabled', true)
                                }
                            })

                            async function connectWallet () {
                                try{
                                    window.eth.walletConnect().then(() => {
                                        toggleAppBtnClass('Apply', 'connect-wallet', 'strt-app')

                                        $('.interest').prop('disabled', false)
                                        $('.duration').prop('disabled', false)
                                        $('.amount').prop('disabled', false)
                                    })
                                }
                                catch(e){
                                    console.log(e)
                                }
                            }

                            function pushLoanApp2DB (data) {
                                $('.application-loader').show()
                                try{
                                    $.ajax({
                                        url: '/api/applications/create',
                                        type: 'get',
                                        data: data,
                                        success: res => {
                                            console.log(res)
                                            
                                            if(res.status === 201){
                                                alert(res.message)
                                                window.location.reload()
                                            }
                                            else if(res.status === 400 || res.status === 500){
                                                alert("An error occurred while processing your application")
                                                
                                                setTimeout(() => {
                                                    $('.application-loader').hide() 
                                                }, 2000);
                                            }
                                            else{
                                                alert("An unknown error has prevented your application from going throough. Please contact the customer care for support")

                                                setTimeout(() => {
                                                    $('.application-loader').hide() 
                                                }, 2000);
                                            }
                                        }
                                    })
                                }
                                catch(e){
                                    console.log("Request error")

                                    setTimeout(() => {
                                        $('.application-loader').hide() 
                                    }, 2000);
                                }
                            }

                            async function verifyCreditScore(){
                                const creditScore = await window.eth.checkCreditScore();

                                return creditScore
                            }

                            async function takeLoan(amount, when, interest, lateRepaymentFee){
                                const response = await window.eth.takeLoan(amount, when, interest, lateRepaymentFee);

                                return response;
                            }

                            async function processLoanApp () {
                                
                                try{
                                    const rawData = {
                                        duration: $('.duration').val(),
                                        amount: $('.amount').val(),
                                        interest: $('.interest').val(),
                                    }

                                    const initDate = `${rawData.duration}`
                                    const date = new Date(initDate).getTime();
                                    console.log(date) ;

                                    const response = await takeLoan(rawData.amount, date, rawData.interest, 100);

                                    console.log(response)
                                    // return ;
                                    const data = rawData
                                    data.hash = response.transactionHash
                                    
                                    console.log(data)

                                    pushLoanApp2DB(data)  
                                    
                                    

                                    setTimeout(() => {
                                        $('.application-loader').hide() 
                                    }, 2000);
                                }
                                catch(e){
                                    console.log(e)

                                    $('.application-loader').hide()
                                }
                            }
                            
                            function processTrx() {
                                $('.application-loader').show()
                                
                                const session = localStorage.getItem('account')
                                
                                session ? processLoanApp() : connectWallet();
                                
                                return false;
                            }
                        </script>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="w-full md:w-full p-4">
            <div class="bg-gray-50 shadow-lg p-5 rounded-2xl">

                <div class="w-full h-full rounded-xl flex space-x-4 items-center justify-between">
                    <div class="p-3 font-bold">
                        Previous Applications <span class="text-xs">(Last 20 Loan Applications)</span>
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
                    const findTrx = async () =>{

                        try{
                        
                            const searchTerm = $('.search-keyword').val();

                            const appSearchUrl = `/api/applications/find/${searchTerm}`
                            const resRaw = await fetch(appSearchUrl)
                            const res = await resRaw.json()


                            $('.applications-table-body').html('')

                            $('.applications-table-caption').html(
                                res.status === 404 ? "Could not find any application matching your request" : res.method
                            )

                            res.message.map((trx, index) => {
                                $('.applications-table-body').append(`
                                    <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-xs">
                                        <td class="p-2">${ ++index }</td>
                                        <td class="p-2">${ trx.applicant}</td>
                                        <td class="p-2">&#8358;${Number(trx.amount).toLocaleString()}</td>
                                        <td class="p-2">&#8358;${Number(trx.interest).toLocaleString()}</td>
                                        <td class="p-2">
                                            <div class="flex items-center py-2 space-x-4 w-auto">
                                                <div>
                                                    ${trx.app_id.substr(0,5)}...${trx.app_id.substr(-5) }
                                                </div>
                                                <div>
                                                    <button onclick="copy('${ trx.app_id }')" class="rounded-md bg-gray-900 p-2 text-gray-200 hover:text-white hover:bg-gray-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2">${ trx.created_at }</td>
                                        <td class="p-2">${ trx.due_date }</td>
                                        <td class="p-2 font-bold italic text-${ trx.status === 'pending' ? 'gray' : (trx.status === 'confirmed' ? 'green' : 'red') }-600">
                                            ${ trx.status }
                                        </td>
                                    </tr>
                                `)
                            })

                            console.log(res)

                        }
                        catch(e){
                            console.log(e)
                        }

                        return;
                    }
                </script>
                
                <div class="w-full py-3">
                    <form methd="get" class="search-trx" onsubmit="findTrx()">
                        <div class="py-3 rounded-lg flex w-full md:w-1/3">
                            <input type="text" class="search-keyword p-3 rounded-l-lg shadow-lg border-gray-300 bg-white text-sm text-gray-800 w-full" placeholder="Enter Transaction ID" />
                            <button type="button" onclick="findTrx()" class="bg-gray-900 shadow-lg rounded-r-lg p-3 px-5 text-sm text-gray-300 hover:text-white cursor-pointer font-bold hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="w-full p-4 shadow rounded-xl overflow-x-auto ">

                    <div class="applications-table-caption py-3 w-full font-semibold italic text-xs uppercase">

                    </div>
                    
                    <table class="table table-auto text-sm w-full text-left">
                        <thead>
                            <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-gray-900">
                                <th class="p-2">S/N</th>
                                <th class="p-2">User</th>
                                <th class="p-2">Amount</th>
                                <th class="p-2">Interest</th>
                                <th class="p-2">Trx ID</th>
                                <th class="p-2">Application Date</th>
                                <th class="p-2">Due Date</th>
                                <th class="p-2">Status</th>
                            </tr>
                        </thead>

                        <tbody class="applications-table-body">
                            <?php $allAppID = 0; ?>

                            @foreach($approvedApplications['list'] as $apps)
                            
                                <tr class="border-b-2 border-gray-300 hover:bg-gray-200 cursor-pointer text-xs">
                                    <td class="p-2">{{++ $allAppID}}</td>
                                    <td class="p-2">{{ $apps['applicant'] }}</td>
                                    <td class="p-2">&#8358;{{ number_format($apps['amount']) }}</td>
                                    <td class="p-2">&#8358;{{ number_format($apps['interest']) }}</td>
                                    <td class="p-2">
                                        <div class="flex items-center py-2 space-x-4 w-auto">
                                            <div>
                                                {{ Str::limit($apps['app_id'], 10) }}
                                            </div>
                                            <div>
                                                <button onclick="copy('{{ $apps['app_id'] }}')" class="rounded-md bg-gray-900 p-2 text-gray-200 hover:text-white hover:bg-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2">{{ $apps['created_at'] }}</td>
                                    <td class="p-2">{{ $apps['due_date'] }}</td>
                                    <td class="p-2 font-bold italic text-{{ $apps['status'] === 'pending' ? 'gray' : ($apps['status'] === 'confirmed' ? 'green' : 'red') }}-600">
                                        {{ $apps['status'] }}
                                    </td>
                                </tr>

                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-user-layout>