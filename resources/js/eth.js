import { Web3 } from 'web3'

import ABI from './abi/abi.json'
// require('./abi/abi.json')

const checkMetamask = () => {
    if(window.ethereum == undefined){
        alert("Please install metamask on your browser first")
        return ;
    }
}

const init = () => {
    checkMetamask();

    const { ethereum } = window;
    const web3 = new Web3(ethereum)

    console.log(web3)

    window.web3 = web3;
}

const walletConnect = async () => {
    
    checkMetamask()

    if(session ===  null){
        const { ethereum } = window;
    
        const accounts = await ethereum.request({
            method: 'eth_requestAccounts'
        })
        const account = accounts[0]
        
        localStorage.setItem('account', account)
    }
    else{
        console.log(session)
    }

}

const sessionCheck = async () => {
    const acct = await web3.eth.getAccounts();

    if(acct.length >= 1){
        localStorage.setItem('account', acct[0])
        return acct
    }
    else{
        localStorage.removeItem('account')
        return null;
    }
}

const connect2contract = () => {
    const abi = ABI.abi;
    const contractAddr = '0xccb1CFAeA7EB09f6381e66aD47d2983f14663B27'

    const contract = new web3.eth.Contract(abi, contractAddr)

    return contract
}


const checkCreditScore = async () => {
    if(sessionCheck){
        // const web3 = window.web3;
        const account = localStorage.getItem('account')

        const contract = await connect2contract();

        const methods = contract.methods;
        
        const takeLoan = await methods.requestLoan()
        
        console.log(methods)
        
        return ;
    }
    else{
        alert("Please connect your metamask wallet first")
    }
}

const takeLoan = async(amount, repaymentDate, interestRate, lateRepaymentFees) => {
    try{
        if(sessionCheck){
            const account = localStorage.getItem('account')

            const contract = await connect2contract();

            const methods = contract.methods;
            
            const response = await methods.requestLoan(amount, repaymentDate, interestRate, lateRepaymentFees).send({
                from: account,
                amount,
                repaymentDate,
                interestRate,
                lateRepaymentFees
            })
            return response;
        }
        else{
            alert("Please connect your metamask wallet first")
        }
    }
    catch(e){
        console.log(e)
    }
}


init();
// getAccount()
sessionCheck();

const session = await sessionCheck();


$('loan-app-btn ').click(() => {
    if(!session) walletConnect();
})

window.eth = {
    session,
    checkCreditScore,
    connect2contract,
    walletConnect,
    takeLoan
}


// loan application. Triggers when application button is clicked