import { Component } from "./Component";
export class Composite extends Component {
  protected children: Component[] = [];

  public add(component: Component) {
    this.children.push(component);
    component.setParent(this);
  }

  public remove(component: Component) {
    this.children = this.children.filter((element) => element !== component);
    component.setParent(null);
  }

  public isComposite() {
    return true;
  }

  public operation(): string {
    const result = [];
    this.children.forEach((element) => {
      result.push(element.operation());
    });
    return `Brand(${result.join("+")})`;
  }
}
