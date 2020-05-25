import { IAbstractFactory } from "./Factories/IAbstractFactory";
import { ConcreteFactory1 } from "./Factories/ConcreteFactory1";
import { ConcreteFactory2 } from "./Factories/ConcreteFactory2";

function clientCode(factory: IAbstractFactory) {
  const productA = factory.createProductA();
  const productB = factory.createProductB();

  console.log(productA.usefulFunctionA());
  console.log(productB.usefulFunctionB());
}

clientCode(new ConcreteFactory1());
clientCode(new ConcreteFactory2());
