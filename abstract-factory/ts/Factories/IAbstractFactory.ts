import { IAbstractProductA } from "../Products/IAbstractProductA";
import { IAbstractProductB } from "../Products/IAbstractProductB";

export interface IAbstractFactory {
  createProductA(): IAbstractProductA;
  createProductB(): IAbstractProductB;
}
