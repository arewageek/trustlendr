<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Sop\CryptoTypes\Asymmetric\EC\ECPublicKey;
// use Sop\CryptoTypes\Asymmetric\EC\ECPrivateKey;
// use Sop\CryptoEncoding\PEM;
// use kornrunner\Keccak;

// use BitcoinPHP\BitcoinECDSA\BitcoinECDSA;

// use kornrunner\Ethereum\Address;
use Web3\Web3;

class EthController extends Controller
{
    public function createID() {
        try{
            // $address = new Address();

            // return $address -> getPrivateKey();

            return $this -> randomIDGenerator();

        }
        catch(\Error $exception){
            return $exception;
        }
    }

    public function randomIDGenerator(){
        $id = "0x";

        $range_text = "1 2 3 4 5 6 7 8 9 0 p o i u y t r e w q a s d f g h j k l m n b v c x z Q W E R T Y U I O P L K J H G F D S A Z X C V B N M 1 2 3 4 5 6 7 8 9 0";
        $range = explode(" ",$range_text);
        
        for($count = 0; $count < 32; $count ++){
            $id .= $range[rand(0, count($range) - 1)];
        }

        return $id;
    }

    public function createWallet(){
        try{
            $web3 = new Web3('https://sepolia.infura.io/v3/85fb858128754127a2ff9929624e782f');

            $newWallet = $web3 -> eth() -> accounts();

            return ($newWallet);
        }
        catch(\Exception $exception){
            return ($exception);
        }
    }
}
