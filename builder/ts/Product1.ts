export class Product1 {
  public parts = [];

  public listParts() {
    console.log(this.parts.join(", "));
  }
}
