import { Web3 } from 'web3'

const checkConnection = () => {
    if(window.ethereum == undefined){
        alert("Please install metamask on your browser first")
        return ;
    }
}

const connect = () => {
    checkConnection();

    const { ethereum } = window;
    const web3 = new Web3(ethereum)

    console.log(web3)

    window.web3 = web3;
}

const getAccount = async () => {
    const { ethereum } = window;

    const accounts = await ethereum.request({
        method: 'eth_requestAccounts'
    })
    const account = accounts[0]

    localStorage.setItem('account', account)
}

connect();
getAccount()




// loan application. Triggers when application button is clicked