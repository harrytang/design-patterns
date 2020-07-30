import IObserver from "./IObserver";
import ISubject from "./ISubject";

export default class Subject implements ISubject {
  public state: number;

  private observers: IObserver[] = [];

  attach(observer: IObserver): void {
    const observerIndex = this.observers.indexOf(observer);
    if (observerIndex !== -1) {
      return console.log("Subject: Observer has already been attached.");
    }

    console.log("Subject: Attached an observer.");
    this.observers.push(observer);
  }

  dettach(observer: IObserver): void {
    const observerIndex = this.observers.indexOf(observer);
    if (observerIndex === -1) {
      return console.log("Subject: Observer does not exist.");
    }
    this.observers.splice(observerIndex, 1);
    console.log("Subject: Detatched observer.");
  }

  notify(): void {
    console.log("Subject: Notifying observers...");
    this.observers.forEach((observer) => {
      observer.update(this);
    });
  }

  public someBusinessLogic(): void {
    console.log("Subject: Doing some business...");

    this.state = Math.floor(Math.random() * (10 + 1));

    console.log(`Subject: My state has changed to: ${this.state}`);

    this.notify();
  }
}
