import { IProduct } from "./IProduct";

export class ProductB implements IProduct {
  doStuff(): string {
    return "ProductB is doing some magic actions";
  }
}
