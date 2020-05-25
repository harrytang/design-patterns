import { IAbstractProductB } from "./IAbstractProductB";

export class ConcreteProductB1 implements IAbstractProductB {
  usefulFunctionB(): string {
    return "The result of the product B1.";
  }
}
