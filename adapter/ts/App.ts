import { Target } from "./Target";
import { Adaptee } from "./Adaptee";
import { Adapter } from "./Adapter";

const clientCode = (target: Target) => {
  console.log(target.request());
};

const target = new Target();
clientCode(target);

const adaptee = new Adaptee();
console.log(adaptee.specificRequest());

const adapter = new Adapter(adaptee);
clientCode(adapter);
