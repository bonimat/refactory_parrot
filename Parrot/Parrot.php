<?php

namespace Parrot;

abstract class Parrot {
  /**
   * Parrot constructor.
   * @param int $type
   * @param int $numberOfCoconuts
   * @param float $voltage
   * @param bool $isNailed
   */

  public function create($type, $numberOfCoconuts, $voltage, $isNailed) {
      if ($type == ParrotTypeEnum::EUROPEAN) {
          return new EuropeanParrot( );
      }
      if ($type == ParrotTypeEnum::AFRICAN) {
          return new AfricanParrot($numberOfCoconuts);
      }
      if ($type == ParrotTypeEnum::NORWEGIAN_BLUE) {
          return new NorwegianBlueParrot(  $voltage, $isNailed);
      }
      throw new \Exception("Should be unreachable");

  }

 abstract public function getSpeed();

  protected function getBaseSpeed() {
    return 12.0;
  }

}

Class EuropeanParrot extends Parrot {
    public function getSpeed() {
        return parent::getBaseSpeed();
    }
}
Class AfricanParrot extends Parrot {
    /** @var int */
    protected $numberOfCoconuts = 0;

    public function __construct( $numberOfCoconuts) {
        $this->numberOfCoconuts = $numberOfCoconuts;
    }

    public function getSpeed() {
        return max(0, parent::getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts);

    }

    private function getLoadFactor() {
        return 9.0;
    }

}
Class NorwegianBlueParrot extends Parrot {
    protected $voltage;
    protected $isNailed;

    public function __construct(float $voltage, bool $isNailed) {
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    public function getSpeed() {
        return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
    }

    private function getBaseSpeedWith() {
        return min(24.0, $this->voltage * $this->getBaseSpeed());
    }
}

