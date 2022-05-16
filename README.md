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

# About

PHP library to interact with an IOTA chrysalis SingleNode or PermaNode. Create, manipulate, verify IOTA DIDs. Create wallets, mnemonic, seeds, addresses. 

The aim of the IOTAphp lib is to offer PHP developers an easy way to interact with the IOTA chrysalis network. 

> This library is functionally complete, but it is recommended to use iota.rs. The rust library will be more heavily maintained and is more performant.

This library allows you to do the following:

#### Interact with an IOTA SingleNode (Hornet, Bee)
  - [x] Create messages with indexation 
  - [x] Create messages with transaction payloads (send Tokens)
  - [x] Get messages and outputs
#### Wallet/Crypto 
  - [x] Generate mnemonic, seeds, addresses
#### Interact with the IOTA Faucet Api 
  - [x] Get funds on devnet
#### Decentralized Identifiers (DID) 
  - [x] create, manipulate, verify
#### Interact with an IOTA PermaNode (Chronicle)
  - [x] Get messages and outputs

# Requirements

+ PHP 8+
+ PHP Extensions:
    + [ext-curl](http://php.net/manual/en/book.curl.php)
    + [ext-mbstring](http://php.net/manual/en/book.mbstring.php)
    + [ext-bcmath](http://php.net/manual/en/book.bc.php)
    + [ext-sodium](http://php.net/manual/en/book.sodium.php)

# Example

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
  // print result of node information
  echo $client->info();
```

# Using iota.php library

**Using the library is _easy_, more information can be found [here](help/000_index.md).**

Additional Examples: Please find other examples in the [./examples](examples) folder.


---

### Joining the discussion

<a href="https://discord.iota.org/" style="text-decoration:none;"><img src="https://img.shields.io/badge/Discord-9cf.svg?style=social&logo=discord" alt="Discord"></a>
<a href="https://twitter.com/IOTAphp/" style="text-decoration:none;"><img src="https://img.shields.io/badge/Twitter-9cf.svg?style=social&logo=twitter" alt="Twitter"></a>

If you want to get involved in the community, need help with getting set up, have any issues or just want to discuss IOTA, feel free to join our
IOTA [Discord](https://discord.iota.org/) and post in the #php channel.

![IOTA.php](./help/images/discord_help_phpchannel.png)


___

> Follow me on Twitter [@IOTAphp](https://twitter.com/IOTAphp)

---

### Donation

It took me a lot of time to develop **iota.php** and need to pay for the server every month. If you want to support me or if my work helps you, kindly consider a small donation.

[<img src="https://img.shields.io/badge/iota1qpw8lvfgz6gt9u8qtcjmmez3vtqve6fdzqkdaah9wdz9llgvhs3psrtx5xd-lightgrey?style=social&logo=iota" alt="IOTA">](./help/100_Donation.md)


---

# License

The Apache 2.0 license can be found [here](LICENSE).