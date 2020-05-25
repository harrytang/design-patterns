import { IAbstractFactory } from "./IAbstractFactory";
import { IAbstractProductA } from "../Products/IAbstractProductA";
import { IAbstractProductB } from "../Products/IAbstractProductB";
import { ConcreteProductA1 } from "../Products/ConcreteProductA1";
import { ConcreteProductB1 } from "../Products/ConcreteProductB1";

export class ConcreteFactory1 implements IAbstractFactory {
  createProductA(): IAbstractProductA {
    return new ConcreteProductA1();
  }
  createProductB(): IAbstractProductB {
    return new ConcreteProductB1();
  }
}
