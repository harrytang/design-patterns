import { IAbstractFactory } from "./IAbstractFactory";
import { IAbstractProductA } from "../Products/IAbstractProductA";
import { IAbstractProductB } from "../Products/IAbstractProductB";
import { ConcreteProductA2 } from "../Products/ConcreteProductA2";
import { ConcreteProductB2 } from "../Products/ConcreteProductB2";

export class ConcreteFactory2 implements IAbstractFactory {
  createProductA(): IAbstractProductA {
    return new ConcreteProductA2();
  }
  createProductB(): IAbstractProductB {
    return new ConcreteProductB2();
  }
}
