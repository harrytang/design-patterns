import { ICommand } from "./ICommand";
import { Receiver } from "./Receiver";

export class ComplexCommand implements ICommand {
  private receiver: Receiver;
  private a: string;
  private b: string;

  constructor(receiver: Receiver, a: string, b: string) {
    this.a = a;
    this.b = b;
    this.receiver = receiver;
  }

  execute(): void {
    this.receiver.doSomething(this.a);
    this.receiver.doSomethingElse(this.b);
  }
}
