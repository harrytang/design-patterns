import { IProduct } from "./IProduct";

export abstract class Creator {
  public abstract createProduct(): IProduct;

  public doSomething(): string {
    const product = this.createProduct();
    return product.doStuff();
  }
}
