<?php namespace IOTA\Models;

use IOTA\Helper\Converter;
use IOTA\Helper\Hash;
use SodiumException;
use IOTA\Exception\Converter as ExceptionConverter;

/**
 * Trait TraitSerializer
 *
 * @package      IOTA\Util
 * @author       StefanBraun
 * @copyright    Copyright (c) 2021, StefanBraun
 */
trait TraitSerializer {
  /**
   * @param string $value
   *
   * @return string
   */
  static public function serializeInt(string $value): string {
    return Converter::string2Int($value);
  }

  /**
   * @param string $value
   *
   * @return string
   */
  static public function serializeUInt16(string $value): string {
    return Converter::serializeUInt16($value);
  }

  /**
   * @param string $value
   *
   * @return string
   */
  static public function serializeBigInt(string $value): string {
    return Converter::string2BigInt($value);
  }

  /**
   * @param string $value
   *
   * @return string
   */
  static public function serializeFixedHex(string $value): string {
    return Converter::hex2String($value);
  }

  /**
   * @return string
   * @throws ExceptionConverter
   * @throws SodiumException
   */
  public function serializeToHash(): string {
    $_ret = implode('', $this->serialize());
    $_ret = str_pad(Converter::string2Hex($_ret), 256, '0');

    return Converter::string2Hex(Hash::blake2b_sum256(Converter::hex2String($_ret)));
  }
}