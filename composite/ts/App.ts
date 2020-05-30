import { Component } from "./Component";
import { Leaf } from "./Leaf";
import { Composite } from "./Composite";

const clientCode = (component: Component) => {
  console.log(component.operation());
};

clientCode(new Leaf());

const tree = new Composite();
const b1 = new Composite();
const b2 = new Composite();

b1.add(new Leaf());
b1.add(new Leaf());
b2.add(new Leaf());

tree.add(b1);
tree.add(b2);
tree.add(new Leaf());

clientCode(tree);

const clientCode2 = (c1: Component, c2: Component) => {
  if (c1.isComposite()) {
    c1.add(c2);
  }
  console.log(c1.operation());
};

clientCode2(tree, new Leaf());
