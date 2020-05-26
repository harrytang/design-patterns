import { Creator } from "./Creator";
import { ProductA } from "./ProductA";

export class CreatorA extends Creator {
  public createProduct(): import("./IProduct").IProduct {
    return new ProductA();
  }
}
