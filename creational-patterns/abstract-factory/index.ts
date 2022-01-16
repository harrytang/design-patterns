/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2022 Power Kernel
 */

import AbstractFactory from './abstract-factory';
import ConcreteFactoryOne from './concrete-factory-one';
import ConcreteFactoryTwo from './concrete-factory-two';

function clientCode(factory: AbstractFactory) {
  const productA = factory.createProductA();
  const productB = factory.createProductB();

  console.log(productB.usefulFunctionB());
  console.log(productB.anotherUsefulFunctionB(productA));
}

/**
 * The client code can work with any concrete factory class.
 */
console.log('Client: Testing client code with the first factory type...');
clientCode(new ConcreteFactoryOne());

console.log('');

console.log('Client: Testing the same client code with the second factory type...');
clientCode(new ConcreteFactoryTwo());
