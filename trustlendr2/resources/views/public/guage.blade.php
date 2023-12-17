<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="cs.css">
    <link rel="stylesheet" href="score.css">

    <title>Creditscore</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light main-header sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="">
                <img src="" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto our-primary-menu">
                    <li><a href="index.html">Home</a>
                        <ul>
                            <li><a href="#">Personal</a></li>
                            <li><a href="#">Administrative Wing</a></li>
                        </ul>

                    </li>
                    <li><a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#contact">About</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#loan">Loan Calculator</a></li>
                            <li><a href="#loan">Apply Now</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a>
                        <ul>
                            <li><a href="#">Credit reports </a></li>
                            <li><a href="#">Policy</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Block-chain</a>
                        <ul>
                            <li><a href="score.html">Get your ID</a></li>
                            <li><a href="#">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="header-info d-flex align-items-center">
                    <div class="header-search">
                        <span><i class="fas fa-search"></i></span>
                    </div>
                    <div class="header-call clearfix">
                        <div class="header-call-icon float-left mr-3 h-100">
                            <span><i class="fas fa-phone-volume"></i></span>
                        </div>
                        <div class="header-call-info">
                            <span class="d-block">Call</span>
                            <a class="d-block" href="tel:+2347034522345">+2347034522345</a>
                        </div>
                    </div>
                    <div class="header-button">
                        <button class="btn btn-primary" onclick="openForm()">Enter details</button>

                    </div>
                </div>
            </div>
        </div>
    </nav>
     <section class="slider-section">
      
    </section>
    
    <script>
        async function creditScore() {
        const { ethereum } = window

            const web3 = new Web3(ethereum)
            const abi = {"_format":"hh-sol-artifact-1","contractName":"TrustLendr","sourceName":"contracts/TrustLendr.sol","abi":[{"inputs":[{"internalType":"address","name":"_owner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"borrower","type":"address"},{"indexed":false,"internalType":"uint256","name":"newCreditScore","type":"uint256"}],"name":"CreditScoreUpdated","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"borrower","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"repaymentDate","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"lateRepaymentFee","type":"uint256"}],"name":"LoanRepaid","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"borrower","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"repaymentDate","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"lateRepaymentFee","type":"uint256"}],"name":"LoanRequested","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"creditScores","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"getUserData","outputs":[{"internalType":"uint256[4]","name":"","type":"uint256[4]"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"lateRepaymentFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"loanAmounts","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"loanRepaymentDates","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"repayLoan","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_amount","type":"uint256"},{"internalType":"uint256","name":"_repaymentDate","type":"uint256"},{"internalType":"uint256","name":"_interestRate","type":"uint256"},{"internalType":"uint256","name":"_lateRepaymentFee","type":"uint256"}],"name":"requestLoan","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"token","outputs":[{"internalType":"contract IERC20","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}],"bytecode":"0x60806040523480156200001157600080fd5b506040516200124a3803806200124a833981016040819052620000349162000267565b6040518060400160405280601081526020016f2a393ab9ba2632b73239102a37b5b2b760811b8152506040518060400160405280600381526020016215131560ea1b81525081600390816200008a91906200033e565b5060046200009982826200033e565b5050600680546001600160a01b0319166001600160a01b038416908117909155620000eb9150620000c8601290565b620000d590600a6200051f565b620000e590633b9aca0062000530565b620000f2565b5062000560565b6001600160a01b038216620001225760405163ec442f0560e01b8152600060048201526024015b60405180910390fd5b620001306000838362000134565b5050565b6001600160a01b038316620001635780600260008282546200015791906200054a565b90915550620001d79050565b6001600160a01b03831660009081526020819052604090205481811015620001b85760405163391434e360e21b81526001600160a01b0385166004820152602481018290526044810183905260640162000119565b6001600160a01b03841660009081526020819052604090209082900390555b6001600160a01b038216620001f55760028054829003905562000214565b6001600160a01b03821660009081526020819052604090208054820190555b816001600160a01b0316836001600160a01b03167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef836040516200025a91815260200190565b60405180910390a3505050565b6000602082840312156200027a57600080fd5b81516001600160a01b03811681146200029257600080fd5b9392505050565b634e487b7160e01b600052604160045260246000fd5b600181811c90821680620002c457607f821691505b602082108103620002e557634e487b7160e01b600052602260045260246000fd5b50919050565b601f8211156200033957600081815260208120601f850160051c81016020861015620003145750805b601f850160051c820191505b81811015620003355782815560010162000320565b5050505b505050565b81516001600160401b038111156200035a576200035a62000299565b62000372816200036b8454620002af565b84620002eb565b602080601f831160018114620003aa5760008415620003915750858301515b600019600386901b1c1916600185901b17855562000335565b600085815260208120601f198616915b82811015620003db57888601518255948401946001909101908401620003ba565b5085821015620003fa5787850151600019600388901b60f8161c191681555b5050505050600190811b01905550565b634e487b7160e01b600052601160045260246000fd5b600181815b80851115620004615781600019048211156200044557620004456200040a565b808516156200045357918102915b93841c939080029062000425565b509250929050565b6000826200047a5750600162000519565b81620004895750600062000519565b8160018114620004a25760028114620004ad57620004cd565b600191505062000519565b60ff841115620004c157620004c16200040a565b50506001821b62000519565b5060208310610133831016604e8410600b8410161715620004f2575081810a62000519565b620004fe838362000420565b80600019048211156200051557620005156200040a565b0290505b92915050565b60006200029260ff84168362000469565b80820281158282048414176200051957620005196200040a565b808201808211156200051957620005196200040a565b610cda80620005706000396000f3fe608060405234801561001057600080fd5b506004361061010b5760003560e01c8063753c7ff9116100a2578063a9059cbb11610071578063a9059cbb1461024f578063dd62ed3e14610262578063f966ade71461029b578063fc0c546a146102a3578063ffc9896b146102ce57600080fd5b8063753c7ff9146101f257806380bb7273146102075780638f78e2f01461022757806395d89b411461024757600080fd5b806323b872dd116100de57806323b872dd14610187578063313ce5671461019a5780636fd5eb73146101a957806370a08231146101c957600080fd5b806306fdde0314610110578063095ea7b31461012e57806311b032531461015157806318160ddd1461017f575b600080fd5b6101186102ee565b6040516101259190610aa6565b60405180910390f35b61014161013c366004610b10565b610380565b6040519015158152602001610125565b61017161015f366004610b3a565b600a6020526000908152604090205481565b604051908152602001610125565b600254610171565b610141610195366004610b5c565b61039a565b60405160128152602001610125565b6101716101b7366004610b3a565b60096020526000908152604090205481565b6101716101d7366004610b3a565b6001600160a01b031660009081526020819052604090205490565b610205610200366004610b98565b6103be565b005b610171610215366004610b3a565b60076020526000908152604090205481565b610171610235366004610b3a565b60086020526000908152604090205481565b6101186104da565b61014161025d366004610b10565b6104e9565b610171610270366004610bca565b6001600160a01b03918216600090815260016020908152604080832093909416825291909152205490565b6102056104f7565b6005546102b6906001600160a01b031681565b6040516001600160a01b039091168152602001610125565b6102e16102dc366004610b3a565b6105d2565b6040516101259190610bfd565b6060600380546102fd90610c2e565b80601f016020809104026020016040519081016040528092919081815260200182805461032990610c2e565b80156103765780601f1061034b57610100808354040283529160200191610376565b820191906000526020600020905b81548152906001019060200180831161035957829003601f168201915b5050505050905090565b60003361038e818585610636565b60019150505b92915050565b6000336103a8858285610648565b6103b38585856106c6565b506001949350505050565b600084116104095760405162461bcd60e51b8152602060048201526013602482015272125b9d985b1a59081b1bd85b88185b5bdd5b9d606a1b60448201526064015b60405180910390fd5b60006104158386610c7e565b61041f9086610c7e565b33600090815260086020908152604080832084905560098252808320889055600a8252808320869055600790915281205491925081900361047357336000908152600760205260409020610352905561048f565b61047e600a82610c91565b336000908152600760205260409020555b604080518381526020810187905290810184905233907f470e775e4fa2bd975947314dc912d0dd85338d809a6b967e36382e32a3b6f2bb9060600160405180910390a2505050505050565b6060600480546102fd90610c2e565b60003361038e8185856106c6565b33600090815260096020526040812054900361054b5760405162461bcd60e51b815260206004820152601360248201527227379037baba39ba30b73234b733903637b0b760691b6044820152606401610400565b336000818152600860205260409020549061056590610725565b33600081815260086020908152604080832083905560098252808320839055600a8252808320839055805185815242928101929092528101919091527f2cebe3c4a7e8e81ca2035a6cb3ee450bb6401d9b6636652e183583f047049572906060015b60405180910390a250565b6105da610a88565b6001600160a01b03821660009081526007602090815260408083205460088352818420546009845282852054600a909452919093205490919061061b610a88565b93845260208401929092526040830152606082015292915050565b6106438383836001610889565b505050565b6001600160a01b0383811660009081526001602090815260408083209386168352929052205460001981146106c057818110156106b157604051637dc7a0d960e11b81526001600160a01b03841660048201526024810182905260448101839052606401610400565b6106c084848484036000610889565b50505050565b6001600160a01b0383166106f057604051634b637e8f60e11b815260006004820152602401610400565b6001600160a01b03821661071a5760405163ec442f0560e01b815260006004820152602401610400565b61064383838361095e565b6001600160a01b03811660009081526009602052604090205415610886576001600160a01b0381166000908152600960205260409020544211156107cd576001600160a01b03811660009081526007602052604090205460321061078a5760006107af565b6001600160a01b0381166000908152600760205260409020546107af90603290610c91565b6001600160a01b0382166000908152600760205260409020556107fc565b6001600160a01b03811660009081526007602052604081208054601992906107f6908490610c7e565b90915550505b6001600160a01b038116600090815260076020526040902054610352101561083c576001600160a01b038116600090815260076020526040902061035290555b6001600160a01b0381166000818152600760209081526040918290205491519182527f79c012a0cfae660e09134956bc432c8497ec80e86a3a108d130e8b3fca52b3ad91016105c7565b50565b6001600160a01b0384166108b35760405163e602df0560e01b815260006004820152602401610400565b6001600160a01b0383166108dd57604051634a1406b160e11b815260006004820152602401610400565b6001600160a01b03808516600090815260016020908152604080832093871683529290522082905580156106c057826001600160a01b0316846001600160a01b03167f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b9258460405161095091815260200190565b60405180910390a350505050565b6001600160a01b03831661098957806002600082825461097e9190610c7e565b909155506109fb9050565b6001600160a01b038316600090815260208190526040902054818110156109dc5760405163391434e360e21b81526001600160a01b03851660048201526024810182905260448101839052606401610400565b6001600160a01b03841660009081526020819052604090209082900390555b6001600160a01b038216610a1757600280548290039055610a36565b6001600160a01b03821660009081526020819052604090208054820190555b816001600160a01b0316836001600160a01b03167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef83604051610a7b91815260200190565b60405180910390a3505050565b60405180608001604052806004906020820280368337509192915050565b600060208083528351808285015260005b81811015610ad357858101830151858201604001528201610ab7565b506000604082860101526040601f19601f8301168501019250505092915050565b80356001600160a01b0381168114610b0b57600080fd5b919050565b60008060408385031215610b2357600080fd5b610b2c83610af4565b946020939093013593505050565b600060208284031215610b4c57600080fd5b610b5582610af4565b9392505050565b600080600060608486031215610b7157600080fd5b610b7a84610af4565b9250610b8860208501610af4565b9150604084013590509250925092565b60008060008060808587031215610bae57600080fd5b5050823594602084013594506040840135936060013592509050565b60008060408385031215610bdd57600080fd5b610be683610af4565b9150610bf460208401610af4565b90509250929050565b60808101818360005b6004811015610c25578151835260209283019290910190600101610c06565b50505092915050565b600181811c90821680610c4257607f821691505b602082108103610c6257634e487b7160e01b600052602260045260246000fd5b50919050565b634e487b7160e01b600052601160045260246000fd5b8082018082111561039457610394610c68565b8181038181111561039457610394610c6856fea264697066735822122017d260b5ea4e1723aed8841fce16db329f11e78b47ce5c7627892b370d63e25f64736f6c63430008140033","deployedBytecode":"0x608060405234801561001057600080fd5b506004361061010b5760003560e01c8063753c7ff9116100a2578063a9059cbb11610071578063a9059cbb1461024f578063dd62ed3e14610262578063f966ade71461029b578063fc0c546a146102a3578063ffc9896b146102ce57600080fd5b8063753c7ff9146101f257806380bb7273146102075780638f78e2f01461022757806395d89b411461024757600080fd5b806323b872dd116100de57806323b872dd14610187578063313ce5671461019a5780636fd5eb73146101a957806370a08231146101c957600080fd5b806306fdde0314610110578063095ea7b31461012e57806311b032531461015157806318160ddd1461017f575b600080fd5b6101186102ee565b6040516101259190610aa6565b60405180910390f35b61014161013c366004610b10565b610380565b6040519015158152602001610125565b61017161015f366004610b3a565b600a6020526000908152604090205481565b604051908152602001610125565b600254610171565b610141610195366004610b5c565b61039a565b60405160128152602001610125565b6101716101b7366004610b3a565b60096020526000908152604090205481565b6101716101d7366004610b3a565b6001600160a01b031660009081526020819052604090205490565b610205610200366004610b98565b6103be565b005b610171610215366004610b3a565b60076020526000908152604090205481565b610171610235366004610b3a565b60086020526000908152604090205481565b6101186104da565b61014161025d366004610b10565b6104e9565b610171610270366004610bca565b6001600160a01b03918216600090815260016020908152604080832093909416825291909152205490565b6102056104f7565b6005546102b6906001600160a01b031681565b6040516001600160a01b039091168152602001610125565b6102e16102dc366004610b3a565b6105d2565b6040516101259190610bfd565b6060600380546102fd90610c2e565b80601f016020809104026020016040519081016040528092919081815260200182805461032990610c2e565b80156103765780601f1061034b57610100808354040283529160200191610376565b820191906000526020600020905b81548152906001019060200180831161035957829003601f168201915b5050505050905090565b60003361038e818585610636565b60019150505b92915050565b6000336103a8858285610648565b6103b38585856106c6565b506001949350505050565b600084116104095760405162461bcd60e51b8152602060048201526013602482015272125b9d985b1a59081b1bd85b88185b5bdd5b9d606a1b60448201526064015b60405180910390fd5b60006104158386610c7e565b61041f9086610c7e565b33600090815260086020908152604080832084905560098252808320889055600a8252808320869055600790915281205491925081900361047357336000908152600760205260409020610352905561048f565b61047e600a82610c91565b336000908152600760205260409020555b604080518381526020810187905290810184905233907f470e775e4fa2bd975947314dc912d0dd85338d809a6b967e36382e32a3b6f2bb9060600160405180910390a2505050505050565b6060600480546102fd90610c2e565b60003361038e8185856106c6565b33600090815260096020526040812054900361054b5760405162461bcd60e51b815260206004820152601360248201527227379037baba39ba30b73234b733903637b0b760691b6044820152606401610400565b336000818152600860205260409020549061056590610725565b33600081815260086020908152604080832083905560098252808320839055600a8252808320839055805185815242928101929092528101919091527f2cebe3c4a7e8e81ca2035a6cb3ee450bb6401d9b6636652e183583f047049572906060015b60405180910390a250565b6105da610a88565b6001600160a01b03821660009081526007602090815260408083205460088352818420546009845282852054600a909452919093205490919061061b610a88565b93845260208401929092526040830152606082015292915050565b6106438383836001610889565b505050565b6001600160a01b0383811660009081526001602090815260408083209386168352929052205460001981146106c057818110156106b157604051637dc7a0d960e11b81526001600160a01b03841660048201526024810182905260448101839052606401610400565b6106c084848484036000610889565b50505050565b6001600160a01b0383166106f057604051634b637e8f60e11b815260006004820152602401610400565b6001600160a01b03821661071a5760405163ec442f0560e01b815260006004820152602401610400565b61064383838361095e565b6001600160a01b03811660009081526009602052604090205415610886576001600160a01b0381166000908152600960205260409020544211156107cd576001600160a01b03811660009081526007602052604090205460321061078a5760006107af565b6001600160a01b0381166000908152600760205260409020546107af90603290610c91565b6001600160a01b0382166000908152600760205260409020556107fc565b6001600160a01b03811660009081526007602052604081208054601992906107f6908490610c7e565b90915550505b6001600160a01b038116600090815260076020526040902054610352101561083c576001600160a01b038116600090815260076020526040902061035290555b6001600160a01b0381166000818152600760209081526040918290205491519182527f79c012a0cfae660e09134956bc432c8497ec80e86a3a108d130e8b3fca52b3ad91016105c7565b50565b6001600160a01b0384166108b35760405163e602df0560e01b815260006004820152602401610400565b6001600160a01b0383166108dd57604051634a1406b160e11b815260006004820152602401610400565b6001600160a01b03808516600090815260016020908152604080832093871683529290522082905580156106c057826001600160a01b0316846001600160a01b03167f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b9258460405161095091815260200190565b60405180910390a350505050565b6001600160a01b03831661098957806002600082825461097e9190610c7e565b909155506109fb9050565b6001600160a01b038316600090815260208190526040902054818110156109dc5760405163391434e360e21b81526001600160a01b03851660048201526024810182905260448101839052606401610400565b6001600160a01b03841660009081526020819052604090209082900390555b6001600160a01b038216610a1757600280548290039055610a36565b6001600160a01b03821660009081526020819052604090208054820190555b816001600160a01b0316836001600160a01b03167fddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef83604051610a7b91815260200190565b60405180910390a3505050565b60405180608001604052806004906020820280368337509192915050565b600060208083528351808285015260005b81811015610ad357858101830151858201604001528201610ab7565b506000604082860101526040601f19601f8301168501019250505092915050565b80356001600160a01b0381168114610b0b57600080fd5b919050565b60008060408385031215610b2357600080fd5b610b2c83610af4565b946020939093013593505050565b600060208284031215610b4c57600080fd5b610b5582610af4565b9392505050565b600080600060608486031215610b7157600080fd5b610b7a84610af4565b9250610b8860208501610af4565b9150604084013590509250925092565b60008060008060808587031215610bae57600080fd5b5050823594602084013594506040840135936060013592509050565b60008060408385031215610bdd57600080fd5b610be683610af4565b9150610bf460208401610af4565b90509250929050565b60808101818360005b6004811015610c25578151835260209283019290910190600101610c06565b50505092915050565b600181811c90821680610c4257607f821691505b602082108103610c6257634e487b7160e01b600052602260045260246000fd5b50919050565b634e487b7160e01b600052601160045260246000fd5b8082018082111561039457610394610c68565b8181038181111561039457610394610c6856fea264697066735822122017d260b5ea4e1723aed8841fce16db329f11e78b47ce5c7627892b370d63e25f64736f6c63430008140033","linkReferences":{},"deployedLinkReferences":{}}

            const contractAddr = "0x7F0f989D3F14D925475AB510170537b5ed27A94C"
            const accounts = await ethereum.request({
                method: 'eth_requestAccounts'
            })

            

            const account = accounts[0]
            const acct = document.getElementById('wallet_id').value;
            console.log(acct)
            
            // const contract = new web3.eth.Contract(abi.abi, contractAddr)
            
            // const cMethods = contract.methods

            // console.log(cMethods)
            // const score = await cMethods.getUserData(account).call();

            if(!score){
                scoreForChat = 850;
            }
            else{
                scoreForChat = await score[0]
            }

            console.log(await scoreForChat)
        }
    </script>
    
    <section class="guage">
        <div class="form-popup" id="myForm">
            <form id="form" class="form-container">
                <h6>get your credit score </h6>
                <label for="name"><b>Fullname</b></label>
                <input type="text" placeholder="Enter full name" name="name" required>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
        
                <label for="psw"><b>Wallet Address/Blockchain ID</b></label>
                <input type="password" placeholder="Enter" name="psw" required>
        
                <button type="button" id="connectButton" onclick="connectWallet()" class="btn">
                    Connect Wallet
                </button>
                
                <button type="submit" class="bg-blue-600 p-2 text-blue-100 font-bold rounded-lg retrieve-score" id="submitbutton" style="display: none">Submit</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                <p id="error-text"></p>
            </form>
        </div>
      
        <div class="guage-popup form-container" id="guage">
            <div class='centered-box'>
                <div class="gauge-box" id="gauge-box" data-percent=''>
                    <svg version="1.1" class="gauge-meter-chart" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 51"
                        style="enable-background:new 0 0 100 51;" xml:space="preserve">
                        <g class="meter">
                            <path class="p1" fill="#EA0000"
                                d="M4.1,31C2.6,34.6,1.6,38.5,1,42.4C0.5,45.9,3.2,49,6.7,49h0c2.8,0,5.3-2,5.7-4.8c0.4-3,1.2-6,2.3-8.7L4.1,31z" />
                            <path class="p-2" fill="#F7F616"
                                d="M14.7,14.9c-4.3,4.4-7.8,9.5-10.2,15.2l10.6,4.4c1.9-4.3,4.5-8.2,7.7-11.5L14.7,14.9z" />
                            <path class="p-3" fill="#F7F616"
                                d="M30.6,4c-5.7,2.4-10.9,5.9-15.2,10.2l8.1,8.1c3.3-3.2,7.2-5.9,11.5-7.7L30.6,4z" />
                            <path class="p-4" fill="#3CFF2A"
                                d="M49.5,0c-6.3,0.1-12.4,1.3-18,3.6l4.4,10.6c4.2-1.7,8.8-2.6,13.6-2.7V0z" />
                            <path class="p-5" fill="#3CFF2A"
                                d="M68.5,3.6c-5.6-2.2-11.6-3.5-18-3.6v11.5c4.8,0.1,9.4,1,13.6,2.7L68.5,3.6z" />
                            <path class="p-6" fill="#3CDD2A"
                                d="M84.6,14.2C80.3,9.9,75.1,6.4,69.4,4L65,14.6c4.3,1.9,8.2,4.5,11.5,7.7L84.6,14.2z" />
                            <path class="p-7" fill="#3CDD2A"
                                d="M95.5,30.1c-2.4-5.7-5.9-10.9-10.2-15.2L77.2,23c3.2,3.3,5.9,7.2,7.7,11.5L95.5,30.1z" />
                            <path class="p-8" fill="#1B5EB2"
                                d="M99,42.4c-0.6-4-1.6-7.8-3.1-11.4l-10.6,4.4c1.1,2.8,1.9,5.7,2.3,8.7C88,47,90.5,49,93.3,49h0C96.8,49,99.5,45.9,99,42.4z" />
                        </g>
                        <path class="pointer"
                            d="M51,47.3V18l1.7,0L50,13.1L47.3,18H49l0,29.3c-0.6,0.3-1,1-1,1.7c0,1.1,0.9,2,2,2s2-0.9,2-2C52,48.3,51.6,47.6,51,47.3z" />
                        <g class="flame-gauge">
                            <g class="flame">
                                <path class="flame-orange" fill="#FF7B00"
                                    d="M89.9,31.3c-0.8,2.1-1.8,4-2.4,6.1s-0.8,4.4,0,6.5c0.5,1.3,1.4,2.4,2.5,3.2c1.1,0.8,2.5,1.2,3.8,1.1c1.3-0.1,2.7-0.8,3.5-1.9c0.6-0.9,0.9-2,0.8-3.1c-0.1-1.1-0.4-2.2-0.9-3.1c-0.6-1.1-1.4-2.2-1.5-3.5c0-0.8,0.3-1.6,0.4-2.4c0.2-0.8,0.2-1.7-0.3-2.4c0.2,1.5-0.2,3.1-1.1,4.3c0.3-0.3,0-0.9-0.3-1.1c-0.3-0.3-0.7-0.5-1-0.9c-0.4-0.5-0.2-1.3,0-1.8c0.3-0.6,0.6-1.1,0.8-1.8c0.2-1-0.2-2-0.9-2.6c0.4,0.8,0.1,1.8-0.4,2.5c-0.5,0.8-1.1,1.4-1.3,2.3c-0.4-2.1,1.3-4.1,1-6.2c-0.1-1-0.9-2.1-1.8-2.5c0.1,0.5,0.3,0.9,0.4,1.4c0.1,0.6,0,1.4-0.1,2C90.9,28.7,90.4,30,89.9,31.3z" />
                                <path class="flame-yellow" fill="#FFDD00"
                                    d="M90.5,44.6c0.9,0.4,2.1,0.1,2.5-0.7s0-1.9-0.9-2.3c-0.3-0.1-0.6-0.2-0.9-0.3c-0.9-0.4-1.4-1.3-1.4-2.3c0-0.9,0.3-1.8,0.7-2.7c0.4-0.9,0.8-1.7,0.9-2.6c-0.4,1.6,0.1,3.3,1.3,4.5c0-0.4,0-0.7,0-1.1c0.8,0.7,1.6,1.5,2.3,2.3c0.7,0.9,1.2,1.8,1.4,2.9c0.2,1.3-0.1,2.8-1.2,3.7c-0.8,0.7-1.9,1-2.9,0.9c-1-0.1-2-0.7-2.5-1.6c-0.5-0.8-0.5-1.6-0.2-2.4C89.5,43.5,89.8,44.2,90.5,44.6z" />
                            </g>
                            <path class="f-p3" fill="#FF7B00"
                                d="M98,33c0.1-0.2,0.3-0.3,0.4-0.5c0.2-0.4,0.3-0.9,0-1.3c0.4,0.4,0.6,1,0.6,1.6c0,0.3,0,0.6-0.2,0.8c-0.1,0.2-0.5,0.4-0.7,0.2C97.9,33.6,97.9,33.1,98,33z" />
                            <path class="f-p2" fill="#FF7B00"
                                d="M95.1,25.7c0-0.2,0.1-0.4,0.1-0.7c0-0.4-0.2-0.9-0.6-1.2c0.5,0.2,1,0.6,1.2,1.1c0.1,0.2,0.2,0.5,0.2,0.8c0,0.2-0.3,0.6-0.5,0.5C95.3,26.2,95.1,25.9,95.1,25.7z" />
                            <path class="f-p1" fill="#FF7B00"
                                d="M88.2,28.8c-0.2-0.4-0.6-0.8-0.9-1.2c-0.5-0.8-0.6-2-0.1-2.8c-0.8,1-1.3,2.2-1.3,3.5c0,0.6,0.1,1.3,0.5,1.8c0.3,0.4,1.2,0.9,1.6,0.5C88.4,30.2,88.4,29.2,88.2,28.8z" />
                        </g>
                    </svg>
                </div>
            </div>
            <p id="guage-text"></p>
            <button onclick="closeGuage()">Close</button>
        </div>
        
    </section>
    <section class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <a
                                href="file:///C:/Users/IT-S/Desktop/Bootstrap%20v5%20Class+Display%20Flex%20Class/Day-33_All-Part.html"><img
                                    src="" alt="logo2"></a>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                            <div class="widget-social">
                                <ul>
                                    <li><span>Follow us:</span></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Our Performance</a></li>
                                <li><a href="#">Help (FAQ)</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h3>Other Resources</h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Business Loans</a></li>
                                <li><a href="#">Loan Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget" id="contact">
                            <h3>Contact Us</h3>
                            <div class="footer-contact">
                                <div class="footer-contact-item d-flex">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <a href="#">Gidan kwanu Minna </a>
                                </div>
                                <div class="footer-contact-item d-flex">
                                    <span><i class="fas fa-envelope    "></i></span>
                                    <a href="mailto:hello@finix.com">creditscore.com</a>
                                </div>
                                <div class="footer-contact-item d-flex">
                                    <span><i class="fas fa-phone-volume"></i></span>
                                    <a href="tel:+2347034522345">+2347034522345</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-copyright">
                            <p>Copyright @2023. Designed By <a href="">Developer bamidele</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="cs.js"></script>
    <script src="score.js"></script>
    <script src="jquery.js"></script>
   

    <script>
        async function doConnection() {
            localStorage.removeItem('account')
            
            const { ethereum } = window

            const accounts = ethereum.request({ method: 'eth_requestAccounts' })
            return accounts[0]
        }

        async function connectWallet() {
            const prevAccount = localStorage.getItem('account')
            
            if(!prevAccount){
                const account = await doConnection();
                localStorage.setItem('account', account)
                document.getElementById('submitbutton').style.display = "block"
                document.getElementById('connectButton').style.display = "none"
            }   
            

            if(localStorage.getItem('account')){
                document.getElementById('submitbutton').style.display = "block"
                document.getElementById('connectButton').style.display = "none"
            }

        }
        $('.retrieve-score').click(() => {
            console.log('connected')

        })
    </script>
    
</body>

</html>