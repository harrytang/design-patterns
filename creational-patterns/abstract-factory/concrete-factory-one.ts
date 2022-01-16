/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractFactory from './abstract-factory';
import AbstractProductA from './abstract-product-a';
import AbstractProductB from './abstract-product-b';
import ConcreteProductB1 from './concrete-product-b1';
import ConcreteProductA1 from './concrete-product-a1';

class ConcreteFactoryOne implements AbstractFactory {
  public createProductA(): AbstractProductA {
    return new ConcreteProductA1();
  }

  public createProductB(): AbstractProductB {
    return new ConcreteProductB1();
  }
}

export default ConcreteFactoryOne;
