import { Web3 } from 'web3'

import ABI from './abi/abi.json'
// require('./abi/abi.json')

const contractAddr = '0xC145027857072FCCf11C98eE09f3Fc22dEC94E83'

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

export const walletConnect = async () => {
    
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

export const sessionCheck = async () => {
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

export const connect2contract = () => {
    const abi = ABI.abi;

    const contract = new web3.eth.Contract(abi, contractAddr)

    return contract
}


export const checkCreditScore = async () => {
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

export const takeLoan = async(amount, repaymentDate, interestRate, lateRepaymentFees) => {
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

const repayLoan = async () => {
    try{
        if(sessionCheck){
            const account = localStorage.getItem('account')
            const contract = await connect2contract();
            const methods = contract.methods;

            const response = await methods.repayLoan().send({
                from : account
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

window.eth = {
    session,
    checkCreditScore,
    connect2contract,
    walletConnect,
    takeLoan,
    repayLoan
}


// loan application. Triggers when application button is clicked