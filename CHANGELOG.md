![IOTA.php](./help/images/IOTA_PHP_Banner_Interact.png)

<p style="text-align:center;">
  <a href="https://discord.iota.org/" style="text-decoration:none;"><img src="https://img.shields.io/badge/Discord-9cf.svg?style=social&logo=discord" alt="Discord"></a>
  <a href="https://twitter.com/IOTAphp/" style="text-decoration:none;"><img src="https://img.shields.io/badge/Twitter-9cf.svg?style=social&logo=twitter" alt="Twitter"></a>
  <br>
  <a href="https://github.com/iota-community/iota.php/LICENSE" style="text-decoration:none;"><img src="https://img.shields.io/badge/license-Apache--2.0-green?style=flat-square" alt="Apache-2.0 license"></a>
  <a href="https://www.iota.org/" style="text-decoration:none;"><img src="https://img.shields.io/badge/IOTA-lightgrey?style=flat&logo=iota" alt="IOTA"></a>
  <a href="https://www.php.net/" style="text-decoration:none;"><img src="https://img.shields.io/badge/PHP->= 8.x-blue?style=flat-square&logo=php" alt=">PHP 8"></a>
  <img src="https://github.com/iota-community/iota.php/actions/workflows/phpunit.yml/badge.svg" alt="WorkflowUnitTest">
  <a href="https://packagist.org/packages/iota-community/iota.php/" style="text-decoration:none;"><img src="https://poser.pugx.org/iota-community/iota.php/v/stable.png" alt=">packagist_stable"></a>
</p>

# Changelog
## 1.5.1 - 2022-07-11
Lib Update

### Added

- Example: 06_sendTokenAndCheckTranscation

### Changed

- SingeNodeClient, network is now public

## 1.5 - 2022-05-16
 Lib stable release

---

## 0.5.5 - 2022-02-07
Lib Update (fix)

### Changed

- fix: ($value) must be of type Countable|array, IOTA\Api\ResponseArray given
- example update: 05_fetchMessage 

## 0.5.4 - 2022-02-06
Lib Update

### Added

- Example: SingleNodeClient 10_getOutput.php

### Changed

- sendTokens now check output type 1 if 0 is empty
- fix docs
- fix Identity check messageIds


## 0.5.3 - 2022-01-24
Lib Update

### Added

- JSON: ArrayAccess
- Converter: add methods string2Int, string2UInt16, string2BigInt
- Ed25519Address: add method toAddressBase58
- Converter: add method xorBytes

### Changed

- ApiCaller: fetchJSON returns JSON width useJSONHandler = false
- JSON: new methods to call as Array
- Network: switch default Network to "devnet"
- ApiCaller: update default value from $route 
- Models/TraitSerializer: calls Converter methods
- UnitTest: FaucetClientTest add new Ouput Message
- Wallet : add method subSeed to create a subSeed from the Seed
- Wallet: fix docs
- ApiCaller: param (bool)useJSONHandler
- Ed25519Seed: Input now allows base58 decoded input
- Ed25519: statics now public

## 0.5.2 - 2022-01-20
Api Update

### Added

- Api/ResponseArray

### Changed

- Api now uses ResponseArray (Object) instead of array
- Example SingleNodeClient/02_getNodeInfo

## 0.5.1 - 2022-01-05
Network Update

### Added

- IOTA 1.5 Comnet
- Faucet setting to network class

### Changed

- set comnet as default network (reason: PoW is disabled in default devnet node)
- binding faucet api call to network class


## 0.5.0 - 2021-12-29
Interact with an IOTA PermaNode (Chronicle)

### Added

- PermaNodeClient (Interact with Chronicle API)

  (health, info, message, messageFind, messageChildren, messageMetadata, milestone, output)

 
- Examples (PermaNodeClient)
  - 01_getNodeHealth 
  - 02_getNodeInfo 
  - 04_getMessage 
  - 05_fetchMessage 
  - 09_getMilestone 

### Changed

- ApiCaller (new array key "code")
- [Help (Index)](./help/000_index.md)
- [README](./README.md)

# Changelog
## 0.4.2 - 2021-12-12
Library update 

### Added

- example DIDmnemonic
- Wrapper for Mnemonic, Ed25519Seed
- DID conflict error

### Changed

- update help (mnemonic example)
- use object (Util\Keys) instead of array
- remove ':test' method form DID scheme
- change readme banner
- fix composer.json (case sensitive)

# Changelog
## 0.4.1 - 2021-10-05
TESTNET to DEVNET update

### Changed

- Network class
- SingleNodeClient
- FaucetClient
- Unit tests

## 0.4.0 - 2021-09-06
Iota DID, create/manipulate/verify IOTA Identity.

### Added

- Identity classes
- Canonicalie JSON
- decode, encode base58
- Util Keys
- Identity examples
- Identity help

### Changed

- Help
- Check the parameters if isHex
- Keypair from Seed > 64 

## 0.3.0 - 2021-07-25
Connects you to the testnet / mainnet more easily and automatically has the settings for the node, explorer and bech32HRP.

### Added

- Util\Network class

### Changed

- SingeNodeClient
- Builder
- unitTests
  
## 0.2.3 - 2021-07-12

### Added

- get Historic Balances
  - Add new Wallet/Address method
  - Add Example Wallet/05_WalletGetHistoricBalances
  - Add Help Wallet/020_examples_wallet_getHistoricBalance

### Changed

- checkTransactionTest 
  - ResponseError

## 0.2.2 - 2021-07-01

### Added

- Helper\Amount

### Changed

- Helper\ApiCaller default timeout = 30
- FaucetClient timeout handle

  
## 0.2.1 - 2021-06-30

### Added

- Wallet Help
  - useWallet
  - searchWalletAddress
  - sendTokens
  
### Changed

- searchAddresses
  - zeroBalance default to false

## 0.2.0 - 2021-06-30

### Added

- Wallet class
  - address management
  - get balance over Wallet\Address 
  - send tokens over Wallet\Address 
  - address Searcher
  
- Wallet examples

## 0.1.0 - 2021-06-28

### Added

- Builder
- iota.phar
- phpunit tests
- autoloader.php
- composer.json

### Changed

- New [Iota.php](https://github.com/iota-community/iota.php) lib structure
- New [example](./examples) structure
- [Iota.php Help](./help/000_index.md)

### Removed

- Old lib structure
- Old example structure
- client/Api