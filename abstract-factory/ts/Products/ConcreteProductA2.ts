import { IAbstractProductA } from "./IAbstractProductA";

export class ConcreteProductA2 implements IAbstractProductA {
  usefulFunctionA(): string {
    return "The result of the product A2.";
  }
}
