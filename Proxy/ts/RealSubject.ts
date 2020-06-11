import { ISubject } from "./ISubject";

export class RealSubject implements ISubject {
  request(): void {
    console.log("RealSubject handling the request!");
  }
}
