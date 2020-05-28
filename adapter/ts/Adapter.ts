import { Target } from "./Target";
import { Adaptee } from "./Adaptee";

export class Adapter extends Target {
  constructor(private adaptee: Adaptee) {
    super();
  }

  public request() {
    return this.adaptee.specificRequest().split("").reverse().join("");
  }
}
