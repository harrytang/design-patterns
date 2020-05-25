import { IAbstractProductA } from "./IAbstractProductA";

export class ConcreteProductA1 implements IAbstractProductA {
  usefulFunctionA(): string {
    return "The result of the product A1.";
  }
}
