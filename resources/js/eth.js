// import { Web3 } from 'web3'
import Web3 from 'https://cdn.jsdelivr.net/npm/web3@4.3.0/+esm'
// import { Core } from '@quicknode/sdk'

import ABI from './abi/abi.json'
// require('./abi/abi.json')

const contractAddr = '0x7F0f989D3F14D925475AB510170537b5ed27A94C'

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
            return null;
        }
    }
    
    catch(e){
        console.log(e)
        return null;
    }
}

async function processPayment (email, amount, trxId){
    let handler = PaystackPop.setup({
        key: "pk_test_15ad93662be3d2e11591b28bcf1c38771a17f503", // Replace with your public key
        // key: "pk_live_4015eb9337f3fb5b66bc3880d2c9fd2ab500d3f9", // Replace with your public key
        email,
        amount: amount* 100,
        ref: trxId + '-' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
          alert('Payment canceled');
          $('.repay-loader').hide()
        },
        callback: function(response){
            async function fullrequest(response){
                console.log(response);
    
                fetch(`/api/paystack/verify/${response.reference}/${amount* 100}`).then(async (data) => {
                    const res = await data.json()
                    
                    if(res.status === 200){
                        alert(res.message?.message)
                        
                        $('.repay-loader').show()
                        const repaid = await repayLoan()
                        console.log(repaid)
    
                    }
                    else{
                        alert(res.message)
                    }
                    
                    console.log(res)
                    return res.status
                })
            }

            fullrequest(response)
        }
    });

    handler.openIframe();
    
    return false;
}


init();
// getAccount()
sessionCheck();

const session = sessionCheck();

const wssp = "wss://yolo-long-bridge.ethereum-sepolia.quiknode.pro/59d8208336c5c501e6165aa40196daa3632b383e/", 
        httpp="https://yolo-long-bridge.ethereum-sepolia.quiknode.pro/59d8208336c5c501e6165aa40196daa3632b383e/"

function getTrxs(address){
    const core = new Core({
        endpointUrl: httpp,
        config: {
          addOns: {
            nftTokenV2: true,
          },
        },
      })
      
      core.client
          .qn_getTransactionsByAddress({
            address: address,
            perPage: 2,
          })
          .then(res => console.log(res))
}

window.eth = {
    session,
    checkCreditScore,
    connect2contract,
    walletConnect,
    takeLoan,
    repayLoan,
    web3Contract: connect2contract,
    pay: processPayment,
    getTrxs
}


// loan application. Triggers when application button is clicked