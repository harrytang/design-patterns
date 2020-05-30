export abstract class Component {
  protected parent: Component;

  public setParent(component: Component) {
    this.parent = component;
  }

  public getParent(): Component {
    return this.parent;
  }

  public add(component: Component): void {}

  public remove(component: Component): void {}

  public isComposite() {
    return false;
  }

  public abstract operation(): string;
}
