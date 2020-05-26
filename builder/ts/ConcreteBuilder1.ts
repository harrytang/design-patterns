import { IBuilder } from "./IBuilder";
import { Product1 } from "./Product1";

export class ConcreteBuilder1 implements IBuilder {
  private product: Product1;

  constructor() {
    this.reset();
  }

  reset() {
    this.product = new Product1();
  }

  producePartA(): void {
    this.product.parts.push("PartA");
  }
  producePartB(): void {
    this.product.parts.push("PartB");
  }
  producePartC(): void {
    this.product.parts.push("PartC");
  }

  getProduct() {
    const product = this.product;
    this.reset();
    return product;
  }
}
