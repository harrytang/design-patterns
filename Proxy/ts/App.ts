import { ISubject } from "./ISubject";
import { RealSubject } from "./RealSubject";
import { Proxy } from "./Proxy";

const clientCode = (subject: ISubject) => {
  subject.request();
};

const real = new RealSubject();
clientCode(real);

const proxy = new Proxy(real);
clientCode(proxy);
