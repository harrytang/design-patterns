import IObserver from "./IObserver";
import ISubject from "./ISubject";
import Subject from "./Subject";

export default class ObserverB implements IObserver {
  update(subject: ISubject): void {
    if (subject instanceof Subject && subject.state <= 3) {
      console.log("ObserverB: Reacted to the event.\n");
    }
  }
}
