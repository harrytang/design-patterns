/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractFactory from "./abstract-factory";
import AbstractProductA from "./abstract-product-a";
import AbstractProductB from "./abstract-product-b";
import ConcreteProductB2 from "./concrete-product-b2";
import ConcreteProductA2 from "./concrete-product-a2";

class ConcreteFactoryTwo implements AbstractFactory {
  public createProductA(): AbstractProductA {
    return new ConcreteProductA2();
  }

  public createProductB(): AbstractProductB {
    return new ConcreteProductB2();
  }
}

export default ConcreteFactoryTwo;
