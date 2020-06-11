import { ISubject } from "./ISubject";
import { RealSubject } from "./RealSubject";

export class Proxy implements ISubject {
  private subject: RealSubject;

  constructor(subject: RealSubject) {
    this.subject = subject;
  }

  request(): void {
    if (this.checkAccess()) {
      this.subject.request();
    }
  }

  private checkAccess() {
    console.log("Proxy: checking access...");
    return true;
  }
}
