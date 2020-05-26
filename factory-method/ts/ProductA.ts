import { IProduct } from "./IProduct";

export class ProductA implements IProduct {
  doStuff(): string {
    return "ProductA is doing some magic actions";
  }
}
