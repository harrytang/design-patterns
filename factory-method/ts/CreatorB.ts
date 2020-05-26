import { Creator } from "./Creator";
import { ProductB } from "./ProductB";

export class CreatorB extends Creator {
  public createProduct(): import("./IProduct").IProduct {
    return new ProductB();
  }
}
