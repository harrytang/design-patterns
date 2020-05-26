import { IBuilder } from "./IBuilder";
export class Director {
  private builder: IBuilder;

  public setBuilder(builder: IBuilder) {
    this.builder = builder;
  }

  public buildSimpleProduct() {
    this.builder.producePartA();
  }

  public buildFullProduct() {
    this.builder.producePartA();
    this.builder.producePartB();
    this.builder.producePartC();
  }
}
